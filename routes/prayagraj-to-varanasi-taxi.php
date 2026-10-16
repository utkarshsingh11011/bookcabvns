<?php
require_once __DIR__ . '/../includes/config.php';

// Set SEO variables BEFORE head.php
$page_title  = 'Prayagraj to Varanasi Taxi | Cab Fare from ₹3,250 | Book Cab Varanasi';
$meta_desc   = 'Book a cab from Prayagraj to Varanasi from ₹3,250. Comfortable, reliable taxi service from Sangam to Kashi. Seats 4-26. Get your free quote.';
$canonical   = 'https://bookcabvaranasi.com/routes/prayagraj-to-varanasi-taxi/';
$og_title    = 'Prayagraj to Varanasi Taxi | Cab Fare from ₹3,250 | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Prayagraj to Varanasi taxi';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Routes',   'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Prayagraj to Varanasi Taxi', 'url' => $canonical],
];

// Structured Data: FAQPage + TaxiService Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How do I coordinate pickup from Triveni Sangam or the Magh Mela grounds in Prayagraj?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Our driver will park at the primary designated Sangam parking ground (such as the Parade Ground lot or the Arail Ghat parking on the south bank) and share their live WhatsApp location. Once you finish your holy bath, changing of clothes, and boat ride, you can call the driver for a seamless meetup at the parking gate.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What time should we leave Prayagraj to attend the evening Ganga Aarti in Varanasi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The evening Ganga Aarti at Dashashwamedh Ghat starts between 6:30 PM (winter) and 7:00 PM (summer). Because vehicle drop points near the ghats (such as Godowlia or Girjaghar) experience evening pedestrian traffic, we strongly recommend departing Prayagraj by 2:30 PM to 3:00 PM at the latest. This gives you 2.5 hours of highway drive plus ample time to settle in and find prime ghat or boat seating.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can the cab drop us directly at Kashi Vishwanath Temple or Dashashwamedh Ghat?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No private or commercial vehicle can drive directly into the ancient narrow lanes (galis) of Varanasi. The district administration strictly enforces pedestrian-only zones around Godowlia, Dashashwamedh, and Vishwanath Gali. Your driver will drop you at the closest accessible motorable point (Godowlia Crossing, Maidagin, or Girjaghar), from where you can take a 2-minute cycle rickshaw or a short walk to the temple corridor.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Where does the driver meet passengers at Prayagraj Junction (PRYJ) or Civil Lines?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'At Prayagraj Junction, our driver normally waits outside the Civil Lines side exit (Platform 1 side) near the main car parking, or the City Side exit (Platform 6) as requested. For hotels in Civil Lines, our driver arrives right at the hotel porch.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I book a direct taxi from Prayagraj to Varanasi Airport (Babatpur VNS)?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. We frequently operate direct transfers from Prayagraj to Lal Bahadur Shastri International Airport (VNS). The drive takes approximately 2.5 to 3 hours via the NH-19 and Varanasi Ring Road Phase 1 bypass, avoiding congested central Varanasi city traffic completely.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is there safe storage in the cab for holy Triveni Sangam water (Gangajal / Triveni Jal)?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. It is a time-honored Hindu tradition to bring Triveni Sangam water to Kashi to offer Jalabhishek to Lord Vishwanath. Our chauffeurs take special care to keep your sealed plastic cans or brass kalash upright and securely packed in the vehicle trunk with clean mats.'
            ]
        ],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TaxiService',
    '@id'         => $canonical . '#service',
    'name'        => 'Prayagraj to Varanasi Taxi Service',
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
        ['@type' => 'City', 'name' => 'Varanasi'],
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '3250',
        'priceCurrency' => 'INR',
        'description'   => 'One-way AC Sedan taxi from Prayagraj to Varanasi',
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
      <span class="breadcrumb__current">Prayagraj to Varanasi Taxi</span>
    </nav>
    <h1 class="page-hero__title">Prayagraj to Varanasi Taxi</h1>
    <p class="page-hero__desc">Reliable, punctual taxi service connecting Triveni Sangam and Prayagraj to the holy ghats and temples of Kashi. Swift Dzire starting at ₹3,250.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
      <a class="btn btn-secondary btn-lg" href="#varanasi-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4)">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Request Free Quote
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
        <div class="trust-item__label"><i class="fas fa-road text-saffron" aria-hidden="true"></i> Distance via NH-19</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">2.5–3 Hrs</div>
        <div class="trust-item__label"><i class="fas fa-clock text-saffron" aria-hidden="true"></i> Driving Duration</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹3,250</div>
        <div class="trust-item__label"><i class="fas fa-tag text-saffron" aria-hidden="true"></i> Verified Sedan Rate</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">10,000+</div>
        <div class="trust-item__label"><i class="fas fa-users text-saffron" aria-hidden="true"></i> Pilgrims Served</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 1: FARE TABLE & INCLUSIONS ═══ -->
