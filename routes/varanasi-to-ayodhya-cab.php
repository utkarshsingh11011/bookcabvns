<?php
require_once __DIR__ . '/../includes/config.php';

// Set SEO variables BEFORE head.php
$page_title  = 'Varanasi to Ayodhya Cab | Book Cab Varanasi';
$meta_desc   = 'Book a Varanasi to Ayodhya cab for one-way or round-trip. Swift Dzire from ₹6,500. Reach Ram Janmabhoomi, Hanuman Garhi & Saryu Ghat. Request a free quote.';
$canonical   = 'https://bookcabvaranasi.com/routes/varanasi-to-ayodhya-cab/';
$og_title    = 'Varanasi to Ayodhya Cab | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Varanasi to Ayodhya cab';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Routes',   'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Varanasi to Ayodhya Cab', 'url' => $canonical],
];

// Structured Data: FAQPage + TaxiService Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How long does the journey take from Varanasi to Ayodhya by cab?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The distance from Varanasi to Ayodhya is approximately 200 km, taking about 4 to 4.5 hours under standard traffic conditions via NH-27. Early morning departures around 5:30 AM or 6:00 AM help bypass city bottlenecks and reach Ayodhya in time for morning darshan.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What are the toll and parking charges on the Varanasi to Ayodhya route?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Toll charges between Varanasi and Ayodhya typically range from ₹200 to ₹300 one-way across highway toll plazas. Tolls and Ayodhya municipal parking charges are paid directly at actuals unless you book an all-inclusive tour package like our Urbania 9-12 day trip.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can the cab wait during our Ram Mandir and Hanuman Garhi darshan?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. For same-day round trips and day tour packages, our chauffeur will park at the designated municipal parking lot (such as Tedhi Bazar) and wait safely with your luggage while you complete your darshan and sightseeing.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is a round-trip booking cheaper than two separate one-way cabs?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes, booking a same-day round-trip package or multi-day return is significantly more cost-effective than booking two separate one-way taxis, as one-way cabs incur empty return costs. Round trips also guarantee the exact same dedicated vehicle and chauffeur throughout your pilgrimage.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I visit Ayodhya and return to Varanasi on the same day?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Absolutely. A same-day Ayodhya pilgrimage from Varanasi is one of our most popular itineraries. Departing Varanasi between 5:30 AM and 6:00 AM gets you to Ayodhya by 10:00 AM, allowing 6 to 7 hours for Ram Janmabhoomi, Hanuman Garhi, Kanak Bhawan, and Saryu Ghat before returning to Varanasi by 9:30 PM to 10:30 PM.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What vehicle should I book for a family or group of 8 people?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'For 8 passengers plus luggage, our Force Urbania (9-12 Seater) or 12/17-seater Tempo Traveller is the ideal choice. It offers reclining bucket seats, panoramic windows, high roof headroom, dedicated rear luggage space, and powerful multi-zone air conditioning for pilgrimage comfort.'
            ]
        ],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TaxiService',
    '@id'         => $canonical . '#service',
    'name'        => 'Varanasi to Ayodhya Cab Service',
    'serviceType' => 'Chauffeur-driven intercity taxi service',
    'provider'    => [
        '@type'     => 'LocalBusiness',
        '@id'       => 'https://bookcabvaranasi.com/#business',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN,
    ],
    'areaServed'  => [
        ['@type' => 'City', 'name' => 'Varanasi'],
        ['@type' => 'City', 'name' => 'Ayodhya'],
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '6500',
        'priceCurrency' => 'INR',
        'description'   => 'One-way AC Sedan taxi from Varanasi to Ayodhya',
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
      <span class="breadcrumb__current">Varanasi to Ayodhya Cab</span>
    </nav>
    <h1 class="page-hero__title">Varanasi to Ayodhya Cab</h1>
    <p class="page-hero__desc">Direct, private chauffeur-driven taxi service connecting the city of Lord Shiva to the sacred birthplace of Lord Rama. Swift Dzire starting at ₹6,500.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Inquiry
      </a>
      <a class="btn btn-secondary btn-lg" href="#ayodhya-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4)">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Book Online
      </a>
    </div>
  </div>
</section>

<!-- ═══ KEY STATS BAR ═══ -->
<section class="trust-bar" aria-label="Route summary metrics">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">~200 km</div>
        <div class="trust-item__label"><i class="fas fa-road text-saffron" aria-hidden="true"></i> Total Distance</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4–4.5 Hrs</div>
        <div class="trust-item__label"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> Driving Time (NH-27)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹6,500</div>
        <div class="trust-item__label"><i class="fas fa-tag text-saffron" aria-hidden="true"></i> Sedan Starting Fare</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4.8 ★</div>
        <div class="trust-item__label"><i class="fas fa-shield-halved text-saffron" aria-hidden="true"></i> 470+ Verified Reviews</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 1: FARE TABLE & INCLUSIONS ═══ -->
<section class="section" id="fares">
  <div class="container">
    <span class="section-label">Transparent Rates</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p>We believe in upfront, straightforward pricing with zero hidden surcharges. Review verified fares for one-way transfers, day tours, and custom pilgrimage itineraries between Varanasi and Ayodhya Dham.</p>

    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Varanasi to Ayodhya taxi fare chart">
        <thead>
          <tr>
            <th scope="col">Vehicle Type</th>
            <th scope="col">Seating Capacity</th>
            <th scope="col">One-Way Fare</th>
            <th scope="col">Round-Trip / Day Package</th>
            <th scope="col">Best Suited For</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
            <td>4 Passengers + 2 Bags</td>
            <td class="price">₹6,500</td>
            <td class="price">Request Quote / ~₹12,000</td>
            <td>Couples, solo pilgrims, small families (Verified Fare)</td>
          </tr>
          <tr>
            <td><strong>Maruti Ertiga</strong> (AC MUV)</td>
            <td>6 Passengers + 3 Bags</td>
            <td class="price">₹8,000 <span class="note">(Estimate)</span></td>
            <td class="price">Request Quote</td>
            <td>Families needing extra legroom &amp; luggage space</td>
          </tr>
          <tr>
            <td><strong>Toyota Innova Crysta</strong> (Premium MPV)</td>
            <td>6–7 Passengers + 4 Bags</td>
            <td class="price">₹10,000 <span class="note">(Estimate)</span></td>
            <td class="price">Request Quote</td>
            <td>Senior citizens, long journeys &amp; premium comfort</td>
          </tr>
          <tr>
            <td><strong>Force Urbania</strong> (Luxury 9–12 Seater)</td>
            <td>9–12 Passengers + 8 Bags</td>
            <td class="note">Tour Package Only</td>
            <td class="price">₹18,500 <span class="tag tag--saffron">All-Inclusive Tour</span></td>
            <td>Large families, temple pilgrim groups (Day Trip Package)</td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller</strong> (12–17 Seater)</td>
            <td>12–17 Passengers + Bags</td>
            <td class="note">On Request</td>
            <td class="price">Request Quote</td>
            <td>Bhajan mandalis, corporate pilgrim groups</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Inclusions & Exclusions Grid -->
    <div class="grid grid-2 mt-8">
      <div class="card card-body" style="border-top: 4px solid var(--clr-success)">
        <h3 class="text-navy" style="font-size:1.15rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-circle-check" style="color:var(--clr-success)" aria-hidden="true"></i> What Is Included
        </h3>
        <ul class="card-fare__features" style="margin-top:0.75rem">
          <li>Chauffeur-driven private vehicle dedicated exclusively to your group</li>
          <li>Fuel expenses and all state road permits for Uttar Pradesh</li>
          <li>Doorstep pickup anywhere in Varanasi (hotel, home, station or airport)</li>
          <li>Clean, sanitised air-conditioned vehicle with working seatbelts</li>
          <li>Assistance with temple parking location and pilgrim entry gates</li>
        </ul>
      </div>

      <div class="card card-body" style="border-top: 4px solid var(--clr-saffron)">
        <h3 class="text-navy" style="font-size:1.15rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-circle-exclamation" style="color:var(--clr-saffron)" aria-hidden="true"></i> What Is Excluded
        </h3>
        <ul class="card-fare__features" style="margin-top:0.75rem">
          <li>Highway toll plaza charges (~₹200–₹300 approx one-way, payable at actuals)</li>
          <li>Municipal parking charges at Ayodhya designated car parks</li>
          <li>Driver allowance for overnight stays (₹300/day for Dzire/Ertiga; ₹400 for Innova)</li>
          <li>Temple VIP darshan tickets, boat rides on the Saryu River, or personal meals</li>
          <li><em>Note: Our Urbania Day Trip package of ₹18,500 includes tolls and parking.</em></li>
        </ul>
      </div>
    </div>

    <div class="alert alert-info mt-6">
      <i class="fas fa-info-circle" aria-hidden="true"></i>
      <strong>Pricing Notice:</strong> The Swift Dzire one-way fare of ₹6,500 and the Urbania Day Trip of ₹18,500 are verified fixed rates. Ertiga and Innova Crysta one-way figures are realistic estimates and can be confirmed instantly by call or WhatsApp based on vehicle availability.
    </div>
  </div>
</section>

<!-- ═══ SECTION 2: DISTANCE, ROUTE & TRAVEL TIME ═══ -->
<section class="section section-warm" id="route-details">
  <div class="container">
    <span class="section-label">Highway Route Guide</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6" style="align-items:start">
      <div>
        <p class="prose">
          The road journey from <strong>Varanasi to Ayodhya Dham</strong> covers a driving distance of approximately <strong>200 kilometers</strong> via the national highway network. Under typical highway traffic conditions, driving time is between <strong>4 hours and 4.5 hours</strong>.
        </p>

        <h3 class="text-navy mt-6" style="font-size:1.2rem">Primary Route: Via NH-27 (National Highway 27)</h3>
        <p class="mt-2 text-muted">
          <strong>Varanasi → Jaunpur Bypass → Sultanpur Bypass → Faizabad → Ayodhya Dham</strong>
        </p>
        <p class="mt-2 prose">
          The most popular and convenient driving corridor proceeds north-west from Varanasi towards Jaunpur, joining the four-lane NH-27 near Sultanpur towards Faizabad and Ayodhya. The highway is largely four-laned with smooth bypasses around major towns, minimizing congested local market traffic.
        </p>

        <h3 class="text-navy mt-6" style="font-size:1.2rem">Alternative Route: Via Ghazipur / Purvanchal Expressway Link</h3>
        <p class="mt-2 prose">
          During peak festival windows or when outbound Varanasi traffic is heavy, experienced drivers take the Ghazipur connector to access the modern Purvanchal Expressway interchange towards Ayodhya. This route offers higher cruising speeds with limited roadside bottlenecks.
        </p>

        <div class="highlight-box mt-6">
          <strong>Best Time of Year to Visit:</strong> October to March is the ideal pilgrimage season, featuring cool and pleasant weather for walking between temples. During April to June, temperatures frequently surpass 42°C; if travelling in summer, an early morning departure at 5:00 AM or 5:30 AM is strongly advised.
        </div>
      </div>

      <div>
        <div class="card card-body" style="background:var(--clr-white)">
          <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:1rem">
            <i class="fas fa-map-location-dot text-saffron" aria-hidden="true"></i> Journey Milestone Breakdown
          </h3>
          <ol class="itinerary-list">
            <li>
              <div class="itinerary-num">1</div>
              <div>
                <strong>Varanasi Departure (0 km):</strong> Doorstep pickup from your hotel or residence. Early start avoids city congestion.
              </div>
            </li>
            <li>
              <div class="itinerary-num">2</div>
              <div>
                <strong>Jaunpur Bypass (~60 km · 1.25 hrs):</strong> Smooth flyovers bypass Jaunpur city; quality refreshment stalls and clean fuel stations available.
              </div>
            </li>
            <li>
              <div class="itinerary-num">3</div>
              <div>
                <strong>Sultanpur Corridor (~135 km · 2.75 hrs):</strong> Convergence with NH-27. Ideal midway spot for breakfast, chai, and clean restroom stops.
              </div>
            </li>
            <li>
              <div class="itinerary-num">4</div>
              <div>
                <strong>Ayodhya Dham Entry (~200 km · 4 to 4.5 hrs):</strong> Cross Faizabad bypass into Ayodhya; drop-off at designated multi-level car parking near Tedhi Bazar.
              </div>
            </li>
          </ol>

          <div class="alert alert-warning mt-4">
            <i class="fas fa-shield-heart" aria-hidden="true"></i>
            <strong>Pilgrim Travel Tip:</strong> NH-27 features reliable highway restaurants, but facilities are spaced 20–30 km apart. Our courteous chauffeurs are always happy to stop at well-reviewed family dhabas upon request.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 3: CHOOSE YOUR VEHICLE ═══ -->
<section class="section" id="vehicles">
  <div class="container">
    <span class="section-label">Our Well-Maintained Fleet</span>
    <h2>Choose Your Vehicle</h2>
    <div class="divider divider--left"></div>
    <p>Every vehicle in the Book Cab Varanasi fleet is commercially licensed (yellow plate), rigorously serviced, and operated by professional, polite drivers who know the Varanasi–Ayodhya route intimately.</p>

    <div class="grid grid-4 mt-6">
      <!-- Dzire -->
      <div class="card card-fare">
        <div class="card-fare__badge">Most Economical</div>
        <div class="card-fare__vehicle">Maruti Swift Dzire</div>
        <div class="card-fare__price">₹6,500 <span style="font-size:0.9rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">Comfortable AC Sedan</p>
        <ul class="card-fare__features">
          <li>Capacity: Up to 4 passengers</li>
          <li>Boot Space: 2 large suitcases</li>
          <li>Dual AC &amp; plush upholstery</li>
          <li>Superb fuel economy</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Swift Dzire for Ayodhya</h3>
        <p class="text-sm text-muted mt-1">Best suited for couples, solo travelers, and parents with a young child seeking an affordable, private intercity ride.</p>
        <a class="btn btn-primary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_dzire')">Book Dzire</a>
      </div>

      <!-- Ertiga -->
      <div class="card card-fare">
        <div class="card-fare__badge">Best for Families</div>
        <div class="card-fare__vehicle">Maruti Ertiga</div>
        <div class="card-fare__price">₹8,000 <span style="font-size:0.9rem;font-weight:400">estimate</span></div>
        <p class="card-fare__note">Spacious 6-Seater MUV</p>
        <ul class="card-fare__features">
          <li>Capacity: Up to 6 passengers</li>
          <li>Luggage carrier on roof (if needed)</li>
          <li>Rear AC vents for all rows</li>
          <li>Generous legroom for elderly</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Maruti Ertiga for Ayodhya</h3>
        <p class="text-sm text-muted mt-1">The practical choice for families of 4 to 6 members who need extra baggage room without the cost of a luxury MPV.</p>
        <a class="btn btn-secondary btn-sm btn-full mt-4" href="<?php echo htmlspecialchars(bcv_whatsapp_link('Quote for Ertiga Varanasi to Ayodhya')); ?>" target="_blank" rel="noopener">Request Quote</a>
      </div>

      <!-- Innova -->
      <div class="card card-fare">
        <div class="card-fare__badge">Supreme Comfort</div>
        <div class="card-fare__vehicle">Innova Crysta</div>
        <div class="card-fare__price">₹10,000 <span style="font-size:0.9rem;font-weight:400">estimate</span></div>
        <p class="card-fare__note">Premium Executive MPV</p>
        <ul class="card-fare__features">
          <li>Capacity: 6–7 passengers</li>
          <li>Captain seats &amp; whisper quiet cabin</li>
          <li>Superior highway suspension</li>
          <li>Huge boot capacity</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Innova Crysta for Ayodhya</h3>
        <p class="text-sm text-muted mt-1">Unmatched comfort on 4+ hour journeys, especially appreciated by senior citizens who require smooth, effortless travel.</p>
        <a class="btn btn-secondary btn-sm btn-full mt-4" href="<?php echo htmlspecialchars(bcv_whatsapp_link('Quote for Innova Crysta Varanasi to Ayodhya')); ?>" target="_blank" rel="noopener">Request Quote</a>
      </div>

      <!-- Urbania / Tempo -->
      <div class="card card-fare">
        <div class="card-fare__badge" style="background:#DCFCE7;color:#166534">Group Tour</div>
        <div class="card-fare__vehicle">Force Urbania</div>
        <div class="card-fare__price">₹18,500 <span style="font-size:0.9rem;font-weight:400">day tour</span></div>
        <p class="card-fare__note">Luxury 9–12 Seater Van</p>
        <ul class="card-fare__features">
          <li>Capacity: 9 to 12 passengers</li>
          <li>Individual AC vents &amp; USB ports</li>
          <li>Full standing height cabin</li>
          <li>All tolls &amp; parking included</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Force Urbania for Ayodhya</h3>
        <p class="text-sm text-muted mt-1">Travel together in luxurious comfort. The verified ₹18,500 full-day tour package covers round trip, fuel, toll &amp; parking.</p>
        <a class="btn btn-primary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_urbania')">Book Urbania</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 4: ONE-WAY VS ROUND-TRIP ═══ -->
<section class="section section-warm" id="trip-types">
  <div class="container">
    <span class="section-label">Travel Formats</span>
    <h2>One-Way vs Round-Trip Cab Options</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-arrow-right text-saffron" aria-hidden="true"></i> One-Way Cab Drop
        </h3>
        <p class="prose mt-3">
          Our one-way taxi service from Varanasi to Ayodhya is tailored for travelers who intend to stay in Ayodhya overnight, catch a flight from Maharishi Valmiki International Airport (AYJ), or travel onward to Lucknow, Prayagraj, or Gorakhpur.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Fixed starting fare: ₹6,500 (Dzire Sedan)</li>
          <li>Pick up anywhere in Varanasi, drop anywhere in Ayodhya Dham</li>
          <li>No need to pay return driver allowance or empty kilometers</li>
          <li>Direct hotel-to-hotel luggage assistance</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-arrows-rotate text-saffron" aria-hidden="true"></i> Same-Day Pilgrimage Round Trip
        </h3>
        <p class="prose mt-3">
          For pilgrims based at Varanasi hotels, our same-day return package offers maximum convenience without the hassle of packing and switching accommodations.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Early morning pickup (5:30 AM) from your Varanasi accommodation</li>
          <li>Vehicle and chauffeur stay with you throughout Ayodhya sightseeing</li>
          <li>Safe storage for your luggage and personal belongings during darshan</li>
          <li>Return drop right back at your Varanasi hotel by late evening</li>
        </ul>
      </div>
    </div>

    <!-- Suggested Day Trip Itinerary -->
    <div class="card card-body mt-6" style="background:var(--clr-white)">
      <h3 class="text-navy" style="font-size:1.2rem">Sample Varanasi to Ayodhya Same-Day Itinerary</h3>
      <p class="text-muted text-sm mt-1">A time-tested pilgrimage schedule followed by thousands of our happy travelers:</p>

      <div class="grid grid-4 mt-4" style="gap:1rem">
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">05:30 AM – 06:00 AM</div>
          <div class="text-navy font-bold mt-1">Pickup in Varanasi</div>
          <p class="text-xs text-muted mt-1">Depart hotel; cross Jaunpur bypass while enjoying scenic morning countryside views.</p>
        </div>
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">10:00 AM – 01:30 PM</div>
          <div class="text-navy font-bold mt-1">Hanuman Garhi &amp; Ram Mandir</div>
          <p class="text-xs text-muted mt-1">Seek blessings first at Hanuman Garhi, followed by sacred darshan at Ram Janmabhoomi.</p>
        </div>
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">01:30 PM – 04:30 PM</div>
          <div class="text-navy font-bold mt-1">Kanak Bhawan &amp; Saryu Ghat</div>
          <p class="text-xs text-muted mt-1">Enjoy a satvik lunch, visit beautiful Kanak Bhawan, Sita Rasoi, and offer prayers at holy Saryu Ghat.</p>
        </div>
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">05:00 PM – 09:30 PM</div>
          <div class="text-navy font-bold mt-1">Return to Varanasi</div>
          <p class="text-xs text-muted mt-1">Board your awaiting cab at the parking zone; smooth journey back to your Varanasi hotel.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 5: PICKUP & DROP-OFF ═══ -->
<section class="section" id="pickup-drop">
  <div class="container">
    <span class="section-label">Seamless Logistics</span>
    <h2>Pickup &amp; Drop-Off</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div>
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.75rem">
          <i class="fas fa-location-crosshairs text-saffron" aria-hidden="true"></i> Where We Pick You Up in Varanasi
        </h3>
        <p class="prose">
          We provide doorstep pickup across the entire Varanasi urban area. Whether you stay along the holy riverfront or near transportation terminals, our drivers arrive promptly at your chosen pickup point:
        </p>
        <ul class="itinerary-list mt-3">
          <li>
            <i class="fas fa-hotel text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Hotels &amp; Homestays:</strong> Cantonment, Maldahiya, Sigra, Ravindrapuri, Bhelupur, Lanka, or Assi Ghat vicinity.</div>
          </li>
          <li>
            <i class="fas fa-train-subway text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Railway Stations:</strong> Varanasi Junction (BSB / Cantt Platform 1 exit), Banaras Station (BSBS / Manduadih), or Kashi Station.</div>
          </li>
          <li>
            <i class="fas fa-plane-departure text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Varanasi Airport (VNS):</strong> Lal Bahadur Shastri International Airport at Babatpur. Direct connection to NH-27 avoids city congestion.</div>
          </li>
        </ul>
      </div>

      <div>
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.75rem">
          <i class="fas fa-flag-checkered text-saffron" aria-hidden="true"></i> Where We Drop You in Ayodhya
        </h3>
        <p class="prose">
          In Ayodhya Dham, we deliver you as close as permissible to your hotel, ashram, or primary darshan attraction:
        </p>
        <ul class="itinerary-list mt-3">
          <li>
            <i class="fas fa-gopuram text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Ram Janmabhoomi Complex:</strong> Drop-off at designated Tedhi Bazar multi-level car park or nearest municipal shuttle hub.</div>
          </li>
          <li>
            <i class="fas fa-water text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Saryu River &amp; Naya Ghat:</strong> Direct drop near Ram Ki Paidi and riverside ghat promenades.</div>
          </li>
          <li>
            <i class="fas fa-hotel text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Ayodhya &amp; Faizabad Hotels:</strong> Doorstep drop at all hotels along the NH-27 bypass, Civil Lines, or temple corridor.</div>
          </li>
        </ul>
      </div>
    </div>

    <!-- CRITICAL DISCLAIMER BOX -->
    <div class="alert alert-warning mt-8" role="note" style="border-left-width:6px">
      <div style="display:flex;gap:1rem;align-items:flex-start">
        <i class="fas fa-triangle-exclamation" style="font-size:1.5rem;color:#b45309;margin-top:2px" aria-hidden="true"></i>
        <div>
          <h3 style="color:#92400E;font-size:1.05rem;margin-bottom:0.35rem">Important Temple Area Vehicle Access Restriction</h3>
          <p style="margin:0;line-height:1.6">
            <strong>Vehicles park at designated areas. Ram Janmabhoomi complex has restricted vehicle entry; visitors walk from parking to the temple.</strong> Local administration strictly restricts private cars and commercial taxis from entering the inner perimeter surrounding the Ram Mandir and Hanuman Garhi for security and crowd safety. Your chauffeur will safely park your cab at designated municipal lots (such as the Tedhi Bazar parking). From there, battery-operated e-rickshaws and pilgrim pedestrian corridors take you comfortably into the temple complex.
          </p>
        </div>
      </div>
    </div>

    <!-- Highlights Covered -->
    <div class="mt-8">
      <h3 class="text-navy" style="font-size:1.25rem">Sacred Ayodhya Attractions You Can Explore</h3>
      <div class="grid grid-3 mt-4">
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🛕</div>
          <h4 class="text-navy" style="font-size:1.05rem">Shri Ram Janmabhoomi</h4>
          <p class="text-sm text-muted mt-1">The grand, newly inaugurated temple commemorating the birthplace of Maryada Purushottam Shri Ram.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🚩</div>
          <h4 class="text-navy" style="font-size:1.05rem">Hanuman Garhi</h4>
          <p class="text-sm text-muted mt-1">A 10th-century cave temple situated atop 76 stone steps, traditionally visited prior to the Ram Mandir.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🌊</div>
          <h4 class="text-navy" style="font-size:1.05rem">Saryu River Ghats</h4>
          <p class="text-sm text-muted mt-1">Perform sacred holy snan (dip) and attend the serene evening Maha Aarti at Ram Ki Paidi.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">👑</div>
          <h4 class="text-navy" style="font-size:1.05rem">Kanak Bhawan</h4>
          <p class="text-sm text-muted mt-1">The ornate golden palace gifted to Mata Sita by Queen Kaikeyi, famous for its magnificent deities.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🍲</div>
          <h4 class="text-navy" style="font-size:1.05rem">Sita Rasoi &amp; Dashrath Mahal</h4>
          <p class="text-sm text-muted mt-1">Historic sanctums honoring the royal kitchen of Mata Sita and the palace seat of King Dashrath.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🪔</div>
          <h4 class="text-navy" style="font-size:1.05rem">Surya Kund &amp; Guptar Ghat</h4>
          <p class="text-sm text-muted mt-1">Serene, ancient solar water bodies and sacred riverbanks where Lord Rama concluded his earthly lila.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 6: HOW TO BOOK ═══ -->
<section class="section section-warm" id="how-to-book">
  <div class="container">
    <span class="section-label">Fast &amp; Simple</span>
    <h2>How to Book</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-4 mt-6">
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem">1</div>
        <h3 class="text-navy" style="font-size:1.1rem">Submit Trip Details</h3>
        <p class="text-sm text-muted mt-2">Fill the simple booking form below, or send us a quick WhatsApp with your travel date, passenger count, and preferred vehicle.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem;background:var(--clr-saffron)">2</div>
        <h3 class="text-navy" style="font-size:1.1rem">Receive Instant Quote</h3>
        <p class="text-sm text-muted mt-2">Our booking desk shares a guaranteed, itemised fare quote within 10–15 minutes with all inclusions clearly stated.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem">3</div>
        <h3 class="text-navy" style="font-size:1.1rem">Driver Assignment</h3>
        <p class="text-sm text-muted mt-2">Vehicle registration number and verified driver contact details are dispatched to your WhatsApp well ahead of departure.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem;background:var(--clr-success)">4</div>
        <h3 class="text-navy" style="font-size:1.1rem">Enjoy Peaceful Darshan</h3>
        <p class="text-sm text-muted mt-2">Relax in your comfortable air-conditioned cab. Pay the driver directly upon trip completion via cash or UPI.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 7: FREQUENTLY ASKED QUESTIONS ═══ -->
<section class="section" id="faq">
  <div class="container" style="max-width:800px">
    <div class="text-center">
      <span class="section-label">Helpful Information</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Have questions about booking a cab from Varanasi to Ayodhya? Here are detailed answers to the most common traveler inquiries.</p>
    </div>

    <div class="faq-list mt-8">
      <?php foreach ($faqSchema['mainEntity'] as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-ayodhya-<?php echo $i; ?>">
          <span><?php echo htmlspecialchars($faq['name']); ?></span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ayodhya-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($faq['acceptedAnswer']['text']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ SECTION 8: RELATED ROUTES ═══ -->
<section class="section section-warm" id="related-routes">
  <div class="container">
    <span class="section-label">Explore More Pilgrimage Routes</span>
    <h2>Related Routes</h2>
    <div class="divider divider--left"></div>
    <p>Complete your sacred Uttar Pradesh pilgrimage circuit with our popular intercity taxi routes and special tour packages:</p>

    <div class="grid grid-3 mt-6">
      <a class="card-route" href="/routes/ayodhya-to-varanasi-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Ayodhya <span class="card-route__arrow">→</span> Varanasi</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~200 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 4.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹6,500</div>
          <p class="text-sm mt-3 text-muted">Returning from Ayodhya Dham to Kashi. Pickups from hotels, stations, and Ayodhya Airport.</p>
        </div>
      </a>

      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Prayagraj</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~125 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 2.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹3,250</div>
          <p class="text-sm mt-3 text-muted">Sacred Triveni Sangam snan, Bade Hanuman temple darshan, and historical Allahabad sightseeing.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/ayodhya-ram-mandir-taxi-package/">
        <div class="card-route__body">
          <div class="card-route__cities">Ayodhya Ram Mandir Package</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-star text-saffron" aria-hidden="true"></i> Full Day Tour</span>
            <span class="card-route__tag"><i class="fas fa-user-group" aria-hidden="true"></i> Any Group Size</span>
          </div>
          <div class="card-route__fare">Curated Tour</div>
          <p class="text-sm mt-3 text-muted">Comprehensive day pilgrimage package with curated darshan guidance and dedicated chauffeur.</p>
        </div>
      </a>

      <a class="card-route" href="/fleet/sedan-cab-rental/">
        <div class="card-route__body">
          <div class="card-route__cities">Sedan Cab Rental</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-car" aria-hidden="true"></i> Swift Dzire / Etios</span>
          </div>
          <div class="card-route__fare">from ₹13/km</div>
          <p class="text-sm mt-3 text-muted">Budget-friendly AC sedans for local darshan, railway transfers, and outstation trips.</p>
        </div>
      </a>

      <a class="card-route" href="/fleet/tempo-traveller-rental/">
        <div class="card-route__body">
          <div class="card-route__cities">Tempo Traveller Rental</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-van-shuttle" aria-hidden="true"></i> 9 to 26 Seats</span>
          </div>
          <div class="card-route__fare">from ₹32/km</div>
          <p class="text-sm mt-3 text-muted">Luxury group vans including Force Urbania and 16-seater Tempo Travellers for pilgrimage yatras.</p>
        </div>
      </a>

      <a class="card-route" href="/locations/ayodhya/">
        <div class="card-route__body">
          <div class="card-route__cities">Ayodhya Travel Guide</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-location-dot" aria-hidden="true"></i> Destination Info</span>
          </div>
          <div class="card-route__fare">Local Insights</div>
          <p class="text-sm mt-3 text-muted">Comprehensive darshan timings, aarti procedures, entry gate rules, and accommodation tips.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Ayodhya';
$form_section_id  = 'ayodhya-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
