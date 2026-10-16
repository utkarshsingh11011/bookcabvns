<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Cab Service in Ayodhya | Ram Mandir Taxi | Book Cab Varanasi';
$meta_desc      = 'Book cabs in Ayodhya for Ram Mandir, Hanuman Garhi & Saryu Ghat. Taxi from Varanasi to Ayodhya from ₹6,500. Group tempo traveller available.';
$canonical      = 'https://bookcabvaranasi.com/locations/ayodhya/';
$og_title       = 'Cab Service in Ayodhya | Ram Mandir Taxi Booking | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'cab for Ayodhya';

$breadcrumbs = [
    ['name' => 'Home',      'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Locations', 'url' => 'https://bookcabvaranasi.com/locations/varanasi/'],
    ['name' => 'Ayodhya',   'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Cab Service in Ayodhya & Ram Mandir Taxi Transfers',
            'serviceType'  => 'Pilgrimage Taxi Service, Intercity Cab, Ram Mandir Transfers',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                ['@type' => 'City', 'name' => 'Ayodhya'],
                ['@type' => 'City', 'name' => 'Varanasi'],
                ['@type' => 'City', 'name' => 'Prayagraj'],
            ],
            'description'  => 'Dedicated pilgrimage taxi and cab transfers connecting Varanasi and Prayagraj to Ayodhya Dham. Serving Shri Ram Janmabhoomi Mandir, Hanuman Garhi, Kanak Bhawan, and Saryu Ghat.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'Can a taxi or car drive right up to the Ram Mandir entrance?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'No. To manage massive pilgrim footfall and ensure high security, the Ayodhya district administration has designated Ram Path, Bhakti Path, and Janmabhoomi Path as strict pedestrian and authorized battery-cart corridors. All commercial cabs drop passengers at designated multi-level parking grounds such as Tedhi Bazar, Amaniganj, or Naya Ghat parking. From there, pilgrims take a designated electric golf cart or walk 10 to 15 minutes to the mandir security gates.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'How far is Ayodhya from Varanasi and what is the travel time by cab?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Ayodhya is approximately 200 km from Varanasi. The journey takes about 4.5 to 5 hours by cab via NH135A and the Purvanchal Expressway connector, passing through Jaunpur and Sultanpur. Roads are wide, well-maintained, and equipped with modern highway food courts.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What is the best time of year to visit Ayodhya for Ram Mandir darshan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'The ideal period is between October and March when the weather across Uttar Pradesh is cool and pleasant for outdoor walking. Heavy festival dates like Ram Navami, Deepotsav (Diwali), and Makar Sankranti draw hundreds of thousands of devotees; during these times, early morning visits are strongly recommended.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can we safely leave our mobile phones and luggage inside the cab during darshan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. Mobile phones, electronic items, smartwatches, and large bags are strictly prohibited inside the inner security zone of the Shri Ram Janmabhoomi complex. Our verified, vetted drivers stay stationed with the locked vehicle at the authorized parking facility, allowing you to safely leave your belongings in the car without standing in long public locker queues.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can we book a cab for an overnight stay in Ayodhya with the same driver?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. We offer 2-Day round-trip packages from Varanasi and Prayagraj. The driver stays with you throughout your stay in Ayodhya, coordinating evening Saryu Aarti, morning Hanuman Garhi darshan, and your comfortable journey back.',
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
      <span class="breadcrumb__current">Ayodhya</span>
    </nav>
    <span class="section-label" style="background:rgba(255,192,0,0.18);color:var(--clr-gold);margin-top:0.75rem;">Shri Ram Janmabhoomi Pilgrimage</span>
    <h1 class="page-hero__title" id="hero-heading">Cab &amp; Taxi Service in Ayodhya — Ram Mandir, Temple Circuit &amp; Transfers</h1>
    <p class="page-hero__desc">Dependable highway taxis and group Tempo Travellers connecting Varanasi and Prayagraj directly to Ayodhya Dham. Experience peaceful darshan at Shri Ram Janmabhoomi, Hanuman Garhi, and Saryu Ghat.</p>
    <div class="flex gap-4 mt-6" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero_ayodhya')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero_ayodhya')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Us
      </a>
      <a class="btn btn-secondary btn-lg" href="#ayodhya-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4);">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Book Ayodhya Cab
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<section class="trust-bar" aria-label="Service Credentials">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num"><?php echo BCV_YEARS; ?></div>
        <div class="trust-item__label">Years Highway Experience</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">10,000+</div>
        <div class="trust-item__label">Pilgrims Guided</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4.8 ★</div>
        <div class="trust-item__label">Verified Google Rating</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">100%</div>
        <div class="trust-item__label">Clean AC Vehicles Guaranteed</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ AYODHYA SERVICE OVERVIEW ═══ -->
