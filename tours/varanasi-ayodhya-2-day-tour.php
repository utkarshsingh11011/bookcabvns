<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Varanasi to Ayodhya 2-Day Tour Package | Cab & Sightseeing | Book Cab Varanasi';
$meta_desc      = 'Book a relaxed 2-day Varanasi to Ayodhya tour by private cab. Overnight in Ayodhya. Ram Janmabhoomi, Hanuman Garhi, Saryu Aarti & Kashi Darshan. AC Sedan from ₹11,500.';
$canonical      = 'https://bookcabvaranasi.com/tours/varanasi-ayodhya-2-day-tour/';
$og_title       = 'Varanasi to Ayodhya 2-Day Tour Package | Private Cab Pilgrimage';
$og_desc        = $meta_desc;
$whatsapp_route = 'Varanasi Ayodhya 2-day tour package';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Tours',    'url' => 'https://bookcabvaranasi.com/tours/varanasi-prayagraj-ayodhya-package/'],
    ['name' => 'Varanasi Ayodhya 2-Day Tour', 'url' => $canonical],
];

// Structured Data: TouristTrip + FAQPage Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'Is hotel accommodation included in the 2-day tour package?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'This package covers complete private air-conditioned vehicle transport, chauffeur, fuel, highway tolls, parking, and driver overnight allowance. Hotel accommodation in Ayodhya is booked directly by travelers according to their budget, though we gladly offer verified hotel recommendations near Ram Janmabhoomi or Saryu Ghat.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Why choose a 2-day tour over a same-day return trip?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'While a same-day trip requires 8 to 9 hours of total highway driving on a tight schedule, the 2-day package allows you to experience Ayodhya without rush: attend the ethereal evening Saryu Maha Aarti, see the musical fountain show at Ram Ki Paidi, and attend early morning darshan at Ram Janmabhoomi with significantly shorter queues.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the cab fare for the Varanasi to Ayodhya 2-day tour?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'All-inclusive 2-day tour pricing starts at ₹11,500 for an AC Sedan (Swift Dzire). Maruti Ertiga is ₹14,500, Toyota Innova Crysta is ₹18,000, and luxury 9-12 Seater Force Urbania is ₹22,500. This includes all highway tolls, parking, and driver night allowances.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Where does the chauffeur stay overnight in Ayodhya?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Our chauffeur manages their own overnight lodging and meals via the included driver BATA allowance. You do not need to provide a hotel room for the driver.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can we also cover Prayagraj on this tour?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes! If you want to include Triveni Sangam in Prayagraj along with Ayodhya, we recommend our dedicated 3-City Varanasi-Prayagraj-Ayodhya Pilgrimage Package, which seamlessly connects all three sacred hubs over 2 full days.',
            ],
        ],
    ],
];

$tripSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TouristTrip',
    '@id'         => $canonical . '#trip',
    'name'        => 'Varanasi to Ayodhya 2-Day Tour Package',
    'description' => '2-day private pilgrimage tour connecting Varanasi and Ayodhya with overnight stay, Ram Janmabhoomi darshan, Hanuman Garhi, and evening Saryu Aarti.',
    'touristType' => ['Pilgrim', 'Family', 'Cultural Tourist'],
    'provider'    => [
        '@type'     => 'LocalBusiness',
        '@id'       => 'https://bookcabvaranasi.com/#business',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN,
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '11500',
        'priceCurrency' => 'INR',
        'url'           => $canonical,
    ],
];

