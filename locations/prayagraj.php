<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Cab Service in Prayagraj | Taxi Booking Allahabad & Sangam | Book Cab Varanasi';
$meta_desc      = 'Book reliable cab service in Prayagraj (Allahabad). Triveni Sangam transfers, Bamrauli Airport taxi, outstation cabs to Varanasi & Ayodhya. Call 24/7 at +91-9838409911.';
$canonical      = 'https://bookcabvaranasi.com/locations/prayagraj/';
$og_title       = 'Cab Service in Prayagraj | Sangam & Airport Taxi Booking';
$og_desc        = $meta_desc;
$whatsapp_route = 'cab service in Prayagraj';

$breadcrumbs = [
    ['name' => 'Home',      'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Locations', 'url' => 'https://bookcabvaranasi.com/locations/varanasi/'],
    ['name' => 'Prayagraj', 'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'               => 'LocalBusiness',
            '@id'                 => 'https://bookcabvaranasi.com/#business',
            'name'                => BCV_BRAND,
            'url'                 => BCV_DOMAIN,
            'logo'                => BCV_DOMAIN . '/assets/img/logo.png',
            'telephone'           => BCV_PHONE_MAIN,
            'email'               => BCV_EMAIL,
            'priceRange'          => '₹1000 - ₹22500',
            'address'             => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => BCV_ADDR_OFFICE,
                'addressLocality' => 'Varanasi',
                'addressRegion'   => 'Uttar Pradesh',
                'postalCode'      => '221002',
                'addressCountry'  => 'IN',
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Prayagraj'],
                ['@type' => 'City', 'name' => 'Varanasi'],
                ['@type' => 'City', 'name' => 'Ayodhya'],
            ],
            'aggregateRating' => [
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '470',
            ],
        ],
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Cab Service in Prayagraj',
            'serviceType'  => 'Chauffeur-Driven Taxi, Airport Transfer, Triveni Sangam Darshan, Outstation Cab',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                '@type'    => 'City',
                'name'     => 'Prayagraj',
            ],
            'description'  => 'Comprehensive taxi service in Prayagraj covering Triveni Sangam holy snan, Bade Hanuman temple, Bamrauli Airport transfers, Prayagraj Junction pickups, and intercity trips to Varanasi, Ayodhya, and Chitrakoot.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'Can your cab take us directly to the Triveni Sangam bathing point?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Cabs can drive directly to the designated Sangam parking areas such as Qila Ghat or Arail Ghat (Naini side). From the ghat parking, licensed boats take devotees into the holy confluence point where the clear blue waters of Yamuna merge with the sacred Ganga and invisible Saraswati. During Magh Mela and Kumbh Mela, traffic police enforce outer perimeter parking, and pilgrims use shuttle e-rickshaws or walk over temporary pontoon bridges.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What is the cab fare from Prayagraj to Varanasi?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'One-way AC sedan (Swift Dzire) from Prayagraj to Varanasi starts at ₹3,250. Maruti Ertiga is ₹4,000, Toyota Innova is ₹4,750, and 16-seater Tempo Traveller is ₹7,000. Highway tolls (~₹200) and parking are at actuals.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'How much does a cab from Prayagraj to Ayodhya cost?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Prayagraj to Ayodhya cab fare starts from ₹4,500 for one-way sedan and ₹7,500 for same-day round trip. The distance is 160 km via NH-330 (via Pratapgarh and Sultanpur), taking around 3.5 to 4 hours.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Do you provide airport transfers for Prayagraj Bamrauli Airport (IXD)?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes, we provide 24/7 dedicated airport transfers to and from Prayagraj Bamrauli Airport (IXD). We monitor flight arrival timings, ensure zero waiting surge fees, and provide doorstep pickup across Civil Lines, Sangam hotels, and outstation routes.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can we visit Chitrakoot or Vindhyachal from Prayagraj in a day?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes! Chitrakoot is approximately 130 km from Prayagraj (~3.5 hours one-way), and Vindhyachal Shakti Peeth is about 90 km (~2 hours). Both are popular same-day pilgrimage extensions easily covered with our outstation round-trip cabs.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Are tempo travellers available for group travel in Prayagraj?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes, we operate 12, 17, 21, and 26-seater Tempo Travellers as well as luxury Force Urbania (9-12 seater) vans for group pilgrimages, family snan trips, and wedding transportation.',
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

