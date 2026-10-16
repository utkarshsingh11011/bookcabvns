<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Ayodhya Ram Mandir Taxi Package from Varanasi | Book Cab Varanasi';
$meta_desc   = 'Book an Ayodhya day trip from Varanasi. Force Urbania 9-12 seater ₹18,500 (toll+parking included). Visit Ram Janmabhoomi, Hanuman Garhi & Saryu Ghat.';
$canonical   = 'https://bookcabvaranasi.com/tours/ayodhya-ram-mandir-taxi-package/';
$og_title    = $page_title;
$og_desc     = $meta_desc;
$whatsapp_route = 'Ayodhya Ram Mandir day trip';

$breadcrumbs = [
    ['name' => 'Home',  'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Tours', 'url' => 'https://bookcabvaranasi.com/tours/varanasi-prayagraj-ayodhya-package/'],
    ['name' => 'Ayodhya Ram Mandir Package', 'url' => $canonical],
];

$faqList = [
    [
        'q' => 'Can I book this Ayodhya tour for a smaller group or family?',
        'a' => 'Yes, absolutely! While our headline package features the luxury Force Urbania (9–12 seater) at ₹18,500, we also operate comfortable sedans (Swift Dzire from ₹6,500 round-trip), 6-seater Maruti Ertiga, and 7-seater Toyota Innova Crysta for smaller families. Contact our tour desk via WhatsApp or phone for an instant custom quote.'
    ],
    [
        'q' => 'Is lunch included in the package?',
        'a' => 'No, meals and snacks are self-arranged to give you full flexibility. Ayodhya offers numerous clean, pure-vegetarian bhojanalayas, math prasad counters, and traditional Awadhi sweet shops near Ram Janmabhoomi and Naya Ghat. Our experienced chauffeur will gladly recommend trusted, hygienic eateries based on your dietary preferences.'
    ],
    [
        'q' => 'What is the recommended dress code and packing for Ayodhya temples?',
        'a' => 'Modest traditional Indian attire (dhoti-kurta, kurta-pajama, saree, or salwar-kameez) is highly recommended for darshan at Shri Ram Janmabhoomi and Hanuman Garhi. Please wear comfortable, slip-on footwear as shoes must be deposited at designated stalls before entering temple premises. Carry valid government photo ID (Aadhaar, Passport, or Voter ID) for entry verification.'
    ],
    [
        'q' => 'Is this Ayodhya day trip suitable for elderly pilgrims?',
        'a' => 'Yes, the Force Urbania offers plush reclining seats, smooth suspension, and generous headroom, ensuring a fatigue-free highway ride. However, note that private vehicles cannot enter the inner temple perimeter. Hanuman Garhi has approximately 76 steps to climb, and Ram Janmabhoomi requires about 1 to 1.5 km of walking along sheltered walkways. Battery-operated e-rickshaws and wheelchairs (with attendants) are available on-site for senior citizens.'
    ],
    [
        'q' => 'Can I add Prayagraj (Triveni Sangam) to this day trip?',
        'a' => 'Covering both Ayodhya and Prayagraj on the same calendar day from Varanasi is not recommended due to highway distances (over 450 km combined) and extensive darshan walking. Instead, we offer a dedicated 2-Day Varanasi–Prayagraj–Ayodhya Pilgrimage Package (Force Urbania ₹22,500 all-inclusive), allowing you to experience both holy cities comfortably with an overnight stay in Prayagraj.'
    ]
];

$faqSchema = [
    '@type' => 'FAQPage',
    '@id'   => $canonical . '#faq',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $f['a']
            ]
        ];
    }, $faqList)
];

