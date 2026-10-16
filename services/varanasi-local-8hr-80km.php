<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Varanasi Local Sightseeing Cab — 8Hr/80Km & 12Hr/120Km Packages';
$meta_desc   = 'Book a local cab for Varanasi sightseeing. Dzire ₹2,000 for 8hr/80km package. Visit Kashi Vishwanath, Sarnath, Ghats & Ganga Aarti. Transparent pricing.';
$canonical   = 'https://bookcabvaranasi.com/services/varanasi-local-8hr-80km/';
$og_title    = 'Varanasi Local Sightseeing Cab — 8Hr/80Km & 12Hr Packages | Book Cab Varanasi';
$og_desc     = $meta_desc;
$whatsapp_route = 'Varanasi local sightseeing cab';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Services', 'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Varanasi Local Sightseeing Cab', 'url' => $canonical],
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'Can we customize or change the sightseeing itinerary?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes, absolutely. The 8hr/80km and 12hr/120km packages give you complete flexibility. You are free to choose which temples, ghats, or monuments you wish to visit and spend as much time at each stop as you like, provided the trip remains within the package time and kilometer limits.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is parking included in the 8hr/80km local package?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No. Municipal parking charges at temple lots and ghat approaches (typically ₹50 to ₹100 per parking lot) are not included and are paid directly by the traveler as per actual municipal receipts. Fuel, vehicle hire, and chauffeur charges are completely included.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What happens if our sightseeing exceeds 8 hours or 80 km?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'If your sightseeing exceeds the package limits, extra usage is billed at transparent fixed rates: Dzire is ₹13/km and ₹150/hour; Ertiga is ₹16/km and ₹200/hour; Innova is ₹19/km and ₹250/hour; Tempo Travellers are ₹32–₹35/km and ₹350/hour. Extra charges are calculated straightforwardly at the end of your trip.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can we visit Chunar Fort or Vindhyachal within the local 8hr/80km package?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No. Chunar Fort (~45 km one way) and Vindhyachal Dham (~75 km one way) are situated outside Varanasi municipal district boundaries and require outstation highway permits. For these destinations, we recommend our specialized Outstation Day Packages (e.g., Vindhyachal Sedan starting at ₹2,500).'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Where does the kilometer meter and time calculation start and end?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Unlike many operators who calculate mileage from their distant out-of-city garages, your meter and duty timer start strictly when the chauffeur reports at your hotel or chosen pickup location within Varanasi. The trip ends when you are dropped back at your designated hotel or station.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can the cab enter the inner streets of Kashi Vishwanath Temple or Dashashwamedh Ghat?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No four-wheel vehicle is allowed into the narrow historic lanes surrounding Kashi Vishwanath Dham or the river ghats due to district pedestrian regulations. Our driver drops you at the nearest authorized parking zone (Godowlia, Maidagin, or Luxa Road). From there, the short walk is between 100 and 400 meters. E-rickshaws and wheelchairs are readily available for seniors.'
            ]
        ]
    ]
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonical . '#service',
    'name'        => 'Varanasi Local Sightseeing Cab Service — 8Hr/80Km & 12Hr/120Km Packages',
    'serviceType' => 'Local Sightseeing & Chauffeur Cab Rental',
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
    'areaServed'  => ['@type' => 'City', 'name' => 'Varanasi'],
    'url'         => $canonical,
    'description' => 'Dedicated local sightseeing cabs in Varanasi for 8 hours / 80 km and 12 hours / 120 km. Explore Kashi Vishwanath, Sarnath, BHU, Kal Bhairav, and evening Ganga Aarti in comfortable AC vehicles.'
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
      <span class="breadcrumb__current">Local Sightseeing Cab</span>
    </nav>
    <h1 class="page-hero__title">Varanasi Local Sightseeing Cab — 8Hr/80Km &amp; 12Hr Packages</h1>
    <p class="page-hero__desc">Discover the spiritual heart of Kashi at your own pace. Dedicated chauffeur-driven AC cabs for Kashi Vishwanath Temple, Sarnath, BHU, Ghats, and Ganga Aarti from ₹2,000.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','page_hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','page_hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Us
      </a>
      <a class="btn btn-secondary btn-lg" href="#local-booking">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Book Sightseeing
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<section class="trust-bar" aria-label="Service guarantees">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">Doorstep</div>
        <div class="trust-item__label">Meter Starts at Hotel</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">100%</div>
        <div class="trust-item__label">Customizable Itinerary</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">AC Cabs</div>
        <div class="trust-item__label">Clean &amp; Sanitized Daily</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">20+ Yrs</div>
        <div class="trust-item__label">Trusted Local Experience</div>
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
      Whether you are exploring Varanasi for a brisk half-day or a leisurely full-day pilgrimage, our fixed-rate packages protect you from chaotic bargaining and unpredictable auto fares. Review our verified fare chart below for both <strong>8 Hours / 80 Km</strong> and <strong>12 Hours / 120 Km</strong> options:
    </p>

    <!-- Comprehensive Full Fare Table -->
    <div class="fare-wrapper mt-6">
      <table class="fare-table" aria-label="Varanasi local sightseeing cab packages fare table">
        <thead>
          <tr>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Capacity</th>
            <th scope="col">8 Hr / 80 Km Package</th>
            <th scope="col">12 Hr / 120 Km Package</th>
            <th scope="col">Extra Km Rate</th>
            <th scope="col">Extra Hour Rate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Maruti Swift Dzire</strong><br><span class="text-xs text-muted">AC Sedan</span></td>
            <td>4 Passengers</td>
            <td class="price">₹2,000</td>
            <td class="price">₹2,600</td>
            <td>₹13 / km</td>
            <td>₹150 / hr</td>
          </tr>
          <tr>
            <td><strong>Maruti Ertiga</strong><br><span class="text-xs text-muted">Comfortable 6-Seater</span></td>
            <td>6 Passengers</td>
            <td class="price">₹2,400</td>
            <td class="price">₹3,200</td>
            <td>₹16 / km</td>
            <td>₹200 / hr</td>
          </tr>
          <tr>
            <td><strong>Toyota Innova Crysta</strong><br><span class="text-xs text-muted">Premium Luxury MPV</span></td>
            <td>6–7 Passengers</td>
            <td class="price">₹3,500</td>
            <td class="price">₹4,500</td>
            <td>₹19 / km</td>
            <td>₹250 / hr</td>
          </tr>
          <tr>
            <td><strong>Force Urbania (6–7 Seater)</strong><br><span class="text-xs text-muted">Executive Luxury Van</span></td>
            <td>6–7 Passengers</td>
            <td class="price">₹2,600</td>
            <td class="price">₹3,500</td>
            <td>₹20 / km</td>
            <td>₹300 / hr</td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller 16 Seater</strong><br><span class="text-xs text-muted">Pilgrimage Mini Bus</span></td>
            <td>16 Passengers</td>
            <td class="price">₹5,000</td>
            <td class="price">₹6,000</td>
            <td>₹32–₹35 / km</td>
            <td>₹350 / hr</td>
          </tr>
          <tr>
            <td><strong>Tempo Traveller 21 Seater</strong><br><span class="text-xs text-muted">Large Group Coach</span></td>
            <td>21 Passengers</td>
            <td class="price">₹6,000</td>
            <td class="price">₹7,000</td>
            <td>₹35 / km</td>
            <td>₹400 / hr</td>
          </tr>
          <tr>
            <td><strong>Force Urbania (9–12 Seater)</strong><br><span class="text-xs text-muted">VIP Deluxe Van</span></td>
            <td>9–12 Passengers</td>
            <td class="price">₹6,500</td>
            <td class="price">On Request</td>
            <td>₹35 / km</td>
            <td>₹400 / hr</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Meter Start Point Guarantee & Inclusions -->
    <div class="grid grid-2 mt-6">
      <div class="card card-body" style="border-left:4px solid var(--clr-saffron)">
        <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:0.75rem">
          <i class="fas fa-tachometer-alt text-saffron" aria-hidden="true"></i> Honest Meter Start Point Guarantee
        </h3>
        <p class="text-sm">
          Unlike standard taxi stands that turn the meter on at their garage 15 km away, <strong>Book Cab Varanasi starts your meter and duty timer only when the driver arrives at your hotel or residence</strong>. You pay strictly for the distance and hours used during your actual sightseeing.
        </p>
        <ul class="card-fare__features mt-3">
          <li>Pickup from any hotel, ashram, or railway station in Varanasi</li>
          <li>Zero garage-to-hotel dead mileage billing</li>
          <li>Chauffeur assists with luggage and elderly boarding</li>
        </ul>
      </div>

      <div class="card card-body" style="border-left:4px solid var(--clr-navy)">
        <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:0.75rem">
          <i class="fas fa-file-invoice-dollar text-navy" aria-hidden="true"></i> Driver BATA &amp; Parking Terms
        </h3>
        <p class="text-sm">
          All fuel costs, vehicle hire, and standard driver duties during normal daylight hours are completely included in the base package price.
        </p>
        <ul class="card-fare__features mt-3">
          <li><strong>Parking Fees:</strong> ₹50–₹100 per temple/monument parking spot, paid directly by traveler.</li>
          <li><strong>Driver Allowance (BATA):</strong> Dzire/Ertiga ₹300 | Innova ₹400 | Tempo/Urbania ₹500 (only applies if duty starts before 6:00 AM or concludes after 10:00 PM).</li>
          <li><strong>Tolls &amp; Monument Entry:</strong> Any monument or museum entry tickets are paid directly by visitors.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ DISTANCE, ROUTE & SUGGESTED ITINERARIES ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Suggested Tour Plan</span>
    <h2>Distance, Route &amp; Sightseeing Itinerary</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Navigating Varanasi’s labyrinthine alleys, busy riverfront, and sacred pilgrimage points requires intelligent route planning. Here is our recommended 8-hour order of visits designed to minimize traffic delays and maximize spiritual darshan:
    </p>

    <!-- 8hr Itinerary Steps -->
    <ol class="itinerary-list mt-6" style="max-width:820px">
      <li>
        <div class="itinerary-num">1</div>
        <div>
          <strong class="text-navy">Kashi Vishwanath Temple Dham &amp; Annapurna Temple (Morning 08:00 – 10:30 AM)</strong>
          <p class="text-sm mt-1">
            Your cab drops you at the Godowlia or Maidagin gate. Walk 200–300 meters through the grand Kashi Vishwanath Corridor for darshan of the 12th Jyotirlinga of Lord Shiva. Visit the adjacent Maa Annapurna Temple and Maa Vishalakshi Shaktipeeth.
          </p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">2</div>
        <div>
          <strong class="text-navy">Kal Bhairav Temple — Kotwal of Kashi (10:30 – 11:30 AM)</strong>
          <p class="text-sm mt-1">
            A short 10-minute drive to Visheshwarganj. By tradition, every pilgrim must seek permission from Kal Bhairav, the spiritual guardian and police chief of Varanasi, to validate their pilgrimage.
          </p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">3</div>
        <div>
          <strong class="text-navy">BHU New Vishwanath (Birla) Temple &amp; Sankat Mochan (12:00 – 01:30 PM)</strong>
          <p class="text-sm mt-1">
            Drive to the serene 1,300-acre Banaras Hindu University (BHU) campus. Marvel at the 77-meter-tall marble spire of the Birla Temple, followed by darshan at the sacred Sankat Mochan Hanuman Temple (founded by Goswami Tulsidas) and nearby Durga Kund Temple.
          </p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">4</div>
        <div>
          <strong class="text-navy">Traditional Banarasi Lunch &amp; Silk Weavers Stop (01:30 – 02:30 PM)</strong>
          <p class="text-sm mt-1">
            Enjoy authentic vegetarian thali, kachori-sabzi, or Banarasi lassi. Stop at a genuine handloom silk workshop to witness the centuries-old art of Banarasi saree weaving.
          </p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">5</div>
        <div>
          <strong class="text-navy">Sarnath Buddhist Pilgrimage &amp; Museum (03:00 – 05:00 PM)</strong>
          <p class="text-sm mt-1">
            Drive ~10 km north to Sarnath, where Lord Buddha preached his first sermon after enlightenment. Visit the towering 34-meter Dhamek Stupa, the ancient ruins of the Deer Park, and the Archaeological Museum holding the original Ashokan Lion Capital (National Emblem of India).
          </p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">6</div>
        <div>
          <strong class="text-navy">Dashashwamedh Ghat Evening Ganga Aarti (05:45 – 07:45 PM)</strong>
          <p class="text-sm mt-1">
            Your driver returns you to Godowlia Crossing in time to walk to Dashashwamedh or Rajendra Prasad Ghat for the mesmerizing sunset Maha Aarti. Witness the multi-tiered brass oil lamps, rhythmic conch shells, and floating floral diyas before your cab takes you back to your hotel.
          </p>
        </div>
      </li>
    </ol>

    <!-- Strict Temple Area Access Alert -->
    <div class="alert alert-warning mt-6" style="max-width:820px">
      <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
      <strong>Strict Foot Access Note:</strong> Cabs are legally prohibited from driving inside the narrow pedestrian lanes leading directly to riverside ghats and temple sanctorums. Chauffeurs park at the nearest safe municipal parking zone (Godowlia, Maidagin, or Luxa). Darshan from the parking barrier to the temple entrance is strictly on foot. E-rickshaws can be arranged for elderly pilgrims unable to walk short distances.
    </div>
  </div>
