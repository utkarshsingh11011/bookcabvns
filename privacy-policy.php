<?php
require_once __DIR__ . '/includes/config.php';

$page_title     = 'Privacy Policy | Book Cab Varanasi';
$meta_desc      = 'Read the official privacy policy of Book Cab Varanasi. How we protect your travel inquiry information, contact details, and booking privacy.';
$canonical      = 'https://bookcabvaranasi.com/privacy-policy/';
$breadcrumbs = [
    ['name' => 'Home',           'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Privacy Policy', 'url' => $canonical],
];

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="page-hero" aria-label="Hero header">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Privacy Policy</span>
    </nav>
    <h1 class="page-hero__title">Privacy Policy</h1>
    <p class="page-hero__desc">Last updated: October 2025 · Transparent commitment to safeguarding customer privacy</p>
  </div>
</section>

<main id="main-content">
  <div class="container py-8">
    <div class="prose card max-w-none">
      <h2>1. Information We Collect</h2>
      <p>At <strong>Book Cab Varanasi</strong> (<?php echo BCV_BRAND; ?>), we collect only the necessary contact and trip details required to arrange and confirm your taxi, tempo traveller, or tour booking. This includes:</p>
      <ul>
        <li>Full Name</li>
        <li>Phone / WhatsApp Number</li>
        <li>Email Address (optional)</li>
        <li>Travel Dates, Times, Pickup Location, and Destination</li>
        <li>Vehicle Preference and Special Travel Requirements</li>
      </ul>

      <h2>2. How We Use Your Information</h2>
      <p>We use your information exclusively for customer service purposes:</p>
      <ul>
        <li>Generating accurate fare quotations and trip itineraries</li>
        <li>Assigning verified chauffeurs and sending vehicle details via SMS / WhatsApp</li>
        <li>Assisting with real-time flight / train delay monitoring for airport pickups</li>
        <li>Customer support and invoice delivery</li>
      </ul>
      <p><strong>We never sell, rent, or trade your personal information with third-party advertising brokers.</strong></p>

      <h2>3. Data Security &amp; Analytics</h2>
      <p>Our website utilizes industry-standard HTTPS TLS encryption to safeguard all data submitted through our booking inquiry forms. We use Google Analytics (GA4) with consent-aware tracking to analyze aggregated website traffic patterns and improve performance.</p>

      <h2>4. Contact Us</h2>
      <p>If you have any questions or requests regarding your personal data, please contact our data team:</p>
      <ul>
        <li><strong>Email:</strong> <a href="mailto:<?php echo BCV_EMAIL; ?>"><?php echo BCV_EMAIL; ?></a></li>
        <li><strong>Phone:</strong> <a href="tel:+<?php echo BCV_PHONE_RAW; ?>"><?php echo BCV_PHONE_MAIN; ?></a></li>
        <li><strong>Office:</strong> <?php echo BCV_ADDR_OFFICE; ?></li>
      </ul>
    </div>
  </div>
</main>

<?php
include __DIR__ . '/includes/footer.php';
?>
