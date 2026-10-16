<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Varanasi Airport Taxi — Lal Bahadur Shastri Airport Transfers | Book Cab Varanasi';
$meta_desc   = 'Book a Varanasi airport taxi (LBS Airport code: VNS). Reliable pickup & drop. Force Urbania from ₹1,500. 24/7 flight tracking service. No hidden charges.';
$canonical   = 'https://bookcabvaranasi.com/services/varanasi-airport-taxi/';
$og_title    = 'Varanasi Airport Taxi Service — Lal Bahadur Shastri Airport (VNS) | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Varanasi Airport taxi transfer';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Services', 'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Varanasi Airport Taxi', 'url' => $canonical],
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How do I find my driver at Varanasi Airport?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Your chauffeur will wait outside the Arrival Gate on the ground floor holding a personalized name placard. Before your flight lands, you will receive your driver’s name, contact number, and vehicle registration number via WhatsApp and SMS. If you cannot spot your driver due to crowd restrictions, call +91-9838409911 immediately.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What if my flight to Varanasi is delayed?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'We track all incoming flights to Lal Bahadur Shastri International Airport (VNS) in real time. We automatically adjust your pickup time according to your actual flight landing time at no extra charge. We also provide 30 minutes of free waiting time starting from the moment your aircraft touches down.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I book a same-day or last-minute airport cab?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. While pre-booking at least 2 to 4 hours in advance is recommended to ensure your preferred vehicle, we maintain cabs on standby near Babatpur Airport and can arrange urgent pickups within 15–20 minutes. Simply call or WhatsApp +91-9648974238 for instant dispatch.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does the cab go to the new terminal / Babatpur airport gate?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. Our cabs have full commercial permits to enter the authorized passenger pickup lanes directly in front of the Lal Bahadur Shastri International Airport terminal at Babatpur. For drop-offs, we deliver you straight to the departure gate ramp.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'How long does it take to reach Varanasi city center or Ghats from the airport?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The distance from Lal Bahadur Shastri Airport to the Varanasi city center (Godowlia / Dashashwamedh Ghat area) is approximately 26 km and takes 30 to 40 minutes via the NH-31 Babatpur 4-lane highway. Travel to BHU / Assi Ghat is 32 km (35–45 minutes), and Sarnath is 28 km (20–30 minutes via the Ring Road bypass).'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Are there any night charges or extra fees for late-night airport arrivals?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No. Book Cab Varanasi operates 24/7 with zero night surcharge for airport transfers. Our fixed base fares remain identical whether your flight lands at 2:00 PM or 2:00 AM. Only mandatory toll tax (₹100–₹150) and actual airport parking receipts are additional.'
            ]
        ]
    ]
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonical . '#service',
    'name'        => 'Varanasi Airport Taxi Service — Lal Bahadur Shastri Airport (VNS)',
    'serviceType' => 'Airport Transfer Service',
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
        ['@type' => 'Airport', 'name' => 'Lal Bahadur Shastri International Airport', 'iataCode' => 'VNS'],
        ['@type' => 'City', 'name' => 'Varanasi']
    ],
    'url'         => $canonical,
    'description' => 'Chauffeur-driven airport transfer service between Lal Bahadur Shastri International Airport (VNS) Babatpur and Varanasi city hotels, ghats, Sarnath, and railway terminals.'
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
      <a href="/services/outstation-taxi-varanasi/">Services</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Varanasi Airport Taxi</span>
    </nav>
    <h1 class="page-hero__title">Varanasi Airport Taxi — Lal Bahadur Shastri Airport Transfers</h1>
    <p class="page-hero__desc">Pre-book your stress-free pickup &amp; drop at Babatpur Airport (IATA: VNS). 24/7 flight delay monitoring, professional chauffeurs with name boards, and clean, AC cabs from ₹1,000.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','page_hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','page_hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> Book on WhatsApp
      </a>
      <a class="btn btn-secondary btn-lg" href="#airport-booking">
        <i class="fas fa-calculator" aria-hidden="true"></i> Get Instant Quote
      </a>
    </div>
  </div>
</section>

