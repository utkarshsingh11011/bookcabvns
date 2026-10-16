<?php
require_once __DIR__ . '/../includes/config.php';

// Set SEO variables BEFORE head.php
$page_title  = 'Varanasi to Prayagraj Taxi | Cab Fare from ₹3,250 | Book Cab Varanasi';
$meta_desc   = 'Varanasi to Prayagraj cab fare starts from ₹3,250. Compare Dzire, Ertiga, Innova & Tempo Traveller. Reach Triveni Sangam comfortably. Get a free quote.';
$canonical   = 'https://bookcabvaranasi.com/routes/varanasi-to-prayagraj-taxi/';
$og_title    = 'Varanasi to Prayagraj Taxi | Cab Fare from ₹3,250 | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Varanasi to Prayagraj taxi';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Routes',   'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Varanasi to Prayagraj Taxi', 'url' => $canonical],
];

// Structured Data: FAQPage + TaxiService Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is the travel time from Varanasi to Prayagraj by taxi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The driving distance is 125 km via the modern six-lane NH-19 (Grand Trunk Road). Under normal highway conditions, the journey takes about 2.5 to 3 hours. During early morning departures (around 6:00 AM), you can reach Triveni Sangam in just under 2.5 hours.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What are the highway toll charges between Varanasi and Prayagraj?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Toll charges on NH-19 between Varanasi and Prayagraj are approximately ₹200 one-way (through the Lalanagar and Handia toll plazas). Tolls and local parking fees are payable at actuals unless booked as part of our all-inclusive tour packages.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is a one-way cab cheaper or should I book a same-day round-trip?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'If your travel ends in Prayagraj (such as catching a train from Prayagraj Junction or a flight from Bamrauli Airport), a one-way cab starting at ₹3,250 is the most economical choice. If you intend to take a holy snan at Sangam, visit temples, and return to Varanasi the same day, our same-day round-trip package (Dzire ₹6,500) gives you 4 to 5 hours of standby time and takes you right back to your Varanasi hotel.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is the boat ride at Triveni Sangam included in the taxi fare?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No. The taxi fare covers private chauffeur-driven road transport, fuel, and driver allowances. Boat rides at Sangam Ghat or Arail Ghat are operated by licensed local boatmen cooperatives (naaviks) and are paid directly at the ghat. Our drivers will guide you to government-regulated boat boarding points to prevent overcharging.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'How does taxi travel work during the Magh Mela / Kumbh Mela season (January–February)?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'During the annual Magh Mela (January to February), Prayagraj police enforce extensive vehicle diversions and pontoon bridge regulations around the Sangam area. Commercial taxis must park at designated outer Mela parking grounds (such as Parade Ground or Arail side). From there, pilgrims walk or take official electric shuttles. We advise booking cabs at least 3 to 5 days in advance during Shahi Snan dates.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can the taxi take us right up to the Triveni Sangam ghat?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Vehicles park at designated municipal parking zones near the Sangam embankment (or Arail Ghat). Due to administrative restrictions near the riverbank, visitors walk approximately 300 to 500 meters or take an e-rickshaw from the parking zone to reach the boat points for the Sangam confluence.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What vehicle is recommended for a large group or joint family?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'For groups of 6 to 7 people, Toyota Innova Crysta (₹4,750 one-way / ₹9,500 round-trip) provides top-tier comfort. For 8 to 12 passengers, our Force Urbania Day Trip package (₹10,000) is unbeatable. For 13 to 26 passengers, we supply dedicated 17-seater and 26-seater Tempo Travellers (₹7,000 one-way / ₹14,000 round-trip).'
            ]
        ],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TaxiService',
    '@id'         => $canonical . '#service',
    'name'        => 'Varanasi to Prayagraj Taxi Service',
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
        ['@type' => 'City', 'name' => 'Prayagraj'],
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '3250',
        'priceCurrency' => 'INR',
        'description'   => 'One-way AC Sedan taxi from Varanasi to Prayagraj',
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
      <span class="breadcrumb__current">Varanasi to Prayagraj Taxi</span>
    </nav>
    <h1 class="page-hero__title">Varanasi to Prayagraj Taxi</h1>
    <p class="page-hero__desc">Fast, comfortable, and reliable cab service along NH-19 to Triveni Sangam, Bade Hanuman Temple, and Anand Bhavan. Swift Dzire starting at ₹3,250.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
      <a class="btn btn-secondary btn-lg" href="#prayagraj-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4)">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Instant Quote
      </a>
    </div>
  </div>
