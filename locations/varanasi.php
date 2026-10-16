<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Cab Service in Varanasi | Taxi Booking Varanasi | Book Cab Varanasi';
$meta_desc      = 'Book reliable cab service in Varanasi. Airport transfers, local 8hr/80km sightseeing, outstation taxi to Ayodhya & Prayagraj. Call 24/7 at +91-9838409911.';
$canonical      = 'https://bookcabvaranasi.com/locations/varanasi/';
$og_title       = 'Cab Service in Varanasi | Reliable Taxi Booking | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'cab service in Varanasi';

$breadcrumbs = [
    ['name' => 'Home',      'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Locations', 'url' => 'https://bookcabvaranasi.com/locations/varanasi/'],
    ['name' => 'Varanasi',  'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'               => 'LocalBusiness',
            '@id'                 => 'https://bookcabvaranasi.com/#business',
            'name'                => 'Book Cab Varanasi',
            'url'                 => 'https://bookcabvaranasi.com',
            'logo'                => 'https://bookcabvaranasi.com/assets/img/logo.png',
            'image'               => 'https://bookcabvaranasi.com/assets/img/og-default.jpg',
            'telephone'           => '+91-9838409911',
            'email'               => 'info@bookcabvaranasi.com',
            'priceRange'          => '₹1000 - ₹22500',
            'address'             => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'S15/6 Ghausabad',
                'addressLocality' => 'Varanasi',
                'addressRegion'   => 'Uttar Pradesh',
                'postalCode'      => '221002',
                'addressCountry'  => 'IN',
            ],
            'geo' => [
                '@type'           => 'GeoCoordinates',
                'latitude'        => 25.335649,
                'longitude'       => 82.973915,
            ],
            'aggregateRating' => [
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '470',
            ],
            'openingHoursSpecification' => [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                'opens'     => '00:00',
                'closes'    => '23:59',
            ],
        ],
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Cab Service in Varanasi',
            'serviceType'  => 'Taxi Service, Airport Transfer, Local Sightseeing, Outstation Cab',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                '@type'    => 'City',
                'name'     => 'Varanasi',
            ],
            'description'  => 'Full-service taxi and cab rental in Varanasi covering Lal Bahadur Shastri Airport transfers, Kashi Vishwanath temple circuit, local 8hr/80km packages, and outstation trips to Ayodhya, Prayagraj, and Gaya.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'Which ghats in Varanasi can a cab reach directly?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Vehicles can directly reach Assi Ghat and Namo Ghat via motorable approach roads where dedicated municipal parking exists. However, central ghats including Dashashwamedh, Manikarnika, and Kedar Ghat are located in historic pedestrian alleys. For Dashashwamedh Ghat, cabs drop passengers at Godowlia Chowk or Luxa Road (approx. 400 meters walk or short e-rickshaw ride).',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Where does the cab park near Dashashwamedh Ghat and Kashi Vishwanath?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Cabs park at designated multi-level municipal parking structures at Godowlia Crossing, Maidagin, or Beniabagh. From these authorized parking lots, pilgrims walk 5 to 10 minutes through the market or take a local battery e-rickshaw to reach the Kashi Vishwanath Temple corridor gates.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Are 24/7 late-night and early-morning pickups available at Varanasi Airport and Cantt Station?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. We operate 24 hours a day, 7 days a week. Whether your flight arrives at Babatpur Airport (VNS) at 1:00 AM or your train arrives at Varanasi Junction (BSB) at 4:00 AM for Mangala Aarti, our driver will be stationed at the arrival terminal with a personalized name board.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can you accommodate large pilgrim groups of 15 to 25 people?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. We maintain a fleet of Tempo Travellers in 16, 21, and 26-seater configurations, luxury Force Urbania vans (6 to 12 seats), and 35-seater mini coaches with push-back seats, separate luggage carrier space, and individual AC vents.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can a cab take us directly to the gate of Kashi Vishwanath Temple?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'No taxi or private car can enter the inner Vishwanath Gali pedestrian corridors due to police security barricades and narrow medieval alleys. Our driver drops you safely at Godowlia Chowk, Luxa, or Maidagin, from where the newly built Corridor Entry Gates are just a short walk.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Are toll taxes and parking fees included in the local and outstation taxi rates?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'For local city rentals (8hr/80km or airport transfers), parking fees at monuments and railway stations are paid directly by the client as per actual municipal receipts. For outstation trips, interstate toll taxes and parking are billed at actuals, whereas driver allowance and fuel are clearly accounted for.',
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
<section class="page-hero" aria-labelledby="hero-heading">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/locations/varanasi/">Locations</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Varanasi</span>
    </nav>
    <span class="section-label" style="background:rgba(255,192,0,0.18);color:var(--clr-gold);margin-top:0.75rem;">Trusted Banaras Taxi Service</span>
    <h1 class="page-hero__title" id="hero-heading">Cab Service in Varanasi — Local, Airport &amp; Outstation</h1>
    <p class="page-hero__desc">Reliable, air-conditioned taxi booking in Varanasi. From seamless Babatpur Airport transfers and sacred Kashi Vishwanath darshan to outstation journeys across Ayodhya, Prayagraj, and Gaya.</p>
    <div class="flex gap-4 mt-6" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero_varanasi')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero_varanasi')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Us
      </a>
      <a class="btn btn-secondary btn-lg" href="#varanasi-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4);">
        <i class="fas fa-calculator" aria-hidden="true"></i> Get Instant Quote
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<section class="trust-bar" aria-label="Key Service Highlights">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num"><?php echo BCV_YEARS; ?></div>
        <div class="trust-item__label">Years in Varanasi</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num"><?php echo BCV_CUSTOMERS; ?></div>
        <div class="trust-item__label">Satisfied Pilgrims &amp; Guests</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4.8 ★</div>
        <div class="trust-item__label">470+ Verified Reviews</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">24 / 7</div>
        <div class="trust-item__label">On-Time Banaras Dispatch</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ INTRO / ABOUT VARANASI TAXI HUB ═══ -->
