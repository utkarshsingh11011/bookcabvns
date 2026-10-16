<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Ayodhya to Prayagraj Cab | Taxi Fare & Booking from ₹4,500 | Book Cab Varanasi';
$meta_desc      = 'Book an Ayodhya to Prayagraj cab. One-way sedan from ₹4,500. Direct pickup from Ayodhya hotels & Tedhi Bazar parking to Triveni Sangam & Prayagraj Junction.';
$canonical      = 'https://bookcabvaranasi.com/routes/ayodhya-to-prayagraj-cab/';
$og_title       = 'Ayodhya to Prayagraj Cab | Private Taxi Service | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'Ayodhya to Prayagraj cab';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Routes',   'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Ayodhya to Prayagraj Cab', 'url' => $canonical],
];

// Structured Data: FAQPage + TaxiService Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How long does a cab take from Ayodhya to Prayagraj?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The distance from Ayodhya to Prayagraj is approximately 160 km via NH-330 (via Sultanpur and Pratapgarh). The drive takes around 3.5 to 4 hours in an air-conditioned private taxi.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Where will the driver meet us in Ayodhya for the pickup?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Our driver will meet you directly at your Ayodhya hotel or at designated parking areas including Tedhi Bazar Multi-Level Car Parking, Amaniganj, or Naya Ghat. We also serve Ayodhya Dham Junction (AY) and Ayodhya Airport (AYJ).'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the taxi fare from Ayodhya to Prayagraj?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'One-way AC Sedan (Swift Dzire) is ₹4,500. Maruti Ertiga (6-seater) is ₹5,500, Toyota Innova Crysta is ₹6,500, and 16-seater Tempo Traveller is ₹9,500. Highway tolls (~₹150 to ₹250) are at actuals.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can the driver drop us directly at Prayagraj Junction or Triveni Sangam?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes! We provide direct drop-offs at all locations across Prayagraj, including Prayagraj Junction (PRYJ) railway station, Bamrauli Airport (IXD), Civil Lines hotels, and the Triveni Sangam ghats (Qila Ghat / Arail).'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can we carry sacred Saryu river water in the cab for Sangam / Vishwanath Abhishek?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes, devotees frequently carry sealed brass or plastic containers of sacred Saryu Jal. Our drivers ensure your sacred containers and prasad items are stored securely and handled with reverence.'
            ]
        ],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TaxiService',
    '@id'         => $canonical . '#service',
    'name'        => 'Ayodhya to Prayagraj Cab Service',
    'serviceType' => 'Chauffeur-driven intercity taxi service',
    'provider'    => [
        '@type'     => 'LocalBusiness',
        '@id'       => 'https://bookcabvaranasi.com/#business',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN,
    ],
    'areaServed'  => [
        ['@type' => 'City', 'name' => 'Ayodhya'],
        ['@type' => 'City', 'name' => 'Prayagraj'],
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '4500',
        'priceCurrency' => 'INR',
        'description'   => 'One-way AC Sedan taxi from Ayodhya to Prayagraj',
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
      <span class="breadcrumb__current">Ayodhya to Prayagraj Cab</span>
    </nav>
    <h1 class="page-hero__title">Ayodhya to Prayagraj Cab Booking</h1>
    <p class="page-hero__desc">Direct, private taxi transfer from Ayodhya Dham to Prayagraj. Doorstep pickup from hotels &amp; Tedhi Bazar parking to Triveni Sangam, Civil Lines, or Prayagraj Junction. Fares starting at ₹4,500.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I need to book an Ayodhya to Prayagraj cab'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ ROUTE QUICK FACTS ═══ -->
<div class="trust-bar" role="region" aria-label="Route quick metrics">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-route" aria-hidden="true"></i> <strong>Distance:</strong> ~160 km</div>
    <div class="trust-item"><i class="fas fa-clock" aria-hidden="true"></i> <strong>Travel Time:</strong> ~3.5 to 4 Hours</div>
    <div class="trust-item"><i class="fas fa-road" aria-hidden="true"></i> <strong>Highway:</strong> NH-330 via Sultanpur &amp; Pratapgarh</div>
    <div class="trust-item"><i class="fas fa-tag" aria-hidden="true"></i> <strong>Sedan Fare:</strong> From ₹4,500</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: ROUTE OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>Seamless Highway Travel from Ayodhya to Prayagraj</h2>
        <p>
          Completing your Ram Mandir pilgrimage in Ayodhya and continuing southwest to <strong>Prayagraj</strong> for the holy snan at <strong>Triveni Sangam</strong> is a cherished tradition on the UP spiritual circuit. Many pilgrims also connect to outbound express trains at <strong>Prayagraj Junction (PRYJ)</strong> or flights at <strong>Bamrauli Airport (IXD)</strong>.
        </p>
        <p>
          With <strong>Book Cab Varanasi</strong>, your departure from Ayodhya is smooth and coordinated. Because personal and taxi vehicles cannot enter the sanctum corridors of Ram Janmabhoomi or Hanuman Garhi, your chauffeur meets you at Tedhi Bazar Multi-Level Car Parking, Amaniganj, or directly at your Ayodhya hotel reception, ensuring hassle-free luggage loading and a comfortable air-conditioned ride along <strong>NH-330</strong>.
        </p>
      </div>
    </section>

    <!-- ═══ SECTION: FARES TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Ayodhya to Prayagraj Cab Fares</h2>
      <p class="text-muted mb-4">Clear upfront pricing. Driver allowance and fuel are included. Tolls (~₹150 to ₹250) and municipal parking at actuals.</p>

      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Vehicle Type</th>
              <th>Seating</th>
              <th>One-Way Fare</th>
              <th>Round Trip (Same Day)</th>
              <th>Ideal For</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
              <td>4 Passengers</td>
              <td><strong>₹4,500</strong></td>
              <td><strong>₹7,500</strong></td>
              <td>Couples, solo travelers, small families</td>
            </tr>
            <tr>
              <td><strong>Maruti Ertiga</strong> (AC MPV)</td>
              <td>6 Passengers</td>
              <td><strong>₹5,500</strong></td>
              <td><strong>₹9,000</strong></td>
              <td>Families with elderly members or extra bags</td>
            </tr>
            <tr>
              <td><strong>Toyota Innova Crysta</strong></td>
              <td>7 Passengers</td>
              <td><strong>₹6,500</strong></td>
              <td><strong>₹11,000</strong></td>
              <td>Executive comfort, superior legroom</td>
            </tr>
            <tr>
              <td><strong>Force Urbania / Tempo (12-17)</strong></td>
              <td>9 to 17 Passengers</td>
              <td><strong>₹9,500</strong></td>
              <td><strong>₹16,000</strong></td>
              <td>Pilgrim groups, bhajan mandalis, large families</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ═══ SECTION: VEHICLES ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Fleet Options for Your Trip</h2>
      <div class="grid-3 gap-6">

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-car" aria-hidden="true"></i></div>
          <h3 class="card-title">AC Sedan (Dzire / Etios)</h3>
          <p class="text-sm">Cost-effective, smooth, and comfortable for up to 4 passengers with standard luggage.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/sedan-cab-rental/">Sedan Details ›</a>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-shuttle-van" aria-hidden="true"></i></div>
          <h3 class="card-title">Family MPV (Ertiga)</h3>
          <p class="text-sm">Roomy 6-seater vehicle with rear air conditioning and flexible boot space for prasad and bags.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/ertiga-cab-rental/">Ertiga Details ›</a>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-bus" aria-hidden="true"></i></div>
          <h3 class="card-title">Force Urbania &amp; Tempo</h3>
          <p class="text-sm">Premium 9–26 seater coaches with reclining pushback seats, dual AC, and abundant luggage storage.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/tempo-traveller-rental/">Group Fleet Details ›</a>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Ayodhya to Prayagraj</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2p-1">
            <span>How long does a cab take from Ayodhya to Prayagraj?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2p-1" class="faq-answer">
            <p>The distance is roughly 160 km via NH-330 (via Sultanpur and Pratapgarh). The driving time is approximately 3.5 to 4 hours under normal traffic conditions.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2p-2">
            <span>Where will the driver meet us in Ayodhya?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2p-2" class="faq-answer">
            <p>Drivers coordinate pickup at your Ayodhya hotel or at authorized parking lots like Tedhi Bazar Multi-Level Car Parking, Amaniganj, or Naya Ghat. We also provide pickups from Ayodhya Dham Junction (AY) and Ayodhya Airport (AYJ).</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2p-3">
            <span>Can the cab drop us directly at Prayagraj Junction or Sangam?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2p-3" class="faq-answer">
            <p>Yes. We drop you directly at Prayagraj Junction (PRYJ), Bamrauli Airport (IXD), Sangam parking (Qila Ghat / Arail Ghat), or your hotel in Civil Lines.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2p-4">
            <span>What is the cab fare from Ayodhya to Prayagraj?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2p-4" class="faq-answer">
            <p>One-way Sedan is ₹4,500, Ertiga is ₹5,500, and Innova Crysta is ₹6,500. Round trip starts at ₹7,500 for Sedans. Toll taxes (~₹150 to ₹250) are at actuals.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: RELATED LINKS ═══ -->
    <section class="mb-8">
      <h3 class="mb-3">Related Intercity Links</h3>
      <div class="flex gap-4" style="flex-wrap:wrap">
        <a class="btn btn-outline btn-sm" href="/routes/prayagraj-to-ayodhya-cab/">Prayagraj to Ayodhya Cab ›</a>
        <a class="btn btn-outline btn-sm" href="/routes/ayodhya-to-varanasi-cab/">Ayodhya to Varanasi Cab ›</a>
        <a class="btn btn-outline btn-sm" href="/tours/varanasi-prayagraj-ayodhya-package/">3-City Spiritual Tour ›</a>
        <a class="btn btn-outline btn-sm" href="/locations/prayagraj/">Prayagraj City Hub ›</a>
      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Ayodhya to Prayagraj Cab</h2>
      <p class="text-muted mb-4">Fast confirmation, dedicated chauffeur, and clean sanitized vehicles guaranteed.</p>
      <?php
      $form_origin      = 'Ayodhya';
      $form_destination = 'Prayagraj';
      $form_section_id  = 'ayodhya-to-prayagraj-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