$schema_json = json_encode(['@graph' => [$faqSchema, $tripSchema]], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- ═══ PAGE HERO ═══ -->
<section class="page-hero" aria-label="Hero header">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <a href="/tours/varanasi-prayagraj-ayodhya-package/">Tours</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Varanasi Ayodhya 2-Day Tour</span>
    </nav>
    <h1 class="page-hero__title">Varanasi to Ayodhya 2-Day Tour Package</h1>
    <p class="page-hero__desc">A relaxed, unhurried pilgrimage journey from Kashi to Ayodhya Dham. Experience peaceful darshan of Shri Ram Lalla, evening Saryu Aarti, Kanak Bhawan, and Hanuman Garhi with overnight hotel stay. Sedan package from ₹11,500.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I want to book the Varanasi to Ayodhya 2-Day Tour'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<div class="trust-bar" role="region" aria-label="Package highlights">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-calendar-check" aria-hidden="true"></i> <strong>Duration:</strong> 2 Days / 1 Night</div>
    <div class="trust-item"><i class="fas fa-hotel" aria-hidden="true"></i> <strong>Overnight:</strong> In Holy Ayodhya</div>
    <div class="trust-item"><i class="fas fa-road" aria-hidden="true"></i> <strong>Distance:</strong> 400+ km Round Trip</div>
    <div class="trust-item"><i class="fas fa-shield-alt" aria-hidden="true"></i> <strong>Inclusions:</strong> Car, Fuel, Tolls, BATA</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: TOUR OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>The Ideal Spiritual Journey for Families &amp; Senior Pilgrims</h2>
        <p>
          Visiting the magnificent newly consecrated <strong>Shri Ram Janmabhoomi Mandir</strong> in Ayodhya is a once-in-a-lifetime spiritual milestone. While a single-day round trip from Varanasi is feasible, it requires over 8 hours of road travel and rushing through temple queues in the heat of the day.
        </p>
        <p>
          Our <strong>2-Day Varanasi to Ayodhya Tour Package</strong> is designed for discerning travelers who want an unhurried, comfortable experience. You arrive in Ayodhya in time for relaxed afternoon check-in, witness the dazzling evening laser show at Ram Ki Paidi and the devotional Saryu Aarti, enjoy early morning temple darshan when lines are shortest, and return leisurely to Varanasi without exhaustion.
        </p>
      </div>
    </section>

    <!-- ═══ SECTION: DETAILED ITINERARY ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">2-Day Tour Itinerary</h2>
      <div class="grid-2 gap-6">

        <div class="card">
          <div class="flex items-center gap-3 mb-3">
            <span class="badge" style="background:var(--clr-navy);color:#fff;font-weight:700;padding:6px 14px;border-radius:4px;">DAY 1</span>
            <h3 class="mb-0">Varanasi to Ayodhya &amp; Evening Saryu Aarti</h3>
          </div>
          <ul class="itinerary-list pl-0" style="list-style:none;">
            <li class="mb-3">
              <strong>07:00 AM:</strong> Doorstep pickup from your hotel or residence in Varanasi. Scenic highway drive along NH-27 via Jaunpur and Sultanpur.
            </li>
            <li class="mb-3">
              <strong>11:30 AM:</strong> Arrive in Ayodhya Dham. Check into your booked hotel, freshen up, and enjoy lunch.
            </li>
            <li class="mb-3">
              <strong>02:30 PM:</strong> Chauffeur takes you to Tedhi Bazar parking. Visit the historic <strong>Hanuman Garhi</strong> fort-temple (76 steps climb).
            </li>
            <li class="mb-3">
              <strong>04:30 PM:</strong> Visit <strong>Kanak Bhawan</strong> (the golden palace of Mata Sita), Sita Ki Rasoi, and Dashrath Mahal.
            </li>
            <li class="mb-0">
              <strong>06:30 PM:</strong> Proceed to <strong>Naya Ghat / Ram Ki Paidi</strong> for the mesmerizing evening Saryu River Maha Aarti and musical fountain light show. Overnight stay in Ayodhya.
            </li>
          </ul>
        </div>

        <div class="card">
          <div class="flex items-center gap-3 mb-3">
            <span class="badge" style="background:var(--clr-saffron);color:#fff;font-weight:700;padding:6px 14px;border-radius:4px;">DAY 2</span>
            <h3 class="mb-0">Shri Ram Janmabhoomi &amp; Return to Varanasi</h3>
          </div>
          <ul class="itinerary-list pl-0" style="list-style:none;">
            <li class="mb-3">
              <strong>06:30 AM:</strong> Early morning departure for <strong>Shri Ram Janmabhoomi Mandir</strong>. Experience tranquil darshan of Ram Lalla with minimal queue delays.
            </li>
            <li class="mb-3">
              <strong>09:30 AM:</strong> Return to hotel for breakfast and checkout.
            </li>
            <li class="mb-3">
              <strong>11:00 AM:</strong> Visit sacred <strong>Guptar Ghat</strong> on the banks of Saryu, the historic spot where Lord Rama took Jal Samadhi.
            </li>
            <li class="mb-3">
              <strong>01:00 PM:</strong> Traditional Awadhi lunch at Ayodhya.
            </li>
            <li class="mb-0">
              <strong>02:30 PM:</strong> Board your private cab for the return drive to Varanasi, arriving comfortably by 07:00 PM at your hotel, Varanasi Cantt railway station, or Lal Bahadur Shastri Airport.
            </li>
          </ul>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: FARES TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">2-Day Tour Pricing &amp; Vehicle Options</h2>
      <p class="text-muted mb-4">All-inclusive pricing covers vehicle hire, dedicated chauffeur, fuel, round-trip highway tolls, municipal parking, and driver night allowance.</p>

      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Vehicle Model</th>
              <th>Capacity</th>
              <th>2-Day Total Fare</th>
              <th>Per Person (Approx.)</th>
              <th>Best For</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
              <td>4 Guests</td>
              <td><strong>₹11,500</strong></td>
              <td>₹2,875 / person</td>
              <td>Couples &amp; small families</td>
            </tr>
            <tr>
              <td><strong>Maruti Ertiga</strong> (AC MPV)</td>
              <td>6 Guests</td>
              <td><strong>₹14,500</strong></td>
              <td>₹2,416 / person</td>
              <td>Families with seniors or kids</td>
            </tr>
            <tr>
              <td><strong>Toyota Innova Crysta</strong></td>
              <td>7 Guests</td>
              <td><strong>₹18,000</strong></td>
              <td>₹2,570 / person</td>
              <td>Executive comfort, superior ride</td>
            </tr>
            <tr>
              <td><strong>Force Urbania</strong> (9-12 Seater)</td>
              <td>12 Guests</td>
              <td><strong>₹22,500</strong></td>
              <td>₹1,875 / person</td>
              <td>Joint families, group yatras</td>
            </tr>
            <tr>
              <td><strong>Tempo Traveller</strong> (17-Seater)</td>
              <td>17 Guests</td>
              <td><strong>₹26,000</strong></td>
              <td>₹1,530 / person</td>
              <td>Pilgrim groups, bhajan mandalis</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="note-box mt-3">
        <i class="fas fa-info-circle text-primary" aria-hidden="true"></i>
        <span><strong>Exclusions:</strong> Hotel stay in Ayodhya, meals, and temple prasad/offerings are not included. We are happy to suggest verified hotels in Ayodhya upon booking.</span>
      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — 2-Day Ayodhya Tour</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-2d-1">
            <span>Is hotel accommodation included in this package?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-2d-1" class="faq-answer">
            <p>No. This package provides dedicated private vehicle transportation, chauffeur, fuel, highway tolls, and driver night BATA. Hotel accommodation is arranged directly by travelers according to their personal preferences, though we can recommend clean, pilgrim-friendly hotels near the temple.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-2d-2">
            <span>Why choose a 2-day tour instead of a 1-day trip?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-2d-2" class="faq-answer">
            <p>A same-day return trip requires 8-9 hours of driving and can be physically taxing for elderly pilgrims. The 2-day itinerary allows you to enjoy the evening Saryu Aarti, visit Ram Ki Paidi, and attend peaceful early morning darshan without rushing.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-2d-3">
            <span>Where will the driver park during our darshan?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-2d-3" class="faq-answer">
            <p>Our chauffeur parks at authorized lots (such as Tedhi Bazar Multi-Level Car Parking or Amaniganj) and remains with the vehicle, safely safeguarding your luggage while you visit the temple.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-2d-4">
            <span>Can we extend the tour to include Prayagraj?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-2d-4" class="faq-answer">
            <p>Yes. Check out our <a href="/tours/varanasi-prayagraj-ayodhya-package/"><strong>3-City Varanasi-Prayagraj-Ayodhya Pilgrimage Package</strong></a>, which covers Triveni Sangam and Ram Janmabhoomi seamlessly.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your 2-Day Varanasi to Ayodhya Tour</h2>
      <p class="text-muted mb-4">Reserve your private cab today. Pay zero hidden fees with guaranteed chauffeur dispatch.</p>
      <?php
      $form_origin      = 'Varanasi';
      $form_destination = 'Ayodhya';
      $form_trip_type   = 'multi_day';
      $form_section_id  = 'ayodhya-2day-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