<!-- ═══ KEY HIGHLIGHTS BAR ═══ -->
<section class="trust-bar" aria-label="Service guarantees">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">24/7</div>
        <div class="trust-item__label">Flight Tracking &amp; Pickups</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">30 Min</div>
        <div class="trust-item__label">Free Waiting Time</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹0</div>
        <div class="trust-item__label">Night Surcharge</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4.8★</div>
        <div class="trust-item__label">Rated by 470+ Travelers</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FARES & INCLUSIONS ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Verified Rates</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Lal Bahadur Shastri International Airport (IATA: <strong>VNS</strong>) is located at Babatpur, roughly 26 kilometers northwest of the Varanasi city center. Unlike unmetered street taxis or app-based surge rates, Book Cab Varanasi provides transparent, guaranteed fixed-rate airport transfers with zero hidden surcharges.
    </p>

    <!-- Fare Table -->
    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Varanasi Airport cab transfer fares">
        <thead>
          <tr>
            <th scope="col">Vehicle Type</th>
            <th scope="col">Passenger Capacity</th>
            <th scope="col">Luggage Allowance</th>
            <th scope="col">One-Way Airport Fare</th>
            <th scope="col">Inclusions &amp; Extras</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Maruti Swift Dzire</strong><br><span class="text-xs text-muted">AC Sedan</span></td>
            <td>4 Passengers</td>
            <td>2 Large Bags + 2 Cabin Bags</td>
            <td class="price">₹1,000</td>
            <td>AC, fuel, chauffeur included. Toll (~₹100) &amp; parking extra.</td>
          </tr>
          <tr>
            <td><strong>Maruti Ertiga</strong><br><span class="text-xs text-muted">Spacious 6-Seater MUV</span></td>
            <td>6 Passengers</td>
            <td>3 Large Bags + 3 Handbags</td>
            <td class="price">₹1,200</td>
            <td>AC, fuel, chauffeur included. Toll (~₹100) &amp; parking extra.</td>
          </tr>
          <tr>
            <td><strong>Toyota Innova Crysta</strong><br><span class="text-xs text-muted">Premium Executive MPV</span></td>
            <td>6–7 Passengers</td>
            <td>4 Large Suitcases + Cabin Bags</td>
            <td class="price">₹1,500</td>
            <td>AC, fuel, chauffeur included. Toll (~₹100) &amp; parking extra.</td>
          </tr>
          <tr>
            <td><strong>Force Urbania (6–7 Seater)</strong><br><span class="text-xs text-muted">Luxury Recliner Van</span></td>
            <td>6–7 Passengers</td>
            <td>Dedicated boot space (6+ bags)</td>
            <td class="price">₹1,500</td>
            <td>Panoramic windows, charging ports. Toll &amp; parking extra.</td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller 16/17 Seater</strong><br><span class="text-xs text-muted">Mini Bus for Groups</span></td>
            <td>16 Passengers</td>
            <td>Rear luggage bay + roof carrier</td>
            <td class="price">₹2,500</td>
            <td>AC group transfer, fuel included. Toll &amp; parking extra.</td>
          </tr>
          <tr>
            <td><strong>Force Urbania (9–12 Seater)</strong><br><span class="text-xs text-muted">VIP Large Group Van</span></td>
            <td>9–12 Passengers</td>
            <td>Massive luggage hold (12+ bags)</td>
            <td class="price">₹3,000</td>
            <td>Luxury plush seating, dual AC. Toll &amp; parking extra.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Fare Inclusions & Notes -->
    <div class="grid grid-2 mt-6">
      <div class="card card-body" style="border-left:4px solid var(--clr-success)">
        <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:0.75rem">
          <i class="fas fa-check-circle text-saffron" aria-hidden="true"></i> What Is Included in Your Fare
        </h3>
        <ul class="card-fare__features">
          <li>Doorstep drop-off to your Varanasi hotel, guesthouse, or ghat meeting point</li>
          <li>Airport pickup right outside the arrival terminal gate with a name placard</li>
          <li>Live flight delay tracking with zero penalty for delayed arrivals</li>
          <li>30 minutes of complimentary waiting time after flight touchdown</li>
          <li>Clean, sanitized vehicle with functional climate control (AC)</li>
          <li>Zero night travel surcharge — 24/7 flat rates</li>
        </ul>
      </div>

      <div class="card card-body" style="border-left:4px solid var(--clr-saffron)">
        <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:0.75rem">
          <i class="fas fa-receipt text-saffron" aria-hidden="true"></i> Actual Toll &amp; Parking Fees (Extra)
        </h3>
        <p class="text-sm">
          To maintain 100% billing integrity, municipal toll plaza fees and official airport parking fees are kept separate and charged strictly at actual government rates:
        </p>
        <ul class="card-fare__features mt-2">
          <li><strong>NH-31 Toll Plaza:</strong> Approximately ₹100–₹150 per trip as per NHAI receipt.</li>
          <li><strong>Airport Parking Fee:</strong> ₹50–₹100 as per Airport Authority of India (AAI) parking token.</li>
          <li><strong>Waiting Beyond 30 Min:</strong> ₹100 per 30 minutes if you are delayed inside baggage claim or customs.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ DISTANCE, ROUTE & TRAVEL TIME ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Travel Guide</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Lal Bahadur Shastri International Airport sits along National Highway 31 (NH-31) in Babatpur. In recent years, the construction of the Babatpur-Varanasi 4-lane elevated highway and the Varanasi Ring Road Phase-1 has significantly cut travel times into the city.
    </p>

    <div class="grid grid-3 mt-6">
      <!-- Route 1: City Center & Ghats -->
      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:.5rem">🛕</div>
        <h3 class="text-navy" style="font-size:1.15rem">Airport → City Center &amp; Ghats</h3>
        <p class="text-xs text-saffron font-bold">Dashashwamedh · Godowlia · Chowk</p>
        <ul class="mt-3 text-sm" style="list-style:disc;margin-left:1.2rem;color:var(--clr-text-muted)">
          <li><strong>Distance:</strong> ~26 km</li>
          <li><strong>Travel Time:</strong> 30 to 40 minutes</li>
          <li><strong>Route:</strong> NH-31 via Shivpur, Cantt flyover &amp; Godowlia access.</li>
          <li><strong>Important Note:</strong> The old city and ghat lanes are pedestrian-only. Cabs drop passengers at the nearest designated parking zone (Godowlia Crossing, Maidagin, or Luxa Road) just a short 200–400 meter walk from your riverside hotel.</li>
        </ul>
      </div>

      <!-- Route 2: BHU & Assi Ghat -->
      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:.5rem">🌊</div>
        <h3 class="text-navy" style="font-size:1.15rem">Airport → BHU &amp; Assi Ghat</h3>
        <p class="text-xs text-saffron font-bold">Assi Ghat · Lanka · Durgakund · BHU</p>
        <ul class="mt-3 text-sm" style="list-style:disc;margin-left:1.2rem;color:var(--clr-text-muted)">
          <li><strong>Distance:</strong> ~32 km</li>
          <li><strong>Travel Time:</strong> 35 to 45 minutes</li>
          <li><strong>Route:</strong> NH-31 through the Ring Road Phase-1 bypass via Lahartara &amp; Lanka.</li>
          <li><strong>Tip:</strong> Bypassing the narrow Cantt market via the Ring Road saves 15 minutes of rush-hour traffic during peak pilgrimage seasons.</li>
        </ul>
      </div>

      <!-- Route 3: Sarnath Pilgrimage -->
      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:.5rem">☸️</div>
        <h3 class="text-navy" style="font-size:1.15rem">Airport → Sarnath</h3>
        <p class="text-xs text-saffron font-bold">Dhamek Stupa · Archeological Museum</p>
        <ul class="mt-3 text-sm" style="list-style:disc;margin-left:1.2rem;color:var(--clr-text-muted)">
          <li><strong>Distance:</strong> ~28 km</li>
          <li><strong>Travel Time:</strong> 20 to 30 minutes</li>
          <li><strong>Route:</strong> Direct transit via Varanasi Ring Road towards Sarnath crossing.</li>
          <li><strong>Tip:</strong> If your flight arrives in the morning, our chauffeur can take you straight to Sarnath for sightseeing before dropping you at your city hotel.</li>
        </ul>
      </div>
    </div>

    <!-- Alert Box on Pedestrian Zones -->
    <div class="alert alert-warning mt-6">
      <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
      <strong>Pedestrian Restrictions Near Riverfront:</strong> Motorized four-wheelers cannot enter the ancient riverfront alleyways (galis) leading directly into Kashi Vishwanath Dham and Dashashwamedh Ghat. Our chauffeurs drop you at the officially permitted vehicular perimeter (such as Godowlia, Maidagin, or Luxa). E-rickshaws, cycle-rickshaws, or luggage porters (coolies) are readily available at these spots to transfer your bags to ghat properties.
    </div>
  </div>
