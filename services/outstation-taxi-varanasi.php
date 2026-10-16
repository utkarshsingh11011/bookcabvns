<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Outstation Taxi from Varanasi | Intercity Cab Booking | Book Cab Varanasi';
$meta_desc   = 'Book outstation cabs from Varanasi. Flat-rate fares to Ayodhya, Prayagraj, Gaya, Lucknow & more. Compare vehicles. Toll & driver BATA disclosed. Get a free quote.';
$canonical   = 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/';
$og_title    = 'Outstation Taxi from Varanasi — Intercity Cab Booking | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'outstation taxi from Varanasi';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Services', 'url' => $canonical],
    ['name' => 'Outstation Taxi Varanasi', 'url' => $canonical],
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How is the outstation cab fare calculated?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'For popular intercity corridors like Varanasi to Ayodhya, Prayagraj, Gaya, Lucknow, and Vindhyachal, we offer fixed flat-rate fares. For custom multi-city journeys, billing is calculated per kilometer (Dzire ₹13/km, Ertiga ₹16/km, Innova ₹19/km, Tempo ₹32–₹35/km) subject to a standard industry minimum of 250 km per calendar day. Tolls, state taxes, and driver allowance (BATA) are added transparently.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is driver BATA and when does it apply?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Driver BATA (Batta) is a standard daily subsistence allowance for the driver’s food and lodging while away from their base city. It is charged at ₹300 per day for Dzire/Ertiga, ₹400 per day for Innova Crysta, and ₹500 per day for Tempo Travellers and Force Urbania. For overnight outstation trips, BATA is billed per calendar day.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I book a multi-city pilgrimage trip (Varanasi – Prayagraj – Ayodhya – Gaya)?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. Multi-city pilgrimage tours across the Holy Trinity circuit (Kashi, Ayodhya, Prayagraj) and Gaya Pind Daan are our core specialty. You can retain the same dedicated vehicle and experienced chauffeur throughout your 2-day to 7-day tour. Billing is based on total kilometers traveled (min 250 km/day) plus daily driver BATA, tolls, and parking.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is included and excluded in the outstation fare?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Included: Vehicle rental, air conditioning, fuel costs, and professional commercial driver service. Excluded: Fastag highway toll plaza fees, commercial interstate road permit taxes (when entering Bihar), hotel/temple parking fees, and driver daily BATA (disclosed clearly upfront).'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What are the state permit tax rules when travelling to Bihar (Gaya/Bodhgaya)?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Commercial tourist vehicles registered in Uttar Pradesh must pay an interstate commercial permit tax at the Bihar border checkpost (Kaimur/Mohania RTO). This temporary commercial passenger permit costs approximately ₹1,000–₹1,500 depending on vehicle seating capacity and is paid by the traveler against official government RTO receipts.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'How early do I need to book an outstation taxi from Varanasi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'We recommend booking 24 to 48 hours in advance, especially during festival seasons (Magh Mela, Kumbh, Shravan, Ram Navami, or Pitru Paksha). However, we maintain standby vehicles and can arrange same-day outstation departures within 60 to 90 minutes of receiving your confirmation.'
            ]
        ]
    ]
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonical . '#service',
    'name'        => 'Outstation Taxi Service from Varanasi — Intercity Cabs',
    'serviceType' => 'Outstation Cab Rental & Intercity Chauffeur Service',
    'provider'    => [
        '@type'     => 'LocalBusiness',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN,
        'address'   => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => BCV_ADDR_SERVICE,
            'addressLocality' => BCV_CITY,
            'addressRegion'   => BCV_STATE,
            'postalCode'      => BCV_PINCODE,
            'addressCountry'  => 'IN'
        ]
    ],
    'areaServed'  => [
        ['@type' => 'City', 'name' => 'Varanasi'],
        ['@type' => 'City', 'name' => 'Prayagraj'],
        ['@type' => 'City', 'name' => 'Ayodhya'],
        ['@type' => 'City', 'name' => 'Gaya'],
        ['@type' => 'City', 'name' => 'Lucknow'],
        ['@type' => 'City', 'name' => 'Vindhyachal']
    ],
    'url'         => $canonical,
    'description' => 'Reliable outstation cabs from Varanasi to Ayodhya, Prayagraj, Gaya, Bodhgaya, Lucknow, and Vindhyachal. One-way and round-trip rentals with transparent per-km billing and verified chauffeurs.'
];

