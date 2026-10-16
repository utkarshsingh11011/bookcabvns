<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Prayagraj Sangam Sightseeing Cab from Varanasi | Book Cab Varanasi';
$meta_desc   = 'Day trip from Varanasi to Prayagraj Sangam. Force Urbania ₹10,000 (toll+parking included). Visit Triveni Sangam, Sleeping Hanuman & Anand Bhavan.';
$canonical   = 'https://bookcabvaranasi.com/tours/prayagraj-sangam-sightseeing/';
$og_title    = $page_title;
$og_desc     = $meta_desc;
$whatsapp_route = 'Prayagraj Sangam sightseeing tour';

$breadcrumbs = [
    ['name' => 'Home',  'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Tours', 'url' => 'https://bookcabvaranasi.com/tours/varanasi-prayagraj-ayodhya-package/'],
    ['name' => 'Prayagraj Sangam Sightseeing', 'url' => $canonical],
];

$faqList = [
    [
        'q' => 'Is the Triveni Sangam boat ride included in the cab package?',
        'a' => 'No, the boat ride to the exact Sangam confluence point is not included in the taxi fare. Traditional hand-rowed and motor boats operate from Qila Ghat and Sangam Ghat. Charges typically range between ₹500 and ₹1,000 per boat (round trip for a group) depending on season, water levels, and negotiation. You pay directly to the registered boatmen.'
    ],
    [
        'q' => 'Is Akshay Vat open to the general public?',
        'a' => 'Yes, the sacred immortal banyan tree (Akshay Vat) and the subterranean Patalpuri Temple inside the Prayagraj Fort (under Indian Army control) are open to public pilgrims. Visitors must pass through military security gates; all adults must carry valid government photo identification (such as Aadhaar Card or Voter ID).'
    ],
    [
        'q' => 'How crowded is Prayagraj during the Magh Mela and Kumbh Mela?',
        'a' => 'During January and February, Prayagraj hosts the annual Magh Mela (and Kumbh Mela every 12 years / Ardh Kumbh every 6 years). Tens of millions of pilgrims gather on the sandy floodplains. On major snan (bathing) dates—such as Makar Sankranti, Mauni Amavasya, and Basant Panchami—traffic police enforce extensive vehicle diversions, requiring pilgrims to walk 1 to 3 km across pontoon bridges. We advise leaving Varanasi at 04:00 AM on major mela dates.'
    ],
    [
        'q' => 'Can we visit Sita Samahit Sthal (Sitamarhi) on this day trip?',
        'a' => 'Yes! Sita Samahit Sthal (Sitamarhi) at Janghai/Bhadohi is located just off the Varanasi–Prayagraj highway (NH-19). We can easily add this sacred site—where Mother Sita is believed to have entered Mother Earth—into your return schedule for a nominal halt fee. Mention your interest when requesting your quote.'
    ],
    [
        'q' => 'What is the cancellation policy for this day tour?',
        'a' => 'We offer transparent, customer-first cancellation terms. If your plans change, cancellations made more than 24 hours prior to scheduled pickup incur zero cancellation fee. Cancellations made within 24 hours of departure carry a nominal dispatch fee to cover driver allocation costs.'
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
    'name'         => 'Prayagraj Sangam Sightseeing Cab from Varanasi',
    'description'  => 'Full-day pilgrimage and heritage sightseeing tour from Varanasi to Prayagraj covering Triveni Sangam, Bade Hanuman Ji, Akshay Vat, Alopi Devi, and Anand Bhavan.',
    'touristType'  => 'Pilgrim',
    'itinerary'    => [
        ['@type' => 'City', 'name' => 'Varanasi'],
        ['@type' => 'TouristAttraction', 'name' => 'Triveni Sangam Prayagraj'],
        ['@type' => 'TouristAttraction', 'name' => 'Bade Hanuman Ji Temple'],
        ['@type' => 'TouristAttraction', 'name' => 'Akshay Vat and Patalpuri Temple'],
        ['@type' => 'TouristAttraction', 'name' => 'Alopi Devi Temple'],
        ['@type' => 'TouristAttraction', 'name' => 'Anand Bhavan Museum'],
        ['@type' => 'City', 'name' => 'Varanasi']
    ],
    'offers' => [
        '@type'         => 'Offer',
        'price'         => '10000',
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
      <span class="breadcrumb__current">Prayagraj Sangam Sightseeing</span>
    </nav>
    <span class="tag tag--gold mb-4"><i class="fas fa-water" aria-hidden="true"></i> Holy Confluence Tour</span>
    <h1 class="page-hero__title">Prayagraj Sangam Sightseeing Cab from Varanasi</h1>
    <p class="page-hero__desc">Take a sacred day trip from Kashi to Prayag. Experience the mystical Triveni Sangam holy snan, venerate Bade Hanuman Ji, visit ancient Akshay Vat, and tour historic Anand Bhavan in supreme comfort.</p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:1.5rem">
      <a class="btn btn-primary btn-lg" href="#booking-form" onclick="bcvTrack('booking_form_start','hero')">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Book This Day Trip
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
        <div class="trust-item__label">Same-Day Return (13 Hrs)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹10,000</div>
        <div class="trust-item__label">Force Urbania (Toll+Park Incl.)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">~125 km</div>
        <div class="trust-item__label">One-Way (2.5 Hrs on NH-19)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">5 Sites</div>
        <div class="trust-item__label">Sangam, Temples &amp; Museum</div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION: TAXI FARE & INCLUSIONS -->
<section class="section">
  <div class="container">
    <span class="section-label">All-Inclusive Day Packages</span>
    <h2>Taxi Fare &amp; Inclusions</h2>
    <div class="divider divider--left"></div>
    <p>Prayagraj (formerly Allahabad) is situated just 125 km west of Varanasi along the pristine 6-lane National Highway 19. Our private chauffeur-driven cabs offer unmatched convenience for family pilgrimages, elderly devotees, and cultural tourists.</p>

    <div class="grid grid-2 mt-6">
      <!-- Force Urbania Highlight Card -->
      <div class="card card-body" style="border-top: 4px solid var(--clr-saffron)">
        <span class="tag tag--saffron mb-4">Recommended for Large Families &amp; Groups</span>
        <h3 class="text-navy" style="font-size:1.4rem">Force Urbania (9–12 Seater)</h3>
        <div style="margin:1rem 0">
          <span style="font-size:2.4rem;font-weight:800;color:var(--clr-saffron)">₹10,000</span>
          <span class="text-muted" style="font-size:0.9rem"> / full day tour (all-inclusive)</span>
        </div>
        <p class="text-sm text-muted">A fixed, transparent package rate for groups of up to 12 passengers. Works out to only <strong>₹850 to ₹1,000 per person</strong>. Includes all highway tolls and municipal parking.</p>
        
        <div style="margin-top:1.5rem;padding:1rem;background:var(--clr-off-white);border-radius:var(--radius-md)">
          <div style="font-weight:700;color:var(--clr-navy);margin-bottom:.3rem"><i class="fas fa-shield-halved" aria-hidden="true"></i> Complete Inclusions:</div>
          <p class="text-sm">Includes vehicle hire, commercial driver allowance, fuel, NH-19 toll plaza charges, and designated parking fees in Prayagraj.</p>
        </div>
      </div>

      <!-- Verified Fleet Rates Table -->
      <div class="card card-body" style="border-top: 4px solid var(--clr-navy)">
        <h3 class="text-navy" style="font-size:1.3rem;margin-bottom:1rem">Complete Fleet Rates (Round-Trip)</h3>
        <p class="text-sm text-muted mb-4">Choose from our full range of sedans, SUVs, and luxury passenger vans for your Prayagraj day trip:</p>

        <div class="fare-wrapper">
          <table class="fare-table" aria-label="Prayagraj day trip cab fare table">
            <thead>
              <tr>
                <th scope="col">Vehicle</th>
                <th scope="col">Seats</th>
                <th scope="col">Round-Trip Fare</th>
                <th scope="col">Tolls &amp; Parking</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Swift Dzire</strong></td>
                <td>4 Pax</td>
                <td class="price">₹6,500</td>
                <td>Extra at actuals (~₹400)</td>
              </tr>
              <tr>
                <td><strong>Maruti Ertiga</strong></td>
                <td>6 Pax</td>
                <td class="price">₹8,000</td>
                <td>Extra at actuals (~₹400)</td>
              </tr>
              <tr>
                <td><strong>Toyota Innova</strong></td>
                <td>7 Pax</td>
                <td class="price">₹9,500</td>
                <td>Extra at actuals (~₹450)</td>
              </tr>
              <tr style="background:#FFF9F0">
                <td><strong>Force Urbania</strong></td>
                <td>9–12 Pax</td>
                <td class="price">₹10,000</td>
                <td><strong style="color:var(--clr-success)">Included in fare</strong></td>
              </tr>
              <tr>
                <td><strong>Tempo Traveller</strong></td>
                <td>16 Pax</td>
                <td class="price">₹14,000</td>
                <td>Extra at actuals</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Clear Inclusions / Exclusions breakdown -->
    <div class="grid grid-2 mt-6">
      <div class="alert alert-success">
        <strong style="font-size:1rem;display:block;margin-bottom:.5rem">
          <i class="fas fa-check-circle" aria-hidden="true"></i> What's Included in the Urbania Tour:
        </strong>
        <ul style="padding-left:1.2rem;font-size:0.88rem;line-height:1.7">
          <li>Doorstep hotel/residence pickup and drop in Varanasi</li>
          <li>Chauffeur-driven AC Force Urbania (9–12 individual recliner seats)</li>
          <li>All fuel costs for Varanasi – Prayagraj – Varanasi (~260 km round trip)</li>
          <li>All NH-19 toll taxes (both directions) and tourist parking charges</li>
          <li>Driver boarding, allowance, and local guidance</li>
        </ul>
      </div>

      <div class="alert alert-warning">
        <strong style="font-size:1rem;display:block;margin-bottom:.5rem">
          <i class="fas fa-times-circle" aria-hidden="true"></i> What's Excluded:
        </strong>
        <ul style="padding-left:1.2rem;font-size:0.88rem;line-height:1.7">
          <li>Sangam boat charges (negotiable locally, approx. ₹500–₹1,000 per boat)</li>
          <li>Personal meals, snacks, and bottled water</li>
          <li>Anand Bhavan museum entrance tickets (approx. ₹70 per person)</li>
          <li>Pooja samagri, priest dakshina, and personal donations</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: DISTANCE, ROUTE & TRAVEL TIME -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Highway Route Guidance</span>
    <h2>Distance, Route &amp; Travel Time</h2>
    <div class="divider divider--left"></div>
    
    <div class="grid grid-3 mt-6">
      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><i class="fas fa-road" aria-hidden="true"></i></div>
        <h3 class="text-navy" style="font-size:1.1rem">Distance</h3>
        <p style="font-size:1.5rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~125 km (One-Way)</p>
        <p class="text-sm text-muted">Direct highway drive via the Asian Highway 1 / NH-19 corridor. Excellent 6-lane road condition with smooth bypasses.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><i class="fas fa-hourglass-half" aria-hidden="true"></i></div>
        <h3 class="text-navy" style="font-size:1.1rem">Driving Time</h3>
        <p style="font-size:1.5rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~2.5 Hours</p>
        <p class="text-sm text-muted">Typically 2 hours and 30 minutes under normal traffic conditions. Entry into Prayagraj via the Shastri Bridge over the Ganga.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><i class="fas fa-route" aria-hidden="true"></i></div>
        <h3 class="text-navy" style="font-size:1.1rem">Route Milestones</h3>
        <p style="font-size:1.5rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">Varanasi → Handia → Prayag</p>
        <p class="text-sm text-muted">Varanasi Cantt → Mirzamurad → Aurai → Gopiganj → Handia Toll Plaza → Jhunsi → Shastri Bridge → Sangam Area.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: DETAILED ITINERARY -->
<section class="section">
  <div class="container">
    <span class="section-label">Curated Schedule</span>
    <h2>Detailed Same-Day Prayagraj Itinerary</h2>
    <div class="divider divider--left"></div>
    <p>Our balanced schedule ensures devotees experience holy rituals at the Sangam during auspicious morning hours while enjoying ample time for heritage exploration.</p>

    <ol class="itinerary-list mt-6" style="max-width:860px">
      <li>
        <div class="itinerary-num">06:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Depart Varanasi Hotel</h3>
          <p class="text-sm text-muted">Prompt early morning pickup from your hotel or ghat access point in Varanasi. Enjoy a relaxed drive on the modern 6-lane NH-19 corridor as the sun rises over rural Uttar Pradesh.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">08:30</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Arrive Prayagraj &amp; Proceed to Sangam Ghat</h3>
          <p class="text-sm text-muted">Cross the magnificent Shastri Bridge offering vast panoramic views of the river floodplains. Arrive at the designated parking area near Sangam / Qila Ghat.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">09:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Triveni Sangam Holy Snan &amp; Boat Experience</h3>
          <p class="text-sm text-muted">Board a wooden country boat to the precise sacred confluence where the deep greenish-blue Yamuna merges with the pale ochre Ganga, alongside the invisible mythical Saraswati. Perform holy snan, offer milk, flowers, and deep-daan. Witness migratory Siberian gulls hovering over the waters (Nov–March).</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">11:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Shri Bade Hanuman Ji (Sleeping Hanuman Temple)</h3>
          <p class="text-sm text-muted">Visit the historic underground temple housing the magnificent 20-foot reclining idol of Lord Hanuman, submerged during monsoon floods by Mother Ganga. Devotees offer sindoor and seek divine strength.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">12:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Akshay Vat &amp; Patalpuri Temple (Prayag Fort)</h3>
          <p class="text-sm text-muted">Enter the historic Akbar Fort complex (subject to army security clearance) to seek blessings at the eternal banyan tree (Akshay Vat) and the subterranean Patalpuri Temple mentioned in ancient Puranas.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">13:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Alopi Devi Mandir (Shakti Peeth)</h3>
          <p class="text-sm text-muted">Proceed to Alopshankari Devi Temple, revered as one of the 51 Shakti Peethas. Uniquely, this temple contains no stone idol; devotees worship a wooden doli (palanquin) draped in silk, symbolizing formless divine energy.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">14:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Lunch in Civil Lines (Self-Arranged)</h3>
          <p class="text-sm text-muted">Head to the bustling Civil Lines area for delicious North Indian cuisine, thalis, or iconic local snacks like Prayagraj dehati rasgullas and chaat.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">15:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Anand Bhavan &amp; Swaraj Bhavan</h3>
          <p class="text-sm text-muted">Tour the stately colonial mansion and ancestral home of the Nehru-Gandhi family, now preserved as an evocative museum showcasing India's freedom struggle, period furniture, and Mahatma Gandhi's room.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">16:30</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Departure back to Varanasi</h3>
          <p class="text-sm text-muted">Board your cab for a smooth return drive along NH-19, avoiding late evening commercial city traffic.</p>
        </div>
      </li>
      <li>
        <div class="itinerary-num">19:00</div>
        <div>
          <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.3rem">Arrive Varanasi</h3>
          <p class="text-sm text-muted">Drop-off directly at your hotel or residence in Varanasi by 07:00 PM, leaving your evening free for dinner or night ghat walks.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- SECTION: TRIVENI SANGAM DEVOTEE GUIDE -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Devotee Insights</span>
    <h2>Triveni Sangam Pilgrimage Guide</h2>
    <div class="divider divider--left"></div>
    
    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:.5rem"><i class="fas fa-ship" aria-hidden="true" style="color:var(--clr-saffron)"></i> Taking the Confluence Boat</h3>
        <p class="text-sm text-muted mb-3">While the banks of the river offer ghat steps, the true spiritual experience of Triveni Sangam happens at the mid-river confluence point where the contrasting shades of green and muddy brown waters touch:</p>
        <ul style="padding-left:1.2rem;font-size:0.9rem;line-height:1.7">
          <li><strong>Boatmen Negotiation:</strong> Standard prices vary between ₹500 and ₹1,000 for a private boat (round trip for up to 6–8 people). Always fix the round-trip price and halt duration before boarding.</li>
          <li><strong>Wooden Platforms:</strong> At the Sangam point, anchored wooden platforms provide safe footing for ladies and senior citizens taking their holy dip.</li>
          <li><strong>Changing Clothes:</strong> The boats or anchored barges provide private curtained corners for changing out of wet clothes after the bath. Carry dry clothes in a waterproof bag.</li>
        </ul>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.2rem;margin-bottom:.5rem"><i class="fas fa-tent" aria-hidden="true" style="color:var(--clr-saffron)"></i> Magh Mela &amp; Kumbh Alert</h3>
        <p class="text-sm text-muted mb-3">During the annual Magh Mela (January–February every year):</p>
        <ul style="padding-left:1.2rem;font-size:0.9rem;line-height:1.7">
          <li><strong>Traffic Restrictions:</strong> Commercial vehicles cannot enter inner mela zones. Parking is organized at outer parade grounds (Andawa, Jhunsi, or Alopibagh).</li>
          <li><strong>Walking Distance:</strong> Devotees must walk approximately 1 to 2.5 km or take battery e-rickshaws across temporary pontoon bridges (Pipa Pul).</li>
          <li><strong>Read Our Full Guide:</strong> For detailed transit planning during the festival, read our dedicated <a href="/guides/prayagraj-magh-mela-transport/" style="color:var(--clr-saffron);font-weight:600;text-decoration:underline">Prayagraj Magh Mela Transport Guide</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: HOW TO BOOK -->
<section class="section">
  <div class="container">
    <span class="section-label">Fast &amp; Simple</span>
    <h2>How to Book Your Sangam Sightseeing Cab</h2>
    <div class="divider divider--left"></div>
    <div class="grid grid-3 mt-6">
      <div class="card card-body">
        <div style="font-size:1.8rem;color:var(--clr-saffron);margin-bottom:.5rem"><strong>01</strong></div>
        <h3 class="text-navy" style="font-size:1.1rem">Submit Trip Inquiry</h3>
        <p class="text-sm text-muted">Use the quick booking form below or WhatsApp our team with your date, vehicle choice, and pickup location in Varanasi.</p>
      </div>
      <div class="card card-body">
        <div style="font-size:1.8rem;color:var(--clr-saffron);margin-bottom:.5rem"><strong>02</strong></div>
        <h3 class="text-navy" style="font-size:1.1rem">Confirmed Booking</h3>
        <p class="text-sm text-muted">We confirm your cab instantly with an all-inclusive price voucher. No upfront payment required to initiate booking.</p>
      </div>
      <div class="card card-body">
        <div style="font-size:1.8rem;color:var(--clr-saffron);margin-bottom:.5rem"><strong>03</strong></div>
        <h3 class="text-navy" style="font-size:1.1rem">Doorstep Pickup</h3>
        <p class="text-sm text-muted">Your sanitized cab and courteous chauffeur arrive at your hotel at 06:00 AM sharp. Relax and enjoy your spiritual journey.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: FREQUENTLY ASKED QUESTIONS -->
<section class="section section-warm">
  <div class="container" style="max-width:820px">
    <div class="text-center" style="margin-bottom:2.5rem">
      <span class="section-label">Common Questions</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Clear, direct answers for your Varanasi to Prayagraj day tour:</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqList as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-prayag-<?php echo $i; ?>">
          <?php echo htmlspecialchars($faq['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-prayag-<?php echo $i; ?>" role="region">
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
      <span class="section-label">More Pilgrim Itineraries</span>
      <h2>Explore Related Packages &amp; Routes</h2>
      <div class="divider"></div>
      <p>Combine multiple spiritual centres with our customizable private cab network.</p>
    </div>

    <div class="grid grid-3">
      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi <span class="card-route__arrow">→</span> Prayagraj</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 125 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 2.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹3,250 (one-way)</div>
          <p class="text-sm mt-4 text-muted">Point-to-point one-way or round-trip taxi transfers with sedan, Ertiga, and Innova Crysta.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/varanasi-prayagraj-ayodhya-package/">
        <div class="card-route__body">
          <div class="card-route__cities">Varanasi + Prayag + Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-calendar" aria-hidden="true"></i> 2 Days</span>
            <span class="card-route__tag"><i class="fas fa-shield" aria-hidden="true"></i> Complete Circuit</span>
          </div>
          <div class="card-route__fare">₹22,500 <span style="font-size:0.7em;font-weight:400;color:var(--clr-text-muted)">Urbania</span></div>
          <p class="text-sm mt-4 text-muted">The ultimate 2-day pilgrimage covering Kashi, Sangam snan, and Shri Ram Janmabhoomi.</p>
        </div>
      </a>

      <a class="card-route" href="/guides/prayagraj-magh-mela-transport/">
        <div class="card-route__body">
          <div class="card-route__cities">Magh Mela Transport Guide</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-book-open" aria-hidden="true"></i> Travel Guide</span>
            <span class="card-route__tag"><i class="fas fa-calendar" aria-hidden="true"></i> Jan–Feb Mela</span>
          </div>
          <div class="card-route__fare" style="font-size:1.1rem;color:var(--clr-navy)">Read Guide</div>
          <p class="text-sm mt-4 text-muted">Essential advice on pontoon bridges, mela parking lots, highway rush hours, and cab booking.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Prayagraj';
$form_trip_type   = 'round_trip';
$form_section_id  = 'prayagraj-booking-form';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