<section class="section">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Sacred Pilgrimage Gateway</span>
        <h2>Connecting Devotees to Ayodhya Dham</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Ayodhya, situated along the tranquil banks of the sacred Saryu River, has emerged as the foremost spiritual destination in India following the grand consecration of the <strong>Shri Ram Janmabhoomi Mandir</strong>. Every day, thousands of devotees journey to offer their prayers to Ram Lalla, climb the steps of Hanuman Garhi, and witness the mesmerizing evening Saryu Aarti.</p>
        <p class="mt-4"><strong>Our Core Service:</strong> Book Cab Varanasi specializes in dedicated intercity taxi transfers <strong>TO and FROM Ayodhya</strong> originating from Varanasi, Prayagraj, and Lucknow. Whether you are landing at Varanasi Airport (VNS) or concluding your holy dip at Triveni Sangam in Prayagraj, our private taxis provide seamless, uninterrupted connectivity directly to Ayodhya's authorized drop facilities.</p>
        <p class="mt-4"><strong>Local Ayodhya Circuit Cabs:</strong> For travelers already staying in Ayodhya who require a private car for local temple circuits (Hanuman Garhi, Kanak Bhawan, Saryu Ghat, Surya Kund, and Guptar Ghat), we arrange dedicated local taxis on custom quotes.</p>
      </div>

      <div class="highlight-box" style="padding:2rem;border-radius:var(--radius-lg);box-shadow:var(--shadow-md);">
        <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:1rem;"><i class="fas fa-route text-saffron" aria-hidden="true"></i> The Sacred Triangle Corridor</h3>
        <p class="text-sm">Over 85% of visiting pilgrims combine <strong>Kashi (Varanasi)</strong>, <strong>Prayag (Prayagraj)</strong>, and <strong>Ayodhya</strong> into a unified 3-to-4 day pilgrimage. Our drivers know every bypass, clean tollway restroom, and temple opening time along this sacred triangle.</p>
        <ul style="display:flex;flex-direction:column;gap:0.75rem;margin-top:1.25rem;font-size:var(--fs-sm);">
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <span><strong>Varanasi → Ayodhya:</strong> 200 km (~4.5 hrs via NH135A)</span></li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <span><strong>Prayagraj → Ayodhya:</strong> 160 km (~3.5 hrs via NH330)</span></li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <span><strong>Lucknow → Ayodhya:</strong> 135 km (~2.5 hrs via NH27)</span></li>
        </ul>
        <div class="mt-6" style="border-top:1px solid rgba(232,115,10,0.2);padding-top:1rem;">
          <a class="btn btn-primary btn-full" href="/tours/ayodhya-ram-mandir-taxi-package/">
            <i class="fas fa-sun" aria-hidden="true"></i> View Ayodhya Tour Package
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FARES & TOUR PACKAGES ═══ -->
<section class="section section-warm" id="ayodhya-fares">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Transparent Pilgrimage Fares</span>
      <h2>Taxi Fares &amp; Packages to Ayodhya</h2>
      <div class="divider"></div>
      <p>Verified, upfront pricing with no surge pricing or hidden booking fees.</p>
    </div>

    <div class="fare-wrapper">
      <table class="fare-table" aria-label="Ayodhya Taxi Fares">
        <thead>
          <tr>
            <th scope="col">Route / Tour Service</th>
            <th scope="col">Sedan (Dzire 4-Seater)</th>
            <th scope="col">Ertiga (6-Seater)</th>
            <th scope="col">Innova Crysta (7-Seater)</th>
            <th scope="col">Force Urbania / Tempo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <strong>Varanasi to Ayodhya (One-Way)</strong>
              <div class="note">200 km, pickup anywhere in Varanasi</div>
            </td>
            <td class="price">₹6,500</td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
          </tr>
          <tr>
            <td>
              <strong>Prayagraj to Ayodhya (One-Way)</strong>
              <div class="note">160 km, direct pickup from Sangam / Station</div>
            </td>
            <td class="price">₹4,500 <span class="note">est.</span></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
          </tr>
          <tr>
            <td>
              <strong>Ayodhya Same-Day Trip from Varanasi</strong>
              <div class="note">Early morning start, full darshan, return by night</div>
            </td>
            <td class="price">₹8,000 <span class="note">est.</span></td>
            <td class="price">₹9,500 <span class="note">est.</span></td>
            <td class="price">₹12,000 <span class="note">est.</span></td>
            <td class="price">₹18,500 <div class="note">(Urbania 9–12 Seater All-Inc.)</div></td>
          </tr>
          <tr>
            <td>
              <strong>Prayagraj to Ayodhya 2-Day Pilgrimage</strong>
              <div class="note">Complete group pilgrimage package with overnight stay</div>
            </td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td><a href="#ayodhya-booking" class="text-saffron font-semibold">Request Quote</a></td>
            <td class="price">₹22,500 <div class="note">(Urbania 9–12 Seater All-Inc.)</div></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="grid grid-2 mt-6">
      <div class="alert alert-info">
        <i class="fas fa-gas-pump" aria-hidden="true"></i>
        <strong>Standard Inclusions:</strong> Vehicle hire, clean AC cabin, dedicated driver allowance, and commercial highway permits are included.
      </div>
      <div class="alert alert-warning">
        <i class="fas fa-receipt" aria-hidden="true"></i>
        <strong>Tolls &amp; Parking:</strong> On point-to-point one-way routes, toll plaza charges and Ayodhya municipal parking are billed at actuals. On our curated Tour Packages (such as the ₹18,500 Urbania Day Trip), tolls and parking are <strong>100% included</strong>.
      </div>
    </div>
  </div>