$schema_json = json_encode(['@graph' => [$serviceSchema, $faqSchema]], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- ═══ PAGE HERO ═══ -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Services</span>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Outstation Taxi Varanasi</span>
    </nav>
    <h1 class="page-hero__title">Outstation Taxi from Varanasi — Intercity Cab Booking</h1>
    <p class="page-hero__desc">Reliable, chauffeur-driven outstation cabs connecting Varanasi to Ayodhya, Prayagraj, Gaya, Lucknow, and Vindhyachal. Fixed flat-rate route fares, transparent per-km billing, and 20+ years of trusted service.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','page_hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','page_hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Quote
      </a>
      <a class="btn btn-secondary btn-lg" href="#outstation-booking">
        <i class="fas fa-calculator" aria-hidden="true"></i> Custom Trip Quote
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST METRICS BAR ═══ -->
<section class="trust-bar" aria-label="Business credentials">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">₹13/km</div>
        <div class="trust-item__label">Outstation Sedan Base Rate</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">250 km</div>
        <div class="trust-item__label">Fair Daily Min Billing</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">10,000+</div>
        <div class="trust-item__label">Intercity Trips Completed</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4.8★</div>
        <div class="trust-item__label">470+ Verified Reviews</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TAXI FARE & INCLUSIONS ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Transparent Rates</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Book Cab Varanasi operates one of Eastern Uttar Pradesh's most respected intercity taxi fleets. We believe in 100% upfront pricing with every inclusion and exclusion clearly stated before you depart. Compare our flat one-way fares for popular destinations below:
    </p>

    <!-- Comprehensive Intercity Fare Table -->
    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Comprehensive Outstation Taxi Fare Table from Varanasi">
        <thead>
          <tr>
            <th scope="col">Destination City</th>
            <th scope="col">One-Way Distance</th>
            <th scope="col">Swift Dzire (Sedan)</th>
            <th scope="col">Maruti Ertiga (MUV)</th>
            <th scope="col">Innova Crysta (MPV)</th>
            <th scope="col">Important Route Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <strong>Varanasi → Prayagraj</strong><br>
              <span class="text-xs text-muted">Triveni Sangam, Anand Bhavan</span>
            </td>
            <td>~125 km</td>
            <td class="price">₹3,250</td>
            <td class="price">₹4,000</td>
            <td class="price">₹4,750</td>
            <td>Toll tax extra (~₹120). 2.5 hrs via NH-19 6-lane highway.</td>
          </tr>
          <tr>
            <td>
              <strong>Varanasi → Ayodhya</strong><br>
              <span class="text-xs text-muted">Ram Mandir, Hanuman Garhi</span>
            </td>
            <td>~200 km</td>
            <td class="price">₹6,500</td>
            <td class="price">₹8,000</td>
            <td class="price">₹10,000</td>
            <td>Toll tax extra (~₹180). 4.5 hrs via NH-330 / Sultanpur.</td>
          </tr>
          <tr>
            <td>
              <strong>Varanasi → Gaya / Bodhgaya</strong><br>
              <span class="text-xs text-muted">Vishnupad &amp; Mahabodhi Temple</span>
            </td>
            <td>~245 km</td>
            <td class="price">₹8,500</td>
            <td class="price">Request Quote</td>
            <td class="price">Request Quote</td>
            <td>Bihar border commercial road tax extra (~₹1,000). 5.5 hrs.</td>
          </tr>
          <tr>
            <td>
              <strong>Varanasi → Lucknow</strong><br>
              <span class="text-xs text-muted">State Capital, Hazratganj, Airport</span>
            </td>
            <td>~320 km</td>
            <td class="price">₹8,500</td>
            <td class="price">Request Quote</td>
            <td class="price">Request Quote</td>
            <td>Fastag toll extra. 5.5 hrs via Purvanchal Expressway or NH-31.</td>
          </tr>
          <tr>
            <td>
              <strong>Varanasi → Vindhyachal</strong><br>
              <span class="text-xs text-muted">Maa Vindhyavasini Shaktipeeth</span>
            </td>
            <td>~75 km</td>
            <td class="price">₹2,500</td>
            <td class="price">₹3,200</td>
            <td class="price">₹4,000</td>
            <td>Nil extra on regional route. 2 hrs via Mirzapur road.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Per-KM Rates & Billing Policies -->
    <div class="grid grid-3 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.1rem;margin-bottom:0.5rem">
          <i class="fas fa-road text-saffron" aria-hidden="true"></i> Per-Km Custom Rates
        </h3>
        <p class="text-sm">For multi-day or custom multi-city journeys, billing uses clean per-km rates:</p>
        <ul class="card-fare__features mt-2">
          <li><strong>Swift Dzire:</strong> ₹13 / km</li>
          <li><strong>Maruti Ertiga:</strong> ₹16 / km</li>
          <li><strong>Innova Crysta:</strong> ₹19 / km</li>
          <li><strong>Tempo Traveller:</strong> ₹32–₹35 / km</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.1rem;margin-bottom:0.5rem">
          <i class="fas fa-file-contract text-navy" aria-hidden="true"></i> Minimum Billing Rule
        </h3>
        <p class="text-sm">Standard outstation regulations apply across North India:</p>
        <ul class="card-fare__features mt-2">
          <li><strong>Min 250 km / Calendar Day:</strong> If you travel 180 km in a day, billing reflects the 250 km threshold.</li>
          <li><strong>Calendar Day Calculation:</strong> Day begins at 00:00 and concludes at 23:59.</li>
          <li><strong>Extra km:</strong> Billed at actuals beyond the daily cumulative limit.</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.1rem;margin-bottom:0.5rem">
          <i class="fas fa-user-tie text-gold" aria-hidden="true"></i> Driver BATA &amp; Tolls
        </h3>
        <p class="text-sm">Transparent daily subsistence and operational out-of-pocket costs:</p>
        <ul class="card-fare__features mt-2">
          <li><strong>Dzire / Ertiga:</strong> ₹300 / calendar day</li>
          <li><strong>Innova Crysta:</strong> ₹400 / calendar day</li>
          <li><strong>Tempo / Urbania:</strong> ₹500 / calendar day</li>
          <li><strong>Tolls &amp; Parking:</strong> At actual Fastag receipts.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ DISTANCE, ROUTE & TRAVEL TIME ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Highway Guide</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Varanasi serves as the primary eastern gateway for Uttar Pradesh and Bihar highways. Here is practical routing advice for travelers departing from Varanasi:
    </p>

    <div class="grid grid-2 mt-6">
      <!-- Varanasi to Prayagraj -->
      <div class="card card-body">
        <div class="flex-between">
          <h3 class="text-navy" style="font-size:1.2rem">Varanasi → Prayagraj</h3>
          <span class="tag tag--saffron">~125 km · 2.5 hrs</span>
        </div>
        <p class="text-sm mt-3">
          <strong>Route:</strong> National Highway 19 (NH-19, formerly NH-2), an immaculate 6-lane express highway passing through Mirzamurad, Gopiganj, and Handia bypass before crossing the Shastri Bridge into Prayagraj.
        </p>
        <p class="text-sm mt-2">
          <strong>Highlights:</strong> Smooth high-speed surface with numerous modern food courts and fuel stations. Perfect for morning departures to attend the sacred Sangam snan and afternoon return.
        </p>
        <a class="text-saffron font-bold text-sm mt-3" style="display:inline-block" href="/routes/varanasi-to-prayagraj-taxi/">
          View dedicated Varanasi → Prayagraj Route Page →
        </a>
      </div>

      <!-- Varanasi to Ayodhya -->
      <div class="card card-body">
        <div class="flex-between">
          <h3 class="text-navy" style="font-size:1.2rem">Varanasi → Ayodhya</h3>
          <span class="tag tag--saffron">~200 km · 4.5 hrs</span>
        </div>
        <p class="text-sm mt-3">
          <strong>Route:</strong> NH-330 / NH-731 via Jaunpur, Sultanpur bypass, into Ayodhya Dham. The newly upgraded 4-lane corridors have reduced travel time by nearly 90 minutes.
        </p>
        <p class="text-sm mt-2">
          <strong>Highlights:</strong> Direct approach to Shri Ram Janmabhoomi Teerth Kshetra and Hanuman Garhi. Early morning departures (05:30 AM) ensure arrival by 10:00 AM in time for morning darshan.
        </p>
        <a class="text-saffron font-bold text-sm mt-3" style="display:inline-block" href="/routes/varanasi-to-ayodhya-cab/">
          View dedicated Varanasi → Ayodhya Route Page →
        </a>
      </div>

      <!-- Varanasi to Gaya -->
      <div class="card card-body">
        <div class="flex-between">
          <h3 class="text-navy" style="font-size:1.2rem">Varanasi → Gaya / Bodhgaya</h3>
          <span class="tag tag--saffron">~245 km · 5.5 hrs</span>
        </div>
        <p class="text-sm mt-3">
          <strong>Route:</strong> Eastbound along NH-19 through Chandauli, Mohania (Bihar entry), Sasaram, Dehri-on-Sone, Aurangabad, and Dobhi turnoff towards Gaya.
        </p>
        <p class="text-sm mt-2">
          <strong>Highlights:</strong> Essential for pilgrims performing holy Pind Daan rituals at the sacred Falgu River and Vishnupad Mandir, followed by UNESCO World Heritage Mahabodhi Temple.
        </p>
      </div>

      <!-- Varanasi to Vindhyachal & Chunar -->
      <div class="card card-body">
        <div class="flex-between">
          <h3 class="text-navy" style="font-size:1.2rem">Varanasi → Vindhyachal Dham</h3>
          <span class="tag tag--saffron">~75 km · 2.0 hrs</span>
        </div>
        <p class="text-sm mt-3">
          <strong>Route:</strong> Mirzapur state highway via Rohaniya and Chunar crossing to Vindhyachal Shaktipeeth on the banks of Maa Ganga.
        </p>
        <p class="text-sm mt-2">
          <strong>Highlights:</strong> Beautiful day-trip route visiting Maa Vindhyavasini Temple, Kali Khoh, Ashtabhuja Temple (Trikona Parikrama), and historic Chunar Fort.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CHOOSE YOUR VEHICLE ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Fleet for the Highway</span>
    <h2>Choose Your Vehicle</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Intercity travel demands mechanically immaculate vehicles, verified commercial drivers who do not smoke or drink on duty, and comfortable interiors with functional seatbelts on all seats.
    </p>

    <div class="grid grid-4 mt-6">
      <!-- Swift Dzire -->
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.15rem">Swift Dzire Sedan</h3>
        <p class="text-xs text-saffron font-bold">1–4 Passengers</p>
        <p class="text-sm mt-2">
          Great for budget couples and small families. Highway suspension, trunk space for 2 suitcases, and efficient fuel consumption.
        </p>
        <div class="card-fare__price mt-3">₹13 <span class="text-sm text-muted font-normal">/ km</span></div>
        <ul class="card-fare__features mt-3">
          <li>Daily BATA: ₹300</li>
          <li>Min 250 km / day</li>
          <li>Chilled AC</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Sedan</a>
      </div>

      <!-- Maruti Ertiga -->
      <div class="card card-body">
        <div class="card-fare__badge">Family Pick</div>
        <h3 class="text-navy" style="font-size:1.15rem">Maruti Ertiga MUV</h3>
        <p class="text-xs text-saffron font-bold">5–6 Passengers</p>
        <p class="text-sm mt-2">
          Spacious 3-row layout with flexible seating. Rear blower vents ensure even air cooling throughout long highway drives.
        </p>
        <div class="card-fare__price mt-3">₹16 <span class="text-sm text-muted font-normal">/ km</span></div>
        <ul class="card-fare__features mt-3">
          <li>Daily BATA: ₹300</li>
          <li>Min 250 km / day</li>
          <li>Generous legroom</li>
        </ul>
        <a class="btn btn-primary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Ertiga</a>
      </div>

      <!-- Toyota Innova Crysta -->
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.15rem">Toyota Innova Crysta</h3>
        <p class="text-xs text-saffron font-bold">6–7 Passengers</p>
        <p class="text-sm mt-2">
          The ultimate Indian highway vehicle. Plush captain chairs, high ground clearance, exceptional noise insulation, and huge luggage capacity.
        </p>
        <div class="card-fare__price mt-3">₹19 <span class="text-sm text-muted font-normal">/ km</span></div>
        <ul class="card-fare__features mt-3">
          <li>Daily BATA: ₹400</li>
          <li>Min 250 km / day</li>
          <li>VIP travel comfort</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Innova</a>
      </div>

      <!-- Force Urbania & Tempo -->
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.15rem">Urbania &amp; Tempo</h3>
        <p class="text-xs text-saffron font-bold">9, 12, 16, 21 Seater</p>
        <p class="text-sm mt-2">
          Designed specifically for large pilgrimage groups, joint families, and wedding tours. Push-back individual reclining seats.
        </p>
        <div class="card-fare__price mt-3">₹32–₹35 <span class="text-sm text-muted font-normal">/ km</span></div>
        <ul class="card-fare__features mt-3">
          <li>Daily BATA: ₹500</li>
          <li>Min 250 km / day</li>
          <li>Separate luggage bay</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="tel:+919648974238">Book Tempo</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ONE-WAY VS ROUND-TRIP PRICING ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Pricing Comparison</span>
    <h2>One-Way vs Round-Trip Outstation Pricing</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.75rem">
          <i class="fas fa-arrow-right text-saffron" aria-hidden="true"></i> One-Way Intercity Drops
        </h3>
        <p class="text-sm">
          A one-way cab is ideal if your travel plan concludes in another city — for example, arriving by flight into Varanasi and flying out from Lucknow Airport or Ayodhya Maharishi Valmiki Airport.
        </p>
        <div class="fare-wrapper mt-4">
          <table class="fare-table" aria-label="One way outstation fares">
            <thead>
              <tr>
                <th>Route</th>
                <th>Dzire Sedan</th>
                <th>Maruti Ertiga</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Varanasi → Prayagraj</td><td class="price">₹3,250</td><td class="price">₹4,000</td></tr>
              <tr><td>Varanasi → Ayodhya</td><td class="price">₹6,500</td><td class="price">₹8,000</td></tr>
              <tr><td>Varanasi → Lucknow</td><td class="price">₹8,500</td><td class="price">Request Quote</td></tr>
            </tbody>
          </table>
        </div>
        <p class="text-xs text-muted mt-3">
          <strong>Why choose One-Way?</strong> You do not pay for the driver’s hotel stay or multi-day return charges. You pay one flat rate for your point-to-point drop.
        </p>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.75rem">
          <i class="fas fa-arrows-spin text-navy" aria-hidden="true"></i> Round-Trip Multi-Day Rentals
        </h3>
        <p class="text-sm">
          A round-trip rental is far more economical if you plan to visit local temples in the destination city and return to Varanasi, or embark on a multi-day spiritual circuit across multiple towns.
        </p>
        <div class="fare-wrapper mt-4">
          <table class="fare-table" aria-label="Round trip outstation fares">
            <thead>
              <tr>
                <th>Same-Day Round Trip</th>
                <th>Dzire Sedan</th>
                <th>Maruti Ertiga</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Varanasi ⇄ Prayagraj (Same Day)</td><td class="price">₹6,500</td><td class="price">₹8,000</td></tr>
              <tr><td>Varanasi ⇄ Vindhyachal (Same Day)</td><td class="price">₹4,500</td><td class="price">₹5,500</td></tr>
              <tr><td>Varanasi ⇄ Ayodhya (Full Day)</td><td class="price">₹10,500</td><td class="price">₹13,000</td></tr>
            </tbody>
          </table>
        </div>
        <p class="text-xs text-muted mt-3">
          <strong>Why choose Round-Trip?</strong> The car stays with you all day for local sightseeing and darshan at your own pace without needing to negotiate auto fares at each stop.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PICKUP & DROP-OFF GUIDANCE ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Logistics</span>
    <h2>Pickup &amp; Drop-Off Guidance</h2>
    <div class="divider divider--left"></div>

    <div class="prose mt-4" style="max-width:800px">
      <h3>Doorstep Pickup Anywhere in Varanasi</h3>
      <p>
        Our outstation service provides doorstep pickup across all areas of Varanasi — including Cantonment, Sigra, Nadesar, Mahmoorganj, Bhelupur, Lanka/BHU, and Sarnath. If you are staying at a riverfront heritage hotel along the ghats, your driver coordinates pickup at the closest vehicular junction (Godowlia, Maidagin, or Dashashwamedh crossing).
      </p>

      <h3>Direct Airport Outstation Departures</h3>
      <p>
        Landing at Lal Bahadur Shastri Airport (VNS) Babatpur and heading directly to Ayodhya or Prayagraj? You don’t need to enter Varanasi city traffic. Our chauffeur meets you right at the arrival gate and immediately hits the Ring Road bypass towards NH-19 or NH-330, saving you over 60 minutes of urban congestion.
      </p>

      <h3>Sanctity &amp; Cleanliness Guarantee</h3>
      <p>
        Our drivers respect the spiritual mindset of pilgrimage travelers. We ensure clean, fresh seat covers, non-smoking vehicle interiors, functional AC, and polite drivers who readily pause for tea, restrooms, or meals at clean, hygienic roadside restaurants.
      </p>
    </div>
  </div>
</section>

<!-- ═══ HOW TO BOOK ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Fast Booking</span>
    <h2>How to Book Your Outstation Taxi</h2>
    <div class="divider divider--left"></div>

    <ol class="itinerary-list mt-6" style="max-width:720px">
      <li>
        <div class="itinerary-num">1</div>
        <div>
          <strong class="text-navy">Share Your Itinerary:</strong>
          <p class="text-sm mt-1">Tell us your departure date, pickup time, destination cities, number of travelers, and whether you require a one-way drop or a round-trip pilgrimage tour.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">2</div>
        <div>
          <strong class="text-navy">Receive an All-Inclusive Quote:</strong>
          <p class="text-sm mt-1">Our operations team provides a written breakdown including base fare, toll estimates, state taxes, and driver BATA so there are zero surprises on the road.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">3</div>
        <div>
          <strong class="text-navy">Driver Details Prior to Journey:</strong>
          <p class="text-sm mt-1">The evening before your early morning departure, you receive your driver’s name, verified mobile number, and car registration details via WhatsApp.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">4</div>
        <div>
          <strong class="text-navy">Doorstep Pickup &amp; Transparent Settlement:</strong>
          <p class="text-sm mt-1">Your chauffeur arrives punctually at your door. You pay transparently via UPI, Google Pay, Bank Transfer, or Cash upon journey completion.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- ═══ FREQUENTLY ASKED QUESTIONS ═══ -->
<section class="section">
  <div class="container" style="max-width:800px">
    <div class="text-center">
      <span class="section-label">Got Questions?</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Clear, direct answers regarding outstation and intercity cab bookings from Varanasi.</p>
    </div>

    <div class="faq-list mt-6">
      <?php foreach ($faqSchema['mainEntity'] as $i => $item): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-outstation-<?php echo $i; ?>">
          <?php echo htmlspecialchars($item['name']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-outstation-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($item['acceptedAnswer']['text']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ POPULAR OUTSTATION ROUTES & FLEET ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Popular Intercity Corridors</span>
    <h2>Explore Our Outstation Routes &amp; Fleet</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">Click below to view dedicated route guides, temple timings, and custom pilgrimage packages:</p>

    <div class="grid grid-3 mt-6">
      <!-- Route 1: Varanasi to Ayodhya -->
      <a class="card-route" href="/routes/varanasi-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~200 km · 4.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹6,500</div>
          <p class="text-sm mt-3">Ram Janmabhoomi, Hanuman Garhi, Kanak Bhavan &amp; Saryu Aarti day trips and round tours.</p>
        </div>
      </a>

      <!-- Route 2: Varanasi to Prayagraj -->
      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Prayagraj</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~125 km · 2.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹3,250</div>
          <p class="text-sm mt-3">Triveni Sangam holy dip, Bade Hanuman Mandir, Alopi Devi Shaktipeeth &amp; Anand Bhavan.</p>
        </div>
      </a>

      <!-- Route 3: Ayodhya to Varanasi -->
      <a class="card-route" href="/routes/ayodhya-to-varanasi-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Ayodhya <span class="card-route__arrow">→</span> Varanasi</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~200 km · 4.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹6,500</div>
          <p class="text-sm mt-3">Return journey transfers from Ayodhya hotels and Maharishi Valmiki Airport to Varanasi.</p>
        </div>
      </a>

      <!-- Route 4: Prayagraj to Varanasi -->
      <a class="card-route" href="/routes/prayagraj-to-varanasi-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj <span class="card-route__arrow">→</span> Varanasi</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~125 km · 2.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹3,250</div>
          <p class="text-sm mt-3">Intercity cabs from Prayagraj Junction or Civil Lines directly to your Varanasi hotel.</p>
        </div>
      </a>

      <!-- Route 5: Prayagraj to Ayodhya -->
      <a class="card-route" href="/routes/prayagraj-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj <span class="card-route__arrow">→</span> Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~165 km · 3.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹5,000</div>
          <p class="text-sm mt-3">Direct connection between the Sangam city and Ram Janmabhoomi via Pratapgarh.</p>
        </div>
      </a>

      <!-- Route 6: Ayodhya to Prayagraj -->
      <a class="card-route" href="/routes/ayodhya-to-prayagraj-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Ayodhya <span class="card-route__arrow">→</span> Prayagraj</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~165 km · 3.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹5,000</div>
          <p class="text-sm mt-3">Comfortable transfers between Ayodhya Dham and Prayagraj Sangam for pilgrims.</p>
        </div>
      </a>

      <!-- Fleet: Sedan Rental -->
      <a class="card-route" href="/fleet/sedan-cab-rental/">
        <div class="card-route__body">
          <div class="card-route__cities">🚗 Sedan Fleet Rental</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-car" aria-hidden="true"></i> Swift Dzire &amp; Etios</span>
          </div>
          <div class="card-route__fare">₹13 / km</div>
          <p class="text-sm mt-3">Complete technical specs, boot dimensions, and fuel efficiency of our sedan fleet.</p>
        </div>
      </a>

      <!-- Fleet: Tempo Traveller Rental -->
      <a class="card-route" href="/fleet/tempo-traveller-rental/">
        <div class="card-route__body">
          <div class="card-route__cities">🚐 Tempo Traveller Hire</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-bus" aria-hidden="true"></i> 12, 16, 21 &amp; 26 Seaters</span>
          </div>
          <div class="card-route__fare">from ₹32 / km</div>
          <p class="text-sm mt-3">Deluxe Force Tempo Travellers with 2x1 pushback seats, dual AC, and luggage carriers.</p>
        </div>
      </a>

      <!-- Service: Local Sightseeing -->
      <a class="card-route" href="/services/varanasi-local-8hr-80km/">
        <div class="card-route__body">
          <div class="card-route__cities">🚕 Varanasi Local Sightseeing</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 8Hr/80Km &amp; 12Hr</span>
          </div>
          <div class="card-route__fare">from ₹2,000</div>
          <p class="text-sm mt-3">Complete temple circuit within Varanasi before embarking on your outstation trip.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = '';
$form_section_id  = 'outstation-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
