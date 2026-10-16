<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Prayagraj to Ayodhya Cab | Taxi Fare & Booking from ₹4,500 | Book Cab Varanasi';
$meta_desc      = 'Book a cab from Prayagraj to Ayodhya. Swift Dzire from ₹4,500. Travel 160 km via NH-330 in 3.5 hrs. Direct Sangam to Ram Mandir private taxi service.';
$canonical      = 'https://bookcabvaranasi.com/routes/prayagraj-to-ayodhya-cab/';
$og_title       = 'Prayagraj to Ayodhya Cab | Private Taxi Booking | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'Prayagraj to Ayodhya cab';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Routes',   'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Prayagraj to Ayodhya Cab', 'url' => $canonical],
];

// Structured Data: FAQPage + TaxiService Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is the travel time and distance from Prayagraj to Ayodhya by cab?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The distance from Prayagraj to Ayodhya is approximately 160 km via NH-330 (passing through Pratapgarh and Sultanpur). In a private taxi, the journey typically takes 3.5 to 4 hours under regular highway conditions.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the cab fare from Prayagraj to Ayodhya?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'One-way AC Sedan (Swift Dzire) fare is ₹4,500. Maruti Ertiga is ₹5,500, Innova Crysta is ₹6,500, and 16-seater Tempo Traveller is ₹9,500. Same-day round trips start at ₹7,500 for Sedans. Toll taxes and parking are at actuals.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can we take a holy morning snan at Triveni Sangam before leaving for Ayodhya?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes! A popular pilgrimage routine is taking an early morning dip (snan) at Triveni Sangam between 5:30 AM and 7:00 AM, followed by darshan at Bade Hanuman Ji. Our cab will pick you up at your Sangam ghat or hotel by 7:30 AM to 8:00 AM, reaching Ayodhya around 11:30 AM to 12:00 PM for afternoon Ram Mandir darshan.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Where does the taxi drop passengers in Ayodhya?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Due to strict security zones around the Shri Ram Janmabhoomi complex, taxis drop passengers at official designated municipal parking sites including Tedhi Bazar Multi-Level Car Parking, Amaniganj, or Naya Ghat. Devotees take authorized e-rickshaws or walk 500-800 meters to the temple entrance gate.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is a same-day return trip from Prayagraj to Ayodhya possible?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. Departing Prayagraj at 6:00 AM gets you to Ayodhya by 9:30 AM. You have roughly 6 hours to visit Hanuman Garhi, Ram Janmabhoomi, and Kanak Bhawan, and take an evening stroll at Saryu Ghat before departing back around 4:30 PM to reach Prayagraj by 8:30 PM.'
            ]
        ],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TaxiService',
    '@id'         => $canonical . '#service',
    'name'        => 'Prayagraj to Ayodhya Cab Service',
    'serviceType' => 'Chauffeur-driven intercity taxi service',
    'provider'    => [
        '@type'     => 'LocalBusiness',
        '@id'       => 'https://bookcabvaranasi.com/#business',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN,
    ],
    'areaServed'  => [
        ['@type' => 'City', 'name' => 'Prayagraj'],
        ['@type' => 'City', 'name' => 'Ayodhya'],
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '4500',
        'priceCurrency' => 'INR',
        'description'   => 'One-way AC Sedan taxi from Prayagraj to Ayodhya',
        'url'           => $canonical,
    ],
    'url'         => $canonical,
];