</section>

<!-- ═══ KEY STATS BAR ═══ -->
<section class="trust-bar" aria-label="Route summary metrics">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">125 km</div>
        <div class="trust-item__label"><i class="fas fa-road text-saffron" aria-hidden="true"></i> Total Highway Distance</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">2.5–3 Hrs</div>
        <div class="trust-item__label"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> Driving Time (NH-19)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹3,250</div>
        <div class="trust-item__label"><i class="fas fa-tag text-saffron" aria-hidden="true"></i> Verified Starting Fare</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">20+ Yrs</div>
        <div class="trust-item__label"><i class="fas fa-award text-saffron" aria-hidden="true"></i> Pilgrimage Experience</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 1: FARE TABLE & INCLUSIONS ═══ -->
<section class="section" id="fares">
  <div class="container">
    <span class="section-label">Verified Fixed Fares</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p>We provide 100% verified, transparent cab fares for the Varanasi to Prayagraj corridor. No surprise surge charges, no peak-hour gouging. Check out our real fleet rates below:</p>

    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Varanasi to Prayagraj taxi fare table">
        <thead>
          <tr>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Capacity</th>
            <th scope="col">One-Way Fare</th>
            <th scope="col">Same-Day Round Trip</th>
            <th scope="col">Ideal Use Case</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
            <td>4 Passengers + 2 Bags</td>
            <td class="price">₹3,250</td>
            <td class="price">₹6,500</td>
            <td>Couples, solo travelers, small family day trips</td>
          </tr>
          <tr>
            <td><strong>Maruti Ertiga</strong> (Spacious MUV)</td>
            <td>6 Passengers + 3 Bags</td>
            <td class="price">₹4,000</td>
            <td class="price">₹8,000</td>
            <td>Families needing extra legroom and luggage space</td>
          </tr>
          <tr>
            <td><strong>Toyota Innova Crysta</strong> (Executive MPV)</td>
            <td>6–7 Passengers + 4 Bags</td>
            <td class="price">₹4,750</td>
            <td class="price">₹9,500</td>
            <td>Senior citizens, high-comfort pilgrim tours</td>
          </tr>
          <tr>
            <td><strong>Force Urbania</strong> (9–12 Seater Luxury)</td>
            <td>9–12 Passengers + 8 Bags</td>
            <td class="note">Tour Package Only</td>
            <td class="price">₹10,000 <span class="tag tag--saffron">Day Tour</span></td>
            <td>Joint families, VIP pilgrimage group day trip</td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller</strong> (16–17 Seater)</td>
            <td>16 Passengers + Luggage</td>
            <td class="price">₹7,000</td>
            <td class="price">₹14,000</td>
            <td>Spiritual bhajan mandalis, yatra tour groups</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Inclusions & Exclusions Grid -->
    <div class="grid grid-2 mt-8">
      <div class="card card-body" style="border-top: 4px solid var(--clr-success)">
        <h3 class="text-navy" style="font-size:1.15rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-circle-check" style="color:var(--clr-success)" aria-hidden="true"></i> Inclusions (All Bookings)
        </h3>
        <ul class="card-fare__features" style="margin-top:0.75rem">
          <li>Chauffeur-driven, clean air-conditioned commercial vehicle</li>
          <li>All fuel costs and regular highway running allowances</li>
          <li>Doorstep pickup anywhere in Varanasi (hotels, residences, Cantt station)</li>
          <li>Drop-off at your chosen destination in Prayagraj (Sangam area or hotel)</li>
          <li>4 to 5 hours of sightseeing standby time on round-trip bookings</li>
        </ul>
      </div>

      <div class="card card-body" style="border-top: 4px solid var(--clr-saffron)">
        <h3 class="text-navy" style="font-size:1.15rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-circle-exclamation" style="color:var(--clr-saffron)" aria-hidden="true"></i> Exclusions (Payable at Actuals)
        </h3>
        <ul class="card-fare__features" style="margin-top:0.75rem">
          <li>Highway toll plaza taxes (~₹200 total on NH-19 one-way)</li>
          <li>Prayagraj municipal parking fees at Sangam or Anand Bhavan</li>
          <li>Driver night allowance of ₹300/day if trip extends overnight beyond 10:00 PM</li>
          <li>Sangam holy boat ride tickets and temple special darshan tickets</li>
          <li><em>All tolls and parking are included in our Urbania Day Trip package.</em></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 2: DISTANCE, ROUTE & TRAVEL TIME ═══ -->
