<?php
/**
 * POST /api/booking-inquiry.php
 * Accepts a JSON booking inquiry, validates, persists to DB, sends email notification.
 * Returns: 201 { inquiryId, status } on success
 *          400 { error, message } on validation error
 *          429 { error, message } on rate limit
 *          500 { error, message } on server error
 */

// ── Initialise ───────────────────────────────────────────────────────────────
if (session_status() === PHP_SESSION_NONE) session_start();
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');

require_once __DIR__ . '/../includes/config.php';

// Only accept POST from same-origin XHR
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'method_not_allowed', 'message' => 'POST only.']);
    exit;
}
if (($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') !== 'XMLHttpRequest') {
    http_response_code(403);
    echo json_encode(['error' => 'forbidden', 'message' => 'Direct access not allowed.']);
    exit;
}

// ── Rate limiting (session-based, 5 submissions / 10 minutes) ────────────────
$now       = time();
$rateKey   = 'bcv_rate';
$rateLimit = 5;
$rateWindow= 600; // seconds

if (!isset($_SESSION[$rateKey])) $_SESSION[$rateKey] = [];
$_SESSION[$rateKey] = array_filter($_SESSION[$rateKey], fn($t) => $t > $now - $rateWindow);
if (count($_SESSION[$rateKey]) >= $rateLimit) {
    http_response_code(429);
    echo json_encode(['error' => 'rate_limited', 'message' => 'Too many requests. Please try again later.']);
    exit;
}

// ── Parse input ──────────────────────────────────────────────────────────────
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['error' => 'invalid_json', 'message' => 'Request body must be valid JSON.']);
    exit;
}

// ── CSRF validation ──────────────────────────────────────────────────────────
$csrfToken = $data['csrf_token'] ?? '';
if (!hash_equals($_SESSION['csrf_token'] ?? '', $csrfToken)) {
    http_response_code(403);
    echo json_encode(['error' => 'csrf_failed', 'message' => 'Invalid security token.']);
    exit;
}

// ── Sanitise helpers ─────────────────────────────────────────────────────────
function bcvStr(mixed $v, int $max = 255): string {
    return mb_substr(trim(strip_tags((string)($v ?? ''))), 0, $max);
}
function bcvPhone(string $v): string {
    return preg_replace('/\D/', '', $v);
}

// ── Extract & validate fields ────────────────────────────────────────────────
$tripType    = bcvStr($data['trip_type'] ?? '');
$origin      = bcvStr($data['origin'] ?? '');
$destination = bcvStr($data['destination'] ?? '');
$travelDate  = bcvStr($data['travel_date'] ?? '');
$returnDate  = bcvStr($data['return_date'] ?? '');
$passengers  = max(1, min(50, (int)($data['passengers'] ?? 1)));
$vehicle     = bcvStr($data['vehicle_preference'] ?? '');
$custName    = bcvStr($data['customer_name'] ?? '');
$custPhone   = bcvPhone($data['customer_phone'] ?? '');
$instructions= bcvStr($data['instructions'] ?? '', 500);
$landingPage = bcvStr($data['landing_page'] ?? '');
$privacyOk   = !empty($data['privacy_consent']);

$errors = [];
if (!in_array($tripType, ['one_way','round_trip','multi_day'])) $errors[] = 'Invalid trip type.';
if (mb_strlen($origin) < 2)      $errors[] = 'Origin city is required.';
if (mb_strlen($destination) < 2) $errors[] = 'Destination city is required.';
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $travelDate) || strtotime($travelDate) < strtotime('today')) {
    $errors[] = 'Travel date must be a future date.';
}
if (mb_strlen($custName) < 2)    $errors[] = 'Customer name is required.';
if (!preg_match('/^[6-9]\d{9}$/', $custPhone)) $errors[] = 'Valid 10-digit Indian mobile required.';
if (!$privacyOk)                  $errors[] = 'Privacy consent is required.';

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['error' => 'validation_failed', 'message' => implode(' ', $errors)]);
    exit;
}