</section>

<!-- ═══ CRITICAL TEMPLE ACCESS DISCLAIMER ═══ -->
<section class="section" id="ayodhya-restrictions">
  <div class="container">
    <div class="alert alert-warning" style="padding:2rem;border-left-width:6px;box-shadow:var(--shadow-md);">
      <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.75rem;">
        <i class="fas fa-triangle-exclamation" style="font-size:1.75rem;color:#b45309;" aria-hidden="true"></i>
        <h2 style="font-size:var(--fs-2xl);color:#78350f;margin:0;">Crucial Temple Access &amp; Vehicle Restriction Rules</h2>
      </div>
      <p style="color:#78350f;font-size:var(--fs-base);line-height:1.7;">
        <strong>Please note:</strong> The Ayodhya district administration and Shri Ram Janmabhoomi Teerth Kshetra strictly prohibit private four-wheelers and commercial taxis from entering <strong>Ram Path</strong>, <strong>Bhakti Path</strong>, and <strong>Janmabhoomi Path</strong>. No cab or private vehicle in India can drop you at the physical door of the Ram Mandir.
      </p>

      <div class="grid grid-3 mt-6" style="gap:1.5rem;">
        <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border:1px solid #fde68a;">
          <h3 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-square-parking text-saffron" aria-hidden="true"></i> 1. Authorized Parking Drop</h3>
          <p class="text-sm mt-1" style="color:var(--clr-text-muted);">Cabs park at designated multi-level complexes (Tedhi Bazar, Amaniganj, or Naya Ghat parking). Driver stays stationed there throughout your darshan.</p>
        </div>

        <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border:1px solid #fde68a;">
          <h3 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-bolt text-saffron" aria-hidden="true"></i> 2. Electric Cart Corridor</h3>
          <p class="text-sm mt-1" style="color:var(--clr-text-muted);">From the parking hub, government-operated battery golf carts transfer senior citizens and differently-abled devotees directly to the Sugreev Kila entry gate.</p>
        </div>

        <div style="background:var(--clr-white);padding:1.25rem;border-radius:var(--radius-md);border:1px solid #fde68a;">
          <h3 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-lock text-saffron" aria-hidden="true"></i> 3. Belongings in Locked Cab</h3>
          <p class="text-sm mt-1" style="color:var(--clr-text-muted);">Mobile phones, smartwatches, leather belts, and bags are banned in the sanctum. Devotees safely leave these with our verified driver inside the locked car.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SACRED PLACES TO VISIT IN AYODHYA ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Divine Attractions</span>
      <h2>Must-Visit Sacred Sites in Ayodhya Dham</h2>
      <div class="divider"></div>
      <p>A comprehensive pilgrimage itinerary covering the holiest shrines and ghats of the Rama Janmabhoomi circuit.</p>
    </div>

    <div class="grid grid-3">
      <!-- Ram Janmabhoomi -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2rem;margin-bottom:0.5rem;">🛕</div>
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Shri Ram Janmabhoomi</h3>
          <p class="text-sm">The consecrated seat of Ram Lalla. Featuring nagara-style pink Bansi Paharpur sandstone, intricate stone carvings, and serene prayer halls.</p>
          <div class="text-sm text-saffron mt-3"><strong>Timing:</strong> 6:30 AM – 12:00 PM &amp; 2:00 PM – 9:30 PM</div>
        </div>
      </div>

      <!-- Hanuman Garhi -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2rem;margin-bottom:0.5rem;">🚩</div>
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Hanuman Garhi</h3>
          <p class="text-sm">A 10th-century fortress temple dedicated to Lord Hanuman. Devotees traditionally climb its 76 steps to seek permission before visiting Ram Mandir.</p>
          <div class="text-sm text-saffron mt-3"><strong>Timing:</strong> 4:00 AM – 10:00 PM</div>
        </div>
      </div>

      <!-- Kanak Bhawan -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2rem;margin-bottom:0.5rem;">👑</div>
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Kanak Bhawan</h3>
          <p class="text-sm">The "Golden Palace" gifted to Devi Sita by Queen Kaikeyi upon her marriage. Famed for exquisite Bundela-style architecture and golden crown idols.</p>
          <div class="text-sm text-saffron mt-3"><strong>Timing:</strong> 8:00 AM – 11:30 AM &amp; 4:30 PM – 9:00 PM</div>
        </div>
      </div>

      <!-- Saryu Ghat & Ram Ki Paidi -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2rem;margin-bottom:0.5rem;">🌊</div>
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Saryu Ghat &amp; Ram Ki Paidi</h3>
          <p class="text-sm">The sacred river in which Lord Rama took Jal Samadhi. Devotees take a cleansing holy bath. The evening Saryu Maha Aarti at sunset is breathtaking.</p>
          <div class="text-sm text-saffron mt-3"><strong>Aarti Timing:</strong> 6:30 PM – 7:30 PM daily</div>
        </div>
      </div>

      <!-- Nageshwarnath Temple -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2rem;margin-bottom:0.5rem;">🔱</div>
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Nageshwarnath Temple</h3>
          <p class="text-sm">Ancient Shiva shrine situated at Ram Ki Paidi, believed to have been established by Lord Rama's son Kusha when he lost his armlet in the river.</p>
          <div class="text-sm text-saffron mt-3"><strong>Timing:</strong> 5:00 AM – 8:30 PM</div>
        </div>
      </div>

      <!-- Sita Ki Rasoi & Dashrath Mahal -->
      <div class="card">
        <div class="card-body">
          <div style="font-size:2rem;margin-bottom:0.5rem;">🏺</div>
          <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Sita Ki Rasoi &amp; Dashrath Mahal</h3>
          <p class="text-sm">The traditional royal kitchen shrine symbolizing hospitality, followed by Dashrath Mahal, the residence of King Dasharatha where the young princes played.</p>
          <div class="text-sm text-saffron mt-3"><strong>Timing:</strong> Open throughout the day</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ HIGHWAY ROUTES & TRAVEL TIME ═══ -->