<!-- ═══ HERO SECTION ═══ -->
<section class="page-hero" aria-label="Hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/locations/varanasi/">Locations</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Prayagraj</span>
    </nav>
    <h1 class="page-hero__title">Cab Service in Prayagraj</h1>
    <p class="page-hero__desc">Reliable, air-conditioned taxi service in Prayagraj (Allahabad). Doorstep pickups for Triveni Sangam holy snan, Bamrauli Airport transfers, Railway Station pickups, and outstation cabs to Varanasi &amp; Ayodhya.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap: wrap;">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I need to book a cab in Prayagraj'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<div class="trust-bar" role="region" aria-label="Trust highlights">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-certificate" aria-hidden="true"></i> 20+ Years Regional Trust</div>
    <div class="trust-item"><i class="fas fa-star" aria-hidden="true"></i> 4.8★ Average Rating (470+ Reviews)</div>
    <div class="trust-item"><i class="fas fa-water" aria-hidden="true"></i> Triveni Sangam Darshan Experts</div>
    <div class="trust-item"><i class="fas fa-headset" aria-hidden="true"></i> 24/7 Chauffeur Dispatch</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>Your Trusted Taxi Partner in the City of the Holy Sangam</h2>
        <p>
          Prayagraj (historically known as Allahabad) holds supreme spiritual reverence in Sanatana Dharma as <em>Tirtharaj</em>—the king of all pilgrimage centers. Here, the holy rivers Ganga and Yamuna meet with the invisible Saraswati at the sacred <strong>Triveni Sangam</strong>, drawing millions of pilgrims for holy dips, Pitru Tarpan rituals, and the world-renowned Magh Mela and Maha Kumbh celebrations.
        </p>
        <p>
          Whether you are arriving at <strong>Prayagraj Bamrauli Airport (IXD)</strong>, stepping off a train at <strong>Prayagraj Junction (PRYJ)</strong> or Chheoki, or journeying across the Uttar Pradesh Spiritual Triangle between Varanasi, Prayagraj, and Ayodhya, <strong>Book Cab Varanasi</strong> offers transparent, fixed-fare chauffeur-driven transportation with pristine vehicles and experienced local drivers.
        </p>
      </div>
    </section>

    <!-- ═══ SECTION: POPULAR SERVICES IN PRAYAGRAJ ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Popular Taxi Services in Prayagraj</h2>
      <div class="grid-3 gap-6">

        <div class="card card-service">
          <div class="card-service__icon"><i class="fas fa-water" aria-hidden="true"></i></div>
          <h3 class="card-service__title">Triveni Sangam Sightseeing</h3>
          <p class="card-service__desc">Complete spiritual day tour covering Triveni Sangam, reclining Bade Hanuman Temple, Akshay Vat, and Alopi Devi Shakti Peeth.</p>
          <div class="card-service__meta"><strong>Force Urbania Day Tour:</strong> ₹10,000 all-inclusive</div>
          <a class="btn btn-outline btn-sm mt-3" href="/tours/prayagraj-sangam-sightseeing/">View Sangam Tour ›</a>
        </div>

        <div class="card card-service">
          <div class="card-service__icon"><i class="fas fa-plane-departure" aria-hidden="true"></i></div>
          <h3 class="card-service__title">Prayagraj Bamrauli Airport (IXD)</h3>
          <p class="card-service__desc">Punctual airport pick-and-drop services with flight delay monitoring, zero luggage surcharges, and courteous drivers waiting at arrivals.</p>
          <div class="card-service__meta"><strong>Sedan:</strong> from ₹1,200 | <strong>SUV:</strong> from ₹1,600</div>
          <a class="btn btn-primary btn-sm mt-3" href="#booking-form">Book Airport Taxi ›</a>
        </div>

        <div class="card card-service">
          <div class="card-service__icon"><i class="fas fa-train" aria-hidden="true"></i></div>
          <h3 class="card-service__title">Railway Station Transfers</h3>
          <p class="card-service__desc">Reliable transfers to/from Prayagraj Junction (PRYJ), Subedarganj (SFG), and Prayagraj Chheoki (PCOI) directly to Civil Lines hotels or Sangam.</p>
          <div class="card-service__meta"><strong>Local drop:</strong> from ₹800</div>
          <a class="btn btn-outline btn-sm mt-3" href="#booking-form">Book Station Transfer ›</a>
        </div>

        <div class="card card-service">
          <div class="card-service__icon"><i class="fas fa-road" aria-hidden="true"></i></div>
          <h3 class="card-service__title">Prayagraj to Varanasi Taxi</h3>
          <p class="card-service__desc">Comfortable 2.5-hour highway drive along the 6-lane NH-19 directly connecting Prayagraj to Kashi Vishwanath Dham and Varanasi ghats.</p>
          <div class="card-service__meta"><strong>One-Way Dzire:</strong> ₹3,250 | <strong>Ertiga:</strong> ₹4,000</div>
          <a class="btn btn-outline btn-sm mt-3" href="/routes/prayagraj-to-varanasi-taxi/">View Varanasi Route ›</a>
        </div>

        <div class="card card-service">
          <div class="card-service__icon"><i class="fas fa-map-marked-alt" aria-hidden="true"></i></div>
          <h3 class="card-service__title">Prayagraj to Ayodhya Cab</h3>
          <p class="card-service__desc">Direct chauffeur-driven cab linking Prayagraj to the Shri Ram Janmabhoomi temple via NH-330 through Pratapgarh and Sultanpur (160 km).</p>
          <div class="card-service__meta"><strong>One-Way Dzire:</strong> ₹4,500 | <strong>RT:</strong> ₹7,500</div>
          <a class="btn btn-outline btn-sm mt-3" href="/routes/prayagraj-to-ayodhya-cab/">View Ayodhya Route ›</a>
        </div>

        <div class="card card-service">
          <div class="card-service__icon"><i class="fas fa-synagogue" aria-hidden="true"></i></div>
          <h3 class="card-service__title">3-City Spiritual Triangle</h3>
          <p class="card-service__desc">Curated 2-day and 3-day pilgrimage packages connecting Varanasi, Prayagraj, and Ayodhya with dedicated tempo travellers and SUVs.</p>
          <div class="card-service__meta"><strong>2-Day Urbania Package:</strong> ₹22,500 (toll included)</div>
          <a class="btn btn-outline btn-sm mt-3" href="/tours/varanasi-prayagraj-ayodhya-package/">View Triangle Tour ›</a>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: FARE MATRIX ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Prayagraj Cab Fares &amp; Outstation Tariff</h2>
      <p class="mb-4 text-muted">Clear, upfront rates. No surprise commissions or hidden surcharges. Highway tolls and state taxes are charged at actuals unless booked as an all-inclusive package.</p>
      
      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Route / Service Type</th>
              <th>Distance / Duration</th>
              <th>Sedan (Dzire)</th>
              <th>SUV (Ertiga)</th>
              <th>Premium (Innova)</th>
              <th>Tempo (16-Seater)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Prayagraj Local (8hr / 80km)</strong></td>
              <td>8 Hours</td>
              <td>₹2,200</td>
              <td>₹2,800</td>
              <td>₹3,800</td>
              <td>₹5,500</td>
            </tr>
            <tr>
              <td><strong>Prayagraj to Varanasi (One-Way)</strong></td>
              <td>125 km (2.5 hr)</td>
              <td>₹3,250</td>
              <td>₹4,000</td>
              <td>₹4,750</td>
              <td>₹7,000</td>
            </tr>
            <tr>
              <td><strong>Prayagraj to Varanasi (Same-Day RT)</strong></td>
              <td>250 km (Round Trip)</td>
              <td>₹6,500</td>
              <td>₹8,000</td>
              <td>₹9,500</td>
              <td>₹14,000</td>
            </tr>
            <tr>
              <td><strong>Prayagraj to Ayodhya (One-Way)</strong></td>
              <td>160 km (3.5 hr)</td>
              <td>₹4,500</td>
              <td>₹5,500</td>
              <td>₹6,500</td>
              <td>₹9,500</td>
            </tr>
            <tr>
              <td><strong>Prayagraj to Ayodhya (Round Trip)</strong></td>
              <td>320 km</td>
              <td>₹7,500</td>
              <td>₹9,000</td>
              <td>₹11,000</td>
              <td>₹16,000</td>
            </tr>
            <tr>
              <td><strong>Prayagraj to Chitrakoot (Day Trip)</strong></td>
              <td>260 km RT</td>
              <td>₹5,500</td>
              <td>₹6,800</td>
              <td>₹8,000</td>
              <td>₹12,000</td>
            </tr>
            <tr>
              <td><strong>Bamrauli Airport (IXD) Transfer</strong></td>
              <td>City / Civil Lines</td>
              <td>₹1,200</td>
              <td>₹1,600</td>
              <td>₹2,200</td>
              <td>₹3,200</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="note-box mt-3">
        <i class="fas fa-info-circle text-primary" aria-hidden="true"></i>
        <span><strong>Fare Notes:</strong> Standard outstation billing is calculated at a 250 km/day minimum. Driver BATA is ₹300/day for Sedans/Ertiga, ₹400/day for Innova, and ₹500/day for Tempo Travellers. Night driving allowance applies between 10:00 PM and 6:00 AM.</span>
      </div>
    </section>

    <!-- ═══ SECTION: KEY LANDMARKS ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Key Pilgrimage &amp; Heritage Sights in Prayagraj</h2>
      <div class="grid-2 gap-6">

        <div class="card">
          <h3 class="card-title"><i class="fas fa-water text-primary" aria-hidden="true"></i> Triveni Sangam &amp; Bade Hanuman Ji</h3>
          <p class="text-sm">
            The heart of Prayagraj's spiritual energy. Witness the chromatic confluence where the muddy waters of the Ganga meet the emerald currents of the Yamuna. Adjacent to the Sangam embankment stands the famous subterranean <strong>Shri Bade Hanuman Temple</strong>, housing the colossal 20-foot reclining idol of Lord Hanuman that gets submerged in the Ganga during monsoons.
          </p>
        </div>

        <div class="card">
          <h3 class="card-title"><i class="fas fa-tree text-primary" aria-hidden="true"></i> Akshay Vat &amp; Patalpuri Temple</h3>
          <p class="text-sm">
            Located inside the historic Akbar Fort on the Yamuna bank, the indestructible <strong>Akshay Vat</strong> (sacred Banyan tree) and underground <strong>Patalpuri Temple</strong> are revered pilgrimage destinations. Chauffeur permits ensure convenient access to designated outer fort parking areas.
          </p>
        </div>

        <div class="card">
          <h3 class="card-title"><i class="fas fa-om text-primary" aria-hidden="true"></i> Alopi Devi Temple (Shakti Peeth)</h3>
          <p class="text-sm">
            One of the 51 holy Shakti Peethas, Alopi Devi Temple is unique because it houses no sculpted idol; devotees worship a wooden palanquin (doli) placed above a sanctified round platform. Located near Alopibagh, it is easily combined with your Sangam cab tour.
          </p>
        </div>

        <div class="card">
          <h3 class="card-title"><i class="fas fa-landmark text-primary" aria-hidden="true"></i> Anand Bhavan &amp; Swaraj Bhavan</h3>
          <p class="text-sm">
            The grand ancestral mansion of the Nehru-Gandhi family, now preserved as a premier national museum. Walk through historic rooms where pivotal decisions of India's independence movement were formulated. Features the Jawahar Planetarium and lush colonial gardens.
          </p>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: VEHICLES ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Our Available Fleet in Prayagraj</h2>
      <div class="grid-4 gap-4">
        
        <div class="card text-center">
          <i class="fas fa-car fa-2x text-primary mb-2" aria-hidden="true"></i>
          <h4>Swift Dzire / Etios</h4>
          <p class="text-sm text-muted">Seats 4 + Chauffeur</p>
          <p class="text-sm">Ideal for couples, solo travelers, and airport station runs.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/sedan-cab-rental/">Sedan Details ›</a>
        </div>

        <div class="card text-center">
          <i class="fas fa-shuttle-van fa-2x text-primary mb-2" aria-hidden="true"></i>
          <h4>Maruti Ertiga</h4>
          <p class="text-sm text-muted">Seats 6 + Chauffeur</p>
          <p class="text-sm">Comfortable family MPV with separate rear AC and dual luggage boot.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/ertiga-cab-rental/">Ertiga Details ›</a>
        </div>

        <div class="card text-center">
          <i class="fas fa-car-side fa-2x text-primary mb-2" aria-hidden="true"></i>
          <h4>Innova Crysta</h4>
          <p class="text-sm text-muted">Seats 7 + Chauffeur</p>
          <p class="text-sm">Premium luxury highway comfort, captain chairs, and unmatched suspension.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/innova-crysta-rental/">Innova Details ›</a>
        </div>

        <div class="card text-center">
          <i class="fas fa-bus fa-2x text-primary mb-2" aria-hidden="true"></i>
          <h4>Tempo &amp; Urbania</h4>
          <p class="text-sm text-muted">Seats 9 to 26</p>
          <p class="text-sm">Force Urbania luxury vans &amp; Tempo Travellers for large pilgrim groups.</p>
          <a class="btn btn-outline btn-sm mt-2" href="/fleet/tempo-traveller-rental/">Tempo Details ›</a>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: MAGH MELA ADVISORY ═══ -->
    <section class="card mb-8" style="border-left: 4px solid var(--clr-saffron);">
      <h3><i class="fas fa-calendar-alt text-primary" aria-hidden="true"></i> Seasonal Note: Magh Mela &amp; Maha Kumbh Transport</h3>
      <p>
        Every year during January and February, Prayagraj hosts the revered <strong>Magh Mela</strong>, while the historic <strong>Maha Kumbh</strong> occurs every 12 years. During these major snan periods, city traffic police implement extensive one-way diversions, pontoon bridge rules, and outer parking lots.
      </p>
      <p class="mb-0">
        Our chauffeurs have decades of experience navigating mela diversions, dropping you at the closest authorized parking zones, and coordinating seamless return pickups. Read our comprehensive guide: <a href="/guides/prayagraj-magh-mela-transport/"><strong>Prayagraj Magh Mela Transport Guide ›</strong></a>
      </p>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Prayagraj Cabs</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-1">
            <span>Can your cab take us directly to the Triveni Sangam bathing point?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ans-1" class="faq-answer">
            <p>Cabs drive to authorized Sangam parking grounds such as Qila Ghat or Arail Ghat. From the ghat, pilgrims board licensed local wooden or motor boats to reach the actual confluence point in the middle of the river. During the peak Magh Mela season, police restrict vehicles to perimeter fairground parking, and pilgrims take government e-rickshaws or walk across pontoon bridges.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-2">
            <span>What is the cab fare from Prayagraj to Varanasi?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ans-2" class="faq-answer">
            <p>One-way AC sedan taxi from Prayagraj to Varanasi starts at ₹3,250. Maruti Ertiga is ₹4,000, Innova Crysta is ₹4,750, and 16-seater Tempo Traveller is ₹7,000. For same-day return trips, Dzire round-trip is ₹6,500.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-3">
            <span>How long does it take from Prayagraj to Ayodhya by taxi?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ans-3" class="faq-answer">
            <p>The distance between Prayagraj and Ayodhya is approximately 160 km via NH-330, typically taking 3.5 to 4 hours. Early departures (around 6:00 AM) are recommended to reach Ayodhya in time for midday Ram Janmabhoomi darshan.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-4">
            <span>Do you provide airport transfers for Prayagraj Bamrauli Airport (IXD)?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ans-4" class="faq-answer">
            <p>Yes. We provide 24/7 dedicated airport transfers to and from Prayagraj Bamrauli Airport (IXD). Our chauffeurs track real-time flight schedules to ensure zero waiting hassle, meeting you at the terminal arrivals gate.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-5">
            <span>Can we cover Chitrakoot from Prayagraj in a single day?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ans-5" class="faq-answer">
            <p>Yes. Chitrakoot is located 130 km from Prayagraj (~3.5 hours). A private day cab can depart Prayagraj at 6:30 AM, cover Ramghat, Kamadgiri Parikrama, Bharat Milap, and Gupt Godavari, and return safely to Prayagraj by 8:30 PM.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-6">
            <span>Are Tempo Travellers available for family pilgrimage groups?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-ans-6" class="faq-answer">
            <p>Yes, we maintain a modern fleet of 12, 17, 21, and 26-seater Tempo Travellers as well as luxury 9-12 seater Force Urbania vans. All group vehicles feature reclining pushback seats, individual AC vents, dedicated luggage boots, and experienced highway drivers.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Prayagraj Cab Online</h2>
      <p class="text-muted mb-4">Submit your travel details below for an instant quote, vehicle confirmation, and dedicated chauffeur assignment.</p>
      <?php
      $form_origin      = 'Prayagraj';
      $form_destination = 'Varanasi';
      $form_section_id  = 'prayagraj-booking';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