<section class="section section-warm" id="route-details">
  <div class="container">
    <span class="section-label">Highway Overview</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6" style="align-items:start">
      <div>
        <p class="prose">
          The road distance between <strong>Varanasi and Prayagraj</strong> is exactly <strong>125 kilometers</strong>. The route is served by <strong>National Highway 19 (NH-19)</strong>, the historic Grand Trunk Road, which has been converted into a smooth, high-speed, 6-lane access-controlled expressway.
        </p>

        <h3 class="text-navy mt-6" style="font-size:1.2rem">Route Alignment: Via NH-19 Expressway</h3>
        <p class="mt-2 text-muted">
          <strong>Varanasi (Lanka/Cantt) → Mirzapur Bypass (Aurai) → Gopiganj → Handia Bypass → Prayagraj (Shastri Bridge / Sangam)</strong>
        </p>
        <p class="mt-2 prose">
          Unlike older state highways, NH-19 bypasses congested rural town centers. Once you exit Varanasi city limits (via the Mohansarai or Rohania flyover), cruising speeds are uninterrupted. You will cross the iconic Shastri Bridge over the holy River Ganga as you enter Prayagraj city limits.
        </p>

        <h3 class="text-navy mt-6" style="font-size:1.2rem">Travel Time Breakdown</h3>
        <ul class="card-fare__features mt-2">
          <li><strong>Early Morning (5:00 AM – 7:00 AM):</strong> ~2 hours 15 mins to 2.5 hours</li>
          <li><strong>Regular Daytime (8:00 AM – 6:00 PM):</strong> ~2.5 to 3 hours</li>
          <li><strong>Peak Evening Outbound (6:00 PM – 9:00 PM):</strong> ~3 hours (due to Varanasi city exit traffic)</li>
        </ul>

        <div class="highlight-box mt-6">
          <strong>Highway Food &amp; Rest Facilities:</strong> The Varanasi–Prayagraj stretch has some of Eastern UP's best highway dhabas near Handia and Gopiganj, offering hygienic washrooms, fresh vegetarian thalis, samosas, and Kulhad chai.
        </div>
      </div>

      <div>
        <!-- Magh Mela Seasonal Notice Box -->
        <div class="card card-body" style="border: 2px solid var(--clr-gold);background:#FFFDF7">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.75rem">
            <span style="font-size:1.8rem">🎪</span>
            <div>
              <h3 class="text-navy" style="font-size:1.15rem;margin:0">Magh Mela &amp; Kumbh Mela Seasonal Travel Note</h3>
              <span class="text-xs text-saffron" style="font-weight:700;text-transform:uppercase">Annual Event: January – February</span>
            </div>
          </div>
          <p class="prose text-sm">
            Prayagraj hosts millions of pilgrims annually during the <strong>Magh Mela</strong> (and the mega <strong>Kumbh / Maha Kumbh Mela</strong>). If you are travelling between January and late February:
          </p>
          <ul class="itinerary-list mt-3" style="font-size:0.875rem">
            <li>
              <div class="itinerary-num" style="width:28px;height:28px;font-size:0.75rem">!</div>
              <div><strong>Heavy Traffic &amp; Diversions:</strong> Local traffic authorities redirect vehicles via the Arail side or Andawa bypass to keep Sangam nose clear.</div>
            </li>
            <li>
              <div class="itinerary-num" style="width:28px;height:28px;font-size:0.75rem">!</div>
              <div><strong>Pontoon Bridges:</strong> Floating pontoon bridges across Ganga and Yamuna are designated for one-way pedestrian or light traffic only.</div>
            </li>
            <li>
              <div class="itinerary-num" style="width:28px;height:28px;font-size:0.75rem">!</div>
              <div><strong>Advance Booking Essential:</strong> Cabs are in massive demand during Shahi Snan dates (Makar Sankranti, Mauni Amavasya, Basant Panchami). Please book at least 3–7 days ahead.</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 3: CHOOSE YOUR VEHICLE ═══ -->
