<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Toyota Innova Crysta Rental Varanasi | Luxury Cab Hire | Book Cab Varanasi';
$meta_desc      = 'Rent a Toyota Innova Crysta in Varanasi. Airport transfer ₹1,500, local 8hr/80km ₹3,500, outstation ₹19/km. Plush captain seats, superior highway suspension, top comfort.';
$canonical      = 'https://bookcabvaranasi.com/fleet/innova-crysta-rental/';
$og_title       = 'Toyota Innova Crysta Rental Varanasi | Premium MPV Cab';
$og_desc        = $meta_desc;
$whatsapp_route = 'Innova Crysta rental Varanasi';

$breadcrumbs = [
    ['name' => 'Home',              'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Fleet',             'url' => 'https://bookcabvaranasi.com/fleet/sedan-cab-rental/'],
    ['name' => 'Innova Crysta',     'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Toyota Innova Crysta Rental in Varanasi',
            'serviceType'  => 'Luxury Car Rental with Driver, VIP Taxi, Airport Cab, Outstation Tour MPV',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                ['@type' => 'City', 'name' => 'Varanasi'],
                ['@type' => 'City', 'name' => 'Prayagraj'],
                ['@type' => 'City', 'name' => 'Ayodhya'],
                ['@type' => 'City', 'name' => 'Gaya'],
            ],
            'description'  => 'Hire premium Toyota Innova Crysta MPVs in Varanasi. Featuring plush reclining captain seats, multi-zone automatic climate control, and unmatched highway suspension for seamless pilgrimages to Ayodhya, Prayagraj, and Bodhgaya.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'What seating configurations are available for the Innova Crysta?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'We provide both 7-seater configurations (with luxury middle-row captain seats) and 8-seater configurations (with second-row bench seating). Please specify your preference when requesting a quote.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What are the rental rates for Toyota Innova Crysta in Varanasi?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Lal Bahadur Shastri Airport transfer is ₹1,500. Local 8hr/80km package is ₹3,500. Local 12hr/120km package is ₹4,500. Outstation rate is ₹19 per km with a 250 km/day minimum billing and ₹400/day driver BATA.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Why is the Innova Crysta recommended for outstation pilgrimages?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'The Innova Crysta is renowned for its ladder-frame durability, high ground clearance, and best-in-class shock absorption. On 4 to 5-hour highway journeys to Ayodhya, Prayagraj, or Gaya, elderly passengers and families experience zero fatigue compared to smaller hatchbacks or sedans.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can the Innova Crysta accommodate international luggage trolleys?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. With the third row configured, it holds 3-4 bags. For groups of 4-5 passengers with 5+ large international luggage cases, the third row folds sideways against the walls, creating an enormous cargo area.',
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
      <span class="breadcrumb__current">Toyota Innova Crysta</span>
    </nav>
    <h1 class="page-hero__title">Toyota Innova Crysta Rental in Varanasi</h1>
    <p class="page-hero__desc">The pinnacle of luxury highway comfort. Rent a pristine, chauffeur-driven Toyota Innova Crysta for Varanasi city sightseeing, Babatpur airport transfers, and long-distance pilgrimages to Ayodhya, Prayagraj &amp; Gaya. Local 8hr from ₹3,500.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I want to rent a Toyota Innova Crysta in Varanasi'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ SPECIFICATIONS BAR ═══ -->
<div class="trust-bar" role="region" aria-label="Innova key metrics">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-couch" aria-hidden="true"></i> <strong>Class:</strong> Executive Reclining Captain Seats</div>
    <div class="trust-item"><i class="fas fa-users" aria-hidden="true"></i> <strong>Capacity:</strong> Up to 7 Guests</div>
    <div class="trust-item"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> <strong>Outstation:</strong> ₹19 / km</div>
    <div class="trust-item"><i class="fas fa-shield-alt" aria-hidden="true"></i> <strong>Safety:</strong> 7 Airbags · ABS · ESP</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>Unrivaled Comfort for Discerning Devotees &amp; Travelers</h2>
        <p>
          Long highway journeys across Uttar Pradesh require more than basic transportation—they demand restful seating, effortless highway overtaking power, and superior shock absorption. The <strong>Toyota Innova Crysta</strong> has long stood as the benchmark for luxury intercity travel across India.
        </p>
        <p>
          Whether traveling with senior citizens who require gentle suspension and high-seated ease of ingress, corporate dignitaries visiting Varanasi, or families embarking on the multi-day Kashi-Ayodhya-Prayagraj triangle, our immaculate Innova Crysta fleet guarantees a serene, fatigue-free experience from start to finish.
        </p>
      </div>
    </section>

    <!-- ═══ SECTION: TARIFF TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Toyota Innova Crysta Rental Tariffs</h2>
      <p class="text-muted mb-4">Transparent luxury rental packages. Dedicated chauffeur, clean interior, and fuel included.</p>

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
              <td><strong>₹1,500</strong></td>
              <td>Zero night charge · 30 min free wait</td>
            </tr>
            <tr>
              <td><strong>Local Sightseeing (8 Hours)</strong></td>
              <td>80 km Included</td>
              <td><strong>₹3,500</strong></td>
              <td>₹19/extra km · ₹250/extra hr</td>
            </tr>
            <tr>
              <td><strong>Full-Day City Tour (12 Hours)</strong></td>
              <td>120 km Included</td>
              <td><strong>₹4,500</strong></td>
              <td>₹19/extra km · ₹250/extra hr</td>
            </tr>
            <tr>
              <td><strong>Outstation Per-Km Rental</strong></td>
              <td>250 km/day Min Billing</td>
              <td><strong>₹19 / km</strong></td>
              <td>Driver BATA ₹400/day · Tolls extra</td>
            </tr>
            <tr>
              <td><strong>Varanasi to Prayagraj (One-Way)</strong></td>
              <td>125 km (2.5 hr)</td>
              <td><strong>₹4,750</strong></td>
              <td>Tolls extra (~₹200)</td>
            </tr>
            <tr>
              <td><strong>Varanasi to Prayagraj (Same-Day RT)</strong></td>
              <td>250 km Round Trip</td>
              <td><strong>₹9,500</strong></td>
              <td>Tolls &amp; parking extra</td>
            </tr>
            <tr>
              <td><strong>Varanasi to Ayodhya (One-Way)</strong></td>
              <td>200 km (4.5 hr)</td>
              <td><strong>₹10,000</strong></td>
              <td>Tolls extra (~₹250)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ═══ SECTION: KEY FEATURES ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Why Choose the Innova Crysta?</h2>
      <div class="grid-3 gap-6">

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-chair" aria-hidden="true"></i></div>
          <h3 class="card-title">Captain Reclining Seats</h3>
          <p class="text-sm">Middle-row individual plush captain chairs with armrests and slide adjustments ensure first-class comfort for parents and elders.</p>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-temperature-low" aria-hidden="true"></i></div>
          <h3 class="card-title">Multi-Zone Automatic AC</h3>
          <p class="text-sm">Independent climate zones with individual roof AC ducts ensure rapid, silent cooling for every row of passengers.</p>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-shield-virus" aria-hidden="true"></i></div>
          <h3 class="card-title">Pristine Hygiene &amp; Sanitization</h3>
          <p class="text-sm">Thoroughly detailed before every dispatch. Fresh fragrance, clean floor mats, onboard mineral water bottles, and tissues.</p>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Innova Crysta</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-inn-1">
            <span>What seating configurations are available for the Innova Crysta?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-inn-1" class="faq-answer">
            <p>We provide both 7-seater configurations (with luxury middle-row captain seats) and 8-seater configurations (with second-row bench seating). Please specify your preference when requesting a quote.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-inn-2">
            <span>What are the rental rates for Toyota Innova Crysta in Varanasi?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-inn-2" class="faq-answer">
            <p>Lal Bahadur Shastri Airport transfer is ₹1,500. Local 8hr/80km package is ₹3,500. Local 12hr/120km package is ₹4,500. Outstation rate is ₹19 per km with a 250 km/day minimum billing and ₹400/day driver BATA.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-inn-3">
            <span>How much luggage fits inside the Innova Crysta?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-inn-3" class="faq-answer">
            <p>With all seats occupied, it holds 3-4 bags. For 4-5 passengers, folding the third row sideways creates space for 5 to 6 large trolley bags.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-inn-4">
            <span>Can I book the Innova Crysta for multi-day outstation circuits?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-inn-4" class="faq-answer">
            <p>Yes. The Innova Crysta is our most popular car for 2-day and 3-day spiritual tours covering Varanasi, Ayodhya, Prayagraj, and Bodhgaya.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Toyota Innova Crysta</h2>
      <p class="text-muted mb-4">Reserve with zero stress. Instant confirmation and assigned verified driver.</p>
      <?php
      $form_origin     = 'Varanasi';
      $form_section_id = 'innova-booking-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