<section class="section" id="fares">
  <div class="container">
    <span class="section-label">Honest Pricing</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p>Whether you are returning to your Varanasi base after taking holy snan at the Triveni Sangam, or catching an onward train or flight from Varanasi, our fixed fares guarantee a transparent and peaceful journey.</p>

    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Prayagraj to Varanasi taxi fare details">
        <thead>
          <tr>
            <th scope="col">Vehicle Type</th>
            <th scope="col">Capacity</th>
            <th scope="col">One-Way Fare</th>
            <th scope="col">Round-Trip Rate</th>
            <th scope="col">Recommended For</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
            <td>4 Passengers + 2 Bags</td>
            <td class="price">₹3,250</td>
            <td class="price">₹6,500</td>
            <td>Couples, solo travelers, small family transfers (Verified)</td>
          </tr>
          <tr>
            <td><strong>Maruti Ertiga</strong> (Comfort MUV)</td>
            <td>6 Passengers + 3 Bags</td>
            <td class="price">₹4,000</td>
            <td class="price">₹8,000</td>
            <td>Families carrying luggage and sacred Sangam water containers</td>
          </tr>
          <tr>
            <td><strong>Toyota Innova Crysta</strong> (Luxury MPV)</td>
            <td>6–7 Passengers + 4 Bags</td>
            <td class="price">₹4,750</td>
            <td class="price">₹9,500</td>
            <td>Elderly pilgrims needing plush captain seats and gentle suspension</td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller</strong> (12–17 Seater)</td>
            <td>12–17 Passengers + Bags</td>
            <td class="price">₹7,000</td>
            <td class="price">₹14,000</td>
            <td>Ashram pilgrim groups, bhajan mandalis, joint family yatras</td>
          </tr>
          <tr>
            <td><strong>Force Urbania</strong> (Luxury 9–12 Seater)</td>
            <td>9–12 Passengers + Luggage</td>
            <td class="note">Tour Package Only</td>
            <td class="price">₹10,000 <span class="tag tag--saffron">Day Tour</span></td>
            <td>Premium pilgrimage group travel with panoramic views</td>
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
          <li>Chauffeur-driven private air-conditioned vehicle</li>
          <li>All fuel costs and driver daily running allowance</li>
          <li>Prompt pickup anywhere in Prayagraj (Sangam, Civil Lines, PRYJ station, Bamrauli airport)</li>
          <li>Drop-off at your hotel, Varanasi Cantt / Banaras station, or nearest ghat motorable point</li>
          <li>Clean luggage area dedicated to sacred holy water containers and baggage</li>
        </ul>
      </div>

      <div class="card card-body" style="border-top: 4px solid var(--clr-saffron)">
        <h3 class="text-navy" style="font-size:1.15rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-circle-exclamation" style="color:var(--clr-saffron)" aria-hidden="true"></i> What Is Excluded
        </h3>
        <ul class="card-fare__features" style="margin-top:0.75rem">
          <li>NH-19 highway toll taxes (~₹200 total one-way, payable at toll plazas at actuals)</li>
          <li>Local municipal parking fees at Prayagraj station or Sangam parking</li>
          <li>Driver night allowance of ₹300/day if journey extends overnight past 10:00 PM</li>
          <li>Boat rides at Triveni Sangam or Varanasi ghats</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 2: DISTANCE, ROUTE & TRAVEL TIME ═══ -->
