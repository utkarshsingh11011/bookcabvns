<?php
require_once __DIR__ . '/../includes/config.php';

$page_title  = 'Varanasi Prayagraj Ayodhya 3-City Cab Package | Book Cab Varanasi';
$meta_desc   = 'Book the ultimate UP spiritual circuit: Varanasi, Prayagraj & Ayodhya in one package. 2-day tour with Force Urbania. ₹22,500 (toll+parking included).';
$canonical   = 'https://bookcabvaranasi.com/tours/varanasi-prayagraj-ayodhya-package/';
$og_title    = $page_title;
$og_desc     = $meta_desc;
$whatsapp_route = '3-city Varanasi Prayagraj Ayodhya pilgrimage tour';

$breadcrumbs = [
    ['name' => 'Home',  'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Tours', 'url' => $canonical],
    ['name' => '3-City Pilgrimage Package', 'url' => $canonical],
];

$faqList = [
    [
        'q' => 'Is hotel accommodation included in the 2-day package?',
        'a' => 'No, hotel accommodation in Prayagraj for the night between Day 1 and Day 2 is not included. This allows our guests total flexibility to choose hotels or ashrams matching their budget and comfort preferences (Civil Lines has high-end business hotels, while dharamshalas near Sangam cater to traditional yatris). We recommend booking your Prayagraj stay well in advance, particularly during the winter pilgrimage season (Oct–March).'
    ],
    [
        'q' => 'Can we add Maa Vindhyachal Dham to this 2-day tour?',
        'a' => 'Yes, absolutely! Maa Vindhyavashini Devi Temple (one of the foremost 51 Shakti Peethas in Mirzapur) is conveniently located just south of the Varanasi–Prayagraj highway. We can seamlessly incorporate Vindhyachal and Kali Khoh into Day 1 morning before heading to Prayagraj for a modest route adjustment fee. Please request this when booking.'
    ],
    [
        'q' => 'What is the total road distance covered across the 2-day circuit?',
        'a' => 'The total driving distance is approximately 550 to 600 km: Varanasi to Prayagraj (~125 km), Prayagraj to Ayodhya (~165 km), and Ayodhya back to Varanasi (~200–220 km), plus local temple transit. The roads consist of modern 4-lane and 6-lane national highways (NH-19 and NH-330) ensuring smooth and comfortable travel.'
    ],
    [
        'q' => 'Can we customize or invert the itinerary (Ayodhya first, Prayagraj second)?',
        'a' => 'Yes. While the standard circuit runs Varanasi → Prayagraj → Ayodhya → Varanasi, we can easily reverse the loop (Varanasi → Ayodhya on Day 1, overnight in Ayodhya, then Ayodhya → Prayagraj → Varanasi on Day 2). This inverted route is especially popular for devotees who wish to attend the morning Saryu Aarti or Mangala Aarti at Ram Mandir.'
    ],
    [
        'q' => 'What if our group has more than 12 passengers?',
        'a' => 'For larger families, satsang mandalis, or pilgrimage tour groups, we provide 16-seater, 20-seater, and 26-seater executive Tempo Travellers as well as 35-seater luxury mini-buses. Simply contact our tour desk via WhatsApp (+91-9648974238) for a custom group quotation.'
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
    'name'         => 'Varanasi Prayagraj Ayodhya 3-City Cab Package',
    'description'  => 'Comprehensive 2-day private pilgrimage tour covering Varanasi, Prayagraj Triveni Sangam, and Ayodhya Shri Ram Janmabhoomi in a luxury Force Urbania 9-12 seater.',
    'touristType'  => 'Pilgrim',
    'itinerary'    => [
        ['@type' => 'City', 'name' => 'Varanasi'],
        ['@type' => 'TouristAttraction', 'name' => 'Triveni Sangam Prayagraj'],
        ['@type' => 'TouristAttraction', 'name' => 'Bade Hanuman Ji Temple Prayagraj'],
        ['@type' => 'TouristAttraction', 'name' => 'Shri Ram Janmabhoomi Ayodhya'],
        ['@type' => 'TouristAttraction', 'name' => 'Hanuman Garhi Ayodhya'],
        ['@type' => 'TouristAttraction', 'name' => 'Saryu River Ghat Ayodhya'],
        ['@type' => 'City', 'name' => 'Varanasi']
    ],
    'offers' => [
        '@type'         => 'Offer',
        'price'         => '22500',
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
      <span class="breadcrumb__current">3-City Pilgrimage Package</span>
    </nav>
    <span class="tag tag--gold mb-4"><i class="fas fa-crown" aria-hidden="true"></i> The Ultimate UP Spiritual Circuit</span>
    <h1 class="page-hero__title">Varanasi Prayagraj Ayodhya 3-City Cab Package</h1>
    <p class="page-hero__desc">Experience the sacred triumvirate of North Indian Sanatan Dharma in one seamless 2-day journey: Kashi Vishwanath, Prayagraj Triveni Sangam holy snan, and the majestic Shri Ram Janmabhoomi in Ayodhya. Force Urbania 9–12 seater for ₹22,500 all-inclusive.</p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:1.5rem">
      <a class="btn btn-primary btn-lg" href="#booking-form" onclick="bcvTrack('booking_form_start','hero')">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Book 2-Day Package
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
        <div class="trust-item__num">2 Days</div>
        <div class="trust-item__label">3 Holy Cities Circuit</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹22,500</div>
        <div class="trust-item__label">Force Urbania (Tolls &amp; Park Incl.)</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">~580 km</div>
        <div class="trust-item__label">Highway Pilgrimage Loop</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">~₹2,250</div>
        <div class="trust-item__label">Per Person (10 Devotees)</div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION: TAXI FARE & INCLUSIONS -->
<section class="section">
  <div class="container">
    <span class="section-label">All-Inclusive Spiritual Yatra</span>
    <h2>Taxi Fare &amp; Complete Inclusions</h2>
    <div class="divider divider--left"></div>
    <p>Combining Prayagraj and Ayodhya into a single synchronized 2-day tour is the most popular choice for yatris visiting Varanasi from Maharashtra, Gujarat, Tamil Nadu, Andhra Pradesh, Karnataka, Delhi-NCR, and the NRI diaspora. Avoid the chaos of managing multiple regional bus bookings or train cancellations.</p>

    <div class="grid grid-2 mt-6">
      <!-- Force Urbania Package Card -->
      <div class="card card-body" style="border-top: 4px solid var(--clr-saffron)">
        <span class="tag tag--saffron mb-4">Dedicated Multi-Day Vehicle</span>
        <h3 class="text-navy" style="font-size:1.4rem">Force Urbania (9–12 Seater)</h3>
        <div style="margin:1rem 0">
          <span style="font-size:2.4rem;font-weight:800;color:var(--clr-saffron)">₹22,500</span>
          <span class="text-muted" style="font-size:0.9rem"> / 2-day complete tour (all-inclusive)</span>
        </div>
        <p class="text-sm text-muted">A dedicated vehicle and driver reserved exclusively for your family for two full days. At roughly <strong>₹2,250 per person</strong> for a group of 10, this provides five-star road comfort at ordinary bus tour rates.</p>
        
        <div style="margin-top:1.5rem;padding:1rem;background:var(--clr-off-white);border-radius:var(--radius-md)">
          <div style="font-weight:700;color:var(--clr-navy);margin-bottom:.3rem"><i class="fas fa-check" aria-hidden="true" style="color:var(--clr-success)"></i> All Highway Tolls &amp; Parking Included</div>
          <p class="text-sm">Never stop to pay toll plaza receipts or city parking slips. Everything is covered end-to-end.</p>
        </div>
      </div>

      <!-- Fleet Options Comparison -->
      <div class="card card-body" style="border-top: 4px solid var(--clr-navy)">
        <h3 class="text-navy" style="font-size:1.3rem;margin-bottom:1rem">Vehicle Options for 2-Day Circuit</h3>
        <p class="text-sm text-muted mb-4">Whether traveling as an intimate couple or an extended joint family, we have the ideal vehicle ready:</p>

        <div class="fare-wrapper">
          <table class="fare-table" aria-label="3-city tour vehicle fare comparison">
            <thead>
              <tr>
                <th scope="col">Vehicle Type</th>
                <th scope="col">Capacity</th>
                <th scope="col">2-Day Package Fare</th>
                <th scope="col">Tolls &amp; Parking</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Swift Dzire</strong></td>
                <td>4 Pax</td>
                <td class="price">Quote on Request</td>
                <td>Tolls &amp; parking at actuals</td>
              </tr>
              <tr>
                <td><strong>Maruti Ertiga</strong></td>
                <td>6 Pax</td>
                <td class="price">Quote on Request</td>
                <td>Tolls &amp; parking at actuals</td>
              </tr>
              <tr>
                <td><strong>Innova Crysta</strong></td>
                <td>7 Pax</td>
                <td class="price">Quote on Request</td>
                <td>Tolls &amp; parking at actuals</td>
              </tr>
              <tr style="background:#FFF9F0">
                <td><strong>Force Urbania</strong></td>
                <td>9–12 Pax</td>
                <td class="price">₹22,500</td>
                <td><strong style="color:var(--clr-success)">Fully Included</strong></td>
              </tr>
              <tr>
                <td><strong>Tempo Traveller</strong></td>
                <td>16–26 Pax</td>
                <td class="price">Custom Quote</td>
                <td>Available on package</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Package Inclusions / Exclusions -->
    <div class="grid grid-2 mt-6">
      <div class="alert alert-success">
        <strong style="font-size:1rem;display:block;margin-bottom:.5rem">
          <i class="fas fa-check-circle" aria-hidden="true"></i> What Is Included:
        </strong>
        <ul style="padding-left:1.2rem;font-size:0.88rem;line-height:1.7">
          <li>Dedicated AC Force Urbania (9–12 individual recliner seats) for 2 full days</li>
          <li>All fuel charges covering Varanasi – Prayagraj – Ayodhya – Varanasi (~580 km)</li>
          <li>All interstate/district highway toll plaza fees across NH-19 and NH-330</li>
          <li>All municipal tourist parking charges in Prayagraj and Ayodhya</li>
          <li>Driver's overnight stay allowance, food charges, and daily driver batta</li>
          <li>Doorstep hotel pickup and final drop in Varanasi</li>
        </ul>
      </div>

      <div class="alert alert-warning">
        <strong style="font-size:1rem;display:block;margin-bottom:.5rem">
          <i class="fas fa-times-circle" aria-hidden="true"></i> What Is Excluded:
        </strong>
        <ul style="padding-left:1.2rem;font-size:0.88rem;line-height:1.7">
          <li>Hotel night stay in Prayagraj (book your preferred hotel directly)</li>
          <li>Devotee meals, snacks, bottled drinking water, and prasad</li>
          <li>Triveni Sangam private boat hire (₹500–₹1,000 paid to boatmen)</li>
          <li>VIP darshan passes or fast-track queue tokens (if any)</li>
          <li>Personal temple donations and dakshina</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: DISTANCE, ROUTE & TRAVEL TIME -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Route Geometry &amp; Timing</span>
    <h2>The 3-City Triangle Route &amp; Travel Times</h2>
    <div class="divider divider--left"></div>
    <p>This pilgrimage circuit forms an equilateral triangle across eastern Uttar Pradesh. Modern multi-lane highways ensure rapid transit between sacred junctions:</p>

    <div class="grid grid-3 mt-6">
      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><strong>LEG 1</strong></div>
        <h3 class="text-navy" style="font-size:1.15rem">Varanasi → Prayagraj</h3>
        <p style="font-size:1.3rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~125 km · 2.5 Hours</p>
        <p class="text-sm text-muted">Driven on Day 1 morning via 6-lane NH-19. Smooth cruising across Aurai, Gopiganj, and Handia into Daraganj / Sangam.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><strong>LEG 2</strong></div>
        <h3 class="text-navy" style="font-size:1.15rem">Prayagraj → Ayodhya</h3>
        <p style="font-size:1.3rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~165 km · 3.5 Hours</p>
        <p class="text-sm text-muted">Driven on Day 2 morning via NH-330 passing through Pratapgarh and Sultanpur straight into Ayodhya Dham.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;color:var(--clr-saffron);margin-bottom:.5rem"><strong>LEG 3</strong></div>
        <h3 class="text-navy" style="font-size:1.15rem">Ayodhya → Varanasi</h3>
        <p style="font-size:1.3rem;font-weight:700;color:var(--clr-navy);margin:.3rem 0">~210 km · 4.5 Hours</p>
        <p class="text-sm text-muted">Driven on Day 2 evening via Purvanchal highway corridor / NH-330 back through Jaunpur into Varanasi city.</p>
      </div>
    </div>

    <div class="highlight-box mt-6">
      <strong>Best Season to Travel:</strong> October to March offers crisp, cool weather ideal for early morning Sangam boat rides and pleasant walking around Ayodhya's sprawling temple courtyards.
    </div>
  </div>
</section>

<!-- SECTION: 2-DAY DETAILED ITINERARY -->
<section class="section">
  <div class="container">
    <span class="section-label">Synchronized Schedule</span>
    <h2>Comprehensive 2-Day Yatra Itinerary</h2>
    <div class="divider divider--left"></div>

    <!-- Day 1 -->
    <div style="margin-top:2rem;margin-bottom:3rem">
      <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.5rem">
        <span class="tag tag--saffron" style="font-size:1rem;padding:6px 16px">DAY 1</span>
        <h3 class="text-navy" style="font-size:1.35rem;margin:0">Varanasi to Prayagraj (Triveni Sangam &amp; Temples)</h3>
      </div>

      <ol class="itinerary-list" style="max-width:860px">
        <li>
          <div class="itinerary-num">06:00</div>
          <div>
            <strong>Depart Varanasi Hotel:</strong> Board your Force Urbania and set off on NH-19 toward Prayagraj. Enjoy early morning rural scenery.
          </div>
        </li>
        <li>
          <div class="itinerary-num">08:30</div>
          <div>
            <strong>Arrive Prayagraj &amp; Triveni Sangam:</strong> Park near Sangam ghat. Board a traditional country boat for the sacred confluence of Ganga, Yamuna, and Saraswati. Take the life-transforming holy snan and perform ancestor tarpana (optional).
          </div>
        </li>
        <li>
          <div class="itinerary-num">11:00</div>
          <div>
            <strong>Bade Hanuman Ji &amp; Akshay Vat:</strong> Pray at the submerged reclining idol of Lord Hanuman, then proceed inside Akbar Fort to witness the legendary immortal Akshay Vat tree.
          </div>
        </li>
        <li>
          <div class="itinerary-num">12:30</div>
          <div>
            <strong>Alopi Devi Mandir:</strong> Visit the revered Shakti Peeth dedicated to Devi Alopshankari.
          </div>
        </li>
        <li>
          <div class="itinerary-num">13:30</div>
          <div>
            <strong>Lunch Break:</strong> Enjoy a relaxed lunch in the Civil Lines or Katra market areas.
          </div>
        </li>
        <li>
          <div class="itinerary-num">15:00</div>
          <div>
            <strong>Anand Bhavan Museum:</strong> Explore the ancestral mansion of the Nehru family and its lush historical grounds.
          </div>
        </li>
        <li>
          <div class="itinerary-num">17:00</div>
          <div>
            <strong>Hotel Check-in &amp; Evening Leisure:</strong> Check in to your pre-booked Prayagraj hotel. Evening free to explore local markets, taste famous dehati snacks, or attend Ganga Aarti at Sangam.
          </div>
        </li>
      </ol>
    </div>

    <!-- Day 2 -->
    <div>
      <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.5rem">
        <span class="tag tag--gold" style="font-size:1rem;padding:6px 16px">DAY 2</span>
        <h3 class="text-navy" style="font-size:1.35rem;margin:0">Prayagraj to Ayodhya Dham &amp; Return to Varanasi</h3>
      </div>

      <ol class="itinerary-list" style="max-width:860px">
        <li>
          <div class="itinerary-num">08:00</div>
          <div>
            <strong>Depart Prayagraj:</strong> Enjoy breakfast at your hotel, complete check-out, and board your Urbania. Journey north toward Ayodhya on NH-330 via Pratapgarh and Sultanpur (~3.5 hours).
          </div>
        </li>
        <li>
          <div class="itinerary-num">11:30</div>
          <div>
            <strong>Arrive Ayodhya &amp; Hanuman Garhi:</strong> Arrive at the outer tourist parking facility. Take an e-rickshaw to Hanuman Garhi. Climb the 76 steps for divine darshan of the guardian deity of Ayodhya.
          </div>
        </li>
        <li>
          <div class="itinerary-num">13:00</div>
          <div>
            <strong>Shri Ram Janmabhoomi Mandir Darshan:</strong> Enter the breathtaking temple complex. Experience the divine darshan of Bhagwan Shri Ram Lalla Virajman inside the magnificent carved stone sanctum.
          </div>
        </li>
        <li>
          <div class="itinerary-num">15:00</div>
          <div>
            <strong>Lunch &amp; Prasad:</strong> Savor pure vegetarian lunch at a local bhojanalaya or ashram kitchen.
          </div>
        </li>
        <li>
          <div class="itinerary-num">16:00</div>
          <div>
            <strong>Saryu River Ghat &amp; Kanak Bhawan:</strong> Stroll along the holy Saryu Ghat (Ram Ki Paidi) and visit the historic Kanak Bhawan palace temple if time permits.
          </div>
        </li>
        <li>
          <div class="itinerary-num">17:30</div>
          <div>
            <strong>Departure toward Varanasi:</strong> Reassemble at your vehicle and begin the return highway drive toward Varanasi.
          </div>
        </li>
        <li>
          <div class="itinerary-num">21:30</div>
          <div>
            <strong>Arrival in Varanasi:</strong> Safe drop-off at your hotel or Varanasi Cantt railway station, bringing your holy 3-city pilgrimage to a joyous conclusion.
          </div>
        </li>
      </ol>
    </div>
  </div>
</section>

<!-- SECTION: PILGRIMAGE GUIDELINES & DISCLAIMERS -->
<section class="section section-warm">
  <div class="container">
    <span class="section-label">Crucial Traveler Advisories</span>
    <h2>Pilgrimage Guidelines &amp; Important Disclaimers</h2>
    <div class="divider divider--left"></div>
    
    <div class="grid grid-2 mt-6">
      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.5rem"><i class="fas fa-id-card" aria-hidden="true" style="color:var(--clr-saffron)"></i> Security &amp; Identity Proofs</h3>
        <p class="text-sm text-muted">Carry original government-issued photo IDs (Aadhaar Card, Passport, or Voter ID) for every adult passenger. Security forces at Prayag Fort (Akshay Vat) and Ayodhya Ram Janmabhoomi enforce mandatory screening.</p>
        <p class="text-sm text-muted mt-2">Mobile phones, electronic gadgets, leather belts, and tobacco are prohibited inside the inner sanctum at Ram Janmabhoomi. Lockers are available outside the gates (₹20–₹50).</p>
      </div>

      <div class="card card-body">
        <h3 class="text-navy" style="font-size:1.15rem;margin-bottom:.5rem"><i class="fas fa-hotel" aria-hidden="true" style="color:var(--clr-saffron)"></i> Hotel Reservation in Prayagraj</h3>
        <p class="text-sm text-muted">Remember that night 1 accommodation in Prayagraj is <strong>not included</strong> in our taxi package. Because Prayagraj hosts major spiritual events (Magh Mela, Kartik Purnima, Pitru Paksha), hotels in the Civil Lines and Cantonment areas sell out quickly. Please pre-book your hotel well ahead of time.</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: HOW TO BOOK -->
<section class="section">
  <div class="container">
    <span class="section-label">Reserve With Ease</span>
    <h2>How to Book Your 3-City Tour Package</h2>
    <div class="divider divider--left"></div>
    <ol class="itinerary-list mt-6" style="max-width:760px">
      <li>
        <div class="itinerary-num">1</div>
        <div>
          <strong>Share Your Dates &amp; Group Size:</strong> Fill out the form below or message our tour manager on WhatsApp (+91-9648974238) with your arrival date in Varanasi and total passenger headcount.
        </div>
      </li>
      <li>
        <div class="itinerary-num">2</div>
        <div>
          <strong>Receive Itinerary &amp; Cab Allocation:</strong> We provide your formal confirmation invoice detailing all inclusions and block your dedicated Force Urbania.
        </div>
      </li>
      <li>
        <div class="itinerary-num">3</div>
        <div>
          <strong>Enjoy Your Journey:</strong> Your verified chauffeur arrives at your Varanasi hotel at 06:00 AM on Day 1. Complete your payment flexibly as your trip begins.
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- SECTION: FREQUENTLY ASKED QUESTIONS -->
<section class="section section-warm">
  <div class="container" style="max-width:820px">
    <div class="text-center" style="margin-bottom:2.5rem">
      <span class="section-label">Have Questions?</span>
      <h2>Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>Answers to common questions about our 2-day 3-city pilgrimage package:</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqList as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-3city-<?php echo $i; ?>">
          <?php echo htmlspecialchars($faq['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-3city-<?php echo $i; ?>" role="region">
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
      <span class="section-label">Explore More Options</span>
      <h2>Related Routes &amp; Dedicated Day Trips</h2>
      <div class="divider"></div>
      <p>Looking for single-city excursions? Explore our dedicated day tours below:</p>
    </div>

    <div class="grid grid-3">
      <a class="card-route" href="/tours/ayodhya-ram-mandir-taxi-package/">
        <div class="card-route__body">
          <div class="card-route__cities">Ayodhya Day Trip</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-calendar" aria-hidden="true"></i> 1 Day</span>
            <span class="card-route__tag"><i class="fas fa-shield" aria-hidden="true"></i> Ram Mandir</span>
          </div>
          <div class="card-route__fare">₹18,500 <span style="font-size:0.7em;font-weight:400;color:var(--clr-text-muted)">Urbania</span></div>
          <p class="text-sm mt-4 text-muted">Full day excursion to Shri Ram Janmabhoomi, Hanuman Garhi, and Saryu Ghat from Varanasi.</p>
        </div>
      </a>

      <a class="card-route" href="/tours/prayagraj-sangam-sightseeing/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj Sangam Tour</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-calendar" aria-hidden="true"></i> 1 Day</span>
            <span class="card-route__tag"><i class="fas fa-water" aria-hidden="true"></i> Triveni Sangam</span>
          </div>
          <div class="card-route__fare">₹10,000 <span style="font-size:0.7em;font-weight:400;color:var(--clr-text-muted)">Urbania</span></div>
          <p class="text-sm mt-4 text-muted">Same-day return tour from Varanasi to Triveni Sangam, Bade Hanuman Ji, and Anand Bhavan.</p>
        </div>
      </a>

      <a class="card-route" href="/routes/prayagraj-to-ayodhya-cab/">
        <div class="card-route__body">
          <div class="card-route__cities">Prayagraj <span class="card-route__arrow">→</span> Ayodhya</div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 165 km</span>
            <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> 3.5 hrs</span>
          </div>
          <div class="card-route__fare">from ₹4,500</div>
          <p class="text-sm mt-4 text-muted">Point-to-point intercity transfer between Sangam city and Shri Ram Dham.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php
$form_origin      = 'Varanasi';
$form_destination = 'Ayodhya';
$form_trip_type   = 'multi_day';
$form_section_id  = '3city-booking-form';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
