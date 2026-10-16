<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Kashi Darshan Cab Package | Varanasi Temple Tour Taxi | Book Cab Varanasi';
$meta_desc      = 'Book a full-day Kashi Darshan cab package. AC sedan from ₹2,000 for 8hr/80km. Visit Kashi Vishwanath Dham, Kal Bhairav, Sankat Mochan, Sarnath & Ganga Aarti.';
$canonical      = 'https://bookcabvaranasi.com/tours/kashi-darshan-cab-package/';
$og_title       = 'Kashi Darshan Cab Package | Complete Varanasi Temple Tour';
$og_desc        = $meta_desc;
$whatsapp_route = 'Kashi Darshan cab package';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Tours',    'url' => 'https://bookcabvaranasi.com/tours/varanasi-prayagraj-ayodhya-package/'],
    ['name' => 'Kashi Darshan Cab Package', 'url' => $canonical],
];

// Structured Data: TouristTrip + Service + FAQPage Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'Can the cab drop us directly in front of the Kashi Vishwanath Temple gate?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'No. The inner corridor of Kashi Vishwanath Dham and the Dashashwamedh Ghat precinct are pedestrian-only zones protected by municipal police barricades. Our chauffeur drops you at the nearest authorized point—typically Godowlia Chowk or Luxa Road (a 300 to 400-meter walk or brief battery e-rickshaw ride).',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the fare for the Kashi Darshan tour package?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Our standard 8-hour / 80 km Kashi Darshan package starts at ₹2,000 for a 4-seater AC Sedan (Swift Dzire). Maruti Ertiga is ₹2,400, Toyota Innova Crysta is ₹3,500, and 16-seater Tempo Traveller is ₹5,000. Extended 12-hour / 120 km options are also available.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does this cab package include temple VIP darshan tickets or Ganga boat rides?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'This package covers private air-conditioned vehicle hire, professional chauffeur, and fuel. Temple Sugam Darshan tickets (which can be booked on the official Shri Kashi Vishwanath trust portal) and private boat rides at the ghats are arranged separately by devotees.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Are cameras, phones, and leather items allowed inside Kashi Vishwanath?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Mobile phones, smartwatches, leather belts/wallets, and cameras are strictly prohibited inside the main Kashi Vishwanath sanctum. Devotees can safely leave these items in our locked vehicle with the dedicated chauffeur or use official temple locker counters outside the gate.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can we modify or customize the temples included in the itinerary?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes, the itinerary is completely flexible within the booked time and kilometer slab. You can adjust the sequence of visits according to temple aarti timings or your personal preferences.',
            ],
        ],
    ],
];

$tripSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TouristTrip',
    '@id'         => $canonical . '#trip',
    'name'        => 'Kashi Darshan Cab Package',
    'description' => 'Comprehensive full-day pilgrimage cab tour covering Kashi Vishwanath, Kal Bhairav, Sankat Mochan, Sarnath, and Dashashwamedh Ganga Aarti.',
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
        'price'         => '2000',
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
      <span class="breadcrumb__current">Kashi Darshan Cab Package</span>
    </nav>
    <h1 class="page-hero__title">Kashi Darshan Cab Package</h1>
    <p class="page-hero__desc">Full-day, air-conditioned private temple tour across sacred Varanasi. Experience Shri Kashi Vishwanath Dham, Kal Bhairav, Sankat Mochan, Sarnath, and the divine evening Ganga Aarti. Sedan package starting at ₹2,000.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I would like to book the Kashi Darshan Cab Package'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ PACKAGE HIGHLIGHTS BAR ═══ -->