<section class="section section-warm" id="route-details">
  <div class="container">
    <span class="section-label">Highway Navigation</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6" style="align-items:start">
      <div>
        <p class="prose">
          Travelling eastward from <strong>Prayagraj to Varanasi</strong> covers <strong>125 kilometers</strong> along the newly upgraded <strong>National Highway 19 (NH-19)</strong>. The drive is exceptionally smooth, featuring 6-lane paved highways, grade-separated flyovers, and elevated bypasses around local markets.
        </p>

        <h3 class="text-navy mt-6" style="font-size:1.2rem">Route Alignment: Eastward via NH-19</h3>
        <p class="mt-2 text-muted">
          <strong>Prayagraj (Shastri Bridge / Andawa) → Handia Bypass → Gopiganj → Aurai (Mirzapur Bypass) → Mohansarai → Varanasi</strong>
        </p>
        <p class="mt-2 prose">
          Departing Prayagraj, you cross the Ganga via the wide Shastri Bridge and merge directly onto the high-speed NH-19 expressway. The highway bypasses Handia and Gopiganj, making steady progress towards the southern outer ring of Varanasi at Mohansarai and Rohania.
        </p>

        <h3 class="text-navy mt-6" style="font-size:1.2rem">Travel Times &amp; Traffic Considerations</h3>
        <p class="mt-2 prose">
          While the open highway takes approximately 2 hours, entering Varanasi city from Mohansarai to central hotel zones (Cantt, Maldahiya, Sigra, Godowlia) requires 30 to 45 minutes depending on the time of day. Total door-to-door transit time is typically <strong>2.5 to 3 hours</strong>.
        </p>

        <div class="highlight-box mt-6">
          <strong>Timing for Kashi Ganga Aarti:</strong> The evening Ganga Aarti at Dashashwamedh Ghat is a bucket-list spiritual experience. To reach your hotel, freshen up, and take an e-rickshaw or boat to the ghat before the 6:30 PM / 7:00 PM rituals, plan your Prayagraj pickup between <strong>2:00 PM and 3:00 PM</strong>.
        </div>
      </div>

      <div>
        <div class="card card-body" style="background:var(--clr-white)">
          <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:1rem">
            <i class="fas fa-route text-saffron" aria-hidden="true"></i> Key Milestones from Sangam to Kashi
          </h3>
          <ol class="itinerary-list">
            <li>
              <div class="itinerary-num">1</div>
              <div>
                <strong>Prayagraj Pickup (0 km):</strong> Board your cab at Sangam parking, your Civil Lines hotel, or Prayagraj Junction.
              </div>
            </li>
            <li>
              <div class="itinerary-num">2</div>
              <div>
                <strong>Shastri Bridge &amp; Handia (~35 km · 45 mins):</strong> Cross the sacred Ganga River; transition onto the open 6-lane NH-19 highway.
              </div>
            </li>
            <li>
              <div class="itinerary-num">3</div>
              <div>
                <strong>Gopiganj / Aurai (~75 km · 1.5 hrs):</strong> Convenient midpoint with clean, modern highway rest stops, clean washrooms, and food courts.
              </div>
            </li>
            <li>
              <div class="itinerary-num">4</div>
              <div>
                <strong>Varanasi Arrival (~125 km · 2.5–3 hrs):</strong> Enter via Mohansarai flyover into Varanasi Cantt, Sigra, or designated drop point near the ghats.
              </div>
            </li>
          </ol>

          <div class="alert alert-info mt-4">
            <i class="fas fa-clock" aria-hidden="true"></i>
            <strong>Early Morning Mangala Aarti Transfers:</strong> If you are attending Mangala Aarti (3:00 AM – 4:00 AM) at Shri Kashi Vishwanath, we schedule midnight or pre-dawn departures from Prayagraj with vetted, night-shift chauffeurs.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 3: CHOOSE YOUR VEHICLE ═══ -->