</section>

<!-- ═══ CHOOSE YOUR VEHICLE ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Our Fleet</span>
    <h2>Choose Your Vehicle</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Every cab in our airport fleet is commercially licensed, equipped with air conditioning, thoroughly sanitised before dispatch, and piloted by a polite, background-verified chauffeur who knows Varanasi inside and out.
    </p>

    <div class="grid grid-4 mt-6">
      <!-- Swift Dzire -->
      <div class="card-fare">
        <div class="card-fare__vehicle">Swift Dzire Sedan</div>
        <div class="card-fare__price">₹1,000</div>
        <div class="card-fare__note">Ideal for solo travelers &amp; couples</div>
        <ul class="card-fare__features mt-4">
          <li>Up to 4 passengers</li>
          <li>Boot space for 2 check-in bags</li>
          <li>Chilled air-conditioning</li>
          <li>Smooth highway suspension</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Sedan</a>
      </div>

      <!-- Maruti Ertiga -->
      <div class="card-fare">
        <div class="card-fare__badge">Popular</div>
        <div class="card-fare__vehicle">Maruti Ertiga MUV</div>
        <div class="card-fare__price">₹1,200</div>
        <div class="card-fare__note">Best value for small families</div>
        <ul class="card-fare__features mt-4">
          <li>Up to 6 passengers</li>
          <li>Flexible 3rd-row luggage fold</li>
          <li>Dual AC vents front &amp; rear</li>
          <li>Comfortable legroom</li>
        </ul>
        <a class="btn btn-primary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Ertiga</a>
      </div>

      <!-- Toyota Innova Crysta -->
      <div class="card-fare">
        <div class="card-fare__vehicle">Toyota Innova Crysta</div>
        <div class="card-fare__price">₹1,500</div>
        <div class="card-fare__note">VIP executive travel</div>
        <ul class="card-fare__features mt-4">
          <li>6 to 7 passengers</li>
          <li>Plush captain seats available</li>
          <li>Ample luggage room (4+ suitcases)</li>
          <li>Superior ride comfort</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Innova</a>
      </div>

      <!-- Force Urbania / Tempo -->
      <div class="card-fare">
        <div class="card-fare__vehicle">Urbania &amp; Tempo</div>
        <div class="card-fare__price">from ₹1,500</div>
        <div class="card-fare__note">Groups, pilgrimages &amp; weddings</div>
        <ul class="card-fare__features mt-4">
          <li>6, 12, or 16–17 seaters</li>
          <li>Reclining high-back seats</li>
          <li>Massive dedicated luggage bays</li>
          <li>Panoramic glass &amp; mic systems</li>
        </ul>
        <a class="btn btn-secondary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Group Van</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ONE-WAY VS ROUND-TRIP ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Transfer Options</span>
    <h2>One-Way vs Round-Trip Airport Transfers</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.75rem">
          <i class="fas fa-plane-arrival text-saffron" aria-hidden="true"></i> One-Way Airport Transfer
        </h3>
        <p>
          Perfect when arriving in Varanasi or heading home after completing your tour. You can book an airport arrival pickup or a scheduled departure transfer from your hotel.
        </p>
        <ul class="card-fare__features mt-3">
          <li>Fixed flat fare starting at ₹1,000</li>
          <li>Guaranteed on-time arrival for scheduled flight departures</li>
          <li>Luggage assistance from the vehicle into the terminal trolley</li>
          <li>Zero surge pricing during adverse weather or flight peak hours</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.75rem">
          <i class="fas fa-sync text-saffron" aria-hidden="true"></i> Same-Day Airport Round Trip
        </h3>
        <p>
          Visiting Varanasi for a short business conference, an urgent court hearing, or an express VIP darshan at Kashi Vishwanath? Choose our round-trip airport service or combine it with a local sightseeing package.
        </p>
        <ul class="card-fare__features mt-3">
          <li>Airport pickup → Temple / Meeting / Sightseeing → Airport drop</li>
          <li>Sedan package from ₹2,000 (8hr/80km local package includes airport leg)</li>
          <li>Keep your luggage safe inside the vehicle during meetings or darshan</li>
          <li>Your chauffeur remains stationed with the car throughout the day</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PICKUP & DROP-OFF GUIDANCE ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Airport Arrival Guide</span>
    <h2>Pickup &amp; Drop-Off at Babatpur Airport</h2>
    <div class="divider divider--left"></div>

    <div class="prose mt-4" style="max-width:800px">
      <p>
        Arriving in a bustling spiritual hub like Varanasi should feel welcoming, not chaotic. Here is exactly what happens when you land at Lal Bahadur Shastri International Airport:
      </p>

      <h3>Meeting Your Chauffeur</h3>
      <p>
        After clearing baggage claim and entering the ground-floor Arrival Hall, exit through <strong>Gate 1 or Gate 2</strong>. Your chauffeur will be waiting right at the passenger meeting barrier holding a clear placard printed with your full name. Because we assign your driver well before your flight arrives, you will already have the driver’s name, photo, and direct mobile number on your phone.
      </p>

      <h3>Luggage Policy</h3>
      <p>
        Our standard sedan fare covers <strong>1 large check-in suitcase (up to 25 kg) + 1 cabin handbag per passenger</strong>. If you are carrying extra oversized bags, pooja materials, or brassware souvenirs, please let us know during booking so we can arrange an Ertiga or Innova Crysta with a fold-down third row or luggage carrier.
      </p>

      <h3>Flight Delay Policy &amp; Waiting Time</h3>
      <p>
        Aviation delays are common across North India, especially during winter morning fog. Our operations desk tracks your flight code via live radar. If your flight is delayed by 1 hour or even 4 hours, your driver is automatically rescheduled without any cancellation penalty. Once your aircraft actually touches down, you enjoy <strong>30 minutes of complimentary waiting time</strong> to collect your luggage. If baggage retrieval takes longer, waiting is billed at an affordable ₹100 per 30 minutes.
      </p>

      <div class="highlight-box mt-4">
        <strong>Can’t spot your driver?</strong> Airport security guards occasionally ask drivers to cycle through the parking lane. If you do not immediately see your name board, please do not accept rides from unauthorized touts. Call our 24/7 central desk directly at <a href="tel:+<?php echo BCV_PHONE_RAW; ?>" class="font-bold text-navy">+91-9838409911</a> or call your assigned driver.
      </div>
    </div>
  </div>