<section class="section">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Spiritual Capital of India</span>
        <h2>Your Dependable Travel Partner in Ancient Kashi</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Varanasi — also venerated as Kashi and Banaras — is one of the oldest continuously inhabited cities on earth. Nestled along the sacred crescent curve of the Ganga River, it attracts millions of Hindu and Buddhist pilgrims, cultural travelers, and international visitors every year.</p>
        <p class="mt-4">While Varanasi's labyrinthine lanes (galis) and riverside ghats offer unparalleled spiritual resonance, navigating the city requires local expertise. The Lal Bahadur Shastri International Airport at Babatpur sits 26 km north of the historic core; the key railway terminals of Varanasi Junction (Cantt), Banaras (formerly Manduadih), and Pt. Deen Dayal Upadhyaya Junction (DDU) are scattered across distinct quadrants; and prominent pilgrimage stops like Sarnath, Ramnagar Fort, and BHU are separated by heavy urban traffic.</p>
        <p class="mt-4"><strong>Book Cab Varanasi</strong> provides a complete fleet of well-maintained, fully air-conditioned vehicles driven by professional local chauffeurs who understand Varanasi's designated traffic barriers, municipal parking hubs, and temple corridor access rules.</p>
      </div>
      <div class="highlight-box" style="padding:2rem;border-radius:var(--radius-lg);box-shadow:var(--shadow-md);">
        <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:1rem;"><i class="fas fa-shield-halved text-saffron" aria-hidden="true"></i> Why Book With Us in Varanasi?</h3>
        <ul style="display:flex;flex-direction:column;gap:0.85rem;font-size:var(--fs-sm);color:var(--clr-text);">
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-circle-check text-saffron" style="margin-top:3px;"></i> <span><strong>Fixed, Transparent Rates:</strong> Guaranteed pricing with zero surprise surge charges during festivals or peak morning hours.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-circle-check text-saffron" style="margin-top:3px;"></i> <span><strong>Knowledgeable Banaras Chauffeurs:</strong> Courteous drivers who assist elderly pilgrims with luggage and advise on ghat access.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-circle-check text-saffron" style="margin-top:3px;"></i> <span><strong>Diverse Clean Fleet:</strong> From compact Swift Dzires for couples to 26-seater Tempo Travellers and Force Urbania for family yatras.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-circle-check text-saffron" style="margin-top:3px;"></i> <span><strong>Flight &amp; Train Monitoring:</strong> Free delay tracking for Babatpur Airport (VNS) and Varanasi Cantt (BSB).</span></li>
        </ul>
        <div class="mt-6" style="border-top:1px solid rgba(232,115,10,0.2);padding-top:1rem;">
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:0.75rem;">Need immediate dispatch or custom multi-day itinerary?</p>
          <a class="btn btn-primary btn-full" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','varanasi_quick')">
            <i class="fas fa-phone" aria-hidden="true"></i> Quick Call: +91-9838409911
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FARES & INCLUSIONS ═══ -->
<section class="section section-warm" id="varanasi-fares">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Transparent Rates</span>
      <h2>Taxi Fare &amp; Rental Packages in Varanasi</h2>
      <div class="divider"></div>
      <p>Clear, verified rates for local banaras packages, airport transfers, and outstation trips. No hidden commissions.</p>
    </div>

    <div class="fare-wrapper">
      <table class="fare-table" aria-label="Varanasi Cab Fare Table">
        <thead>
          <tr>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Seating</th>
            <th scope="col">Airport Transfer (VNS)</th>
            <th scope="col">Local 8hr / 80km</th>
            <th scope="col">Local 12hr / 120km</th>
            <th scope="col">Outstation Rate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Maruti Swift Dzire</strong><div class="note">Sedan, AC, luggage boot</div></td>
            <td>4 + 1</td>
            <td class="price">₹1,000</td>
            <td class="price">₹2,000</td>
            <td class="price">₹2,600</td>
            <td>₹13 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td><strong>Maruti Suzuki Ertiga</strong><div class="note">Spacious MUV, dual AC</div></td>
            <td>6 + 1</td>
            <td class="price">₹1,200</td>
            <td class="price">₹2,400</td>
            <td class="price">₹3,200</td>
            <td>₹16 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td><strong>Toyota Innova / Crysta</strong><div class="note">Premium MPV, captain seats</div></td>
            <td>6/7 + 1</td>
            <td class="price">₹1,500</td>
            <td class="price">₹3,500</td>
            <td class="price">₹4,500</td>
            <td>₹19 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td><strong>Force Urbania (Luxury)</strong><div class="note">Executive VIP van</div></td>
            <td>6–7 Seater</td>
            <td class="price">₹1,500</td>
            <td class="price">₹2,600</td>
            <td class="price">₹3,500</td>
            <td>₹35 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td><strong>Force Urbania (Group)</strong><div class="note">Ultra luxury recliner van</div></td>
            <td>9–12 Seater</td>
            <td class="price">₹3,000</td>
            <td class="price">₹6,500</td>
            <td class="price">On Request</td>
            <td>₹35 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller</strong><div class="note">High roof, pushback seats</div></td>
            <td>16/17 Seater</td>
            <td class="price">₹3,500 <span class="note">est.</span></td>
            <td class="price">₹5,000</td>
            <td class="price">₹6,000</td>
            <td>₹32 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="grid grid-2 mt-6">
      <div class="alert alert-info">
        <i class="fas fa-check-circle" aria-hidden="true"></i>
        <strong>Fare Inclusions:</strong> Vehicle rental, fuel costs, air conditioning, and professional driver charges are fully included in all local and airport quotes.
      </div>
      <div class="alert alert-warning">
        <i class="fas fa-info-circle" aria-hidden="true"></i>
        <strong>Important Exclusions:</strong> Monument/temple parking fees (₹50–₹100 at municipal lots) and highway tolls are extra as per actual receipts. Driver night allowance for outstation: Dzire/Ertiga ₹300/day, Innova ₹400/day, Tempo/Urbania ₹500/day.
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES AVAILABLE (GRID-3) ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Banaras Cab Solutions</span>
      <h2>Taxi Services Available in Varanasi</h2>
      <div class="divider"></div>
      <p>Tailored transportation options designed for spiritual yatras, airport logistics, and outstation pilgrimages.</p>
    </div>

    <div class="grid grid-3">
      <!-- 1. Airport Taxi -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2.2rem;margin-bottom:0.75rem;">✈️</div>
          <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:0.5rem;">Varanasi Airport Taxi</h3>
          <p class="text-sm">Prompt 26 km transfer between Babatpur International Airport (VNS) and city hotels or ghats. Real-time flight tracking and zero terminal surge.</p>
          <div class="card-fare__price mt-4" style="font-size:var(--fs-2xl);">From ₹1,000</div>
          <div class="card-fare__note mb-4">Sedan / 4 passengers / 1-way</div>
          <a class="btn btn-secondary btn-full btn-sm" href="/services/varanasi-airport-taxi/">View Airport Taxi</a>
        </div>
      </div>

      <!-- 2. Local Sightseeing 8hr -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2.2rem;margin-bottom:0.75rem;">🛕</div>
          <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:0.5rem;">Local Sightseeing (8hr/80km)</h3>
          <p class="text-sm">Varanasi's most requested package. Covers Sankat Mochan, BHU Vishwanath Temple, Durga Kund, Bharat Mata Mandir, and evening Ganga Aarti.</p>
          <div class="card-fare__price mt-4" style="font-size:var(--fs-2xl);">From ₹2,000</div>
          <div class="card-fare__note mb-4">Dzire / 8 Hours / 80 Kilometers</div>
          <a class="btn btn-primary btn-full btn-sm" href="/services/varanasi-local-8hr-80km/">View 8hr Package</a>
        </div>
      </div>

      <!-- 3. Railway Station Transfer -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2.2rem;margin-bottom:0.75rem;">🚆</div>
          <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:0.5rem;">Railway Station Taxi</h3>
          <p class="text-sm">Punctual pickups &amp; drops at Varanasi Cantt (BSB), Banaras Station (BSBS), Kashi Station, and Pt. Deen Dayal Upadhyaya Junction (DDU).</p>
          <div class="card-fare__price mt-4" style="font-size:var(--fs-2xl);">From ₹1,000</div>
          <div class="card-fare__note mb-4">Luggage assistance included</div>
          <a class="btn btn-secondary btn-full btn-sm" href="/services/varanasi-railway-station-taxi/">View Station Taxi</a>
        </div>
      </div>

      <!-- 4. Kashi Darshan Cab -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2.2rem;margin-bottom:0.75rem;">🔱</div>
          <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:0.5rem;">Kashi Darshan Cab</h3>
          <p class="text-sm">Dedicated temple circuit taxi focusing on Kashi Vishwanath corridor drop points, Annapurna Mandir, Kal Bhairav, and Ganga Aarti logistics.</p>
          <div class="card-fare__price mt-4" style="font-size:var(--fs-2xl);">From ₹2,000</div>
          <div class="card-fare__note mb-4">Expert drivers on temple parking</div>
          <a class="btn btn-secondary btn-full btn-sm" href="/services/kashi-vishwanath-darshan-cab/">View Temple Cab</a>
        </div>
      </div>

      <!-- 5. Outstation Taxi -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2.2rem;margin-bottom:0.75rem;">🛣️</div>
          <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:0.5rem;">Outstation Taxi Service</h3>
          <p class="text-sm">Comfortable intercity cabs from Varanasi to Ayodhya, Prayagraj, Gaya, Bodhgaya, Chitrakoot, and Lucknow on verified per-km billing.</p>
          <div class="card-fare__price mt-4" style="font-size:var(--fs-2xl);">From ₹13 / km</div>
          <div class="card-fare__note mb-4">Min. 250km/day billing</div>
          <a class="btn btn-secondary btn-full btn-sm" href="/services/outstation-taxi-varanasi/">View Outstation Taxi</a>
        </div>
      </div>

      <!-- 6. Kashi Darshan Curated Package -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2.2rem;margin-bottom:0.75rem;">☸️</div>
          <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:0.5rem;">Kashi Darshan Package</h3>
          <p class="text-sm">A complete pre-planned full-day curated pilgrimage tour including Sarnath Buddhist monuments, city temples, silk markets, and river ghats.</p>
          <div class="card-fare__price mt-4" style="font-size:var(--fs-2xl);">Curated Tour</div>
          <div class="card-fare__note mb-4">Flat rate, zero stress</div>
          <a class="btn btn-primary btn-full btn-sm" href="/tours/kashi-darshan-cab-package/">View Tour Package</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ POPULAR ROUTES FROM VARANASI ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Intercity Travel</span>
      <h2>Popular Outstation Routes from Varanasi</h2>
      <div class="divider"></div>
      <p>Explore North India's premier spiritual circuit with our verified one-way and round-trip highway taxis.</p>
    </div>

    <div class="grid grid-3">
      <!-- Varanasi to Ayodhya -->
      <a class="card-route" href="/routes/varanasi-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow">→</span>
            <span>Ayodhya</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road text-saffron" aria-hidden="true"></i> 200 km</span>
            <span class="card-route__tag"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> ~4.5 hrs</span>
          </div>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Direct taxi to Shri Ram Janmabhoomi Mandir, Hanuman Garhi, and Saryu Ghat via NH135A.</p>
          <div class="flex-between">
            <span class="card-route__fare">From ₹6,500</span>
            <span class="btn btn-sm btn-primary">Book Route</span>
          </div>
        </div>
      </a>

      <!-- Varanasi to Prayagraj -->
      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow">→</span>
            <span>Prayagraj</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road text-saffron" aria-hidden="true"></i> 125 km</span>
            <span class="card-route__tag"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> ~2.5 hrs</span>
          </div>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Swift 4-lane highway route to Triveni Sangam, Anand Bhavan, and Bade Hanuman Temple.</p>
          <div class="flex-between">
            <span class="card-route__fare">₹3,250 <span class="note" style="font-size:0.75rem;font-weight:normal;">(1-way)</span></span>
            <span class="btn btn-sm btn-primary">Book Route</span>
          </div>
        </div>
      </a>

      <!-- Varanasi to Gaya / Bodhgaya -->
      <div class="card-route" style="cursor:pointer;" onclick="location.href='/services/outstation-taxi-varanasi/'">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow">→</span>
            <span>Gaya / Bodhgaya</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road text-saffron" aria-hidden="true"></i> 250 km</span>
            <span class="card-route__tag"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> ~5.5 hrs</span>
          </div>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Essential pilgrimage for Vishnupad Pind Daan rituals and Mahabodhi Temple UNESCO site.</p>
          <div class="flex-between">
            <span class="card-route__fare">From ₹8,500</span>
            <span class="btn btn-sm btn-secondary">Request Quote</span>
          </div>
        </div>
      </div>

      <!-- Varanasi to Lucknow -->
      <div class="card-route" style="cursor:pointer;" onclick="location.href='/services/outstation-taxi-varanasi/'">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow">→</span>
            <span>Lucknow</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road text-saffron" aria-hidden="true"></i> 310 km</span>
            <span class="card-route__tag"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> ~5.5 hrs</span>
          </div>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Smooth ride via Purvanchal Expressway to the capital city of Uttar Pradesh and CCS Airport.</p>
          <div class="flex-between">
            <span class="card-route__fare">From ₹8,500</span>
            <span class="btn btn-sm btn-secondary">Request Quote</span>
          </div>
        </div>
      </div>

      <!-- Varanasi to Vindhyachal -->
      <div class="card-route" style="cursor:pointer;" onclick="location.href='/services/outstation-taxi-varanasi/'">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow">→</span>
            <span>Vindhyachal</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road text-saffron" aria-hidden="true"></i> 70 km</span>
            <span class="card-route__tag"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> ~2.0 hrs</span>
          </div>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Sacred Shaktipeeth darshan of Maa Vindhyavasini, Ashtabhuja, and Kali Khoh in Mirzapur.</p>
          <div class="flex-between">
            <span class="card-route__fare">From ₹2,500</span>
            <span class="btn btn-sm btn-secondary">Request Quote</span>
          </div>
        </div>
      </div>

      <!-- 3-City Sacred Circuit -->
      <a class="card-route" href="/tours/varanasi-prayagraj-ayodhya-package/">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span style="font-size:0.95rem;">VNS ⇄ PRYJ ⇄ AYODHYA</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-map-marked-alt text-saffron" aria-hidden="true"></i> 3 Cities</span>
            <span class="card-route__tag"><i class="fas fa-calendar-day text-saffron" aria-hidden="true"></i> 3–5 Days</span>
          </div>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">The ultimate North India pilgrimage triangle: Kashi Vishwanath, Triveni Sangam, and Ram Lalla.</p>
          <div class="flex-between">
            <span class="card-route__fare">Custom Quote</span>
            <span class="btn btn-sm btn-primary">View Package</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ═══ MAJOR LANDMARKS SERVED ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Sightseeing &amp; Pilgrimage</span>
      <h2>Key Varanasi Landmarks &amp; Shrines We Serve</h2>
      <div class="divider"></div>
      <p>Our drivers are thoroughly familiar with Varanasi's access routes, parking locations, and prayer timings.</p>
    </div>

    <div class="grid grid-3">
      <div class="card" style="border:1px solid var(--clr-border);">
        <div class="card-body">
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);"><i class="fas fa-om text-saffron" aria-hidden="true"></i> Kashi Vishwanath Temple</h3>
          <p class="text-sm mt-2">The supreme Jyotirlinga on the Ganga. Our cab drops you at the nearest authorized parking at Godowlia or Maidagin, just a short walk to Corridor Gate No. 4.</p>
        </div>
      </div>

      <div class="card" style="border:1px solid var(--clr-border);">
        <div class="card-body">
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);"><i class="fas fa-water text-saffron" aria-hidden="true"></i> The Sacred Ghats</h3>
          <p class="text-sm mt-2">From Assi Ghat's Subah-e-Banaras in the south to Dashashwamedh's grand evening Aarti, Manikarnika's eternal fires, and Namo Ghat's modern riverfront.</p>
        </div>
      </div>

      <div class="card" style="border:1px solid var(--clr-border);">
        <div class="card-body">
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);"><i class="fas fa-dharmachakra text-saffron" aria-hidden="true"></i> Sarnath Buddhist Circuit</h3>
          <p class="text-sm mt-2">Located 10 km north. Visit Dhamekh Stupa, Chaukhandi Stupa, the ancient deer park, and the Sarnath Archaeological Museum housing the Lion Capital of Ashoka.</p>
        </div>
      </div>

      <div class="card" style="border:1px solid var(--clr-border);">
        <div class="card-body">
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);"><i class="fas fa-graduation-cap text-saffron" aria-hidden="true"></i> BHU &amp; New Vishwanath Temple</h3>
          <p class="text-sm mt-2">The sprawling Banaras Hindu University campus features the striking marble New Vishwanath Mandir (VT) open to all, plus the Bharat Kala Bhavan museum.</p>
        </div>
      </div>

      <div class="card" style="border:1px solid var(--clr-border);">
        <div class="card-body">
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);"><i class="fas fa-shield-cat text-saffron" aria-hidden="true"></i> Sankat Mochan &amp; Durga Kund</h3>
          <p class="text-sm mt-2">Revered Hanuman shrine founded by Goswami Tulsidas, located near the ancient red Durga Kund temple and Tulsi Manas Mandir where Ramcharitmanas was composed.</p>
        </div>
      </div>

      <div class="card" style="border:1px solid var(--clr-border);">
        <div class="card-body">
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);"><i class="fas fa-landmark text-saffron" aria-hidden="true"></i> Kal Bhairav &amp; Ramnagar Fort</h3>
          <p class="text-sm mt-2">Visit the fiery Kotwal (guardian deity) of Kashi on Kal Bhairav road, then cross the Ganga over Malviya bridge to tour the 18th-century Ramnagar Fort museum.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ AIRPORT & RAILWAY STATIONS ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="grid grid-2" style="gap:2.5rem;align-items:center;">
      <div>
        <span class="section-label">Transit Hubs</span>
        <h2>Airport &amp; Major Railway Station Transfer Guide</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Varanasi's transport terminals handle massive pilgrimage volume daily. Here is where and how our drivers connect with you:</p>

        <div style="display:flex;flex-direction:column;gap:1.25rem;margin-top:1.5rem;">
          <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-saffron);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-plane-arrival text-saffron" aria-hidden="true"></i> Lal Bahadur Shastri Airport (VNS Babatpur)</h4>
            <p class="text-sm mt-1">Located 26 km northwest of the city. Travel time to Cantt / Godowlia is 45 to 60 minutes via the NH56 Babatpur bypass. Our driver waits in the authorized taxi arrivals zone with a customized name sign.</p>
          </div>

          <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-navy);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-train text-navy" aria-hidden="true"></i> Varanasi Junction / Cantt Station (BSB)</h4>
            <p class="text-sm mt-1">The primary rail terminal serving Vande Bharat and Rajdhani express trains. Located 4 km from Godowlia. Driver pickup is coordinated at the main Cantt Station circulating area or Cantt side portico.</p>
          </div>

          <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-gold-dark);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-train-subway text-gold" aria-hidden="true"></i> Banaras Station (BSBS, formerly Manduadih)</h4>
            <p class="text-sm mt-1">Modern, clean railway hub situated 4 km southwest of city center. Excellent for fast departures to Delhi and Mumbai. Cabs park in the designated passenger pickup lane outside Platform 1 &amp; 8.</p>
          </div>

          <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-text-muted);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-train-tram text-muted" aria-hidden="true"></i> Pt. Deen Dayal Upadhyaya Junction (DDU / Mughalsarai)</h4>
            <p class="text-sm mt-1">Located 18 km east across the Ganga. Major trunk junction for eastern trains. We provide fixed-rate transfers (~45 min) via Rajghat bridge / GT Road.</p>
          </div>
        </div>
      </div>

      <div class="card card-body" style="background:linear-gradient(135deg,var(--clr-navy),var(--clr-navy-mid));color:var(--clr-white);padding:2.5rem;">
        <h3 style="color:var(--clr-white);margin-bottom:1rem;">Ready for a Punctual Station or Airport Pickup?</h3>
        <p style="color:rgba(255,255,255,0.85);margin-bottom:1.5rem;">Share your flight number or train PNR. We verify live status to ensure your car is waiting the exact moment you step out onto the arrivals concourse.</p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:0.75rem;margin-bottom:2rem;font-size:var(--fs-sm);">
          <li><i class="fas fa-check text-gold" aria-hidden="true"></i> 60 minutes free waiting time for airport arrivals</li>
          <li><i class="fas fa-check text-gold" aria-hidden="true"></i> Clean, air-conditioned vehicle guaranteed</li>
          <li><i class="fas fa-check text-gold" aria-hidden="true"></i> Driver contact number dispatched 2 hours prior</li>
        </ul>
        <a class="btn btn-gold btn-full btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','station_card')">
          <i class="fas fa-phone" aria-hidden="true"></i> Call Dispatch: +91-9838409911
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FLEET OVERVIEW ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Vehicle Selection</span>
      <h2>Choose Your Vehicle — Our Varanasi Fleet</h2>
      <div class="divider"></div>
      <p>Clean, air-conditioned passenger cars and spacious group coaches suited for Banaras city roads and long-distance highways.</p>
    </div>

    <div class="grid grid-3">
      <!-- Dzire -->
      <div class="card-fleet">
        <div class="card-fleet__icon">🚗</div>
        <h3 class="card-fleet__name">Swift Dzire Sedan</h3>
        <div class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> Up to 4 Passengers · 2 Bags</div>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">Nimble sedan ideal for city navigation, temple visits, and couple airport transfers.</p>
        <div class="card-fleet__fare">Local: ₹2,000 <span class="note" style="font-size:0.75rem;font-weight:normal;">(8hr/80km)</span></div>
        <div class="card-fleet__fare" style="font-size:1rem;color:var(--clr-navy);margin-top:0.25rem;">Outstation: ₹13 / km</div>
        <a class="btn btn-secondary btn-full btn-sm mt-4" href="/fleet/sedan-cab-rental/">Explore Sedans</a>
      </div>

      <!-- Ertiga -->
      <div class="card-fleet">
        <div class="card-fleet__icon">🚙</div>
        <h3 class="card-fleet__name">Maruti Suzuki Ertiga</h3>
        <div class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> Up to 6 Passengers · 3 Bags</div>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">Comfortable 3-row compact MUV with rear AC blowers. Best for nuclear families and elderly elders.</p>
        <div class="card-fleet__fare">Local: ₹2,400 <span class="note" style="font-size:0.75rem;font-weight:normal;">(8hr/80km)</span></div>
        <div class="card-fleet__fare" style="font-size:1rem;color:var(--clr-navy);margin-top:0.25rem;">Outstation: ₹16 / km</div>
        <a class="btn btn-secondary btn-full btn-sm mt-4" href="/fleet/sedan-cab-rental/">Explore Ertiga</a>
      </div>

      <!-- Innova Crysta -->
      <div class="card-fleet">
        <div class="card-fleet__icon">🚘</div>
        <h3 class="card-fleet__name">Toyota Innova Crysta</h3>
        <div class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> Up to 7 Passengers · 4 Bags</div>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">The gold standard in Indian highway travel. Supreme suspension comfort and ample legroom.</p>
        <div class="card-fleet__fare">Local: ₹3,500 <span class="note" style="font-size:0.75rem;font-weight:normal;">(8hr/80km)</span></div>
        <div class="card-fleet__fare" style="font-size:1rem;color:var(--clr-navy);margin-top:0.25rem;">Outstation: ₹19 / km</div>
        <a class="btn btn-primary btn-full btn-sm mt-4" href="/services/outstation-taxi-varanasi/">View Innova</a>
      </div>

      <!-- Force Urbania 6-7 -->
      <div class="card-fleet">
        <div class="card-fleet__icon">🚐</div>
        <h3 class="card-fleet__name">Force Urbania (6–7 Seater)</h3>
        <div class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> 6–7 Passengers · VIP Cabin</div>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">European-styled luxury van with plush recliner captain chairs and panoramic glass windows.</p>
        <div class="card-fleet__fare">Local: ₹2,600 <span class="note" style="font-size:0.75rem;font-weight:normal;">(8hr/80km)</span></div>
        <div class="card-fleet__fare" style="font-size:1rem;color:var(--clr-navy);margin-top:0.25rem;">Outstation: ₹35 / km</div>
        <a class="btn btn-secondary btn-full btn-sm mt-4" href="/fleet/tempo-traveller-rental/">Explore Urbania</a>
      </div>

      <!-- Force Urbania 9-12 -->
      <div class="card-fleet">
        <div class="card-fleet__icon">🚌</div>
        <h3 class="card-fleet__name">Force Urbania (9–12 Seater)</h3>
        <div class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> 9–12 Passengers · Ultra Comfort</div>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">State-of-the-art touring vehicle for joint families heading to Ayodhya and Sangam.</p>
        <div class="card-fleet__fare">Local: ₹6,500 <span class="note" style="font-size:0.75rem;font-weight:normal;">(8hr/80km)</span></div>
        <div class="card-fleet__fare" style="font-size:1rem;color:var(--clr-navy);margin-top:0.25rem;">Outstation: ₹35 / km</div>
        <a class="btn btn-secondary btn-full btn-sm mt-4" href="/fleet/tempo-traveller-rental/">Explore 12-Seater</a>
      </div>

      <!-- Tempo Traveller 16-26 -->
      <div class="card-fleet">
        <div class="card-fleet__icon">🚍</div>
        <h3 class="card-fleet__name">Tempo Traveller (16–26)</h3>
        <div class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> 16, 21 &amp; 26 Passengers</div>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">High-roof group coach with separate rear luggage storage and overhead parcel racks.</p>
        <div class="card-fleet__fare">Local: From ₹5,000 <span class="note" style="font-size:0.75rem;font-weight:normal;">(8hr)</span></div>
        <div class="card-fleet__fare" style="font-size:1rem;color:var(--clr-navy);margin-top:0.25rem;">Outstation: ₹32–₹35 / km</div>
        <a class="btn btn-primary btn-full btn-sm mt-4" href="/fleet/tempo-traveller-rental/">Explore Travellers</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PICKUP GUIDANCE & RESTRICTIONS NOTICE ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Crucial Travel Advice</span>
        <h2>Pickup &amp; Drop-Off Reality in Old Varanasi</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Many online taxi portals misleadingly promise "doorstep car pickup" right at the ghats or temple doorsteps. <strong>In Varanasi, this is physically and legally impossible.</strong></p>
        <p class="mt-4">The historic heart of Kashi consists of pedestrian-only stone alleys (pakkis) built centuries before automobiles. Furthermore, local police regulations actively restrict 4-wheeler vehicular access into the Godowlia-Dashashwamedh corridor between 9:00 AM and 10:00 PM to maintain pedestrian pilgrimage safety.</p>

        <div class="alert alert-warning mt-6">
          <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
          <strong>Where Your Cab Drops You:</strong>
          <ul style="margin-top:0.5rem;padding-left:1.25rem;list-style:disc;">
            <li><strong>For Kashi Vishwanath &amp; Dashashwamedh:</strong> Cabs drop at Godowlia Chowk or Luxa Road (400–600 meters walk, or 2-minute e-rickshaw ride).</li>
            <li><strong>For Kal Bhairav:</strong> Drop point is at the Maidagin Crossing or Kal Bhairav Road intersection.</li>
            <li><strong>For Assi Ghat:</strong> Direct cab drop is possible right at the Assi Ghat entrance roundabout.</li>
            <li><strong>For Namo Ghat:</strong> Full vehicular access and large municipal parking available directly at the ghat.</li>
          </ul>
        </div>
      </div>

      <div class="highlight-box" style="padding:2rem;">
        <h3 style="color:var(--clr-navy);margin-bottom:1rem;"><i class="fas fa-hotel text-saffron" aria-hidden="true"></i> Staying at a Heritage Riverside Hotel?</h3>
        <p class="text-sm">If your hotel is situated directly on the ghat steps (such as BrijRama Palace, Guleria Kothi, or Ganga View), motor vehicles cannot drive up to the hotel lobby.</p>
        <p class="text-sm mt-3"><strong>How we manage your arrival:</strong></p>
        <ol class="itinerary-list mt-3">
          <li>
            <div class="itinerary-num">1</div>
            <div class="text-sm">Our driver brings you to the nearest vehicle-accessible ghat or parking point (typically Godowlia, Rajghat, or Assi).</div>
          </li>
          <li>
            <div class="itinerary-num">2</div>
            <div class="text-sm">We assist you in connecting with the hotel's designated porter (coolie) or riverside boat transfer service.</div>
          </li>
          <li>
            <div class="itinerary-num">3</div>
            <div class="text-sm">On your departure, our driver coordinates ahead of time so your car is positioned ready at the agreed roadside point.</div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══ HOW TO BOOK ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Effortless Process</span>
      <h2>How to Book Your Cab in Varanasi</h2>
      <div class="divider"></div>
      <p>Reserve your car in under three minutes with zero upfront convenience fees.</p>
    </div>

    <div class="grid grid-3">
      <div class="card card-body text-center" style="border:1.5px solid var(--clr-border);">
        <div style="width:50px;height:50px;border-radius:50%;background:var(--clr-saffron-light);color:var(--clr-saffron);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1.25rem;">1</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Share Travel Details</h3>
        <p class="text-sm">Enter your pickup point, desired date, passenger count, and preferred vehicle via our online form or WhatsApp message.</p>
      </div>

      <div class="card card-body text-center" style="border:1.5px solid var(--clr-border);">
        <div style="width:50px;height:50px;border-radius:50%;background:var(--clr-navy-light);color:var(--clr-navy);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1.25rem;">2</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Get Instant Quote</h3>
        <p class="text-sm">Our Banaras reservations team confirms availability with an exact all-inclusive fare quote within 10 to 15 minutes.</p>
      </div>

      <div class="card card-body text-center" style="border:1.5px solid var(--clr-border);">
        <div style="width:50px;height:50px;border-radius:50%;background:var(--clr-saffron-light);color:var(--clr-saffron);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1.25rem;">3</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Relax &amp; Ride</h3>
        <p class="text-sm">Your air-conditioned cab and courteous driver arrive punctually. Settle payments comfortably after a smooth pilgrimage experience.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FAQS ═══ -->