<section class="section" id="vehicles">
  <div class="container">
    <span class="section-label">Fleet Selection</span>
    <h2>Choose Your Vehicle</h2>
    <div class="divider divider--left"></div>
    <p>Choose from our fleet of clean, commercial-licensed, air-conditioned taxis suited for any passenger count and luggage requirement.</p>

    <div class="grid grid-4 mt-6">
      <!-- Dzire -->
      <div class="card card-fare">
        <div class="card-fare__badge">Most Popular</div>
        <div class="card-fare__vehicle">Maruti Swift Dzire</div>
        <div class="card-fare__price">₹3,250 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">Round Trip: ₹6,500 (Verified)</p>
        <ul class="card-fare__features">
          <li>Seats: 4 Passengers</li>
          <li>Boot: 2 Medium Suitcases</li>
          <li>Efficient AC &amp; comfortable ride</li>
          <li>Ideal for couples &amp; solo pilgrims</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Dzire Cab to Prayagraj</h3>
        <p class="text-sm text-muted mt-1">The fastest, most cost-effective option for a day trip to Sangam or a quick drop at Prayagraj Junction.</p>
        <a class="btn btn-primary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_dzire')">Book Dzire (₹3,250)</a>
      </div>

      <!-- Ertiga -->
      <div class="card card-fare">
        <div class="card-fare__badge">Family Choice</div>
        <div class="card-fare__vehicle">Maruti Ertiga</div>
        <div class="card-fare__price">₹4,000 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">Round Trip: ₹8,000 (Verified)</p>
        <ul class="card-fare__features">
          <li>Seats: 6 Passengers</li>
          <li>Roof carrier for luggage</li>
          <li>Independent rear AC blowers</li>
          <li>Generous legroom in all rows</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Ertiga Cab to Prayagraj</h3>
        <p class="text-sm text-muted mt-1">Comfortably seats 5 to 6 family members with temple offerings, changes of clothes, and holy water cans.</p>
        <a class="btn btn-secondary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_ertiga')">Book Ertiga (₹4,000)</a>
      </div>

      <!-- Innova Crysta -->
      <div class="card card-fare">
        <div class="card-fare__badge">Maximum Comfort</div>
        <div class="card-fare__vehicle">Innova Crysta</div>
        <div class="card-fare__price">₹4,750 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">Round Trip: ₹9,500 (Verified)</p>
        <ul class="card-fare__features">
          <li>Seats: 6–7 Passengers</li>
          <li>Plush reclining captain seats</li>
          <li>Whisper-quiet highway ride</li>
          <li>Exceptional shock absorption</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Innova to Prayagraj</h3>
        <p class="text-sm text-muted mt-1">Essential for elderly parents who need effortless entry, plush seating, and silky smooth highway cruising.</p>
        <a class="btn btn-secondary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_innova')">Book Innova (₹4,750)</a>
      </div>

      <!-- Urbania & Tempo -->
      <div class="card card-fare">
        <div class="card-fare__badge" style="background:#DCFCE7;color:#166534">Group Yatra</div>
        <div class="card-fare__vehicle">Urbania / Tempo</div>
        <div class="card-fare__price">₹10,000 <span style="font-size:0.85rem;font-weight:400">day trip</span></div>
        <p class="card-fare__note">Tempo OW: ₹7,000 / RT: ₹14,000</p>
        <ul class="card-fare__features">
          <li>Seats: 9–12 (Urbania) / 16 (Tempo)</li>
          <li>Standing headroom &amp; wide aisle</li>
          <li>Air suspension &amp; luxury interiors</li>
          <li>Large dedicated luggage boot</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Tempo / Urbania to Sangam</h3>
        <p class="text-sm text-muted mt-1">The ₹10,000 Urbania Day Trip is an unbeatable, verified package for joint families visiting Triveni Sangam together.</p>
        <a class="btn btn-primary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_tempo')">Book Group Van</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 4: ONE-WAY VS ROUND-TRIP ═══ -->
