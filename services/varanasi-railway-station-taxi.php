<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Varanasi Railway Station Taxi — Cantt, Kashi & Banaras Station | Book Cab Varanasi';
$meta_desc   = 'Book a railway station cab in Varanasi. Swift Dzire from ₹1,000. Pickup & drop at Varanasi Cantt (BSB), Kashi Station & Banaras Station. 24/7 service.';
$canonical   = 'https://bookcabvaranasi.com/services/varanasi-railway-station-taxi/';
$og_title    = 'Varanasi Railway Station Taxi Service | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Varanasi railway station cab';
$breadcrumbs = [
    ['name' => 'Home',     'url'  => 'https://bookcabvaranasi.com/'],
    ['name' => 'Services', 'url'  => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Varanasi Railway Station Taxi', 'url' => $canonical],
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type' => 'Question', 'name' => 'Which railway stations in Varanasi do you serve?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'We serve all three major stations: Varanasi Junction (Cantt / BSB), Kashi Railway Station (MZP area), and Banaras Station (BSBS / Manduadih). Please mention the station when booking.']],
        ['@type' => 'Question', 'name' => 'How much does a cab from Varanasi Cantt to the ghats cost?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A sedan (Swift Dzire) from Varanasi Cantt to the Dashashwamedh Ghat area is approximately ₹300–₹500 depending on time and traffic. Exact fare is confirmed at booking.']],
        ['@type' => 'Question', 'name' => 'Can I book a cab for early morning train arrivals?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes, we operate 24/7. Call or WhatsApp us with your train arrival time and station to schedule a pickup. Our driver will be at the station when your train arrives.']],
        ['@type' => 'Question', 'name' => 'Can the cab take me directly from the station to a temple?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes, we can take you to the area near any temple. Vehicles park at designated spots; entry to temple inner courts is on foot. For sightseeing after arrival, consider our 8hr local package.']],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonical . '#service',
    'name'        => 'Varanasi Railway Station Taxi Service',
    'serviceType' => 'Chauffeur-driven taxi transfer',
    'provider'    => ['@id' => 'https://bookcabvaranasi.com/#business'],
    'areaServed'  => ['@type' => 'City', 'name' => 'Varanasi'],
    'url'         => $canonical,
];

