<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Ayodhya to Varanasi Cab | Taxi Booking & Fare from ₹6,500 | Book Cab Varanasi';
$meta_desc      = 'Book an Ayodhya to Varanasi cab for one-way or round-trip travel. Swift Dzire from ₹6,500. Punctual hotel & station pickup. Arrive in time for Kashi Ganga Aarti.';
$canonical      = 'https://bookcabvaranasi.com/routes/ayodhya-to-varanasi-cab/';
$og_title       = 'Ayodhya to Varanasi Cab | Reliable Private Taxi | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'Ayodhya to Varanasi cab';

$breadcrumbs = [
    ['name' => 'Home',     'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Routes',   'url' => 'https://bookcabvaranasi.com/services/outstation-taxi-varanasi/'],
    ['name' => 'Ayodhya to Varanasi Cab', 'url' => $canonical],
];

// Structured Data: FAQPage + TaxiService Schema
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'Where will the driver pick us up in Ayodhya?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Because vehicles are strictly restricted within Ram Path, Janmabhoomi Path, and the temple sanctum, our chauffeur will coordinate pickup directly at your Ayodhya hotel or at designated municipal parking zones like Tedhi Bazar Multi-Level Car Parking, Amaniganj, or Naya Ghat. We also provide direct pickups from Ayodhya Dham Junction (AY), Ayodhya Cantt (AYC), and Maharishi Valmiki International Airport (AYJ).'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What time should we leave Ayodhya to see the Ganga Aarti in Varanasi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The famous Dashashwamedh Ghat evening Ganga Aarti commences between 6:30 PM and 7:00 PM depending on season. Because the highway drive takes 4 to 4.5 hours and traffic slows near Varanasi city limits, we strongly recommend departing Ayodhya no later than 1:30 PM to 2:00 PM.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the cab fare from Ayodhya to Varanasi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'One-way private AC sedan (Swift Dzire / Etios) is ₹6,500. Maruti Ertiga is ₹8,000, Innova Crysta is ₹10,000, and Force Urbania / Tempo Traveller is available on custom quotation. Highway tolls (~₹200-₹300) and parking are paid at actuals.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can your cab drop us directly at our riverside hotel near Dashashwamedh Ghat?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The riverside ghats in Varanasi are connected by ancient pedestrian cobblestone alleyways where four-wheelers cannot enter. Your chauffeur will drop you at the closest accessible motorable barrier—typically Godowlia Chowk, Maidagin, or Luxa Road (a 300 to 500-meter walk or e-rickshaw ride). Chauffeurs assist with luggage porter coordination.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is the highway safe for late evening or night travel from Ayodhya to Varanasi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes, the NH-27 / NH-135A corridor is an active national highway with consistent commercial traffic, well-lit bypass junctions, and reputable highway dhabas. Our chauffeurs are experienced night drivers with complete local familiarity.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can we visit Sultanpur or Jaunpur on the way back to Varanasi?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes, on request our private cabs can accommodate en-route stops at Jaunpur (historic Shahi Bridge, Atala Mosque) or Sultanpur for meals or brief sightseeing. Minor detours are easily arranged with your chauffeur.'
            ]
        ],
    ],
];

$serviceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'TaxiService',
    '@id'         => $canonical . '#service',
    'name'        => 'Ayodhya to Varanasi Cab Service',
    'serviceType' => 'Chauffeur-driven intercity taxi service',
    'provider'    => [
        '@type'     => 'LocalBusiness',
        '@id'       => 'https://bookcabvaranasi.com/#business',
        'name'      => BCV_BRAND,
        'telephone' => BCV_PHONE_MAIN,
        'url'       => BCV_DOMAIN,
    ],
    'areaServed'  => [
        ['@type' => 'City', 'name' => 'Ayodhya'],
        ['@type' => 'City', 'name' => 'Varanasi'],
    ],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => '6500',
        'priceCurrency' => 'INR',
        'description'   => 'One-way AC Sedan taxi from Ayodhya to Varanasi',
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
      <span class="breadcrumb__current">Ayodhya to Varanasi Cab</span>
    </nav>
    <h1 class="page-hero__title">Ayodhya to Varanasi Cab Booking</h1>
    <p class="page-hero__desc">Reliable, air-conditioned return cab service from Ayodhya Dham to Varanasi. Doorstep pickup from Tedhi Bazar parking, hotels, or Ayodhya Airport. Dedicated chauffeur, transparent fares starting at ₹6,500.</p>
    <div class="flex gap-4 mt-4" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
        <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
      </a>
      <a class="btn btn-secondary btn-lg" href="<?php echo bcv_whatsapp_url('Hello, I want to book an Ayodhya to Varanasi cab'); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Booking
      </a>
    </div>
  </div>