// ── Database connection ───────────────────────────────────────────────────────
$conn = new mysqli(BCV_DB_HOST, BCV_DB_USER, BCV_DB_PASS, BCV_DB_NAME);
if ($conn->connect_error) {
    error_log('BCV DB connect error: ' . $conn->connect_error);
    http_response_code(500);
    echo json_encode(['error' => 'server_error', 'message' => 'Service temporarily unavailable. Please call us directly.']);
    exit;
}
$conn->set_charset('utf8mb4');

// ── Idempotency: check duplicate in last 60s (same phone + same date) ────────
$stmt = $conn->prepare(
    "SELECT inquiry_id FROM booking_inquiries WHERE customer_phone = ? AND travel_date = ? AND created_at > DATE_SUB(NOW(), INTERVAL 60 SECOND) LIMIT 1"
);
$stmt->bind_param('ss', $custPhone, $travelDate);
$stmt->execute();
$dup = $stmt->get_result()->fetch_assoc();
$stmt->close();

if ($dup) {
    // Return the existing inquiry ID — no duplicate created
    http_response_code(201);
    echo json_encode(['inquiryId' => $dup['inquiry_id'], 'status' => 'received']);
    exit;
}

// ── Generate inquiry ID: BCV-YYYY-XXXXXXX ────────────────────────────────────
$inquiryId = 'BCV-' . date('Y') . '-' . strtoupper(substr(bin2hex(random_bytes(4)), 0, 7));

// ── Persist inquiry ───────────────────────────────────────────────────────────
$stmt = $conn->prepare(
    "INSERT INTO booking_inquiries
     (inquiry_id, trip_type, origin, destination, travel_date, return_date, passengers, vehicle_preference,
      customer_name, customer_phone, instructions, landing_page, status, created_at)
     VALUES (?,?,?,?,?,?,?,?,?,?,?,?,'new',NOW())"
);
$stmt->bind_param(
    'ssssssssssss',
    $inquiryId, $tripType, $origin, $destination, $travelDate, $returnDate,
    $passengers, $vehicle, $custName, $custPhone, $instructions, $landingPage
);

if (!$stmt->execute()) {
    error_log('BCV inquiry insert error: ' . $stmt->error);
    $stmt->close(); $conn->close();
    http_response_code(500);
    echo json_encode(['error' => 'server_error', 'message' => 'Could not save inquiry. Please call us or try again.']);
    exit;
}
$stmt->close();

// ── Record rate-limit ─────────────────────────────────────────────────────────
$_SESSION[$rateKey][] = $now;
// Rotate CSRF token
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// ── Send email notification (non-blocking; log failure but don't block 201) ──
$subject = "New Cab Inquiry [{$inquiryId}] — {$origin} to {$destination}";
$body  = "Booking Inquiry Received\n";
$body .= "========================\n";
$body .= "Inquiry ID   : {$inquiryId}\n";
$body .= "Trip Type    : {$tripType}\n";
$body .= "Route        : {$origin} → {$destination}\n";
$body .= "Travel Date  : {$travelDate}\n";
if ($returnDate) $body .= "Return Date  : {$returnDate}\n";
$body .= "Passengers   : {$passengers}\n";
if ($vehicle) $body .= "Vehicle Pref : {$vehicle}\n";
$body .= "\nCUSTOMER\n";
$body .= "Name         : {$custName}\n";
$body .= "Phone        : {$custPhone}\n";
if ($instructions) $body .= "\nNotes        : {$instructions}\n";
$body .= "\nSource Page  : {$landingPage}\n";
$body .= "Received At  : " . date('Y-m-d H:i:s T') . "\n";

$headers  = "From: Book Cab Varanasi <" . BCV_EMAIL . ">\r\n";
$headers .= "Reply-To: " . BCV_EMAIL . "\r\n";
$headers .= "X-Mailer: BCV-PHP/1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

$mailSent = @mail(BCV_EMAIL, $subject, $body, $headers);
if (!$mailSent) {
    error_log("BCV email failed for inquiry {$inquiryId}");
}

$conn->close();

// ── Success ───────────────────────────────────────────────────────────────────
http_response_code(201);
echo json_encode(['inquiryId' => $inquiryId, 'status' => 'received']);