$schema_json = json_encode(['@graph' => [$faqSchema, $serviceSchema]], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/services/outstation-taxi-varanasi/">Services</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Railway Station Taxi</span>
    </nav>
    <h1 class="page-hero__title">Varanasi Railway Station Taxi</h1>
    <p class="page-hero__desc">Reliable pickup &amp; drop at all Varanasi stations — Cantt (BSB), Kashi &amp; Banaras Station. Pre-book for a stress-free arrival.</p>
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

<!-- STATIONS SERVED -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Stations We Serve</span>
    <h2>All Major Varanasi Railway Stations</h2>
    <div class="divider divider--left"></div>
    <div class="grid grid-3 mt-6">
      <!-- Cantt -->
      <div class="card card-body" style="border-left: 4px solid var(--clr-saffron)">
        <div style="font-size:2rem;margin-bottom:.5rem">🚉</div>
        <h3 class="text-navy" style="font-size:1.1rem">Varanasi Junction (Cantt)</h3>
        <p class="text-sm text-muted" style="margin:.5rem 0">Station Code: BSB</p>
        <p class="text-sm">Varanasi's busiest station. ~4km from city centre (Dashashwamedh Ghat). Drop/pickup outside platform 1 exit.</p>
      </div>
      <!-- Kashi -->
      <div class="card card-body" style="border-left: 4px solid var(--clr-navy)">
        <div style="font-size:2rem;margin-bottom:.5rem">🚉</div>
        <h3 class="text-navy" style="font-size:1.1rem">Kashi Railway Station</h3>
        <p class="text-sm text-muted" style="margin:.5rem 0">Station Code: KSJ / MZP area</p>
        <p class="text-sm">Closer to the old city and ghats. Common arrival point for pilgrims from North India.</p>
      </div>
      <!-- Banaras -->
      <div class="card card-body" style="border-left: 4px solid var(--clr-gold-dark)">
        <div style="font-size:2rem;margin-bottom:.5rem">🚉</div>
        <h3 class="text-navy" style="font-size:1.1rem">Banaras Station (Manduadih)</h3>
        <p class="text-sm text-muted" style="margin:.5rem 0">Station Code: BSBS</p>
        <p class="text-sm">Major intercity terminal, ~7km from ghats. Several trains from Delhi, Mumbai, and South India stop here.</p>
      </div>
    </div>
  </div>
</section>

<!-- FARE TABLE -->
<section class="section">
  <div class="container">
    <span class="section-label">Transparent Pricing</span>
    <h2>Station Cab Fare Table</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">Below are indicative fares for standard station transfer routes. Exact fare confirmed at booking. Tolls and parking are extra where applicable.</p>

    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Varanasi station cab fares">
        <thead>
          <tr>
            <th scope="col">Vehicle</th>
            <th scope="col">Capacity</th>
            <th scope="col">Station → City Centre</th>
            <th scope="col">Station → Airport</th>
            <th scope="col">Extras</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Swift Dzire</td><td>4 passengers</td><td class="price">₹300–₹500</td><td class="price">₹1,000</td><td class="note">Parking extra</td></tr>
          <tr><td>Maruti Ertiga</td><td>6 passengers</td><td class="price">₹400–₹600</td><td class="price">₹1,200</td><td class="note">Parking extra</td></tr>
          <tr><td>Innova Crysta</td><td>7 passengers</td><td class="price">₹500–₹800</td><td class="price">₹1,500</td><td class="note">Parking extra</td></tr>
          <tr><td>Force Urbania (6–7 Seater)</td><td>7 passengers</td><td class="price">₹600–₹900</td><td class="price">₹1,500</td><td class="note">Parking extra</td></tr>
          <tr><td>Tempo Traveller 16 Seater</td><td>16 passengers</td><td class="price">₹1,200–₹1,800</td><td class="price">₹2,500</td><td class="note">Parking extra</td></tr>
        </tbody>
      </table>
    </div>
    <div class="alert alert-info mt-4">
      <i class="fas fa-info-circle" aria-hidden="true"></i>
      <strong>Note:</strong> Station-to-city fares are estimates based on distance and traffic. The exact fare will be confirmed when you book. Waiting charges apply at ₹100 per 30 minutes beyond 15 minutes free.
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">How It Works</span>
    <h2>Your Station Pickup — Step by Step</h2>
    <div class="divider divider--left"></div>
    <ol class="itinerary-list mt-6" style="max-width:680px">
      <li>
        <div class="itinerary-num">1</div>
        <div><strong>Book in advance:</strong> Call, WhatsApp, or fill the form below. Tell us your station, train number, arrival time, and drop destination.</div>
      </li>
      <li>
        <div class="itinerary-num">2</div>
        <div><strong>Driver assigned:</strong> We confirm your cab with driver name and mobile number by WhatsApp or SMS.</div>
      </li>
      <li>
        <div class="itinerary-num">3</div>
        <div><strong>Driver at station:</strong> Your driver will be at the main exit with a name board. If your train is delayed, the driver will wait (up to 60 minutes free for pre-booked pickups).</div>
      </li>
      <li>
        <div class="itinerary-num">4</div>
        <div><strong>Comfortable journey:</strong> Reach your hotel, ghat, or next destination in a clean, air-conditioned cab.</div>
      </li>
    </ol>
    <div class="highlight-box mt-6" style="max-width:680px">
      <strong>Tip:</strong> If you can't find your driver at the exit, call the number on your booking confirmation immediately. Our drivers are experienced at finding passengers in busy station crowds.
    </div>
  </div>
</section>

<!-- ALSO CONSIDER -->
<section class="section">
  <div class="container">
    <h2>Plan Your Full Varanasi Journey</h2>
    <p class="mt-4">After settling in, explore Varanasi with one of our curated services:</p>
    <div class="grid grid-3 mt-6">
      <a class="card-route" href="/services/varanasi-local-8hr-80km/">
        <div class="card-route__body">
          <div class="card-route__cities">🚕 Varanasi Local</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 8hr or 12hr</span>
          </div>
          <div class="card-route__fare">from ₹2,000</div>
          <p class="text-sm mt-4">Kashi Vishwanath, Sarnath, Ghats, Ganga Aarti — all in one day</p>
        </div>
      </a>
      <a class="card-route" href="/routes/varanasi-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~200km · 4.5hr</span>
          </div>
          <div class="card-route__fare">from ₹6,500</div>
          <p class="text-sm mt-4">Ram Janmabhoomi, Hanuman Garhi, Saryu Ghat day trip</p>
        </div>
      </a>
      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Prayagraj</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~125km · 2.5hr</span>
          </div>
          <div class="card-route__fare">from ₹3,250</div>
          <p class="text-sm mt-4">Triveni Sangam, temples, and Prayagraj city sightseeing</p>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-warm">
  <div class="container" style="max-width:760px">
    <span class="section-label">FAQ</span>
    <h2>Frequently Asked Questions</h2>
    <div class="divider divider--left"></div>
    <div class="faq-list mt-6">
      <?php
      $faqs = [
        ['q' => 'Which railway stations in Varanasi do you serve?',
         'a' => 'We serve all three major stations: Varanasi Junction (Cantt / BSB), Kashi Railway Station (KSJ), and Banaras Station (BSBS / Manduadih). Please mention your exact station when booking.'],
        ['q' => 'How much does a cab from Varanasi Cantt to the ghats cost?',
         'a' => 'A sedan (Swift Dzire) from Varanasi Cantt to Dashashwamedh Ghat area is approximately ₹300–₹500 depending on traffic. The exact fare is confirmed at booking.'],
        ['q' => 'Can I book a cab for early morning or late-night train arrivals?',
         'a' => 'Yes. We operate 24/7. WhatsApp or call us with your train number and arrival time. Our driver will be ready at the station when your train arrives.'],
        ['q' => 'What if my train is delayed?',
         'a' => 'Your pre-booked driver will monitor your train status and wait up to 60 minutes free of charge. If the delay is longer, please call us and we will adjust accordingly.'],
        ['q' => 'Can I book a round-trip — station pickup and then drop me back later?',
         'a' => 'Yes. You can book a one-way station pickup and separately book the return drop. Or book a local 8hr/80km package for a full day of sightseeing before your return train.'],
      ];
      foreach ($faqs as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-<?php echo $i; ?>-station">
          <?php echo htmlspecialchars($faq['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-<?php echo $i; ?>-station" role="region">
          <div class="faq-answer__inner"><?php echo htmlspecialchars($faq['a']); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
$form_origin     = 'Varanasi Railway Station';
$form_destination = '';
$form_section_id = 'station-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