<section class="section">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Travel Logistics</span>
        <h2>Highway Distance, Routes &amp; Travel Times to Ayodhya</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Thanks to massive infrastructure investments in Uttar Pradesh, highways leading to Ayodhya Dham are smooth multi-lane corridors featuring well-appointed wayside fuel stops and family restaurants.</p>

        <div style="display:flex;flex-direction:column;gap:1.25rem;margin-top:1.5rem;">
          <div style="background:var(--clr-off-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-saffron);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-road text-saffron" aria-hidden="true"></i> From Varanasi (200 km · ~4.5 to 5 Hours)</h4>
            <p class="text-sm mt-1">Route follows NH135A and the Purvanchal Expressway connector through Jaunpur, Badlapur, and Sultanpur. An early departure at 5:30 AM allows you to reach Ayodhya by 10:00 AM for morning darshan.</p>
          </div>

          <div style="background:var(--clr-off-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-navy);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-road text-navy" aria-hidden="true"></i> From Prayagraj (160 km · ~3.5 to 4 Hours)</h4>
            <p class="text-sm mt-1">Traversing NH330 through Pratapgarh and Sultanpur directly into Ayodhya bypass. Excellent road conditions ideal for same-day or 2-day yatras.</p>
          </div>

          <div style="background:var(--clr-off-white);padding:1.25rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-gold-dark);">
            <h4 style="font-size:var(--fs-base);color:var(--clr-navy);"><i class="fas fa-road text-gold" aria-hidden="true"></i> From Lucknow (135 km · ~2.5 to 3 Hours)</h4>
            <p class="text-sm mt-1">A direct four-lane journey along the Lucknow-Ayodhya Highway (NH27) passing through Barabanki. The fastest highway approach into Ayodhya.</p>
          </div>
        </div>
      </div>

      <div class="card card-body" style="background:var(--clr-white);border:1.5px solid var(--clr-border);padding:2.5rem;box-shadow:var(--shadow-md);">
        <h3 style="color:var(--clr-navy);margin-bottom:1rem;">Recommended Ayodhya Day Trip Itinerary</h3>
        <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1.5rem;">How our Varanasi-to-Ayodhya same-day package is structured for maximum comfort:</p>
        <ol class="itinerary-list">
          <li>
            <div class="itinerary-num">1</div>
            <div><strong>05:30 AM:</strong> Doorstep pickup from your hotel or residence in Varanasi.</div>
          </li>
          <li>
            <div class="itinerary-num">2</div>
            <div><strong>08:30 AM:</strong> Quick 30-min breakfast stop at a clean highway food court in Sultanpur.</div>
          </li>
          <li>
            <div class="itinerary-num">3</div>
            <div><strong>10:15 AM:</strong> Arrival at Ayodhya Tedhi Bazar parking; e-cart to Hanuman Garhi.</div>
          </li>
          <li>
            <div class="itinerary-num">4</div>
            <div><strong>11:30 AM:</strong> Peaceful darshan of Ram Lalla at Shri Ram Janmabhoomi Mandir.</div>
          </li>
          <li>
            <div class="itinerary-num">5</div>
            <div><strong>02:00 PM:</strong> Traditional Satvik lunch followed by visits to Kanak Bhawan &amp; Sita Ki Rasoi.</div>
          </li>
          <li>
            <div class="itinerary-num">6</div>
            <div><strong>05:30 PM:</strong> Sunset visit to Saryu Ghat and witnessing the grand Saryu Aarti.</div>
          </li>
          <li>
            <div class="itinerary-num">7</div>
            <div><strong>07:00 PM:</strong> Board your AC cab for a relaxed return drive to Varanasi by 11:30 PM.</div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CURATED TOUR PACKAGES ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">All-Inclusive Yatras</span>
      <h2>Curated Pilgrimage Packages to Ayodhya</h2>
      <div class="divider"></div>
      <p>Fixed-rate packages designed with zero hidden surcharges for families and group yatras.</p>
    </div>

    <div class="grid grid-3">
      <!-- Ayodhya Day Trip Package -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Same-Day Excursion</div>
          <h3 class="card-tour__title">Ayodhya Ram Mandir Day Trip</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Complete round-trip from Varanasi in luxury 9–12 seater Force Urbania. Covers Ram Janmabhoomi, Hanuman Garhi, and Saryu Aarti.</p>
          <div class="card-tour__price">₹18,500</div>
          <div class="card-tour__includes">Toll, Parking, Fuel &amp; Driver BATA Included</div>
          <a class="btn btn-primary btn-full mt-4" href="/tours/ayodhya-ram-mandir-taxi-package/">View Tour Details</a>
        </div>
      </div>

      <!-- Prayagraj to Ayodhya 2-Day -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">2-Day Pilgrimage</div>
          <h3 class="card-tour__title">Prayagraj to Ayodhya 2-Day Tour</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Pickup from Prayagraj Sangam, overnight stay in Ayodhya Dham, multiple darshan sessions, and return journey in Force Urbania.</p>
          <div class="card-tour__price">₹22,500</div>
          <div class="card-tour__includes">All Highway Tolls &amp; Parking Included</div>
          <a class="btn btn-secondary btn-full mt-4" href="/routes/prayagraj-to-ayodhya-cab/">View Route Details</a>
        </div>
      </div>

      <!-- 3-City Sacred Triangle -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Sacred Circuit</div>
          <h3 class="card-tour__title">Varanasi–Prayagraj–Ayodhya Package</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">The definitive 3-city pilgrimage covering Kashi Vishwanath, Triveni Sangam snan, and Ram Janmabhoomi with a dedicated car and driver.</p>
          <div class="card-tour__price">Custom Quote</div>
          <div class="card-tour__includes">Available for Sedans, Innovas &amp; Tempo Travellers</div>
          <a class="btn btn-primary btn-full mt-4" href="/tours/varanasi-prayagraj-ayodhya-package/">Explore Circuit</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CHOOSE YOUR VEHICLE ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Fleet for Ayodhya</span>
      <h2>Choose Your Vehicle for Ayodhya Travel</h2>
      <div class="divider"></div>
      <p>Clean, highway-tested vehicles equipped with chilled air-conditioning and spacious luggage room.</p>
    </div>

    <div class="grid grid-4 text-center">
      <div class="card card-body" style="border:1px solid var(--clr-border);">
        <div style="font-size:2.5rem;margin-bottom:0.5rem;">🚗</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Swift Dzire</h3>
        <p class="text-sm text-muted">Up to 4 Passengers</p>
        <div class="text-saffron font-bold mt-2">From ₹6,500</div>
        <div class="note">Best for couples &amp; solo</div>
      </div>

      <div class="card card-body" style="border:1px solid var(--clr-border);">
        <div style="font-size:2.5rem;margin-bottom:0.5rem;">🚙</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Maruti Ertiga</h3>
        <p class="text-sm text-muted">Up to 6 Passengers</p>
        <div class="text-saffron font-bold mt-2">Request Quote</div>
        <div class="note">Nuclear families</div>
      </div>

      <div class="card card-body" style="border:1px solid var(--clr-border);">
        <div style="font-size:2.5rem;margin-bottom:0.5rem;">🚘</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Innova Crysta</h3>
        <p class="text-sm text-muted">Up to 7 Passengers</p>
        <div class="text-saffron font-bold mt-2">Request Quote</div>
        <div class="note">Premium highway comfort</div>
      </div>

      <div class="card card-body" style="border:1px solid var(--clr-border);">
        <div style="font-size:2.5rem;margin-bottom:0.5rem;">🚐</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Force Urbania / Tempo</h3>
        <p class="text-sm text-muted">9 to 26 Passengers</p>
        <div class="text-saffron font-bold mt-2">From ₹18,500</div>
        <div class="note">Group &amp; joint family yatras</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FAQS ═══ -->
