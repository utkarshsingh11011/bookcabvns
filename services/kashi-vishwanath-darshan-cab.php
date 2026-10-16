<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Kashi Vishwanath Darshan Cab — Temple Circuit Varanasi | Book Cab Varanasi';
$meta_desc   = 'Book a cab for Kashi Vishwanath darshan and Varanasi temple circuit. Swift Dzire from ₹2,000 for 8hr. Vehicle parks near temples; darshan is on foot. No hidden charges.';
$canonical   = 'https://bookcabvaranasi.com/services/kashi-vishwanath-darshan-cab/';
$og_title    = 'Kashi Vishwanath Darshan Cab | Varanasi Temple Circuit | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Kashi Vishwanath darshan cab Varanasi';
$breadcrumbs = [
    ['name' => 'Home',     'url'  => 'https://bookcabvaranasi.com/'],
    ['name' => 'Services', 'url'  => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Kashi Vishwanath Darshan Cab', 'url' => $canonical],
];

$serviceSchema = json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonical . '#service',
    'name'        => 'Kashi Vishwanath Darshan Cab Service',
    'serviceType' => 'Local sightseeing cab — Varanasi temple circuit',
    'provider'    => ['@id' => 'https://bookcabvaranasi.com/#business'],
    'areaServed'  => ['@type' => 'City', 'name' => 'Varanasi'],
    'url'         => $canonical,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$schema_json = $serviceSchema;

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/services/outstation-taxi-varanasi/">Services</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Kashi Vishwanath Darshan Cab</span>
    </nav>
    <h1 class="page-hero__title">Kashi Vishwanath Darshan Cab</h1>
    <p class="page-hero__desc">Comfortable cab for Varanasi's sacred temple circuit. We handle the driving &amp; parking — you focus entirely on your darshan.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+919838409911" onclick="bcvTrack('click_call','page_hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call Now
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','page_hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
      </a>
    </div>
  </div>
</section>

<!-- IMPORTANT DISCLAIMER -->
<section class="section-sm">
  <div class="container">
    <div class="alert alert-warning">
      <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
      <strong>Please note:</strong> The Kashi Vishwanath Temple and most Varanasi ghats are in narrow-lane areas accessible only on foot. Our cab will park at designated parking spots near each temple. The short walking distance (typically 50–500 meters) from parking to the temple entrance is part of the traditional pilgrimage experience. Cab access to temple inner lanes is <strong>not possible</strong>.
    </div>
  </div>
</section>

<!-- RECOMMENDED PACKAGE -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Recommended Package</span>
    <h2>Which Package Is Right for Kashi Darshan?</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">For a Kashi Vishwanath darshan visit, we recommend our <strong>local 8hr/80km package</strong>. This gives you enough time to visit the major temples at a comfortable pace, enjoy Ganga Aarti, and explore the ghats.</p>

    <div class="grid grid-2 mt-6" style="max-width:760px">
      <div class="card-fare">
        <div class="card-fare__badge">Most Popular</div>
        <div class="card-fare__vehicle">🚗 8 Hours / 80 km</div>
        <div class="card-fare__price">from ₹2,000</div>
        <div class="card-fare__note">(Swift Dzire, up to 4 people)</div>
        <ul class="card-fare__features mt-4">
          <li>4–5 temple visits comfortably</li>
          <li>Kashi Vishwanath area + Ghats</li>
          <li>Ganga Aarti at dusk</li>
          <li>Driver &amp; fuel included</li>
          <li>Parking charges extra (₹50–₹100/stop)</li>
        </ul>
        <a class="btn btn-primary btn-full mt-4" href="/services/varanasi-local-8hr-80km/">View All Fares</a>
      </div>
      <div class="card-fare">
        <div class="card-fare__vehicle">🚗 12 Hours / 120 km</div>
        <div class="card-fare__price">from ₹2,600</div>
        <div class="card-fare__note">(Swift Dzire, up to 4 people)</div>
        <ul class="card-fare__features mt-4">
          <li>Full day of darshan &amp; sightseeing</li>
          <li>Includes Sarnath side trip</li>
          <li>Extra time for shopping at ghats</li>
          <li>Driver &amp; fuel included</li>
          <li>Driver allowance ₹300 if overnight</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="/services/varanasi-local-8hr-80km/">View All Fares</a>
      </div>
    </div>
  </div>
</section>

<!-- TEMPLE CIRCUIT -->
<section class="section">
  <div class="container">
    <span class="section-label">Temple Circuit</span>
    <h2>Varanasi Temple &amp; Ghat Itinerary</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">Our experienced drivers know the best parking spots for each temple and the most efficient routing to avoid narrow lane congestion. A typical Kashi darshan day:</p>

    <ol class="itinerary-list mt-6" style="max-width:680px">
      <li><div class="itinerary-num">1</div>
        <div><strong>Kashi Vishwanath Temple area</strong> (Godaulia / Vishwanath Gali): Cab parks at Godaulia; 5-minute walk to temple. Morning is best (4am–12pm). Security check required; no phones/bags inside.</div></li>
      <li><div class="itinerary-num">2</div>
        <div><strong>Annapurna Devi Temple</strong>: Adjacent to Kashi Vishwanath; visit on foot immediately after.</div></li>
      <li><div class="itinerary-num">3</div>
        <div><strong>Kal Bhairav Temple</strong>: Protective deity of Kashi. Cab parks on Kal Bhairav Road; 2-minute walk.</div></li>
      <li><div class="itinerary-num">4</div>
        <div><strong>Sankat Mochan Hanuman Temple</strong>: One of the most revered temples in Varanasi, near BHU. Cab parks on the main road.</div></li>
      <li><div class="itinerary-num">5</div>
        <div><strong>BHU Vishwanath Temple</strong> (IIT Varanasi campus): Open to all; magnificent architecture. Parking inside the BHU campus.</div></li>
      <li><div class="itinerary-num">6</div>
        <div><strong>Dashashwamedh Ghat</strong>: Varanasi's most famous ghat. Evening Ganga Aarti (6:30–7:30pm) is unmissable. Cab parks at Godaulia.</div></li>
    </ol>

    <div class="highlight-box mt-6" style="max-width:680px">
      <strong>Optional add-on:</strong> Sarnath (Buddhist site, 10km from city) can be added to a 12hr package. The Sarnath Museum houses the famous Lion Capital of Ashoka.
    </div>
  </div>
</section>

<!-- ALSO SEE -->
<section class="section section-warm">
  <div class="container">
    <h2>Also Consider — Curated Tour Package</h2>
    <p class="mt-4">Want a pre-planned itinerary with all major sites included? Our <a href="/tours/kashi-darshan-cab-package/" style="color:var(--clr-saffron);text-decoration:underline">Kashi Darshan Cab Package</a> is a curated day tour designed specifically for pilgrims:</p>
    <div style="max-width:520px;margin-top:1.5rem">
      <a class="card card-body" href="/tours/kashi-darshan-cab-package/" style="display:block;text-decoration:none;border: 1.5px solid var(--clr-saffron-light)">
        <div style="font-size:1.5rem;margin-bottom:.5rem">🛕</div>
        <h3 style="color:var(--clr-navy);font-size:1.1rem">Kashi Darshan Cab Package</h3>
        <p class="text-sm mt-4">Full-day guided route covering Kashi Vishwanath, Kal Bhairav, BHU, Sankat Mochan, Sarnath &amp; Ganga Aarti. Flat-rate pricing, no surprises.</p>
        <span class="btn btn-primary btn-sm mt-4">View Package</span>
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container" style="max-width:760px">
    <span class="section-label">FAQ</span>
    <h2>Frequently Asked Questions</h2>
    <div class="divider divider--left"></div>
    <div class="faq-list mt-6">
      <?php
      $faqs = [
        ['q' => 'Can the cab enter the lanes near Kashi Vishwanath Temple?',
         'a' => 'No. The lanes of Vishwanath Gali and surrounding areas are too narrow for cars. Our cab will drop you at the nearest possible parking (Godaulia crossing), and the temple is a 5-minute walk through the lanes.'],
        ['q' => 'Is mobile phone allowed inside Kashi Vishwanath Temple?',
         'a' => 'Mobile phones and cameras are NOT allowed inside the main Kashi Vishwanath temple complex. You can leave them in the car with the driver during darshan. Cloak rooms are also available at the entrance.'],
        ['q' => 'How long does darshan take at Kashi Vishwanath?',
         'a' => 'Darshan can take 30 minutes to 3+ hours depending on crowd. Weekends, Mondays (Shivratri), and festival days are extremely busy. To avoid queues, visit early morning (4–6am) or book a VIP darshan through the temple.'],
        ['q' => 'Is parking charged separately?',
         'a' => 'Yes. Municipal parking near each temple is typically ₹50–₹100 per car per visit, paid directly by the traveler. This is NOT included in the cab fare.'],
        ['q' => 'Can I book a cab for multiple days of darshan in Varanasi?',
         'a' => 'Yes. You can book for multiple days with the same driver. Multi-day bookings get priority driver allocation. Contact us to discuss your itinerary.'],
      ];
      foreach ($faqs as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-<?php echo $i; ?>-darshan">
          <?php echo htmlspecialchars($faq['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-<?php echo $i; ?>-darshan" role="region">
          <div class="faq-answer__inner"><?php echo htmlspecialchars($faq['a']); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Varanasi Local';
$form_section_id  = 'darshan-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