</section>

<!-- ═══ CHOOSE YOUR VEHICLE ═══ -->
<section class="section">
  <div class="container">
    <span class="section-label">Fleet Options</span>
    <h2>Choose Your Vehicle</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">
      Select the ideal vehicle based on your party size, comfort preference, and luggage requirements.
    </p>

    <div class="grid grid-3 mt-6">
      <!-- Dzire -->
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.25rem">Swift Dzire Sedan</h3>
        <p class="text-xs text-saffron font-bold">Couples &amp; Small Families (Up to 4 Pax)</p>
        <div class="card-fare__price mt-3">₹2,000 <span class="text-sm text-muted font-normal">/ 8hr</span></div>
        <p class="text-sm mt-3">
          Our most agile vehicle for maneuvering through Varanasi’s busy streets. Comfortable air-conditioned interior, boot space for personal shopping, and excellent fuel efficiency.
        </p>
        <ul class="card-fare__features mt-3">
          <li>4 passenger capacity</li>
          <li>Full AC with clean fabric seating</li>
          <li>Extra km: ₹13/km | Extra hr: ₹150/hr</li>
        </ul>
        <a class="btn btn-primary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Sedan</a>
      </div>

      <!-- Ertiga -->
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.25rem">Maruti Ertiga MUV</h3>
        <p class="text-xs text-saffron font-bold">Families &amp; Elders (Up to 6 Pax)</p>
        <div class="card-fare__price mt-3">₹2,400 <span class="text-sm text-muted font-normal">/ 8hr</span></div>
        <p class="text-sm mt-3">
          The best value option for families traveling with elderly parents and children. Easy step-in height, independent rear AC vents, and comfortable 3-row seating.
        </p>
        <ul class="card-fare__features mt-3">
          <li>6 passenger capacity</li>
          <li>Roof-mounted AC vents</li>
          <li>Extra km: ₹16/km | Extra hr: ₹200/hr</li>
        </ul>
        <a class="btn btn-primary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Ertiga</a>
      </div>

      <!-- Innova Crysta -->
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.25rem">Toyota Innova Crysta</h3>
        <p class="text-xs text-saffron font-bold">VIP &amp; Executive Pilgrimage (6–7 Pax)</p>
        <div class="card-fare__price mt-3">₹3,500 <span class="text-sm text-muted font-normal">/ 8hr</span></div>
        <p class="text-sm mt-3">
          Unmatched suspension for rough patches, leather captain recliners, superior cabin soundproofing, and powerful multi-zone climate control for supreme relaxation.
        </p>
        <ul class="card-fare__features mt-3">
          <li>6 to 7 passenger options</li>
          <li>Plush captain seats with armrests</li>
          <li>Extra km: ₹19/km | Extra hr: ₹250/hr</li>
        </ul>
        <a class="btn btn-primary btn-full mt-4" href="tel:+<?php echo BCV_PHONE_RAW; ?>">Book Innova</a>
      </div>
    </div>

    <!-- Urbania & Tempo Travellers Banner -->
    <div class="highlight-box mt-6">
      <div class="flex-between flex-wrap gap-4">
        <div>
          <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:0.25rem">Traveling with a Large Group or Bhajan Mandal?</h3>
          <p class="text-sm">We provide <strong>Force Urbania (6–7 &amp; 9–12 Seater)</strong> and <strong>Tempo Travellers (16 &amp; 21 Seaters)</strong> starting from ₹2,600 to ₹6,000 for local Varanasi sightseeing.</p>
        </div>
        <a class="btn btn-secondary" href="tel:+919648974238">
          <i class="fas fa-phone" aria-hidden="true"></i> Call Tours Desk: +91-9648974238
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ 8-HOUR VS 12-HOUR COMPARISON ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Package Comparison</span>
    <h2>8-Hour vs 12-Hour Package: Which Should You Choose?</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <div class="card-fare__badge">Most Popular</div>
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.5rem">8 Hours / 80 Kilometers Package</h3>
        <p class="text-saffron font-bold">Starting from ₹2,000 (Dzire Sedan)</p>
        <p class="text-sm mt-3">
          Ideal for travelers who already have their morning hotel breakfast and want an intensive, fulfilling circuit covering Kashi Vishwanath, Kal Bhairav, BHU, Sarnath, and Ganga Aarti without rushing.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Covers all major temples within the municipal perimeter</li>
          <li>Includes the 20 km round-trip excursion to Sarnath</li>
          <li>Finishes immediately following the evening Ganga Aarti</li>
          <li>Recommended for 1-day or weekend pilgrims</li>
        </ul>
      </div>

      <div class="card card-body">
        <div class="card-fare__badge" style="background:var(--clr-navy-light);color:var(--clr-navy)">Extended</div>
        <h3 class="text-navy" style="font-size:1.25rem;margin-bottom:0.5rem">12 Hours / 120 Kilometers Package</h3>
        <p class="text-saffron font-bold">Starting from ₹2,600 (Dzire Sedan)</p>
        <p class="text-sm mt-3">
          Designed for pilgrims who want to start early with 05:00 AM Subah-e-Banaras at Assi Ghat, enjoy leisurely darshan with VIP queue waiting, explore Ramnagar Fort across the Ganga, and finish late at night.
        </p>
        <ul class="card-fare__features mt-4">
          <li>Early morning sunrise ghats to late-night shopping at Thatheri Bazar</li>
          <li>Includes Ramnagar Fort, museum, and royal vintage cars across the river</li>
          <li>Plenty of relaxed buffer time for extended temple queues during Navratri/Shravan</li>
          <li>Recommended for families with elders who require slower walking pace</li>
        </ul>
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
      <h3>Doorstep Hotel Pickups</h3>
      <p>
        Our chauffeur arrives at your specified hotel porch or residential gate 10 minutes ahead of schedule. Your driver will phone or WhatsApp you upon arrival. If your hotel is located inside pedestrianized ghat alleys (such as Scindia Ghat, Manikarnika, or Meer Ghat), your driver will meet you at the nearest vehicle access point (e.g. Godowlia Chowk or Maidagin) and coordinate with hotel staff or porters.
      </p>

      <h3>Parking &amp; Waiting During Darshan</h3>
      <p>
        While you enter temple premises for pooja or explore Sarnath’s archaeological ruins, your cab remains stationed at the nearest official parking zone. You can safely leave heavy shopping bags, water bottles, umbrellas, or coats inside the vehicle. When you are ready to move to the next site, simply call your driver and they will pull up to the passenger boarding bay.
      </p>

      <h3>Ghat Parking Realities</h3>
      <p>
        During the evening Ganga Aarti (17:30 to 19:30), parking around Godowlia and Dashashwamedh becomes heavily congested. Our experienced chauffeurs utilize designated municipal multi-level parking lots at Godowlia or Beniabagh to ensure vehicle safety while providing convenient walking access for you.
      </p>
    </div>
  </div>