</section>

<!-- ═══ HOW TO BOOK ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Easy Booking</span>
    <h2>How to Book Your Varanasi Airport Cab</h2>
    <div class="divider divider--left"></div>

    <ol class="itinerary-list mt-6" style="max-width:720px">
      <li>
        <div class="itinerary-num">1</div>
        <div>
          <strong class="text-navy">Share Your Flight Details:</strong>
          <p class="text-sm mt-1">Submit the booking form below, or drop a WhatsApp message with your flight number, arrival date, estimated landing time, and your destination hotel or address in Varanasi.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">2</div>
        <div>
          <strong class="text-navy">Instant Fare Confirmation:</strong>
          <p class="text-sm mt-1">We immediately send you a confirmed, fixed-price quote based on your vehicle selection. No upfront advance payment is required for standard airport transfers.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">3</div>
        <div>
          <strong class="text-navy">Driver Assigned on WhatsApp:</strong>
          <p class="text-sm mt-1">2 to 3 hours prior to your scheduled landing, our operations team sends your driver’s name, verified mobile number, and car registration details directly to your WhatsApp.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">4</div>
        <div>
          <strong class="text-navy">Smooth Pickup &amp; Direct Drop:</strong>
          <p class="text-sm mt-1">Meet your driver at the arrival barrier, relax in air-conditioned comfort, and pay the chauffeur via Cash, UPI, or GPay upon reaching your destination safely.</p>
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
      <p>Everything you need to know about booking an airport taxi at Varanasi Babatpur Airport.</p>
    </div>

    <div class="faq-list mt-6">
      <?php foreach ($faqSchema['mainEntity'] as $i => $item): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-airport-<?php echo $i; ?>">
          <?php echo htmlspecialchars($item['name']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-airport-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($item['acceptedAnswer']['text']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ RELATED ROUTES & SERVICES ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Explore More</span>
    <h2>Related Varanasi Cab Services</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">Connecting your airport transfer with other pilgrimage and intercity travel plans:</p>

    <div class="grid grid-3 mt-6">
      <!-- Railway Station Cab -->
      <a class="card-route" href="/services/varanasi-railway-station-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">🚉 Railway Station Cab</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-train" aria-hidden="true"></i> Cantt, Kashi &amp; Banaras</span>
          </div>
          <div class="card-route__fare">from ₹300</div>
          <p class="text-sm mt-3">Reliable transfers from Varanasi Cantt (BSB), Banaras (BSBS), and Kashi stations directly to your hotel.</p>
        </div>
      </a>

      <!-- Varanasi Local 8hr/80km -->
      <a class="card-route" href="/services/varanasi-local-8hr-80km/">
        <div class="card-route__body">
          <div class="card-route__cities">🚕 Varanasi Local Sightseeing</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 8Hr/80Km &amp; 12Hr</span>
          </div>
          <div class="card-route__fare">from ₹2,000</div>
          <p class="text-sm mt-3">Full-day cab for Kashi Vishwanath Dham, Annapurna, Sarnath Museum, Sankat Mochan &amp; evening Ganga Aarti.</p>
        </div>
      </a>

      <!-- Varanasi City Guide -->
      <a class="card-route" href="/locations/varanasi/">
        <div class="card-route__body">
          <div class="card-route__cities">📍 Varanasi City Hub</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Complete Travel Guide</span>
          </div>
          <div class="card-route__fare">Local Expert</div>
          <p class="text-sm mt-3">Comprehensive local information on Ghat timings, VIP Darshan passes, boat ride costs, and city transport.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi Airport';
$form_destination = 'Varanasi City';
$form_section_id  = 'airport-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
