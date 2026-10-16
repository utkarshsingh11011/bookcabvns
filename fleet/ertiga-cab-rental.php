<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Maruti Ertiga Cab Rental Varanasi | 6-Seater Taxi Hire | Book Cab Varanasi';
$meta_desc      = 'Hire a Maruti Ertiga 6-seater cab in Varanasi. Airport transfer from ₹1,200, local 8hr/80km ₹2,400, outstation ₹16/km. Dual AC, flexible boot space, verified chauffeurs.';
$canonical      = 'https://bookcabvaranasi.com/fleet/ertiga-cab-rental/';
$og_title       = 'Maruti Ertiga 6-Seater Cab Rental in Varanasi | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'Maruti Ertiga cab rental Varanasi';

$breadcrumbs = [
    ['name' => 'Home',              'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Fleet',             'url' => 'https://bookcabvaranasi.com/fleet/sedan-cab-rental/'],
    ['name' => 'Ertiga Cab Rental', 'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Maruti Ertiga Cab Rental in Varanasi',
            'serviceType'  => 'Car Rental with Driver, 6-Seater Taxi, Airport Transfer, Outstation MPV',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                ['@type' => 'City', 'name' => 'Varanasi'],
                ['@type' => 'City', 'name' => 'Prayagraj'],
                ['@type' => 'City', 'name' => 'Ayodhya'],
            ],
            'description'  => 'Hire clean, chauffeur-driven Maruti Suzuki Ertiga MPVs (6-passenger capacity) in Varanasi for Babatpur Airport transfers, 8hr/80km local city sightseeing, and outstation trips to Ayodhya, Prayagraj, and Bodhgaya.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'How many passengers and luggage can the Maruti Ertiga accommodate?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'The Maruti Ertiga comfortably seats up to 6 passengers plus the chauffeur. With all 3 rows up, the boot fits 2-3 medium bags or soft duffel bags. With the third-row split folded down for 4-5 passengers, it easily accommodates 4 to 5 large suitcases.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Does the Ertiga have dedicated rear air conditioning vents?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. Every Maruti Ertiga in our fleet is equipped with roof-mounted rear air conditioning vents with independent blower controls, ensuring effective cooling for middle and rear-row passengers during summer pilgrimage journeys.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What are the rental rates for Maruti Ertiga in Varanasi?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Local 8hr/80km package is ₹2,400. 12hr/120km package is ₹3,200. Airport transfer to/from Babatpur is ₹1,200. Outstation rate is ₹16 per km with a 250 km/day minimum billing and ₹300/day driver BATA.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Is the Ertiga suitable for outstation trips to Ayodhya and Prayagraj?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. The Ertiga is our most popular choice for family outstation pilgrimages. It handles highway cruising smoothly, provides excellent fuel economy, and offers great legroom for 4 to 6 travelers.',
                    ],
                ],
            ],
        ],
    ],
];

