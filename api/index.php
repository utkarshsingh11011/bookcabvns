<?php
/**
 * Vercel Serverless Front-Controller Router for Book Cab Varanasi
 * Maps incoming HTTP requests to their corresponding page scripts.
 */

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

// ── 1. Root Homepage ──────────────────────────────────────────
if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    require __DIR__ . '/../index.php';
    exit;
}

// ── 2. Legacy 301 Redirects ───────────────────────────────────
$legacyRedirects = [
    '/intercity-cab/varanasi-to-prayagraj' => '/routes/varanasi-to-prayagraj-taxi/',
    '/intercity-cab/prayagraj-to-varanasi' => '/routes/prayagraj-to-varanasi-taxi/',
    '/intercity-cab/varanasi-to-ayodhya'   => '/routes/varanasi-to-ayodhya-cab/',
    '/intercity-cab/ayodhya-to-varanasi'   => '/routes/ayodhya-to-varanasi-cab/',
    '/intercity-cab/prayagraj-to-ayodhya'  => '/routes/prayagraj-to-ayodhya-cab/',
    '/intercity-cab/ayodhya-to-prayagraj'  => '/routes/ayodhya-to-prayagraj-cab/',
    '/intercity-cab'                       => '/services/outstation-taxi-varanasi/',
    '/taxi.php'                            => '/services/outstation-taxi-varanasi/',
    '/taxirental.php'                      => '/services/outstation-taxi-varanasi/',
    '/airport.php'                         => '/services/varanasi-airport-taxi/',
    '/airportrental.php'                   => '/services/varanasi-airport-taxi/',
    '/tour.php'                            => '/tours/kashi-darshan-cab-package/',
    '/planner.php'                         => '/routes/varanasi-to-ayodhya-cab/',
    '/intercity-cab-portal.php'            => '/services/outstation-taxi-varanasi/',
    '/thankyou.php'                        => '/',
];

$trimmedUri = rtrim($uri, '/');
if (isset($legacyRedirects[$trimmedUri])) {
    header('Location: ' . $legacyRedirects[$trimmedUri], true, 301);
    exit;
}

// ── 3. Enforce Trailing Slash ──────────────────────────────────
// Only for paths without a file extension (e.g. .xml, .php, .jpg)
if (!str_ends_with($uri, '/') && !preg_match('/\.[a-zA-Z0-9]+$/', $uri)) {
    $queryString = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    header('Location: ' . $uri . '/' . $queryString, true, 301);
    exit;
}