<section class="section" id="vehicles">
  <div class="container">
    <span class="section-label">Fleet Choices</span>
    <h2>Choose Your Vehicle</h2>
    <div class="divider divider--left"></div>
    <p>Select the ideal vehicle for your return journey to Varanasi. All vehicles are air-conditioned, commercially licensed, sanitized, and driven by courteous professionals.</p>

    <div class="grid grid-4 mt-6">
      <!-- Dzire -->
      <div class="card card-fare">
        <div class="card-fare__badge">Economical</div>
        <div class="card-fare__vehicle">Maruti Swift Dzire</div>
        <div class="card-fare__price">₹3,250 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">Comfortable AC Sedan</p>
        <ul class="card-fare__features">
          <li>Capacity: Up to 4 passengers</li>
          <li>Boot: 2 Medium Bags + Gangajal cans</li>
          <li>Quick highway cruising</li>
          <li>Best price-to-comfort ratio</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Dzire Cab to Varanasi</h3>
        <p class="text-sm text-muted mt-1">Ideal for solo travelers, couples, or small families completing their Prayagraj pilgrimage and returning to Kashi.</p>
        <a class="btn btn-primary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_dzire')">Book Dzire (₹3,250)</a>
      </div>

      <!-- Ertiga -->
      <div class="card card-fare">
        <div class="card-fare__badge">Family Size</div>
        <div class="card-fare__vehicle">Maruti Ertiga</div>
        <div class="card-fare__price">₹4,000 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">6-Seater Family MUV</p>
        <ul class="card-fare__features">
          <li>Capacity: Up to 6 passengers</li>
          <li>Foldable 3rd row for extra baggage</li>
          <li>Double blower AC vents</li>
          <li>Smooth suspension on highway</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Ertiga Cab to Varanasi</h3>
        <p class="text-sm text-muted mt-1">Ample space for 5 to 6 passengers plus temple prasadam, winter clothing, and luggage.</p>
        <a class="btn btn-secondary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_ertiga')">Book Ertiga (₹4,000)</a>
      </div>

      <!-- Innova Crysta -->
      <div class="card card-fare">
        <div class="card-fare__badge">Premium Choice</div>
        <div class="card-fare__vehicle">Innova Crysta</div>
        <div class="card-fare__price">₹4,750 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">Luxury Executive MPV</p>
        <ul class="card-fare__features">
          <li>Capacity: 6–7 passengers</li>
          <li>Captain seat comfort &amp; recline</li>
          <li>Top-tier safety features &amp; airbags</li>
          <li>Spacious and peaceful interior</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Innova to Varanasi</h3>
        <p class="text-sm text-muted mt-1">Recommended for senior citizens who need maximum legroom, comfortable ingress, and a serene ride.</p>
        <a class="btn btn-secondary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_innova')">Book Innova (₹4,750)</a>
      </div>

      <!-- Tempo Traveller -->
      <div class="card card-fare">
        <div class="card-fare__badge" style="background:#DCFCE7;color:#166534">Group Yatra</div>
        <div class="card-fare__vehicle">Tempo Traveller</div>
        <div class="card-fare__price">₹7,000 <span style="font-size:0.85rem;font-weight:400">one-way</span></div>
        <p class="card-fare__note">12–17 Seater Mini Bus</p>
        <ul class="card-fare__features">
          <li>Capacity: 12 to 17 passengers</li>
          <li>High roof standing cabin</li>
          <li>Individual AC vents &amp; pushback seats</li>
          <li>Large dedicated luggage carrier</li>
        </ul>
        <h3 style="font-size:0.95rem;margin-top:1rem;color:var(--clr-navy)">Tempo Traveller to Varanasi</h3>
        <p class="text-sm text-muted mt-1">Keep your entire pilgrimage group or joint family together in a single comfortable, air-conditioned vehicle.</p>
        <a class="btn btn-primary btn-sm btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','vehicle_tempo')">Book Tempo (₹7,000)</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 4: ONE-WAY VS ROUND-TRIP ═══ -->
<section class="section section-warm" id="trip-formats">
  <div class="container">
    <span class="section-label">Flexible Options</span>
    <h2>One-Way vs Round-Trip Taxi Service</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-arrow-right text-saffron" aria-hidden="true"></i> One-Way Drop to Varanasi (from ₹3,250)
        </h3>
        <p class="prose mt-3">
          Our most requested service from Prayagraj. Designed for pilgrims who started their journey at Sangam or arrived at Prayagraj Junction / Bamrauli Airport, and now need direct transportation into Varanasi.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Fixed starting rate: ₹3,250 (Dzire Sedan)</li>
          <li>Direct drop at your Varanasi hotel, Cantt station, or Varanasi Airport</li>
          <li>No return fare or extra kilometer billing</li>
          <li>Chauffeur assists with luggage loading and unloading</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;display:flex;align-items:center;gap:0.5rem">
          <i class="fas fa-arrows-rotate text-saffron" aria-hidden="true"></i> Round-Trip from Prayagraj (from ₹6,500)
        </h3>
        <p class="prose mt-3">
          Ideal for residents of Prayagraj, Allahabad High Court advocates, and university scholars who need to visit Varanasi for temple darshan, personal business, or international flights and return the same day.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Early morning start from Prayagraj with full-day vehicle standby in Varanasi</li>
          <li>Visit Kashi Vishwanath, Annapurna, Kaal Bhairav, and attend evening Ganga Aarti</li>
          <li>Convenient return drive on the illuminated 6-lane NH-19 back to Prayagraj</li>
          <li>Significantly cheaper than hiring two independent one-way taxis</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 5: PICKUP & DROP-OFF ═══ -->