<section class="section section-warm" id="trip-formats">
  <div class="container">
    <span class="section-label">Travel Formats</span>
    <h2>One-Way vs Round-Trip Taxi Service</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-arrow-right text-saffron" aria-hidden="true"></i> One-Way Drop (from ₹3,250)
        </h3>
        <p class="prose mt-3">
          Book a one-way transfer if your travel itinerary continues from Prayagraj onward to other parts of India, or if you are checking into a hotel in Civil Lines for an extended stay.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Fixed starting rate: ₹3,250 (Dzire Sedan)</li>
          <li>Direct drop at Prayagraj Junction (PRYJ), Subedarganj, or Bamrauli Airport (IXD)</li>
          <li>No empty return charges or driver overnight fees</li>
          <li>Guaranteed punctual pickup from your Varanasi address</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-arrows-rotate text-saffron" aria-hidden="true"></i> Same-Day Sangam Return (from ₹6,500)
        </h3>
        <p class="prose mt-3">
          <strong>Our most recommended option for Varanasi visitors!</strong> Because Prayagraj is only 2.5 hours away, you do not need to check out of your Varanasi hotel.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Early morning departure from Varanasi (6:00 AM – 7:00 AM)</li>
          <li>4 to 5 hours of relaxed standby time in Prayagraj</li>
          <li>Complete Triveni Sangam bath, boat ride, Bade Hanuman temple darshan, and Anand Bhavan visit</li>
          <li>Return to Varanasi by 6:00 PM – 7:30 PM in time for your dinner or resting</li>
        </ul>
      </div>
    </div>

    <!-- Suggested Day Tour Schedule -->
    <div class="card card-body mt-6" style="background:var(--clr-white)">
      <h3 class="text-navy" style="font-size:1.2rem">Perfect 1-Day Varanasi → Prayagraj → Varanasi Itinerary</h3>
      <p class="text-muted text-sm mt-1">Tested and perfected across hundreds of successful pilgrim trips:</p>

      <div class="grid grid-4 mt-4" style="gap:1rem">
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">06:30 AM – 09:15 AM</div>
          <div class="text-navy font-bold mt-1">Scenic Highway Cruise</div>
          <p class="text-xs text-muted mt-1">Depart Varanasi; smooth ride along 6-lane NH-19 with a quick stop for tea and breakfast near Handia.</p>
        </div>
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">09:30 AM – 12:30 PM</div>
          <div class="text-navy font-bold mt-1">Triveni Sangam Snan</div>
          <p class="text-xs text-muted mt-1">Board a traditional wooden boat to the sacred confluence of Ganga, Yamuna &amp; Saraswati for holy bath.</p>
        </div>
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">12:30 PM – 03:00 PM</div>
          <div class="text-navy font-bold mt-1">Bade Hanuman &amp; Fort</div>
          <p class="text-xs text-muted mt-1">Visit the subterranean Sleeping Hanuman Temple, Alopi Devi Shaktipeeth, and Akshay Vat corridor.</p>
        </div>
        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md)">
          <div style="color:var(--clr-saffron);font-weight:700">03:30 PM – 06:30 PM</div>
          <div class="text-navy font-bold mt-1">Anand Bhavan &amp; Return</div>
          <p class="text-xs text-muted mt-1">Brief visit to historic Anand Bhavan museum, then comfortable highway drive back to your Varanasi hotel.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 5: PICKUP & DROP-OFF ═══ -->