</section>

<!-- ═══ HOW TO BOOK ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Simple Process</span>
    <h2>How to Book Your Local Varanasi Sightseeing Cab</h2>
    <div class="divider divider--left"></div>

    <div class="grid grid-4 mt-6">
      <div class="card card-body text-center">
        <div style="font-size:2rem;margin-bottom:.5rem">📝</div>
        <h3 class="text-navy" style="font-size:1.1rem">1. Choose Package</h3>
        <p class="text-xs text-muted mt-2">Pick 8hr/80km or 12hr/120km and choose your vehicle (Dzire, Ertiga, Innova, or Tempo).</p>
      </div>
      <div class="card card-body text-center">
        <div style="font-size:2rem;margin-bottom:.5rem">📍</div>
        <h3 class="text-navy" style="font-size:1.1rem">2. Give Pickup Point</h3>
        <p class="text-xs text-muted mt-2">Provide your hotel name, address, or station arrival time in Varanasi with contact number.</p>
      </div>
      <div class="card card-body text-center">
        <div style="font-size:2rem;margin-bottom:.5rem">📲</div>
        <h3 class="text-navy" style="font-size:1.1rem">3. WhatsApp Confirmation</h3>
        <p class="text-xs text-muted mt-2">Receive instant confirmation and your chauffeur’s phone and vehicle number well in advance.</p>
      </div>
      <div class="card card-body text-center">
        <div style="font-size:2rem;margin-bottom:.5rem">🙏</div>
        <h3 class="text-navy" style="font-size:1.1rem">4. Enjoy Your Darshan</h3>
        <p class="text-xs text-muted mt-2">Travel in air-conditioned comfort and pay the driver upon completion via UPI, Card, or Cash.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FREQUENTLY ASKED QUESTIONS ═══ -->