<section class="section" id="pickup-drop">
  <div class="container">
    <span class="section-label">Local Navigation Expertise</span>
    <h2>Pickup &amp; Drop-Off Locations</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div>
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.75rem">
          <i class="fas fa-location-dot text-saffron" aria-hidden="true"></i> Prayagraj Pickup Hubs
        </h3>
        <p class="prose">
          We offer flexible pickups across all key hubs in Prayagraj. Our local drivers know the city streets, river ghats, and bypass routes inside out:
        </p>
        <ul class="itinerary-list mt-3">
          <li>
            <i class="fas fa-water text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Triveni Sangam Area:</strong> Direct pickup from Sangam embankment parking, Parade Ground, or Arail Ghat (post-snan coordinate via live location).</div>
          </li>
          <li>
            <i class="fas fa-hotel text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Civil Lines &amp; City Hotels:</strong> MG Marg, Civil Lines hotels (Kanha Shyam, Milan, Legend, etc.), George Town, and Tagore Town.</div>
          </li>
          <li>
            <i class="fas fa-train text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Railway Terminals:</strong> Prayagraj Junction (PRYJ - Civil Lines Platform 1 exit or City Side Platform 6 exit), Subedarganj (SFG), or Prayagraj Chheoki (PCOI).</div>
          </li>
          <li>
            <i class="fas fa-plane-departure text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Bamrauli Airport (IXD):</strong> Direct arrival hall meet-and-greet with vehicle parked in airport terminal parking.</div>
          </li>
        </ul>
      </div>

      <div>
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.75rem">
          <i class="fas fa-flag-checkered text-saffron" aria-hidden="true"></i> Varanasi Drop-Off Points
        </h3>
        <p class="prose">
          In Varanasi, we transport you directly to your hotel or transport connection:
        </p>
        <ul class="itinerary-list mt-3">
          <li>
            <i class="fas fa-hotel text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Varanasi Hotels:</strong> Direct drop at Cantonment (Taj Ganges, Radisson, Madin), Nadesar, Sigra, Maldahiya, Bhelupur, and Lanka.</div>
          </li>
          <li>
            <i class="fas fa-train text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Varanasi Railway Stations:</strong> Varanasi Junction (Cantt / BSB), Banaras Railway Station (BSBS), or Kashi Station.</div>
          </li>
          <li>
            <i class="fas fa-plane-arrival text-saffron" style="margin-top:3px" aria-hidden="true"></i>
            <div><strong>Varanasi Airport (VNS Babatpur):</strong> Express transit via Ring Road without entering congested city markets.</div>
          </li>
        </ul>
      </div>
    </div>

    <!-- CRITICAL ACCESS DISCLAIMER FOR VARANASI GHATS -->
    <div class="alert alert-warning mt-8" role="note" style="border-left-width:6px">
      <div style="display:flex;gap:1rem;align-items:flex-start">
        <i class="fas fa-triangle-exclamation" style="font-size:1.5rem;color:#b45309;margin-top:2px" aria-hidden="true"></i>
        <div>
          <h3 style="color:#92400E;font-size:1.05rem;margin-bottom:0.35rem">Important: Vehicle Restrictions in Varanasi Ghat &amp; Temple Zone</h3>
          <p style="margin:0;line-height:1.6">
            <strong>Vehicles cannot enter the narrow alleyways (galis) surrounding Dashashwamedh Ghat and Shri Kashi Vishwanath Temple.</strong> The Varanasi traffic administration designates Godowlia, Girjaghar, Luxa, and Maidagin as restricted pedestrian zones, particularly from 9:00 AM to 9:00 PM. Your taxi will drop you at the nearest motorable barricade (such as Godowlia Crossing, Maidagin Crossing, or Girjaghar). From the barricade, local cycle-rickshaws, e-rickshaws, or a short 3-to-5 minute walk will take you directly to your riverside hotel, ashram, or the temple corridor.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 6: HOW TO BOOK ═══ -->