<section class="section" id="pickup-drop">
  <div class="container">
    <span class="section-label">Accurate Navigation</span>
    <h2>Pickup &amp; Drop-Off Locations</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div>
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.75rem">
          <i class="fas fa-location-dot text-saffron" aria-hidden="true"></i> Varanasi Pickup Points
        </h3>
        <p class="prose">
          We pick you up directly from wherever you are staying or arriving in Varanasi:
        </p>
        <ul class="itinerary-list mt-3">
          <li>
            <i class="fas fa-hotel text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Any Varanasi Hotel:</strong> Cantonment, Nadesar, Sigra, Maldahiya, Bhelupur, Godowlia perimeter, or Assi Ghat area.</div>
          </li>
          <li>
            <i class="fas fa-train text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Varanasi Railway Stations:</strong> Varanasi Cantt Junction (BSB), Banaras Station (BSBS / Manduadih), or Kashi Railway Station.</div>
          </li>
          <li>
            <i class="fas fa-plane-arrival text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Varanasi Airport (VNS):</strong> Lal Bahadur Shastri International Airport Babatpur (direct ring-road access to NH-19).</div>
          </li>
        </ul>
      </div>

      <div>
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.75rem">
          <i class="fas fa-crosshairs text-saffron" aria-hidden="true"></i> Prayagraj Drop &amp; Sightseeing Points
        </h3>
        <p class="prose">
          In Prayagraj, our chauffeur navigates smoothly across the city's holy and historical landmarks:
        </p>
        <ul class="itinerary-list mt-3">
          <li>
            <i class="fas fa-water text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Triveni Sangam Area:</strong> Drop and standby at Sangam Ghat parking or Arail Ghat (convenient for boat hire).</div>
          </li>
          <li>
            <i class="fas fa-gopuram text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Temples:</strong> Bade Hanuman Ji (Lethe Hanuman Temple), Alopi Devi Temple, Patalpuri Temple, and Mankameshwar Temple.</div>
          </li>
          <li>
            <i class="fas fa-landmark text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Historical &amp; Transport Hubs:</strong> Anand Bhavan museum, Swaraj Bhavan, Prayagraj Junction (PRYJ), or Bamrauli Airport.</div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Sacred Attractions in Prayagraj -->
    <div class="mt-8">
      <h3 class="text-navy" style="font-size:1.25rem">Highlights You Will Visit in Prayagraj</h3>
      <div class="grid grid-3 mt-4">
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🌊</div>
          <h4 class="text-navy" style="font-size:1.05rem">Triveni Sangam</h4>
          <p class="text-sm text-muted mt-1">The mystical, holy confluence of three sacred rivers: Ganga, Yamuna, and subterranean Saraswati. The premier site for holy snan.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🚩</div>
          <h4 class="text-navy" style="font-size:1.05rem">Bade Hanuman Ji Temple</h4>
          <p class="text-sm text-muted mt-1">One of the rarest shrines in Hinduism where Lord Hanuman is depicted in a reclining (sleeping) posture below ground level.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🏛️</div>
          <h4 class="text-navy" style="font-size:1.05rem">Anand Bhavan</h4>
          <p class="text-sm text-muted mt-1">The historic two-storey mansion turned museum, showcasing India's freedom struggle and the memorabilia of the Nehru family.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🕉️</div>
          <h4 class="text-navy" style="font-size:1.05rem">Alopi Devi Shaktipeeth</h4>
          <p class="text-sm text-muted mt-1">A revered Siddh Peeth dedicated to Mata Alopi, where a wooden palanquin (doli) is worshipped instead of an idol.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🌳</div>
          <h4 class="text-navy" style="font-size:1.05rem">Akshay Vat &amp; Patalpuri</h4>
          <p class="text-sm text-muted mt-1">The immortal banyan tree referenced in ancient puranas, located in the underground corridors of Allahabad Fort.</p>
        </div>
        <div class="card card-body">
          <div style="font-size:1.75rem;margin-bottom:0.5rem">🌹</div>
          <h4 class="text-navy" style="font-size:1.05rem">Chandra Shekhar Azad Park</h4>
          <p class="text-sm text-muted mt-1">Prayagraj's largest public park, housing the memorial of legendary revolutionary Chandra Shekhar Azad and the Allahabad Museum.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 6: HOW TO BOOK ═══ -->