<div class="trust-bar" role="region" aria-label="Package highlights">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-clock" aria-hidden="true"></i> <strong>Duration:</strong> 8 Hours / 80 Km (or 12hr)</div>
    <div class="trust-item"><i class="fas fa-car" aria-hidden="true"></i> <strong>Sedan Tariff:</strong> From ₹2,000</div>
    <div class="trust-item"><i class="fas fa-om" aria-hidden="true"></i> <strong>Key Shrines:</strong> Vishwanath Dham, Kal Bhairav, Sarnath</div>
    <div class="trust-item"><i class="fas fa-map-pin" aria-hidden="true"></i> <strong>Pickup:</strong> Any Varanasi Hotel / Station</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: TOUR OVERVIEW ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>Experience the Spiritual Soul of Kashi in Comfort</h2>
        <p>
          Varanasi—also known as Kashi and Banaras—is the eternal abode of Lord Shiva and one of the world's oldest continuously inhabited sacred cities. Navigating its labyrinthine alleyways, crowded ghat approaches, and outer temple shrines on your own can be challenging, especially for families with elderly parents or children.
        </p>
        <p>
          Our <strong>Kashi Darshan Cab Package</strong> provides a dedicated, clean, air-conditioned private vehicle and an experienced local chauffeur for the entire day. Your chauffeur will pick you up at your hotel doorstep, safely hold your luggage and electronic devices while you enter temples with strict baggage restrictions, and guide you seamlessly through Varanasi's sacred circuit.
        </p>
      </div>

      <div class="note-box mt-4" style="border-left: 4px solid var(--clr-saffron);">
        <i class="fas fa-info-circle text-primary" aria-hidden="true"></i>
        <div>
          <strong>Important Temple Guidelines:</strong>
          <ul class="mb-0 mt-1 pl-4" style="list-style:disc">
            <li><strong>Vehicular Limits:</strong> Old Varanasi ghats and the immediate Kashi Vishwanath Dham precinct are pedestrian-only. Cabs park at Godowlia Chowk or Maidagin; temple access is on foot or via authorized e-rickshaws.</li>
            <li><strong>Locker &amp; Electronics Rule:</strong> Mobile phones, electronic keys, smartwatches, and leather goods are prohibited inside the Kashi Vishwanath sanctum. Keep them locked securely in your reserved private cab.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ═══ SECTION: DETAILED ITINERARY ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Curated Full-Day Itinerary (Sample 8 to 10-Hour Plan)</h2>
      <div class="card p-0">
        <ul class="itinerary-list">
          <li>
            <div class="itinerary-time">06:00 AM</div>
            <div class="itinerary-details">
              <h4>Assi Ghat &amp; Subah-e-Banaras</h4>
              <p>Doorstep hotel pickup. Witness the serene morning Vedic chanting, classical music, and Ganga Aarti at Assi Ghat, followed by a tranquil sunrise boat ride (optional).</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">08:00 AM</div>
            <div class="itinerary-details">
              <h4>Shri Kashi Vishwanath Dham &amp; Annapurna Mandir</h4>
              <p>Drop at Godowlia barrier. Devotees enter through the majestic Kashi Vishwanath Corridor to offer prayers at the sacred Jyotirlinga, followed by darshan of Mata Annapurna.</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">10:30 AM</div>
            <div class="itinerary-details">
              <h4>Kal Bhairav Temple (Kotwal of Kashi)</h4>
              <p>Tradition dictates seeking the blessings of Lord Kal Bhairav, the fierce guardian deity of Varanasi, to complete the pilgrimage.</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">12:30 PM</div>
            <div class="itinerary-details">
              <h4>Traditional Banarasi Lunch Break</h4>
              <p>Chauffeur takes you to a premier pure vegetarian restaurant for authentic Banarasi thali, kachori-jalebi, and seasonal delicacies.</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">01:45 PM</div>
            <div class="itinerary-details">
              <h4>Sankat Mochan Temple &amp; Durga Kund</h4>
              <p>Darshan at the revered Sankat Mochan Hanuman Temple founded by Goswami Tulsidas, followed by the historic red stone Durga Kund Mandir.</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">03:00 PM</div>
            <div class="itinerary-details">
              <h4>New Vishwanath Temple (BHU) &amp; Bharat Mata Mandir</h4>
              <p>Visit the peaceful Banaras Hindu University (BHU) campus to admire the tallest temple tower in India at Birla Mandir, followed by the unique marble map temple of Mother India.</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">04:30 PM</div>
            <div class="itinerary-details">
              <h4>Sarnath Buddhist Pilgrimage &amp; Deer Park</h4>
              <p>Drive 10 km to Sarnath where Lord Buddha preached his first sermon. Explore Dhamek Stupa, Chaukhandi Stupa, and the world-renowned Ashoka Lion Capital museum.</p>
            </div>
          </li>
          <li>
            <div class="itinerary-time">06:30 PM</div>
            <div class="itinerary-details">
              <h4>Dashashwamedh Ghat Evening Ganga Aarti</h4>
              <p>Chauffeur drops you in time for the world-famous grand evening Maha Aarti at Dashashwamedh Ghat. Return transfer back to your hotel after the ceremony.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- ═══ SECTION: FARES TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Kashi Darshan Package Pricing &amp; Fleet Options</h2>
      <p class="text-muted mb-4">Choose between our standard 8-hour / 80-km package or our extended 12-hour / 120-km full circuit package.</p>

      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Vehicle Model</th>
              <th>Capacity</th>
              <th>8 Hr / 80 Km</th>
              <th>12 Hr / 120 Km</th>
              <th>Extra Km / Hr</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
              <td>4 Guests</td>
              <td><strong>₹2,000</strong></td>
              <td><strong>₹2,600</strong></td>
              <td>₹13/km · ₹150/hr</td>
            </tr>
            <tr>
              <td><strong>Maruti Ertiga</strong> (AC MPV)</td>
              <td>6 Guests</td>
              <td><strong>₹2,400</strong></td>
              <td><strong>₹3,200</strong></td>
              <td>₹16/km · ₹200/hr</td>
            </tr>
            <tr>
              <td><strong>Toyota Innova Crysta</strong></td>
              <td>7 Guests</td>
              <td><strong>₹3,500</strong></td>
              <td><strong>₹4,500</strong></td>
              <td>₹19/km · ₹250/hr</td>
            </tr>
            <tr>
              <td><strong>Force Urbania</strong> (Luxury 6-7 Seater)</td>
              <td>6-7 Guests</td>
              <td><strong>₹2,600</strong></td>
              <td><strong>₹3,500</strong></td>
              <td>₹35/km · ₹300/hr</td>
            </tr>
            <tr>
              <td><strong>Tempo Traveller</strong> (16-Seater)</td>
              <td>16 Guests</td>
              <td><strong>₹5,000</strong></td>
              <td><strong>₹6,000</strong></td>
              <td>₹32/km · ₹350/hr</td>
            </tr>
            <tr>
              <td><strong>Tempo Traveller</strong> (21-Seater)</td>
              <td>21 Guests</td>
              <td><strong>₹6,000</strong></td>
              <td><strong>₹7,000</strong></td>
              <td>₹32/km · ₹400/hr</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="note-box mt-3">
        <i class="fas fa-check-circle text-primary" aria-hidden="true"></i>
        <span><strong>Package Inclusions:</strong> Dedicated vehicle, fuel, chauffeur allowance, and air conditioning. Ghat/monument parking tickets and temple entry tickets are paid directly by guests.</span>
      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Kashi Darshan Tour</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-kd-1">
            <span>Can the cab drop us directly in front of the Kashi Vishwanath Temple gate?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-kd-1" class="faq-answer">
            <p>No four-wheeler can enter the inner corridor of Kashi Vishwanath Dham or the Dashashwamedh Ghat alleyways. Our chauffeur drops you at the nearest authorized point—typically Godowlia Chowk or Luxa Road (a 300 to 400-meter walk or brief battery e-rickshaw ride).</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-kd-2">
            <span>What is the fare for the Kashi Darshan tour package?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-kd-2" class="faq-answer">
            <p>Our standard 8-hour / 80 km Kashi Darshan package starts at ₹2,000 for a 4-seater AC Sedan (Swift Dzire). Maruti Ertiga is ₹2,400, Innova Crysta is ₹3,500, and 16-seater Tempo Traveller is ₹5,000.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-kd-3">
            <span>Does this cab package include temple VIP darshan tickets or Ganga boat rides?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-kd-3" class="faq-answer">
            <p>This package covers private air-conditioned vehicle hire, professional chauffeur, and fuel. Temple Sugam Darshan tickets and boat rides at the ghats are arranged separately by devotees.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-kd-4">
            <span>Where do we keep our mobile phones during Kashi Vishwanath darshan?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-kd-4" class="faq-answer">
            <p>Mobile phones, cameras, smartwatches, and leather belts are strictly banned inside the sanctum. You can safely leave them locked in your dedicated private cab under the chauffeur's care, saving time otherwise spent queuing at temple locker counters.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-kd-5">
            <span>Can we customize the temples we want to visit?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-kd-5" class="faq-answer">
            <p>Yes. The tour is completely flexible within your chosen 8-hour or 12-hour duration. You can add or substitute shrines like Trilochan Mahadev, Batuk Bhairav, or Markandey Mahadev upon request.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Kashi Darshan Cab Package</h2>
      <p class="text-muted mb-4">Select your pickup date, hotel address, and preferred car type for guaranteed booking confirmation.</p>
      <?php
      $form_origin      = 'Varanasi';
      $form_destination = 'Kashi Darshan Package';
      $form_trip_type   = 'local';
      $form_section_id  = 'kashi-darshan-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