$tripSchema = [
    '@type'        => 'TouristTrip',
    '@id'          => $canonical . '#trip',
    'name'         => 'Ayodhya Ram Mandir Taxi Package from Varanasi',
    'description'  => 'Full-day pilgrimage tour from Varanasi to Shri Ram Janmabhoomi, Hanuman Garhi, and Saryu Ghat in a Force Urbania 9-12 seater.',
    'touristType'  => 'Pilgrim',
    'itinerary'    => [
        ['@type' => 'City', 'name' => 'Varanasi'],
        ['@type' => 'TouristAttraction', 'name' => 'Hanuman Garhi Ayodhya'],
        ['@type' => 'TouristAttraction', 'name' => 'Shri Ram Janmabhoomi Mandir'],
        ['@type' => 'TouristAttraction', 'name' => 'Saryu River Ghat Ayodhya'],
        ['@type' => 'City', 'name' => 'Varanasi']
    ],
    'offers' => [
        '@type'         => 'Offer',
        'price'         => '18500',
        'priceCurrency' => 'INR',
        'availability'  => 'https://schema.org/InStock',
        'validFrom'     => '2025-01-01',
        'url'           => $canonical
    ],
    'provider' => [
        '@type'     => 'TravelAgency',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN
    ]
];

$schema_json = json_encode(['@context' => 'https://schema.org', '@graph' => [$tripSchema, $faqSchema]], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/tours/varanasi-prayagraj-ayodhya-package/">Tours</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Ayodhya Ram Mandir Package</span>
    </nav>
    <span class="tag tag--gold mb-4"><i class="fas fa-om" aria-hidden="true"></i> UP Pilgrimage Circuit</span>
    <h1 class="page-hero__title">Ayodhya Ram Mandir Taxi Package from Varanasi</h1>
    <p class="page-hero__desc">Embark on a divine day trip to the grand Shri Ram Janmabhoomi, Hanuman Garhi, and holy Saryu Ghat. Premium Force Urbania 9–12 seater for ₹18,500 all-inclusive with door-to-door hotel pickup.</p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:1.5rem">
      <a class="btn btn-primary btn-lg" href="#booking-form" onclick="bcvTrack('booking_form_start','hero')">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Book This Tour
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Tour Desk
      </a>
      <a class="btn btn-call btn-lg" href="tel:+91<?php echo substr(BCV_PHONE_TOURS, -10); ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call <?php echo BCV_PHONE_TOURS; ?>
      </a>
    </div>
  </div>
</section>

<!-- QUICK STATS / TRUST BAR -->
<div class="trust-bar">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">1 Day</div>
        <div class="trust-item__label">Same-Day Return Tour</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹18,500</div>
        <div class="trust-item__label">All-Inclusive (Toll &amp; Parking)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">9–12</div>
        <div class="trust-item__label">Passengers in Luxury Urbania</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">~₹1,850</div>
        <div class="trust-item__label">Per Person (for 10 Pilgrims)</div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION: TAXI FARE & INCLUSIONS -->
<section class="section">
  <div class="container">
    <span class="section-label">Transparent Pilgrimage Pricing</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p>Our Ayodhya Ram Mandir day tour is thoughtfully crafted for pilgrim groups, joint families, and satsang mandalis traveling from Varanasi. Travel together in supreme comfort without the stress of toll gates, parking charges, or navigating highway junctions.</p>

    <div class="grid grid-2 mt-6">
      <!-- Fare Overview Card -->
      <div class="card card-body" style="border-top: 4px solid var(--clr-saffron)">
        <span class="tag tag--saffron mb-4">Dedicated Group Vehicle</span>
        <h3 class="text-navy" style="font-size:1.4rem">Force Urbania (9–12 Seater)</h3>
        <div style="margin:1rem 0">
          <span style="font-size:2.4rem;font-weight:800;color:var(--clr-saffron)">₹18,500</span>
          <span class="text-muted" style="font-size:0.9rem"> / full day tour (fixed all-inclusive fare)</span>
        </div>
        <p class="text-sm text-muted">Cost per person works out to approximately <strong>₹1,850 per head</strong> for a group of 10 devotees. No hidden surcharges or surprise billing at the end of the trip.</p>
        
        <div style="margin-top:1.5rem;padding:1rem;background:var(--clr-off-white);border-radius:var(--radius-md)">
          <div style="font-weight:700;color:var(--clr-navy);margin-bottom:.5rem">Advance Booking Notice:</div>
          <p class="text-sm">Due to exceptionally high pilgrimage volume to Ayodhya Dham, Force Urbania and luxury Tempo Travellers require advance reservation of at least 3–7 days to guarantee vehicle allocation.</p>
        </div>
      </div>

      <!-- Inclusions & Exclusions -->
      <div class="card card-body" style="border-top: 4px solid var(--clr-navy)">
        <h3 class="text-navy" style="font-size:1.3rem;margin-bottom:1rem">What is Included &amp; Excluded</h3>
        
        <div style="margin-bottom:1.25rem">
          <strong style="color:var(--clr-success);display:block;margin-bottom:.4rem">
            <i class="fas fa-check-circle" aria-hidden="true"></i> Package Inclusions:
          </strong>
          <ul style="padding-left:1.2rem;font-size:0.9rem;line-height:1.7;color:var(--clr-text)">
            <li>Exclusive private Force Urbania (9–12 individual recliner seats with AC)</li>
            <li>Experienced pilgrimage-route chauffeur familiar with Ayodhya routes</li>
            <li>Full fuel charges for Varanasi – Ayodhya – Varanasi (~440 km round trip)</li>
            <li>All highway toll charges on NH-330 &amp; state highways (included)</li>
            <li>Ayodhya designated outer tourist parking charges (included)</li>
            <li>Chauffeur food and trip allowance included</li>
          </ul>
        </div>

        <div>
          <strong style="color:var(--clr-error);display:block;margin-bottom:.4rem">
            <i class="fas fa-times-circle" aria-hidden="true"></i> Package Exclusions:
          </strong>
          <ul style="padding-left:1.2rem;font-size:0.9rem;line-height:1.7;color:var(--clr-text-muted)">
            <li>Hotel accommodation (day package returns to Varanasi same evening)</li>
            <li>Personal meals, prasad purchases, and restaurant expenses</li>
            <li>Optional boat ride at Saryu River Ghat (approx. ₹200–₹300 per boat)</li>
            <li>VIP darshan queue passes, suvidha tokens, or temple priest dakshina</li>
            <li>Electronic locker rental fees outside temple perimeter (₹20–₹50)</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Comparative Fare Table -->
    <div class="mt-8">
      <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:.75rem">Vehicle Rates Comparison for Ayodhya Day Tour</h3>
      <p class="text-sm text-muted mb-4">We also accommodate smaller families and larger devotee groups. Compare our verified fleet options below:</p>
      
      <div class="fare-wrapper">
        <table class="fare-table" aria-label="Ayodhya tour package vehicle fare comparison">
          <thead>
            <tr>
              <th scope="col">Vehicle Type</th>
              <th scope="col">Seating Capacity</th>
              <th scope="col">Round-Trip Day Fare</th>
              <th scope="col">Toll &amp; Parking</th>
              <th scope="col">Suitability</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Swift Dzire (Sedan)</strong></td>
              <td>4 Passengers</td>
              <td class="price">₹6,500</td>
              <td><span class="tag tag--saffron">Extra at actuals</span></td>
              <td>Couples &amp; small family (budget)</td>
            </tr>
            <tr>
              <td><strong>Maruti Ertiga (SUV)</strong></td>
              <td>6 Passengers</td>
              <td class="price">Quote on Request</td>
              <td><span class="tag tag--saffron">Extra at actuals</span></td>
              <td>Family of 5–6 with light hand luggage</td>
            </tr>
            <tr>
              <td><strong>Toyota Innova Crysta</strong></td>
              <td>7 Passengers</td>
              <td class="price">Quote on Request</td>
              <td><span class="tag tag--saffron">Extra at actuals</span></td>
              <td>Senior citizens seeking superior suspension</td>
            </tr>
            <tr style="background:#FFF9F0">
              <td><strong>Force Urbania (Luxury)</strong></td>
              <td>9–12 Passengers</td>
              <td class="price">₹18,500</td>
              <td><span class="tag" style="background:#DCFCE7;color:#166534">Included in Package</span></td>
              <td>Pilgrim groups &amp; joint families (Best Value)</td>
            </tr>
            <tr>
              <td><strong>Tempo Traveller</strong></td>
              <td>16–26 Passengers</td>
              <td class="price">Quote on Request</td>
              <td><span class="tag tag--saffron">Custom package</span></td>
              <td>Large satsang mandali / spiritual tours</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: DISTANCE, ROUTE & TRAVEL TIME -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Journey Specifications</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>
    
    <div class="grid grid-3 mt-6">
      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><i class="fas fa-route" aria-hidden="true"></i></div>
        <h3 class="text-navy" style="font-size:1.1rem">One-Way Distance</h3>
        <p style="font-size:1.5rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~200 – 220 km</p>
        <p class="text-sm text-muted">Round-trip distance covers approx. 440 km depending on your Varanasi pickup hotel and parking access point in Ayodhya.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><i class="fas fa-clock" aria-hidden="true"></i></div>
        <h3 class="text-navy" style="font-size:1.1rem">Driving Duration</h3>
        <p style="font-size:1.5rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~4 to 4.5 Hours</p>
        <p class="text-sm text-muted">Smooth 4-lane highway cruising via NH-330 with one planned midway refreshment stop near Sultanpur or Jaunpur bypass.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><i class="fas fa-map-location-dot" aria-hidden="true"></i></div>
        <h3 class="text-navy" style="font-size:1.1rem">Preferred Highway Route</h3>
        <p style="font-size:1.5rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">Via Jaunpur &amp; Sultanpur</p>
        <p class="text-sm text-muted">Varanasi → Jaunpur Bypass → Sultanpur → Ayodhya Dham (NH-330 / Purvanchal link corridors). Wide, well-paved toll roads.</p>
      </div>
    </div>

    <div class="highlight-box mt-6">
      <strong>Early Morning Start Recommended:</strong> We strongly schedule pickup at <strong>06:00 AM</strong> from your hotel or residence in Varanasi. Departing early bypasses city exit congestion at Shivpur/Babatpur and ensures you reach Ayodhya by 10:00 AM, beating peak afternoon temple queues.
    </div>
  </div>
</section>

<!-- SECTION: DETAILED ITINERARY -->
<section class="section">
  <div class="container">
    <span class="section-label">Hour-by-Hour Pilgrimage Plan</span>
    <h2>Detailed Same-Day Tour Itinerary</h2>
    <div class="divider divider--left"></div>
    <p>This itinerary is refined from dozens of actual pilgrimage journeys managed by Book Cab Varanasi. It balances auspicious darshan timings with adequate rest for senior travelers.</p>

    <ol class="itinerary-list mt-6" style="max-width:860px">
      <li>
        <div class="itinerary-num">06:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Departure from Varanasi Hotel / Residence</h3>
          <p class="text-sm text-muted">Your Force Urbania arrives at your doorstep in Varanasi. Chauffeur assists with boarding and water bottles. Depart via the Varanasi–Jaunpur highway. Enjoy a scenic morning drive across the eastern Uttar Pradesh countryside.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">10:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Arrive in Ayodhya Dham &amp; Freshen Up</h3>
          <p class="text-sm text-muted">Arrive at designated tourist parking facility in Ayodhya. Take 20 minutes to freshen up at paid pilgrim facilities or nearby guest houses. Chauffeur briefs the group on pickup coordinates and local e-rickshaw availability.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">10:30</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Darshan at Shri Hanuman Garhi Mandir</h3>
          <p class="text-sm text-muted">Traditionally, pilgrims seek blessings of Lord Hanuman before visiting Shri Ram. Climb the 76 steps of the historic 10th-century fort-temple. The rooftop sanctum offers panoramic vistas of ancient Ayodhya and vibrant flower stalls.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">12:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Grand Darshan at Shri Ram Janmabhoomi Mandir</h3>
          <p class="text-sm text-muted">Proceed to the grand Nagara-style Shri Ram Mandir complex. Deposit electronic devices and leather bags in the locker facilities before the security frisking. Darshan of Ram Lalla's divine idol typically takes between 30 to 90 minutes depending on weekday crowd flow.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">14:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Midday Lunch &amp; Traditional Prasad (Self-Arranged)</h3>
          <p class="text-sm text-muted">Reconvene near Ram Path or Naya Ghat for traditional satvik food. Taste authentic Awadhi vegetarian thalis, poori-sabzi, sweet pedas, and kachoris at local bhojanalayas or ashram dining halls.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">15:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Saryu River Ghat &amp; Optional Boat Ride</h3>
          <p class="text-sm text-muted">Visit the serene banks of the holy Saryu River at Ram Ki Paidi / Guptar Ghat. Perform sacred achaman (sprinkling of holy water) and enjoy the river breeze. Devotees may opt for a peaceful private boat ride on the river (₹200–₹300 extra payable directly to boatmen).</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">16:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Kanak Bhawan &amp; Sita Rasoi (Time Permitting)</h3>
          <p class="text-sm text-muted">If darshan queues concluded briskly, visit Kanak Bhawan—the ornate golden palace gifted to Devi Sita by Queen Kaikeyi—renowned for its Bundelkhandi architecture and gold-crowned deities.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">17:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Board Vehicle for Return Journey to Varanasi</h3>
          <p class="text-sm text-muted">Board the air-conditioned Force Urbania at the designated parking area. Relax on reclining seats as the chauffeur navigates back via NH-330 with a brief highway tea/rest stop.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">21:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Safe Drop-Off at Your Varanasi Hotel</h3>
          <p class="text-sm text-muted">Arrive safely back in Varanasi by approx. 09:00 PM to 09:30 PM, completing a spiritually enriching and seamless day of pilgrimage.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- SECTION: CHOOSE YOUR VEHICLE -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Vehicle Fleet &amp; Specifications</span>
    <h2>Choose Your Pilgrimage Vehicle</h2>
    <div class="divider divider--left"></div>
    <p>Every vehicle in our Varanasi fleet is commercial-registered, thoroughly sanitized before departure, and fitted with high-efficiency air conditioning suitable for UP weather.</p>

    <div class="grid grid-3 mt-6">
      <!-- Force Urbania 9-12 -->
      <div class="card card-fleet" style="border: 2px solid var(--clr-saffron)">
        <div class="card-fleet__icon">🚐</div>
        <h3 class="card-fleet__name">Force Urbania (9–12 Seater)</h3>
        <p class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> 9 to 12 Passengers · 10 Bags</p>
        <p class="text-sm text-muted mb-4">World-class monocoque chassis, individual aircraft-style AC vents, reclining ergonomic bucket seats, and USB charging ports at each row. The gold standard for pilgrimage groups.</p>
        <div class="card-fleet__fare">₹18,500 <span style="font-size:0.7em;font-weight:400;color:var(--clr-text-muted)">all-inclusive</span></div>
      </div>

      <!-- Toyota Innova Crysta -->
      <div class="card card-fleet">
        <div class="card-fleet__icon">🏎️</div>
        <h3 class="card-fleet__name">Toyota Innova Crysta</h3>
        <p class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> Up to 6–7 Passengers · 4 Bags</p>
        <p class="text-sm text-muted mb-4">Legendary highway comfort, captain seat options, dual-zone climate control, and unmatched shock absorption over highway culverts. Ideal for families traveling with elders.</p>
        <div class="card-fleet__fare" style="font-size:1.1rem;color:var(--clr-navy)">Quote on Request</div>
      </div>

      <!-- Sedan Swift Dzire -->
      <div class="card card-fleet">
        <div class="card-fleet__icon">🚗</div>
        <h3 class="card-fleet__name">Maruti Swift Dzire</h3>
        <p class="card-fleet__capacity"><i class="fas fa-users" aria-hidden="true"></i> Up to 4 Passengers · 2 Bags</p>
        <p class="text-sm text-muted mb-4">Fuel-efficient compact sedan featuring crisp air conditioning and clean boot space. Economical option for couples and small nuclear families seeking a private tour.</p>
        <div class="card-fleet__fare">₹6,500 <span style="font-size:0.7em;font-weight:400;color:var(--clr-text-muted)">+ tolls</span></div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: IMPORTANT PILGRIMAGE GUIDELINES & DISCLAIMERS -->
<section class="section">
  <div class="container">
    <span class="section-label">Essential Devotee Information</span>
    <h2>Important Pilgrimage Guidelines &amp; Disclaimers</h2>
    <div class="divider divider--left"></div>
    <p>To avoid unforeseen inconvenience during your visit to Ayodhya Dham, please review these verified administrative guidelines:</p>

    <div class="alert alert-warning mt-4">
      <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
      <strong>Vehicle Perimeter Restriction:</strong> In compliance with Ayodhya local police and temple security regulations, private taxis and commercial tourist vehicles are strictly parked in designated municipal tourist parking facilities outside the Ram Janmabhoomi complex. Private vehicles are NOT permitted inside inner temple lanes. Movement from parking lots to temple gates is completed on foot or via authorized e-rickshaws.
    </div>

    <div class="alert alert-warning">
      <i class="fas fa-ban" aria-hidden="true"></i>
      <strong>Electronic Devices &amp; Bag Restrictions:</strong> Mobile phones, electronic smartwatches, cameras, leather belts, tobacco, matchboxes, and oversized bags are <strong>STRICTLY PROHIBITED</strong> inside the inner Ram Janmabhoomi sanctum. Secure locker counters are available near the Sugriv Qila / pilgrimage facility centre (nominal rental of ₹20–₹50). Leave non-essential electronics securely locked in your cab with the chauffeur.
    </div>

    <div class="alert alert-info">
      <i class="fas fa-clock" aria-hidden="true"></i>
      <strong>Queue Time Variations:</strong> General darshan queues typically take 30 to 90 minutes on regular weekdays. However, on Saturdays, Sundays, Ekadashi, Purnima, and major Hindu festivals (such as Ram Navami or Diwali), wait times may extend between 2 to 3 hours. Please plan with patience and carry necessary prescription medicines.
    </div>

    <div class="alert alert-info">
      <i class="fas fa-hotel" aria-hidden="true"></i>
      <strong>Day Package Scope:</strong> This package is a round-trip day excursion returning to Varanasi on the same evening and does NOT include overnight hotel accommodation in Ayodhya. If you wish to stay overnight for early morning Mangala Aarti, ask us for our 2-day customized Ayodhya package quote.
    </div>
  </div>
</section>

<!-- SECTION: PICKUP & DROP-OFF DETAILS -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Logistics</span>
    <h2>Pickup, Drop-Off &amp; Route Coordination</h2>
    <div class="divider divider--left"></div>
    
    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:.5rem">Varanasi Pickup Zones</h3>
        <p class="text-sm text-muted mb-4">We offer flexible door-to-door pickup across all areas of Varanasi:</p>
        <ul style="padding-left:1.2rem;font-size:0.9rem;line-height:1.8">
          <li><strong>Cantonment &amp; Mall Road:</strong> Direct hotel lobby pickup (Taj Ganges, Radisson, Ramada, etc.)</li>
          <li><strong>Godowlia / Dashashwamedh Ghat Area:</strong> Because four-wheelers cannot enter narrow ghat gullies, our driver meets you at the nearest vehicle access point (Godowlia Crossing, Luxa Road, or Maidagin).</li>
          <li><strong>Varanasi Junction (BSB) / Cantt Railway Station:</strong> Pickup from the VIP parking bay outside Platform 1.</li>
          <li><strong>Lal Bahadur Shastri Airport (VNS):</strong> Airport arrivals can be scheduled for immediate onward journey to Ayodhya.</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:.5rem">Chauffeur Support in Ayodhya</h3>
        <p class="text-sm text-muted mb-4">Our drivers are seasoned professionals who travel this pilgrimage circuit weekly:</p>
        <ul style="padding-left:1.2rem;font-size:0.9rem;line-height:1.8">
          <li>Drivers share their live GPS WhatsApp location upon parking in Ayodhya.</li>
          <li>They will guide you on the shortest walkway routes to Hanuman Garhi and Ram Janmabhoomi.</li>
          <li>They remain stationed with the vehicle and your belongings throughout the day until you return.</li>
          <li>Emergency mobile phone charging is available inside the vehicle.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: HOW TO BOOK -->
<section class="section">
  <div class="container">
    <span class="section-label">Easy 3-Step Process</span>
    <h2>How to Book Your Ayodhya Ram Mandir Cab</h2>
    <div class="divider divider--left"></div>
    <ol class="itinerary-list mt-6" style="max-width:760px">
      <li>
        <div class="itinerary-num">1</div>
        <div>
          <strong>Send Your Travel Details:</strong> Fill out the booking inquiry form below or message our tour desk directly on WhatsApp (+91-9648974238) with your preferred date, passenger count, and hotel pickup location.
        </div>
      </li>
      <li>
        <div class="itinerary-num">2</div>
        <div>
          <strong>Receive Instant Confirmation:</strong> We verify vehicle availability, provide a written booking confirmation voucher with your all-inclusive fare, and block your Force Urbania.
        </div>
      </li>
      <li>
        <div class="itinerary-num">3</div>
        <div>
          <strong>Meet Your Chauffeur:</strong> One evening prior to travel, you will receive your driver's name, verified mobile number, and vehicle registration details. Your cab arrives punctually at 06:00 AM.
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- SECTION: FREQUENTLY ASKED QUESTIONS -->
<section class="section section-warm">
  <div class="container" style="max-width:820px">
    <div class="text-center" style="margin-bottom:2.5rem">
      <span class="section-label">Devotee Inquiries</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Have questions regarding temple darshan timings, luggage storage, or vehicle comfort? Find answers below:</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqList as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-ayodhya-<?php echo $i; ?>">
          <?php echo htmlspecialchars($faq['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ayodhya-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner"><?php echo htmlspecialchars($faq['a']); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SECTION: RELATED ROUTES -->
<section class="section">
  <div class="container">
    <div class="text-center" style="margin-bottom:2.5rem">
      <span class="section-label">Explore More Pilgrimage Circuits</span>
      <h2>Related Routes &amp; Tour Packages</h2>
      <div class="divider"></div>
      <p>Discover other sacred destinations across Uttar Pradesh with Book Cab Varanasi's dedicated fleet.</p>
    </div>

    <div class="grid grid-3">
      <a class="card-route" href="/routes/varanasi-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> ~200 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 4.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹6,500</div>
          <p class="text-sm mt-4 text-muted">Dedicated one-way or round-trip private taxi service with sedan, Ertiga, and Crysta options.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/varanasi-prayagraj-ayodhya-package/">
        <div class="card-route__body">
          <div class="card-route__cities">3-City Pilgrimage</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-calendar" aria-hidden="true"></i> 2 Days</span>
            <span class="card-route__tag"><i class="fas fa-map-pin" aria-hidden="true"></i> 3 Holy Cities</span>
          </div>
          <div class="card-route__fare">₹22,500 <span style="font-size:0.7em;font-weight:400;color:var(--clr-text-muted)">Urbania</span></div>
          <p class="text-sm mt-4 text-muted">Varanasi, Prayagraj Sangam, and Ayodhya Ram Mandir in a seamless 2-day spiritual journey.</p>
        </div>
      </a>

      <a class="card-route" href="/fleet/tempo-traveller-rental/">
        <div class="card-route__body">
          <div class="card-route__cities">Tempo Traveller Hire</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-bus" aria-hidden="true"></i> 12 to 26 Seater</span>
            <span class="card-route__tag"><i class="fas fa-star" aria-hidden="true"></i> 4.8 Rating</span>
          </div>
          <div class="card-route__fare">from ₹32/km</div>
          <p class="text-sm mt-4 text-muted">Spacious Tempo Travellers and Urbania minivans for large family groups and yatra samitis.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Ayodhya';
$form_trip_type   = 'multi_day';
$form_section_id  = 'ayodhya-booking-form';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
