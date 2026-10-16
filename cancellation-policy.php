<?php
require_once __DIR__ . '/includes/config.php';

$page_title     = 'Cancellation & Refund Policy | Book Cab Varanasi';
$meta_desc      = 'Learn about Book Cab Varanasi cancellation terms, free rescheduling rules, and refund policies for local, airport, and outstation taxi services.';
$canonical      = 'https://bookcabvaranasi.com/cancellation-policy/';
$breadcrumbs = [
    ['name' => 'Home',                'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Cancellation Policy', 'url' => $canonical],
];

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="page-hero" aria-label="Hero header">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Cancellation Policy</span>
    </nav>
    <h1 class="page-hero__title">Cancellation &amp; Refund Policy</h1>
    <p class="page-hero__desc">Fair, transparent booking terms with hassle-free cancellation and free date rescheduling</p>
  </div>
</section>

<main id="main-content">
  <div class="container py-8">
    <div class="prose card max-w-none">
      <h2>1. Free Cancellation Policy</h2>
      <p>We understand that pilgrimage and vacation plans can change unexpectedly due to train delays, flight rescheduling, or health matters. Our cancellation terms are designed to be fair and transparent:</p>
      <ul>
        <li><strong>Local Sightseeing &amp; Airport Transfers:</strong> Free cancellation up to <strong>4 hours</strong> prior to your scheduled pickup time. No cancellation charges apply.</li>
        <li><strong>Outstation Cabs &amp; Day Trips (Ayodhya / Prayagraj):</strong> Free cancellation up to <strong>12 hours</strong> prior to the scheduled departure time.</li>
        <li><strong>Multi-Day Group Tours &amp; Tempo Travellers:</strong> Free cancellation up to <strong>24 hours</strong> prior to trip departure.</li>
      </ul>

      <h2>2. Flight / Train Delays (Zero Cancellation Penalty)</h2>
      <p>For Babatpur Airport (VNS) or Varanasi Cantt (BSB) pickups, if your flight or train is delayed, <strong>no cancellation or penalty fee will be charged</strong>. Our dispatch team tracks flight status in real time and automatically reschedules your chauffeur pickup time accordingly.</p>

      <h2>3. Free Rescheduling</h2>
      <p>You can reschedule your booking date or pickup time once for free by informing our customer care team via phone or WhatsApp at least 4 hours before the original scheduled time (subject to vehicle availability).</p>

      <h2>4. Advance Booking Deposits &amp; Refunds</h2>
      <p>For bookings where an advance reservation token was paid, eligible refunds will be initiated within <strong>24 hours</strong> of verified cancellation and credited back to the original payment method within 3 to 5 business days.</p>

      <h2>5. How to Cancel or Modify Your Booking</h2>
      <p>To cancel or amend your travel reservation, please contact our 24/7 helpline with your booking reference or phone number:</p>
      <ul>
        <li><strong>Call / WhatsApp:</strong> <a href="tel:+<?php echo BCV_PHONE_RAW; ?>"><?php echo BCV_PHONE_MAIN; ?></a></li>
        <li><strong>Email:</strong> <a href="mailto:<?php echo BCV_EMAIL; ?>"><?php echo BCV_EMAIL; ?></a></li>
      </ul>
    </div>
  </div>
</main>

<?php
include __DIR__ . '/includes/footer.php';
?>