<section class="section section-warm" id="how-to-book">
  <div class="container">
    <span class="section-label">Quick &amp; Hassle-Free</span>
    <h2>How to Book</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-4 mt-6">
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem">1</div>
        <h3 class="text-navy" style="font-size:1.1rem">Enter Journey Details</h3>
        <p class="text-sm text-muted mt-2">Submit your pickup location in Prayagraj, departure time, and passenger count using the booking form below or on WhatsApp.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem;background:var(--clr-saffron)">2</div>
        <h3 class="text-navy" style="font-size:1.1rem">Guaranteed Quote</h3>
        <p class="text-sm text-muted mt-2">Our customer desk confirms your vehicle with a transparent, fixed price quote. Zero surge pricing or unexpected extras.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem">3</div>
        <h3 class="text-navy" style="font-size:1.1rem">Live Driver Tracking</h3>
        <p class="text-sm text-muted mt-2">Receive the driver's contact number and vehicle details via WhatsApp with live coordination for effortless pickup.</p>
      </div>
      <div class="card card-body" style="text-align:center">
        <div class="itinerary-num" style="margin:0 auto 1rem;width:44px;height:44px;font-size:1.1rem;background:var(--clr-success)">4</div>
        <h3 class="text-navy" style="font-size:1.1rem">Comfortable Arrival</h3>
        <p class="text-sm text-muted mt-2">Arrive peacefully in Kashi in time for temple darshan or your train/flight. Pay directly by cash or UPI upon completion.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 7: FREQUENTLY ASKED QUESTIONS ═══ -->
<section class="section" id="faq">
  <div class="container" style="max-width:800px">
    <div class="text-center">
      <span class="section-label">Traveler FAQ</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Essential advice for pilgrims and travelers booking a taxi from Prayagraj to Varanasi.</p>
    </div>

    <div class="faq-list mt-8">
      <?php foreach ($faqSchema['mainEntity'] as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-p2v-<?php echo $i; ?>">
          <span><?php echo htmlspecialchars($faq['name']); ?></span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-p2v-<?php echo $i; ?>" role="region">
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
    <span class="section-label">Explore More Services</span>
    <h2>Related Routes</h2>
    <div class="divider divider--left"></div>
    <p>Check out our reciprocal routes and dedicated pilgrimage travel packages across Eastern Uttar Pradesh:</p>

    <div class="grid grid-3 mt-6">
      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Prayagraj</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 125 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 2.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹3,250</div>
          <p class="text-sm mt-3 text-muted">Outbound cab from Varanasi to Triveni Sangam snan, Bade Hanuman temple, and Anand Bhavan.</p>
        </div>
      </a>

      <a class="card-route" href="/services/varanasi-airport-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi Airport Taxi</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-plane" aria-hidden="true"></i> Babatpur VNS</span>
            <span class="card-route__tag"><i class="fas fa-bolt text-saffron" aria-hidden="true"></i> 24/7 Service</span>
          </div>
          <div class="card-route__fare">from ₹1,000</div>
          <p class="text-sm mt-3 text-muted">Punctual airport transfers between Lal Bahadur Shastri International Airport and city hotels.</p>
        </div>
      </a>

      <a class="card-route" href="/locations/varanasi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi City Guide</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-map-marked-alt" aria-hidden="true"></i> Kashi Guide</span>
          </div>
          <div class="card-route__fare">Free Insights</div>
          <p class="text-sm mt-3 text-muted">Essential guide to Kashi Vishwanath Darshan, Ganga Aarti timings, best ghat walks, and local food.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/prayagraj-sangam-sightseeing/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj Sangam Tour</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-water text-saffron" aria-hidden="true"></i> Holy Snan</span>
          </div>
          <div class="card-route__fare">Day Package</div>
          <p class="text-sm mt-3 text-muted">Full day pilgrimage tour covering holy Sangam confluence, Hanuman temple, and heritage sights.</p>
        </div>
      </a>

      <a class="card-route" href="/locations/prayagraj/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj City Guide</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-landmark" aria-hidden="true"></i> Holy Prayag</span>
          </div>
          <div class="card-route__fare">Travel Guide</div>
          <p class="text-sm mt-3 text-muted">Complete overview of Prayagraj ghats, temple rituals, historical landmarks, and hotel districts.</p>
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
          <p class="text-sm mt-3 text-muted">Continue your journey onward to Ayodhya Dham to seek darshan at Shri Ram Janmabhoomi.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Prayagraj';
$form_destination = 'Varanasi';
$form_section_id  = 'varanasi-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