$schema_json = json_encode($schema_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- ═══ PAGE HERO ═══ -->
<section class="page-hero" aria-label="Hero header">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/fleet/sedan-cab-rental/">Fleet</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Maruti Ertiga Rental</span>
    </nav>
    <h1 class="page-hero__title">Maruti Ertiga Cab Rental in Varanasi</h1>
    <p class="page-hero__desc">Comfortable, air-conditioned 6-seater MPV rental with dedicated chauffeur. Ideal for family temple visits, Babatpur airport runs, and outstation trips to Ayodhya &amp; Prayagraj. Local 8hr package from ₹2,400.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I want to rent a Maruti Ertiga in Varanasi'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ SPECIFICATIONS BAR ═══ -->
<div class="trust-bar" role="region" aria-label="Ertiga key specifications">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-users" aria-hidden="true"></i> <strong>Seating:</strong> 6 Guests + Driver</div>
    <div class="trust-item"><i class="fas fa-snowflake" aria-hidden="true"></i> <strong>AC:</strong> Dual Roof Vents</div>
    <div class="trust-item"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> <strong>Outstation:</strong> ₹16 / km</div>
    <div class="trust-item"><i class="fas fa-plane" aria-hidden="true"></i> <strong>Airport Drop:</strong> ₹1,200</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>The Smart, Affordable Family MPV for UP Pilgrimages</h2>
        <p>
          The <strong>Maruti Suzuki Ertiga</strong> is India's favorite multi-purpose vehicle for good reason: it strikes the perfect balance between passenger space, luggage versatility, highway refinement, and economical rental tariffs.
        </p>
        <p>
          When you travel with parents, children, or extra baggage that won't fit into a standard sedan trunk, our verified Ertiga cabs give your family the room to stretch out comfortably. Equipped with powerful roof-mounted rear AC blowers, ergonomic seating, and verified chauffeurs, it is the premier choice for day-long temple yatras in Varanasi and intercity excursions across the sacred UP triangle.
        </p>
      </div>
    </section>

    <!-- ═══ SECTION: TARIFF TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Maruti Ertiga Rental Tariffs &amp; Packages</h2>
      <p class="text-muted mb-4">Transparent billing. Fuel, car hire, and chauffeur charges are included. Parking and highway toll taxes at actuals.</p>

      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Service Package</th>
              <th>Included Limits</th>
              <th>Package Rate</th>
              <th>Extra Usage Terms</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Airport Transfer (LBS Babatpur VNS)</strong></td>
              <td>One-Way Pick/Drop</td>
              <td><strong>₹1,200</strong></td>
              <td>30 mins free waiting at arrival gate</td>
            </tr>
            <tr>
              <td><strong>Local Sightseeing (8 Hours)</strong></td>
              <td>80 km Included</td>
              <td><strong>₹2,400</strong></td>
              <td>₹16/extra km · ₹200/extra hr</td>
            </tr>
            <tr>
              <td><strong>Full-Day City Tour (12 Hours)</strong></td>
              <td>120 km Included</td>
              <td><strong>₹3,200</strong></td>
              <td>₹16/extra km · ₹200/extra hr</td>
            </tr>
            <tr>
              <td><strong>Outstation Per-Km Rental</strong></td>
              <td>250 km/day Min Billing</td>
              <td><strong>₹16 / km</strong></td>
              <td>Driver BATA ₹300/day · Tolls extra</td>
            </tr>
            <tr>
              <td><strong>Varanasi to Prayagraj (One-Way)</strong></td>
              <td>125 km (2.5 hr)</td>
              <td><strong>₹4,000</strong></td>
              <td>Tolls extra (~₹200)</td>
            </tr>
            <tr>
              <td><strong>Varanasi to Prayagraj (Same-Day RT)</strong></td>
              <td>250 km Round Trip</td>
              <td><strong>₹8,000</strong></td>
              <td>Tolls &amp; parking extra</td>
            </tr>
            <tr>
              <td><strong>Varanasi to Ayodhya (One-Way)</strong></td>
              <td>200 km (4.5 hr)</td>
              <td><strong>₹8,000</strong></td>
              <td>Tolls extra (~₹250)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ═══ SECTION: VEHICLE HIGHLIGHTS ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Why Book an Ertiga with Book Cab Varanasi?</h2>
      <div class="grid-3 gap-6">

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-snowflake" aria-hidden="true"></i></div>
          <h3 class="card-title">Dual High-Output AC</h3>
          <p class="text-sm">Separate rear air conditioner vents keep second and third-row passengers cool and refreshed even during peak summer afternoons.</p>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-suitcase-rolling" aria-hidden="true"></i></div>
          <h3 class="card-title">Configurable Boot Space</h3>
          <p class="text-sm">Split 50:50 folding rear seats allow customizable luggage loading for temple prasad containers, trolley suitcases, and puja articles.</p>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-user-shield" aria-hidden="true"></i></div>
          <h3 class="card-title">Courteous Verified Drivers</h3>
          <p class="text-sm">Experienced highway chauffeurs with deep knowledge of temple parking lots, VIP gates, and safe driving habits.</p>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Maruti Ertiga</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ert-1">
            <span>How many passengers and luggage can the Maruti Ertiga accommodate?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ert-1" class="faq-answer">
            <p>The Maruti Ertiga comfortably seats up to 6 passengers plus the chauffeur. With all 3 rows in use, the trunk accommodates 2-3 medium duffels or hand trolley bags. For 4-5 travelers with 4+ large suitcases, folding part of the third row creates expansive luggage room.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ert-2">
            <span>Does the Ertiga have dedicated rear air conditioning vents?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ert-2" class="faq-answer">
            <p>Yes. All Ertiga vehicles in our fleet feature roof-mounted rear AC blowers with multi-speed adjustment.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ert-3">
            <span>What is the minimum billing for outstation Ertiga trips?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ert-3" class="faq-answer">
            <p>Outstation trips have a standard minimum billing of 250 km per calendar day. The per-km rate is ₹16/km with driver allowance (BATA) of ₹300 per day.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ert-4">
            <span>Can I book an Ertiga for an Ayodhya or Prayagraj day trip?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ert-4" class="faq-answer">
            <p>Yes, Ertiga is one of our most requested options for Varanasi–Ayodhya and Varanasi–Prayagraj day pilgrimages. You can reserve directly using the form below or via WhatsApp.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Maruti Ertiga Cab</h2>
      <p class="text-muted mb-4">Guaranteed air-conditioned vehicle and professional chauffeur assignment.</p>
      <?php
      $form_origin     = 'Varanasi';
      $form_section_id = 'ertiga-booking-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