</section>

<!-- ═══ ROUTE QUICK FACTS ═══ -->
<div class="trust-bar" role="region" aria-label="Route summary metrics">
  <div class="container trust-bar__inner">
    <div class="trust-item"><i class="fas fa-route" aria-hidden="true"></i> <strong>Distance:</strong> ~200 km</div>
    <div class="trust-item"><i class="fas fa-clock" aria-hidden="true"></i> <strong>Travel Time:</strong> ~4.0 to 4.5 Hours</div>
    <div class="trust-item"><i class="fas fa-road" aria-hidden="true"></i> <strong>Route:</strong> NH-27 / NH-135A via Jaunpur</div>
    <div class="trust-item"><i class="fas fa-tag" aria-hidden="true"></i> <strong>Sedan Fare:</strong> From ₹6,500</div>
  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══ SECTION: ROUTE INTRO & OPERATIONAL HIGHLIGHTS ═══ -->
    <section class="mb-8">
      <div class="prose max-w-none">
        <h2>Return Travel from Shri Ram Janmabhoomi to Kashi</h2>
        <p>
          After completing your divine <em>darshan</em> of Bhagwan Shri Ram Lalla at the grand Janmabhoomi temple, praying at Hanuman Garhi, and taking holy <em>Aachman</em> at the Saryu River Ghats, your return journey from Ayodhya to Varanasi requires comfortable, air-conditioned, and dependable private transportation.
        </p>
        <p>
          Navigating Ayodhya during peak pilgrimage hours involves navigating pedestrian corridors and strict security cordons. With <strong>Book Cab Varanasi</strong>, your assigned chauffeur coordinates directly with you, meeting you at your designated municipal parking zone or hotel lobby, stowing your temple prasad and luggage safely, and driving you smoothly back to the ancient city of Lord Shiva.
        </p>
      </div>

      <!-- Crucial operational disclaimer box -->
      <div class="note-box mt-4" style="border-left: 4px solid var(--clr-saffron);">
        <i class="fas fa-exclamation-triangle text-primary" aria-hidden="true"></i>
        <div>
          <strong>Ayodhya Pickup &amp; Varanasi Drop-off Information:</strong>
          <ul class="mb-0 mt-1 pl-4" style="list-style:disc">
            <li><strong>Ayodhya Pickup:</strong> Four-wheelers cannot enter Ram Path or Janmabhoomi Path. Drivers meet guests at Tedhi Bazar Multi-Level Car Parking, Amaniganj, Naya Ghat parking, or your designated hotel reception.</li>
            <li><strong>Reaching Kashi Aarti on Time:</strong> The Dashashwamedh evening Ganga Aarti starts between 6:30 PM and 7:00 PM. We advise leaving Ayodhya by 1:30 PM to account for city entry traffic in Varanasi.</li>
            <li><strong>Varanasi Ghat Access:</strong> Cabs drop travelers at Godowlia Chowk or Luxa Road because old city ghat streets are strictly pedestrian.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ═══ SECTION: FARES TABLE ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Taxi Fare: Ayodhya to Varanasi</h2>
      <p class="text-muted mb-4">Transparent one-way and return cab pricing. Fuel and driver allowances are included. Highway toll taxes (~₹200 to ₹300) and municipal parking are paid at actuals.</p>

      <div class="table-responsive card p-0">
        <table class="fare-table">
          <thead>
            <tr>
              <th>Vehicle Model</th>
              <th>Passenger Capacity</th>
              <th>Luggage Capacity</th>
              <th>One-Way Fare</th>
              <th>Suitability</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Maruti Swift Dzire</strong> (AC Sedan)</td>
              <td>Up to 4 Persons</td>
              <td>2 Large Bags + Handbags</td>
              <td><strong>₹6,500</strong></td>
              <td>Couples, solo pilgrims, small families</td>
            </tr>
            <tr>
              <td><strong>Maruti Ertiga</strong> (AC 6-Seater MPV)</td>
              <td>Up to 6 Persons</td>
              <td>3-4 Medium Bags</td>
              <td><strong>₹8,000</strong></td>
              <td>Families with elderly members or extra baggage</td>
            </tr>
            <tr>
              <td><strong>Toyota Innova Crysta</strong> (AC Premium MPV)</td>
              <td>Up to 7 Persons</td>
              <td>4-5 Bags</td>
              <td><strong>₹10,000</strong></td>
              <td>Premium comfort, captain seating, highway smoothness</td>
            </tr>
            <tr>
              <td><strong>Force Urbania / Tempo Traveller</strong></td>
              <td>9 to 26 Persons</td>
              <td>Dedicated Rear Luggage Boot</td>
              <td><strong>Request Quote</strong></td>
              <td>Pilgrim groups, bhajan mandalis, joint families</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ═══ SECTION: VEHICLE OPTIONS ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Choose Your Vehicle for Ayodhya to Varanasi</h2>
      <div class="grid-3 gap-6">

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-car" aria-hidden="true"></i></div>
          <h3 class="card-title">Comfort AC Sedan</h3>
          <p class="text-sm">Swift Dzire or Hyundai Aura. Smooth highway ride, dual airbags, powerful AC, and budget-friendly pricing for up to 4 passengers.</p>
          <ul class="text-xs text-muted mb-3">
            <li>✓ Chauffeur driven with GPS</li>
            <li>✓ ₹6,500 one-way fixed price</li>
            <li>✓ Boot fits 2 standard suitcases</li>
          </ul>
          <a class="btn btn-outline btn-sm" href="/fleet/sedan-cab-rental/">Explore Sedan Fleet ›</a>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-shuttle-van" aria-hidden="true"></i></div>
          <h3 class="card-title">Maruti Ertiga / XL6</h3>
          <p class="text-sm">Roomy 6-seater MPV with foldable third-row seating, rear AC controls, and generous legroom for parents and kids.</p>
          <ul class="text-xs text-muted mb-3">
            <li>✓ Comfortable 6-passenger layout</li>
            <li>✓ Smooth highway suspension</li>
            <li>✓ ₹8,000 one-way fixed price</li>
          </ul>
          <a class="btn btn-outline btn-sm" href="/fleet/ertiga-cab-rental/">Explore Ertiga Fleet ›</a>
        </div>

        <div class="card">
          <div class="card-service__icon"><i class="fas fa-bus" aria-hidden="true"></i></div>
          <h3 class="card-title">Force Urbania &amp; Tempo</h3>
          <p class="text-sm">The gold standard for group pilgrimages. Luxury pushback bucket seats, panoramic side windows, individual charging ports, and massive luggage hold.</p>
          <ul class="text-xs text-muted mb-3">
            <li>✓ 9, 12, 17, 21, and 26-seater options</li>
            <li>✓ Dedicated boot space for all bags</li>
            <li>✓ Custom group tour discounts</li>
          </ul>
          <a class="btn btn-outline btn-sm" href="/fleet/tempo-traveller-rental/">Explore Group Fleet ›</a>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: ROUTE & TIMING GUIDELINES ═══ -->
    <section class="mb-8">
      <h2 class="mb-3">Distance, Route and Recommended Travel Schedule</h2>
      <div class="card">
        <p>The total distance between Ayodhya and Varanasi is approximately <strong>200 km</strong>. The primary driving corridor follows the newly widened <strong>NH-27 / NH-135A highway via Sultanpur and Jaunpur bypass</strong>. The road surface is predominantly 4-lane divided highway with smooth cruising conditions.</p>
        
        <h4>Suggested Schedule for Returning to Varanasi:</h4>
        <div class="itinerary-list mt-3">
          <ul class="pl-4 mb-0" style="list-style: none;">
            <li class="mb-2"><strong>1:00 PM – 1:30 PM:</strong> Finish lunch near Ram Janmabhoomi / Kanak Bhawan; board taxi at Tedhi Bazar or hotel.</li>
            <li><strong>3:30 PM:</strong> Cross Jaunpur bypass. Brief 15-minute tea break at highway restaurant.</li>
            <li><strong>5:30 PM – 6:00 PM:</strong> Enter Varanasi via Shivpur / Cantt ring road.</li>
            <li class="mb-0"><strong>6:30 PM:</strong> Arrive at your Varanasi hotel or walk down to Dashashwamedh Ghat for the evening Maha Aarti.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ═══ SECTION: FAQ ACCORDION ═══ -->
    <section class="mb-8">
      <h2 class="mb-4">Frequently Asked Questions — Ayodhya to Varanasi Cab</h2>
      <div class="faq-list">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2v-1">
            <span>Where will the driver pick us up in Ayodhya?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2v-1" class="faq-answer">
            <p>Because vehicles are restricted on Ram Path and Janmabhoomi Path, our chauffeur coordinates pickup directly at your hotel or at major designated municipal parking lots like Tedhi Bazar Multi-Level Car Parking, Amaniganj, or Naya Ghat. We also pick up at Ayodhya Dham Junction (AY) and Maharishi Valmiki International Airport (AYJ).</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2v-2">
            <span>What time should we leave Ayodhya to see the Ganga Aarti in Varanasi?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2v-2" class="faq-answer">
            <p>We advise leaving Ayodhya between 1:30 PM and 2:00 PM. The journey takes 4 to 4.5 hours. Departing at this time ensures you reach Varanasi by 6:00 PM to 6:30 PM, giving you comfortable time to reach Dashashwamedh or Assi Ghat before the 7:00 PM aarti starts.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2v-3">
            <span>What is the cab fare from Ayodhya to Varanasi?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2v-3" class="faq-answer">
            <p>One-way AC sedan (Dzire) is ₹6,500. Maruti Ertiga is ₹8,000, Innova Crysta is ₹10,000, and Force Urbania / Tempo Traveller is provided on request. Highway tolls (~₹200-₹300) are paid at actuals.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2v-4">
            <span>Can your cab drop us directly at our riverside hotel near Dashashwamedh Ghat?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2v-4" class="faq-answer">
            <p>Ghat alleys in old Varanasi are pedestrian-only. Cabs drop passengers at the closest vehicle point—typically Godowlia Chowk or Luxa Road (a 300 to 500-meter walk or e-rickshaw ride). Chauffeurs assist with luggage porter coordination.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2v-5">
            <span>Is the highway safe for late evening or night travel?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2v-5" class="faq-answer">
            <p>Yes, the NH-27 / NH-135A corridor is a safe national highway with consistent commercial traffic, illuminated bypasses, and branded petrol stations. Our verified drivers are experienced with nocturnal driving conditions.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-a2v-6">
            <span>Can we make a halt at Jaunpur or Sultanpur?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-a2v-6" class="faq-answer">
            <p>Yes, halts for meals or short visits (such as the historic Shahi Bridge in Jaunpur) can be easily arranged with your chauffeur prior to departure.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══ SECTION: RELATED ROUTES ═══ -->
    <section class="mb-8">
      <h3 class="mb-3">Related Intercity Cab Routes</h3>
      <div class="flex gap-4" style="flex-wrap:wrap">
        <a class="btn btn-outline btn-sm" href="/routes/varanasi-to-ayodhya-cab/">Varanasi to Ayodhya Cab ›</a>
        <a class="btn btn-outline btn-sm" href="/routes/prayagraj-to-ayodhya-cab/">Prayagraj to Ayodhya Cab ›</a>
        <a class="btn btn-outline btn-sm" href="/routes/varanasi-to-prayagraj-taxi/">Varanasi to Prayagraj Taxi ›</a>
        <a class="btn btn-outline btn-sm" href="/tours/ayodhya-ram-mandir-taxi-package/">Ayodhya Ram Mandir Package ›</a>
        <a class="btn btn-outline btn-sm" href="/locations/ayodhya/">Ayodhya City Hub ›</a>
      </div>
    </section>

    <!-- ═══ SECTION: BOOKING FORM ═══ -->
    <section class="card mb-8" id="booking-section">
      <h2 class="mb-2">Book Your Ayodhya to Varanasi Cab</h2>
      <p class="text-muted mb-4">Fill out your pickup point in Ayodhya and destination in Varanasi. Instant driver confirmation via phone &amp; WhatsApp.</p>
      <?php
      $form_origin      = 'Ayodhya';
      $form_destination = 'Varanasi';
      $form_section_id  = 'ayodhya-to-varanasi-form';
      include __DIR__ . '/../includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<?php
include __DIR__ . '/../includes/footer.php';
?>