<section class="section">
  <div class="container" style="max-width:800px">
    <div class="text-center">
      <span class="section-label">Got Questions?</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Clear, direct answers regarding local Varanasi sightseeing cab rentals.</p>
    </div>

    <div class="faq-list mt-6">
      <?php foreach ($faqSchema['mainEntity'] as $i => $item): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-local-<?php echo $i; ?>">
          <?php echo htmlspecialchars($item['name']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-local-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($item['acceptedAnswer']['text']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ RELATED ROUTES & PACKAGES ═══ -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Pilgrimage Circuits</span>
    <h2>Related Routes &amp; Tour Packages</h2>
    <div class="divider divider--left"></div>
    <p class="mt-4">Extend your spiritual journey with our dedicated regional pilgrimage packages:</p>

    <div class="grid grid-3 mt-6">
      <!-- Airport Taxi -->
      <a class="card-route" href="/services/varanasi-airport-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">✈️ Varanasi Airport Taxi</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-plane" aria-hidden="true"></i> Babatpur VNS Transfers</span>
          </div>
          <div class="card-route__fare">from ₹1,000</div>
          <p class="text-sm mt-3">24/7 flight tracking, free waiting, and direct doorstep drop to city hotels and ghats.</p>
        </div>
      </a>

      <!-- Kashi Darshan Tour Package -->
      <a class="card-route" href="/tours/kashi-darshan-cab-package/">
        <div class="card-route__body">
          <div class="card-route__cities">🛕 Kashi Darshan Tour Package</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-om" aria-hidden="true"></i> Complete Pilgrimage Tour</span>
          </div>
          <div class="card-route__fare">Custom Itinerary</div>
          <p class="text-sm mt-3">Curated temple darshan package with boat ride at sunrise, temple guides, and VIP darshan assistance.</p>
        </div>
      </a>

      <!-- Sedan Fleet -->
      <a class="card-route" href="/fleet/sedan-cab-rental/">
        <div class="card-route__body">
          <div class="card-route__cities">🚗 Sedan Cab Rental</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-car" aria-hidden="true"></i> Swift Dzire &amp; Etios</span>
          </div>
          <div class="card-route__fare">₹13 / km outstation</div>
          <p class="text-sm mt-3">Learn more about our sedan fleet specifications, luggage capacities, and outstation hire rates.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Varanasi Local Sightseeing';
$form_section_id  = 'local-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