<section class="section section-warm" id="ayodhya-faqs">
  <div class="container" style="max-width:820px;">
    <div class="text-center" style="margin-bottom:2.5rem;">
      <span class="section-label">Pilgrim Queries</span>
      <h2>Frequently Asked Questions About Ayodhya Cabs</h2>
      <div class="divider"></div>
      <p>Clear answers to help you prepare for your pilgrimage.</p>
    </div>

    <div class="faq-list">
      <?php
      $ayd_faqs = [
          [
              'q' => 'Can your taxi drop us right in front of the Ram Mandir entrance?',
              'a' => 'No. All vehicles are restricted by the district administration from entering Ram Path, Bhakti Path, and Janmabhoomi Path to ensure devotee security. Our cab will drop you safely at the authorized multi-level parking complex (such as Tedhi Bazar or Amaniganj). From there, you can take a government-run battery electric cart (free or nominal ₹10 fare for senior citizens) or walk 10–15 minutes through the decorated pedestrian corridor to reach the mandir frisking gates.'
          ],
          [
              'q' => 'How long does the drive from Varanasi to Ayodhya take by taxi?',
              'a' => 'The 200 km highway journey takes approximately 4.5 to 5 hours under normal traffic conditions via NH135A and the Purvanchal connector. We recommend starting early by 5:30 AM to beat city traffic and reach Ayodhya before the midday temple recess.'
          ],
          [
              'q' => 'What is the best time of year to visit Ayodhya?',
              'a' => 'The months between October and March offer pleasant, cool weather for standing in queues and visiting outdoor temples. Festival dates like Ram Navami, Deepotsav, and Kartik Purnima are deeply auspicious but experience massive crowd surges; our drivers ensure you navigate smoothly during peak dates.'
          ],
          [
              'q' => 'Can we leave our luggage and mobile phones safely in the cab during darshan?',
              'a' => 'Yes. Mobile phones, electronic accessories, cameras, and large baggage are strictly forbidden inside the inner sanctum of the Shri Ram Janmabhoomi complex. Rather than waiting in crowded public locker lines outside the temple, you can safely leave your valuables locked inside your private cab with our trusted driver.'
          ],
          [
              'q' => 'Are overnight stay options available with the same cab and driver?',
              'a' => 'Yes. You can book a 2-Day or multi-day package. The driver will remain with your party in Ayodhya, taking you for evening Saryu Aarti, dinner at the temple markets, early morning Hanuman Garhi darshan, and then driving you back to Varanasi or Prayagraj.'
          ],
          [
              'q' => 'How do we book a tempo traveller for a large group to Ayodhya?',
              'a' => 'You can request a Tempo Traveller (16, 21, or 26 seater) or luxury Force Urbania through our booking inquiry form or by calling us at +91-9838409911. We allocate dedicated group vehicles with heavy-duty roof luggage carriers and high-output dual air-conditioning.'
          ],
      ];

      foreach ($ayd_faqs as $i => $faq):
      ?>
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-ayd-<?php echo $i; ?>">
          <?php echo htmlspecialchars($faq['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ayd-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ RELATED ROUTES & INTERNAL LINKS ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Helpful Navigation</span>
      <h2>Related Ayodhya Routes &amp; Resources</h2>
      <div class="divider"></div>
      <p>Plan your complete pilgrimage itinerary with our specialized guides.</p>
    </div>

    <div class="grid grid-4 text-center">
      <a class="card card-body" href="/routes/varanasi-to-ayodhya-cab/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🏹</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Varanasi to Ayodhya Cab</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">₹6,500 One-Way →</span>
      </a>

      <a class="card card-body" href="/tours/ayodhya-ram-mandir-taxi-package/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🛕</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Ayodhya Tour Package</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">Full-Day Tour →</span>
      </a>

      <a class="card card-body" href="/routes/prayagraj-to-ayodhya-cab/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🛣️</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Prayagraj to Ayodhya</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">160 km Highway →</span>
      </a>

      <a class="card card-body" href="/locations/varanasi/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">📍</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Varanasi Cab Hub</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">Explore Kashi Hub →</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BOOKING INQUIRY FORM ═══ -->
<?php
$form_origin      = 'Varanasi';
$form_destination = 'Ayodhya';
$form_section_id  = 'ayodhya-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