<section class="section section-warm" id="how-to-book">
  <div class="container">
    <span class="section-label">Easy 4-Step Process</span>
    <h2>How to Book</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-4 mt-6">
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem">1</div>
        <h3 class="text-navy" style="font-size:1.1rem">Share Journey Info</h3>
        <p class="text-sm text-muted mt-2">Fill the simple inquiry form below, or send a WhatsApp message with your pickup date, time, and passenger count.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem;background:var(--clr-saffron)">2</div>
        <h3 class="text-navy" style="font-size:1.1rem">Transparent Confirmation</h3>
        <p class="text-sm text-muted mt-2">We verify vehicle availability and confirm your booking with an itemised breakdown. Zero hidden charges.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem">3</div>
        <h3 class="text-navy" style="font-size:1.1rem">Chauffeur Assigned</h3>
        <p class="text-sm text-muted mt-2">Your driver's name, phone number, and vehicle registration are shared on your phone well ahead of departure.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem;background:var(--clr-success)">4</div>
        <h3 class="text-navy" style="font-size:1.1rem">Smooth Highway Ride</h3>
        <p class="text-sm text-muted mt-2">Enjoy a punctual, stress-free trip along NH-19. Pay directly upon reaching your destination via cash or UPI.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 7: FREQUENTLY ASKED QUESTIONS ═══ -->
<section class="section" id="faq">
  <div class="container" style="max-width:800px">
    <div class="text-center">
      <span class="section-label">Got Questions?</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Clear answers to everything you need to know about taking a taxi from Varanasi to Prayagraj.</p>
    </div>

    <div class="faq-list mt-8">
      <?php foreach ($faqSchema['mainEntity'] as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-prayagraj-<?php echo $i; ?>">
          <span><?php echo htmlspecialchars($faq['name']); ?></span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-prayagraj-<?php echo $i; ?>" role="region">
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
    <span class="section-label">Connect More Sacred Destinations</span>
    <h2>Related Routes</h2>
    <div class="divider divider--left"></div>
    <p>Discover other high-demand intercity routes and specialized pilgrimage packages operated by Book Cab Varanasi:</p>

    <div class="grid grid-3 mt-6">
      <a class="card-route" href="/routes/prayagraj-to-varanasi-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj <span class="card-route__arrow">→</span> Varanasi</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 125 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 2.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹3,250</div>
          <p class="text-sm mt-3 text-muted">Returning from Prayagraj to Kashi. Pickups from Sangam Ghat, Civil Lines, or Prayagraj Junction.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/prayagraj-sangam-sightseeing/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj Sangam Tour</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-star text-saffron" aria-hidden="true"></i> Curated Package</span>
            <span class="card-route__tag"><i class="fas fa-calendar" aria-hidden="true"></i> 1 Day</span>
          </div>
          <div class="card-route__fare">Curated Tour</div>
          <p class="text-sm mt-3 text-muted">Dedicated pilgrimage day package covering Sangam, Bade Hanuman, Alopi Devi &amp; Anand Bhavan.</p>
        </div>
      </a>

      <a class="card-route" href="/guides/prayagraj-magh-mela-transport/">
        <div class="card-route__body">
          <div class="card-route__cities">Magh Mela Transport Guide</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-book-open" aria-hidden="true"></i> Travel Guide</span>
          </div>
          <div class="card-route__fare">Free Insights</div>
          <p class="text-sm mt-3 text-muted">Complete guide to parking zones, pontoon bridges, Shahi Snan dates, and taxi regulations.</p>
        </div>
      </a>

      <a class="card-route" href="/routes/varanasi-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~200 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 4.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹6,500</div>
          <p class="text-sm mt-3 text-muted">Visit Ram Janmabhoomi, Hanuman Garhi, and Saryu Ghat in comfortable chauffeur-driven cabs.</p>
        </div>
      </a>

      <a class="card-route" href="/locations/prayagraj/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj City Guide</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-map-pin" aria-hidden="true"></i> City Guide</span>
          </div>
          <div class="card-route__fare">Pilgrim Info</div>
          <p class="text-sm mt-3 text-muted">In-depth overview of holy ghats, temple rituals, historical landmarks, and local dining in Prayagraj.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/varanasi-prayagraj-ayodhya-package/">
        <div class="card-route__body">
          <div class="card-route__cities">3-City Pilgrimage Circuit</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-om text-saffron" aria-hidden="true"></i> Kashi-Prayag-Ayodhya</span>
          </div>
          <div class="card-route__fare">Best Value</div>
          <p class="text-sm mt-3 text-muted">Seamless multi-day spiritual circuit package linking Varanasi, Prayagraj, and Ayodhya Dham.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Prayagraj';
$form_section_id  = 'prayagraj-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