<section class="section section-warm" id="varanasi-faqs">
  <div class="container" style="max-width:820px;">
    <div class="text-center" style="margin-bottom:2.5rem;">
      <span class="section-label">Questions &amp; Answers</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Everything you need to know about renting a taxi in Varanasi.</p>
    </div>

    <div class="faq-list">
      <?php
      $vns_faqs = [
          [
              'q' => 'Which ghats in Varanasi can the cab reach directly?',
              'a' => 'Vehicles can directly drive up to Assi Ghat in south Varanasi and Namo Ghat (Khirkiya) in the north, where dedicated municipal parking exists. However, prime central ghats including Dashashwamedh Ghat, Manikarnika Ghat, and Rana Mahal Ghat are situated within pedestrianized heritage alleyways. Cabs drop passengers at Godowlia Chowk or Luxa Road, from where the ghats are a 400 to 600-meter walk or a short e-rickshaw ride.'
          ],
          [
              'q' => 'Where does the cab park near Dashashwamedh Ghat and Kashi Vishwanath?',
              'a' => 'Cabs park at official municipal multi-level parking plazas situated at Godowlia Crossing, Maidagin, or Beniabagh. From these authorized parking lots, pilgrims walk approximately 5 to 10 minutes through the bustling market or take a local battery e-rickshaw (₹10–₹20 per seat) to reach the Kashi Vishwanath Temple corridor gates.'
          ],
          [
              'q' => 'Are late-night and early-morning pickups available at Varanasi Airport?',
              'a' => 'Yes. Book Cab Varanasi operates round the clock (24/7). If your flight lands at Babatpur Airport (VNS) at midnight or your train pulls into Cantt Station at 3:30 AM in time for the sacred Mangala Aarti, our assigned driver will be stationed on time with a personalized arrival board.'
          ],
          [
              'q' => 'Can you accommodate a large family group of 15 to 25 people?',
              'a' => 'Yes, absolutely. We operate a fleet of 16-seater, 21-seater, and 26-seater Tempo Travellers, as well as ultra-luxury Force Urbania 9–12 seaters and 35-seater mini buses. All group vehicles feature high roofs, individual AC vents, pushback seats, and heavy-duty luggage carriers.'
          ],
          [
              'q' => 'Can a cab take us right up to the gate of Kashi Vishwanath Temple?',
              'a' => 'No taxi or private passenger vehicle can enter Vishwanath Gali or the inner corridor plaza due to high-security police barricading and narrow historical streets. Our driver drops you at the nearest authorized point (Godowlia or Maidagin), from where Corridor Gate 4 is a brief, level walk.'
          ],
          [
              'q' => 'How are toll taxes and parking charges handled?',
              'a' => 'For local Varanasi packages (8hr/80km or airport runs), parking charges at municipal lots, airport terminals, and temples are paid directly by the passenger at actuals. For outstation rentals, toll taxes and state permits are billed transparently as per official receipts.'
          ],
      ];

      foreach ($vns_faqs as $idx => $item):
      ?>
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-vns-<?php echo $idx; ?>">
          <?php echo htmlspecialchars($item['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-vns-<?php echo $idx; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($item['a']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ RELATED ROUTES & SERVICES ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Explore More</span>
      <h2>Explore Related Services &amp; Destinations</h2>
      <div class="divider"></div>
      <p>Connect seamlessly to other prominent spiritual destinations and fleet options.</p>
    </div>

    <div class="grid grid-4 text-center">
      <a class="card card-body" href="/services/varanasi-local-8hr-80km/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🕒</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Local 8hr/80km Cab</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">From ₹2,000 →</span>
      </a>

      <a class="card card-body" href="/services/varanasi-airport-taxi/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">✈️</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Airport Taxi VNS</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">From ₹1,000 →</span>
      </a>

      <a class="card card-body" href="/routes/varanasi-to-ayodhya-cab/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🏹</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Ayodhya Ram Mandir</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">From ₹6,500 →</span>
      </a>

      <a class="card card-body" href="/fleet/tempo-traveller-rental/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🚐</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Tempo Traveller Hire</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">12 to 26 Seater →</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BOOKING INQUIRY FORM ═══ -->
<?php
$form_origin      = 'Varanasi';
$form_destination = '';
$form_section_id  = 'varanasi-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