$schema_json = json_encode(['@graph' => [$faqSchema, $serviceSchema]], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- ═══ PAGE HERO ═══ -->
<section class="page-hero" aria-label="Hero header">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/services/outstation-taxi-varanasi/">Routes</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Prayagraj to Ayodhya Cab</span>
    </nav>
    <h1 class="page-hero__title">Prayagraj to Ayodhya Cab Booking</h1>
    <p class="page-hero__desc">Comfortable, air-conditioned highway taxi from the confluence of the holy rivers in Prayagraj to Shri Ram Janmabhoomi in Ayodhya. 160 km in ~3.5 hours via NH-330.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I need to book a Prayagraj to Ayodhya cab'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ ROUTE QUICK FACTS ═══ -->
<div class="trust-bar" role="region" aria-label="Route metrics">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-route" aria-hidden="true"></i> <strong>Distance:</strong> ~160 km</div>
    <div class="trust-item"><i class="fas fa-clock" aria-hidden="true"></i> <strong>Travel Time:</strong> ~3.5 to 4 Hours</div>
    <div class="trust-item"><i class="fas fa-road" aria-hidden="true"></i> <strong>Highway:</strong> NH-330 (via Pratapgarh &amp; Sultanpur)</div>
    <div class="trust-item"><i class="fas fa-tag" aria-hidden="true"></i> <strong>Sedan Fare:</strong> From ₹4,500 OW</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: ROUTE OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>Connecting Triveni Sangam to Shri Ram Janmabhoomi</h2>
        <p>
          The journey between <strong>Prayagraj (Allahabad)</strong> and <strong>Ayodhya</strong> represents one of northern India's most auspicious pilgrimage corridors. Thousands of devotees complete their holy dip and rituals at the Triveni Sangam and immediately proceed north to worship Bhagwan Shri Ram at Ayodhya Dham.
        </p>
        <p>
          Traveling via the well-maintained <strong>NH-330 national highway</strong> through Pratapgarh and Sultanpur offers a scenic, stress-free drive. With <strong>Book Cab Varanasi</strong>, you avoid overcrowded public buses and train waitlists, traveling with dedicated chauffeurs who know the best route diversions, clean rest stops, and designated temple parking facilities in Ayodhya.
        </p>
      </div>

      <div class="note-box mt-4">
        <i class="fas fa-map-marker-alt text-primary" aria-hidden="true"></i>
        <div>
          <strong>Ayodhya Security Guidelines:</strong> Four-wheelers are prohibited on Janmabhoomi Path and within the immediate temple sanctuary. Our chauffeurs drop you at the authorized Tedhi Bazar multi-level car park or Amaniganj parking, and wait safely with your luggage while you take e-rickshaws or walk to the temple complex.
        </div>
      </div>
    </section>

    <!-- ═══ SECTION: FARES TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Prayagraj to Ayodhya Cab Fare &amp; Vehicle Options</h2>
      <p class="text-muted mb-4">Transparent fares with no hidden surcharges. Toll taxes (~₹150 to ₹250) and parking at actuals.</p>

      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Vehicle Type</th>
              <th>Seating</th>
              <th>One-Way Fare</th>
              <th>Round Trip (Same Day)</th>
              <th>Best For</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
              <td>4 Passengers</td>
              <td><strong>₹4,500</strong></td>
              <td><strong>₹7,500</strong></td>
              <td>Couples, solo pilgrims, small families</td>
            </tr>
            <tr>
              <td><strong>Maruti Ertiga</strong> (AC MPV)</td>
              <td>6 Passengers</td>
              <td><strong>₹5,500</strong></td>
              <td><strong>₹9,000</strong></td>
              <td>Families with kids and elders</td>
            </tr>
            <tr>
              <td><strong>Toyota Innova Crysta</strong></td>
              <td>7 Passengers</td>
              <td><strong>₹6,500</strong></td>
              <td><strong>₹11,000</strong></td>
              <td>Premium comfort, spacious legroom</td>
            </tr>
            <tr>
              <td><strong>Force Urbania / Tempo (12-17)</strong></td>
              <td>9 to 17 Passengers</td>
              <td><strong>₹9,500</strong></td>
              <td><strong>₹16,000</strong></td>
              <td>Pilgrim groups, bhajan mandalis</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ═══ SECTION: VEHICLES ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Select the Right Vehicle for Your Journey</h2>
      <div class="grid-3 gap-6">

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-car" aria-hidden="true"></i></div>
          <h3 class="card-title">Sedan — Swift Dzire</h3>
          <p class="text-sm">Ideal for up to 4 passengers with light luggage. Fuel-efficient, agile through town traffic, and air-conditioned.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/sedan-cab-rental/">Sedan Details ›</a>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-shuttle-van" aria-hidden="true"></i></div>
          <h3 class="card-title">6-Seater — Maruti Ertiga</h3>
          <p class="text-sm">Spacious 3-row seating, rear AC blower, and extra luggage capacity. Perfect balance of price and family comfort.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/ertiga-cab-rental/">Ertiga Details ›</a>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-bus" aria-hidden="true"></i></div>
          <h3 class="card-title">Group — Tempo / Urbania</h3>
          <p class="text-sm">High-roof luxury vans with reclining bucket seats, dedicated luggage hold, and USB charging points for every seat.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/tempo-traveller-rental/">Tempo Details ›</a>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Prayagraj to Ayodhya</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-p2a-1">
            <span>What is the travel time and distance from Prayagraj to Ayodhya?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-p2a-1" class="faq-answer">
            <p>The total distance is approximately 160 km via NH-330 (via Pratapgarh and Sultanpur). A private cab typically takes 3.5 to 4 hours under regular road conditions.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-p2a-2">
            <span>What is the cab fare from Prayagraj to Ayodhya?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-p2a-2" class="faq-answer">
            <p>One-way sedan fare is ₹4,500, Ertiga is ₹5,500, and Innova Crysta is ₹6,500. Same-day round trips start at ₹7,500 for Dzire. Tolls (~₹150-₹250) and municipal parking are extra.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-p2a-3">
            <span>Can we do a morning dip at Sangam before departing?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-p2a-3" class="faq-answer">
            <p>Yes. Many travelers perform early morning snan and puja at Triveni Sangam, have breakfast, and depart by 7:30 AM to 8:00 AM, arriving in Ayodhya in time for midday darshan.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-p2a-4">
            <span>Where does the taxi drop passengers in Ayodhya?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-p2a-4" class="faq-answer">
            <p>Taxis drop at official designated municipal parking sites (such as Tedhi Bazar Multi-Level Car Parking or Amaniganj). Devotees take battery e-rickshaws or walk to the temple complex.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-p2a-5">
            <span>Can this trip be completed in a single day?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-p2a-5" class="faq-answer">
            <p>Yes! An early 6:00 AM departure allows you to arrive in Ayodhya by 9:30 AM, spend 6-7 hours exploring Ram Janmabhoomi, Hanuman Garhi, and Saryu Ghat, and return to Prayagraj by 8:30 PM to 9:00 PM.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: RELATED LINKS ═══ -->
    <section class="mb-8">
      <h3 class="mb-3">Related Circuit Routes &amp; Tours</h3>
      <div class="flex gap-4" style="flex-wrap:wrap">
        <a class="btn btn-outline btn-sm" href="/routes/ayodhya-to-prayagraj-cab/">Ayodhya to Prayagraj Cab ›</a>
        <a class="btn btn-outline btn-sm" href="/routes/varanasi-to-ayodhya-cab/">Varanasi to Ayodhya Cab ›</a>
        <a class="btn btn-outline btn-sm" href="/tours/varanasi-prayagraj-ayodhya-package/">3-City Spiritual Triangle Tour ›</a>
        <a class="btn btn-outline btn-sm" href="/locations/prayagraj/">Prayagraj City Hub ›</a>
        <a class="btn btn-outline btn-sm" href="/locations/ayodhya/">Ayodhya City Hub ›</a>
      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Prayagraj to Ayodhya Cab</h2>
      <p class="text-muted mb-4">Book in advance for guaranteed vehicle availability, punctual doorstep pickup, and verified chauffeurs.</p>
      <?php
      $form_origin      = 'Prayagraj';
      $form_destination = 'Ayodhya';
      $form_section_id  = 'prayagraj-to-ayodhya-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