// ── 4. Canonical Route Mappings ────────────────────────────────
$routes = [
    // Locations
    '/locations/varanasi/' => __DIR__ . '/../locations/varanasi.php',
    '/locations/ayodhya/'   => __DIR__ . '/../locations/ayodhya.php',
    '/locations/prayagraj/' => __DIR__ . '/../locations/prayagraj.php',

    // Services
    '/services/varanasi-airport-taxi/'         => __DIR__ . '/../services/varanasi-airport-taxi.php',
    '/services/varanasi-local-8hr-80km/'       => __DIR__ . '/../services/varanasi-local-8hr-80km.php',
    '/services/varanasi-railway-station-taxi/' => __DIR__ . '/../services/varanasi-railway-station-taxi.php',
    '/services/kashi-vishwanath-darshan-cab/'  => __DIR__ . '/../services/kashi-vishwanath-darshan-cab.php',
    '/services/outstation-taxi-varanasi/'      => __DIR__ . '/../services/outstation-taxi-varanasi.php',

    // Routes
    '/routes/varanasi-to-ayodhya-cab/'    => __DIR__ . '/../routes/varanasi-to-ayodhya-cab.php',
    '/routes/ayodhya-to-varanasi-cab/'    => __DIR__ . '/../routes/ayodhya-to-varanasi-cab.php',
    '/routes/varanasi-to-prayagraj-taxi/' => __DIR__ . '/../routes/varanasi-to-prayagraj-taxi.php',
    '/routes/prayagraj-to-varanasi-taxi/' => __DIR__ . '/../routes/prayagraj-to-varanasi-taxi.php',
    '/routes/prayagraj-to-ayodhya-cab/'   => __DIR__ . '/../routes/prayagraj-to-ayodhya-cab.php',
    '/routes/ayodhya-to-prayagraj-cab/'   => __DIR__ . '/../routes/ayodhya-to-prayagraj-cab.php',

    // Tours
    '/tours/varanasi-prayagraj-ayodhya-package/' => __DIR__ . '/../tours/varanasi-prayagraj-ayodhya-package.php',
    '/tours/kashi-darshan-cab-package/'          => __DIR__ . '/../tours/kashi-darshan-cab-package.php',
    '/tours/ayodhya-ram-mandir-taxi-package/'    => __DIR__ . '/../tours/ayodhya-ram-mandir-taxi-package.php',
    '/tours/varanasi-ayodhya-2-day-tour/'        => __DIR__ . '/../tours/varanasi-ayodhya-2-day-tour.php',
    '/tours/prayagraj-sangam-sightseeing/'       => __DIR__ . '/../tours/prayagraj-sangam-sightseeing.php',

    // Fleet
    '/fleet/sedan-cab-rental/'       => __DIR__ . '/../fleet/sedan-cab-rental.php',
    '/fleet/ertiga-cab-rental/'      => __DIR__ . '/../fleet/ertiga-cab-rental.php',
    '/fleet/innova-crysta-rental/'   => __DIR__ . '/../fleet/innova-crysta-rental.php',
    '/fleet/tempo-traveller-rental/' => __DIR__ . '/../fleet/tempo-traveller-rental.php',

    // Guides
    '/guides/prayagraj-magh-mela-transport/' => __DIR__ . '/../guides/prayagraj-magh-mela-transport.php',

    // XML Sitemaps
    '/sitemap.xml'             => __DIR__ . '/../sitemap.php',
    '/sitemaps/locations.xml'  => __DIR__ . '/../sitemaps/locations.php',
    '/sitemaps/services.xml'   => __DIR__ . '/../sitemaps/services.php',
    '/sitemaps/routes.xml'     => __DIR__ . '/../sitemaps/routes.php',
    '/sitemaps/tours.xml'      => __DIR__ . '/../sitemaps/tours.php',
    '/sitemaps/fleet.xml'      => __DIR__ . '/../sitemaps/fleet.php',
    '/sitemaps/guides.xml'     => __DIR__ . '/../sitemaps/guides.php',

    // Policies & Pages
    '/privacy-policy/'      => __DIR__ . '/../privacy-policy.php',
    '/cancellation-policy/' => __DIR__ . '/../cancellation-policy.php',
    '/contact/'             => __DIR__ . '/../contact (2).php',
    '/about/'               => __DIR__ . '/../about (2).php',
    '/blog/'                => __DIR__ . '/../blog (5).php',
];

if (isset($routes[$uri]) && file_exists($routes[$uri])) {
    require $routes[$uri];
    exit;
}

// ── 5. Dynamic Fallback: Check if matching PHP file exists ────
$cleanSlug = trim($uri, '/');
if (!empty($cleanSlug) && file_exists(__DIR__ . '/../' . $cleanSlug . '.php')) {
    require __DIR__ . '/../' . $cleanSlug . '.php';
    exit;
}

// ── 6. 404 Not Found ──────────────────────────────────────────
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>404 Page Not Found | Book Cab Varanasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/bcv-design.css">
</head>
<body style="display:flex;align-items:center;justify-content:center;min-height:100vh;background:#f8fafc;font-family:system-ui,-apple-system,sans-serif;">
  <div style="text-align:center;padding:2rem;max-width:500px;background:#fff;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.08);">
    <h1 style="color:#0D2C55;font-size:3rem;margin-bottom:0.5rem">404</h1>
    <h2 style="color:#334155;margin-bottom:1rem">Page Not Found</h2>
    <p style="color:#64748b;margin-bottom:1.5rem">The page you requested could not be found. Please check the URL or return to our homepage.</p>
    <a href="/" style="display:inline-block;background:#FF6F00;color:#fff;padding:0.75rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;">Back to Homepage</a>
  </div>
</body>
</html>
