<?php
require_once __DIR__ . '/includes/config.php';

// SEO Variables
$page_title  = 'Book Cab Varanasi | #1 Taxi, Tempo Traveller & Pilgrimage Tour Service';
$meta_desc   = 'Book a reliable cab, tempo traveller or tour bus in Varanasi. Transparent fares for airport, local sightseeing & outstation trips to Ayodhya & Prayagraj. Call 24/7.';
$canonical   = 'https://bookcabvaranasi.com/';
$og_title    = $page_title;
$og_desc     = $meta_desc;
$og_image    = 'https://bookcabvaranasi.com/assets/img/kashi2.jpg';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://bookcabvaranasi.com/'],
];
$whatsapp_route = 'Varanasi cab booking';

// Schema.org Structured Data: LocalBusiness + TaxiService + WebSite + FAQPage in @graph
$schema_data = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => ["LocalBusiness", "TaxiService"],
            "@id" => "https://bookcabvaranasi.com/#business",
            "name" => "Book Cab Varanasi",
            "url" => "https://bookcabvaranasi.com/",
            "telephone" => "+91-9838409911",
            "email" => "info@bookcabvaranasi.com",
            "image" => "https://bookcabvaranasi.com/assets/img/kashi2.jpg",
            "priceRange" => "₹₹",
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "reviewCount" => "470",
                "bestRating" => "5"
            ],
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "B31 PCF Plaza Cantonment",
                "addressLocality" => "Varanasi",
                "addressRegion" => "Uttar Pradesh",
                "postalCode" => "221002",
                "addressCountry" => "IN"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => 25.335649,
                "longitude" => 82.973915
            ],
            "openingHoursSpecification" => [
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                "opens" => "00:00",
                "closes" => "23:59"
            ],
            "areaServed" => [
                ["@type" => "City", "name" => "Varanasi"],
                ["@type" => "City", "name" => "Ayodhya"],
                ["@type" => "City", "name" => "Prayagraj"]
            ],
            "sameAs" => [
                "https://www.facebook.com/share/1BRvhF56Uz/",
                "https://www.instagram.com/bookcabvaranasi/"
            ]
        ],
        [
            "@type" => "WebSite",
            "@id" => "https://bookcabvaranasi.com/#website",
            "name" => "Book Cab Varanasi",
            "url" => "https://bookcabvaranasi.com/",
            "publisher" => ["@id" => "https://bookcabvaranasi.com/#business"]
        ],
        [
            "@type" => "FAQPage",
            "@id" => "https://bookcabvaranasi.com/#faq",
            "mainEntity" => [
                [
                    "@type" => "Question",
                    "name" => "How do I book a cab with Book Cab Varanasi?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "You can book instantly online by filling out our quick booking form, calling our 24/7 hotline at +91-9838409911, or messaging us on WhatsApp at +91-9648974238. Our reservation team confirms vehicle availability and transparent fixed fares within 10 to 15 minutes."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Are your taxi fares fixed or will there be hidden charges?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "All our taxi fares are 100% transparent. Fuel charges and driver allowances are included in local and tour packages. Outstation one-way and round-trip base fares are clearly stated upfront, with state highway tolls and parking charges billed as per actual receipts."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Can your taxi drop us right inside the temple premises at Kashi Vishwanath or Ayodhya Ram Mandir?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Due to strict government regulations and high-security pedestrian zones, no private four-wheelers or taxis are permitted into the inner sacred sanctum lanes. In Varanasi, our drivers park at official parking areas near Godaulia or Maidagin, from where temples are a short 200m to 400m walk or e-rickshaw ride. In Ayodhya, cabs drop at designated parking plazas near Ram Janmabhoomi Teerth Kshetra."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What vehicles are available for family and large group pilgrimages?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "We maintain a comprehensive fleet including Swift Dzire (up to 4 seats), Maruti Ertiga (up to 6 seats), Toyota Innova Crysta (up to 7 seats), Force Urbania luxury vans (6-7 and 9-12 seats), and Force Tempo Travellers (12, 17, 20, and 26 seaters), as well as 35-seater AC mini coaches for large pilgrim groups."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What is your cancellation and reschedule policy?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "We offer flexible cancellation. If you cancel at least 12 hours prior to your scheduled pickup time, no cancellation fee applies. Rescheduling is completely free subject to vehicle availability on your new requested dates."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Can I book a cab directly via WhatsApp on short notice?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Yes! Our round-the-clock WhatsApp support team at +91-9648974238 handles urgent inquiries, late-night Lal Bahadur Shastri Airport transfers, and same-day outstation cabs across Varanasi, Ayodhya, and Prayagraj."
                    ]
                ]
            ]
        ]
    ]
];
$schema_json = json_encode($schema_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<!-- Custom In-page Styles for Enhanced UX and Responsive Widget -->
<style>
/* Hero Custom Enhancements */
.hero-custom {
  position: relative;
  background: linear-gradient(135deg, #0D2C55 0%, #163D72 60%, #1a4a8a 100%);
  color: var(--clr-white);
  padding: clamp(3.5rem, 8vw, 6rem) 0 clamp(4rem, 9vw, 6.5rem);
  overflow: hidden;
}
.hero-custom::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 80% 20%, rgba(232, 115, 10, 0.15) 0%, transparent 60%);
  pointer-events: none;
}
.hero-badge-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(255, 192, 0, 0.15);
  border: 1px solid rgba(255, 192, 0, 0.4);
  color: var(--clr-gold);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 0.4rem 1rem;
  border-radius: var(--radius-full);
  margin-bottom: 1.25rem;
}
.hero-title-main {
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 800;
  line-height: 1.15;
  color: var(--clr-white);
  margin-bottom: 1.25rem;
}
.hero-title-main span {
  color: var(--clr-gold);
}
.hero-lead-text {
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: rgba(255, 255, 255, 0.88);
  max-width: 650px;
  line-height: 1.65;
  margin-bottom: 2rem;
}
.hero-badges-row {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  align-items: center;
  margin-top: 2rem;
  padding-top: 1.5rem;
  border-top: 1px solid rgba(255, 255, 255, 0.18);
}
.hero-badge-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.9);
  font-weight: 500;
}
.hero-badge-item i {
  color: var(--clr-gold);
}

/* Quick Booking Widget Floating / Overlap */
.quick-search-section {
  position: relative;
  z-index: 10;
  margin-top: -3rem;
  padding-bottom: 2.5rem;
}
.quick-search-box {
  background: var(--clr-white);
  border-radius: var(--radius-xl);
  box-shadow: 0 16px 40px rgba(13, 44, 85, 0.14), 0 4px 12px rgba(13, 44, 85, 0.08);
  border: 1px solid var(--clr-border);
  padding: clamp(1.25rem, 3vw, 2rem);
}
.quick-tabs-nav {
  display: flex;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
  border-bottom: 1px solid var(--clr-border);
  padding-bottom: 0.75rem;
  overflow-x: auto;
}
.quick-tab-btn {
  background: none;
  border: none;
  padding: 0.5rem 1.25rem;
  font-weight: 700;
  font-size: var(--fs-sm);
  color: var(--clr-text-muted);
  border-radius: var(--radius-full);
  cursor: pointer;
  transition: all var(--transition-fast);
  white-space: nowrap;
}
.quick-tab-btn.active {
  background: var(--clr-navy);
  color: var(--clr-white);
}
.quick-search-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1rem;
  align-items: flex-end;
}
.quick-field label {
  display: block;
  font-size: var(--fs-xs);
  font-weight: 700;
  color: var(--clr-navy);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 0.35rem;
}
.quick-field .input-wrap {
  position: relative;
  display: flex;
  align-items: center;
}
.quick-field .input-wrap i {
  position: absolute;
  left: 0.9rem;
  color: var(--clr-saffron);
  font-size: 0.95rem;
  pointer-events: none;
}
.quick-field input, .quick-field select {
  width: 100%;
  height: 48px;
  border: 1.5px solid var(--clr-border);
  border-radius: var(--radius-md);
  padding: 0 0.75rem 0 2.5rem;
  font-size: var(--fs-sm);
  color: var(--clr-text);
  background: var(--clr-white);
  transition: border-color var(--transition-fast);
}
.quick-field input:focus, .quick-field select:focus {
  outline: none;
  border-color: var(--clr-saffron);
  box-shadow: 0 0 0 3px rgba(232, 115, 10, 0.12);
}

/* Hub Cards */
.hub-card {
  background: var(--clr-white);
  border-radius: var(--radius-lg);
  border: 1.5px solid var(--clr-border);
  padding: 1.75rem;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-base);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  text-decoration: none;
}
.hub-card:hover {
  border-color: var(--clr-saffron);
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.hub-card__icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: var(--clr-saffron-light);
  color: var(--clr-saffron-dark);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  margin-bottom: 1.25rem;
}
.hub-card__title {
  font-size: var(--fs-xl);
  font-weight: 700;
  color: var(--clr-navy);
  margin-bottom: 0.5rem;
}
.hub-card__desc {
  font-size: var(--fs-sm);
  color: var(--clr-text-muted);
  line-height: 1.6;
  margin-bottom: 1.25rem;
  flex-grow: 1;
}
.hub-card__link {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  font-weight: 700;
  font-size: var(--fs-sm);
  color: var(--clr-saffron);
}

/* Fleet Card Enhancements */
.fleet-specs-list {
  text-align: left;
  margin: 1rem 0 1.25rem;
  font-size: var(--fs-xs);
  color: var(--clr-text-muted);
}
.fleet-specs-list li {
  padding: 0.25rem 0;
  display: flex;
  align-items: center;
  gap: 0.4rem;
}
.fleet-specs-list li i {
  color: var(--clr-success);
  font-size: 0.8rem;
}

/* Why Choose Us Feature Cards */
.feature-box {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-lg);
  padding: 1.75rem;
  transition: all var(--transition-base);
}
.feature-box:hover {
  background: rgba(255, 255, 255, 0.09);
  border-color: var(--clr-gold);
  transform: translateY(-3px);
}
.feature-box__icon {
  width: 50px;
  height: 50px;
  border-radius: var(--radius-md);
  background: rgba(255, 192, 0, 0.18);
  color: var(--clr-gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
  margin-bottom: 1.2rem;
}
.feature-box h3 {
  font-size: var(--fs-lg);
  color: var(--clr-white);
  margin-bottom: 0.5rem;
}
.feature-box p {
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.6;
}

/* Tour Card Badge */
.tour-badge {
  display: inline-block;
  background: var(--clr-saffron-light);
  color: var(--clr-saffron-dark);
  font-size: var(--fs-xs);
  font-weight: 700;
  text-transform: uppercase;
  padding: 0.25rem 0.65rem;
  border-radius: var(--radius-full);
  margin-bottom: 0.5rem;
}
</style>

<!-- ═══════════════════════════════════════════════════════════
     1. HERO SECTION
     ═══════════════════════════════════════════════════════════ -->
<section class="hero hero-custom" aria-labelledby="hero-heading">
  <div class="container">
    <div style="max-width: 820px;">
      
      <!-- Trust Eyebrow -->
      <div class="hero-badge-pill">
        <i class="fas fa-certificate" aria-hidden="true"></i>
        <span>Uttar Pradesh's #1 Pilgrimage &amp; Cab Network</span>
      </div>

      <!-- H1 -->
      <h1 class="hero-title-main" id="hero-heading">
        Varanasi's Most Trusted <span>Taxi &amp; Tempo Traveller</span> Service
      </h1>

      <!-- Subtext -->
      <p class="hero-lead-text">
        Serving over 10,000+ pilgrims and families across 20+ years of dedicated service. Experience hassle-free airport transfers, local temple sightseeing, and seamless spiritual journeys connecting Kashi Vishwanath, Ayodhya Ram Mandir, and Triveni Sangam Prayagraj with verified chauffeurs and guaranteed transparent pricing.
      </p>

      <!-- CTAs -->
      <div class="flex gap-4" style="flex-wrap: wrap;">
        <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
          <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
        </a>
        <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link('Varanasi cab booking inquiry')); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
          <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
        </a>
      </div>

      <!-- Trust Badges -->
      <div class="hero-badges-row" aria-label="Company Trust Indicators">
        <div class="hero-badge-item">
          <i class="fas fa-star" aria-hidden="true"></i>
          <span><strong>4.8/5 Rating</strong> (470+ Reviews)</span>
        </div>
        <div class="hero-badge-item">
          <i class="fas fa-check-circle" aria-hidden="true"></i>
          <span><strong>10,000+</strong> Happy Customers</span>
        </div>
        <div class="hero-badge-item">
          <i class="fas fa-clock" aria-hidden="true"></i>
          <span><strong>24/7</strong> Guaranteed Availability</span>
        </div>
        <div class="hero-badge-item">
          <i class="fas fa-shield-alt" aria-hidden="true"></i>
          <span><strong>Zero</strong> Hidden Fees</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     2. QUICK BOOKING SEARCH WIDGET
     ═══════════════════════════════════════════════════════════ -->
<section class="quick-search-section" aria-label="Quick Cab Booking Finder">
  <div class="container">
    <div class="quick-search-box">
      
      <!-- Trip Type Tabs -->
      <div class="quick-tabs-nav" role="tablist" aria-label="Trip Type Selector">
        <button type="button" class="quick-tab-btn active" data-type="one_way" role="tab" aria-selected="true">
          <i class="fas fa-arrow-right" aria-hidden="true"></i> One Way
        </button>
        <button type="button" class="quick-tab-btn" data-type="round_trip" role="tab" aria-selected="false">
          <i class="fas fa-exchange-alt" aria-hidden="true"></i> Round Trip
        </button>
        <button type="button" class="quick-tab-btn" data-type="multi_day" role="tab" aria-selected="false">
          <i class="fas fa-calendar-alt" aria-hidden="true"></i> Multi-Day Tour
        </button>
      </div>

      <!-- Quick Fields Grid -->
      <form id="quick-search-form" onsubmit="return false;" novalidate>
        <div class="quick-search-grid">
          
          <!-- Origin -->
          <div class="quick-field">
            <label for="quick-origin">Pickup City / Area</label>
            <div class="input-wrap">
              <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
              <input type="text" id="quick-origin" name="quick_origin" value="Varanasi" placeholder="Pickup City" autocomplete="address-level2" required>
            </div>
          </div>

          <!-- Destination -->
          <div class="quick-field">
            <label for="quick-destination">Destination City</label>
            <div class="input-wrap">
              <i class="fas fa-location-arrow" aria-hidden="true"></i>
              <input type="text" id="quick-destination" name="quick_destination" value="Ayodhya" placeholder="Drop City" autocomplete="address-level2" required>
            </div>
          </div>

          <!-- Date -->
          <div class="quick-field">
            <label for="quick-date">Travel Date</label>
            <div class="input-wrap">
              <i class="fas fa-calendar-day" aria-hidden="true"></i>
              <input type="date" id="quick-date" name="quick_date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
          </div>

          <!-- Passengers -->
          <div class="quick-field">
            <label for="quick-passengers">Passengers</label>
            <div class="input-wrap">
              <i class="fas fa-user-friends" aria-hidden="true"></i>
              <select id="quick-passengers" name="quick_passengers">
                <option value="1">1 Passenger</option>
                <option value="2">2 Passengers</option>
                <option value="3">3 Passengers</option>
                <option value="4" selected>4 Passengers (Sedan)</option>
                <option value="6">6 Passengers (Ertiga)</option>
                <option value="7">7 Passengers (Innova)</option>
                <option value="12">12 Passengers (Tempo)</option>
                <option value="17">17 Passengers (Tempo)</option>
                <option value="26">26 Passengers (Minibus)</option>
              </select>
            </div>
          </div>

          <!-- Search Button -->
          <div class="quick-field">
            <button type="button" id="quick-search-btn" class="btn btn-primary btn-full" style="min-height: 48px;" onclick="bcvTrack('quick_search_click','homepage')">
              <i class="fas fa-search" aria-hidden="true"></i> Search Cabs
            </button>
          </div>

        </div>
      </form>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     3. CITY HUB CARDS
     ═══════════════════════════════════════════════════════════ -->
<section class="section" aria-labelledby="hubs-heading">
  <div class="container">
    
    <div class="text-center" style="max-width: 760px; margin: 0 auto 3rem;">
      <span class="section-label">Spiritual Circuit Hubs</span>
      <h2 id="hubs-heading">Explore Major Pilgrimage &amp; Tourist Destinations</h2>
      <div class="divider"></div>
      <p>
        We connect Eastern Uttar Pradesh's most sacred pilgrimage corridors. From the timeless ghats of Kashi to the divine Ram Janmabhoomi and the holy waters of Triveni Sangam, our dedicated cabs ensure your family travels in peace, comfort, and absolute punctuality.
      </p>
    </div>

    <div class="grid grid-3">
      
      <!-- Varanasi Hub -->
      <a href="/locations/varanasi/" class="hub-card" aria-label="Varanasi Cab Services and Local Tours">
        <div>
          <div class="hub-card__icon">
            <i class="fas fa-om" aria-hidden="true"></i>
          </div>
          <h3 class="hub-card__title">📍 Varanasi</h3>
          <p class="hub-card__desc">
            Local temple tours, Lal Bahadur Shastri Airport transfers, Kashi Vishwanath Darshan, Dashashwamedh Ganga Aarti, Sarnath Buddhist circuit, and private outstation cab rentals.
          </p>
          <div class="tag tag--saffron mb-4">Local Tours · Airport · Outstation</div>
        </div>
        <div class="hub-card__link">
          Explore Varanasi Hub <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </div>
      </a>

      <!-- Ayodhya Hub -->
      <a href="/locations/ayodhya/" class="hub-card" aria-label="Ayodhya Ram Mandir Cab Services">
        <div>
          <div class="hub-card__icon">
            <i class="fas fa-gopuram" aria-hidden="true"></i>
          </div>
          <h3 class="hub-card__title">📍 Ayodhya</h3>
          <p class="hub-card__desc">
            Shri Ram Mandir darshan, Hanuman Garhi, Kanak Bhawan, Saryu River Maha Aarti, Maharishi Valmiki International Airport pickups, and seamless same-day return trips from Varanasi.
          </p>
          <div class="tag tag--gold mb-4">Ram Mandir Darshan · Temple Circuit</div>
        </div>
        <div class="hub-card__link">
          Explore Ayodhya Hub <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </div>
      </a>

      <!-- Prayagraj Hub -->
      <a href="/locations/prayagraj/" class="hub-card" aria-label="Prayagraj Sangam Cab Services">
        <div>
          <div class="hub-card__icon">
            <i class="fas fa-water" aria-hidden="true"></i>
          </div>
          <h3 class="hub-card__title">📍 Prayagraj</h3>
          <p class="hub-card__desc">
            Holy Triveni Sangam snan, Bade Hanuman Ji temple, Anand Bhavan, Alopi Devi Shaktipeeth, Magh Mela pilgrimage transport, and same-day round-trips with zero toll hassles.
          </p>
          <div class="tag tag--saffron mb-4">Triveni Sangam · Magh Mela · Day Trips</div>
        </div>
        <div class="hub-card__link">
          Explore Prayagraj Hub <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </div>
      </a>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     4. POPULAR ROUTES
     ═══════════════════════════════════════════════════════════ -->
<section class="section section-warm" aria-labelledby="routes-heading">
  <div class="container">
    
    <div class="text-center" style="max-width: 760px; margin: 0 auto 3rem;">
      <span class="section-label">Verified Outstation Fares</span>
      <h2 id="routes-heading">Popular Intercity &amp; Pilgrimage Cab Routes</h2>
      <div class="divider"></div>
      <p>
        Enjoy clean air-conditioned vehicles, punctual doorstep pickups, and verified fixed fares on Uttar Pradesh and Bihar's busiest pilgrimage corridors. Book one-way or round-trip with zero hidden charges.
      </p>
    </div>

    <div class="grid grid-3">
      
      <!-- Route 1: Varanasi to Ayodhya -->
      <a class="card-route" href="/routes/varanasi-to-ayodhya-cab/" title="Book Varanasi to Ayodhya Cab">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
            <span>Ayodhya</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-route" aria-hidden="true"></i> 200 km</span>
            <span class="card-route__tag"><i class="fas fa-stopwatch" aria-hidden="true"></i> ~4.5 hours</span>
            <span class="card-route__tag"><i class="fas fa-shield-alt" aria-hidden="true"></i> NH 330 Fast Highway</span>
          </div>
          <div class="flex-between" style="align-items: flex-end; margin-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Starting Fare (Dzire)</span>
              <span class="card-route__fare">₹6,500</span>
            </div>
            <span class="btn btn-sm btn-primary">Book Now</span>
          </div>
        </div>
      </a>

      <!-- Route 2: Varanasi to Prayagraj -->
      <a class="card-route" href="/routes/varanasi-to-prayagraj-taxi/" title="Book Varanasi to Prayagraj Taxi">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
            <span>Prayagraj</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-route" aria-hidden="true"></i> 125 km</span>
            <span class="card-route__tag"><i class="fas fa-stopwatch" aria-hidden="true"></i> ~2.5 hours</span>
            <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> NH 19 6-Lane Expressway</span>
          </div>
          <div class="flex-between" style="align-items: flex-end; margin-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">One-Way Fare (Dzire)</span>
              <span class="card-route__fare">₹3,250</span>
            </div>
            <span class="btn btn-sm btn-primary">Book Now</span>
          </div>
        </div>
      </a>

      <!-- Route 3: Prayagraj to Ayodhya -->
      <a class="card-route" href="/routes/prayagraj-to-ayodhya-cab/" title="Book Prayagraj to Ayodhya Cab">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Prayagraj</span>
            <span class="card-route__arrow"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
            <span>Ayodhya</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-route" aria-hidden="true"></i> 160 km</span>
            <span class="card-route__tag"><i class="fas fa-stopwatch" aria-hidden="true"></i> ~3 hours</span>
            <span class="card-route__tag"><i class="fas fa-map-signs" aria-hidden="true"></i> Pratapgarh Route</span>
          </div>
          <div class="flex-between" style="align-items: flex-end; margin-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Sedan / SUV / Tempo</span>
              <span class="card-route__fare" style="font-size: var(--fs-lg);">Request Quote</span>
            </div>
            <span class="btn btn-sm btn-secondary">Get Fare</span>
          </div>
        </div>
      </a>

      <!-- Route 4: Ayodhya to Varanasi -->
      <a class="card-route" href="/routes/ayodhya-to-varanasi-cab/" title="Book Ayodhya to Varanasi Cab">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Ayodhya</span>
            <span class="card-route__arrow"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
            <span>Varanasi</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-route" aria-hidden="true"></i> 200 km</span>
            <span class="card-route__tag"><i class="fas fa-stopwatch" aria-hidden="true"></i> ~4.5 hours</span>
            <span class="card-route__tag"><i class="fas fa-plane-arrival" aria-hidden="true"></i> Airport Drop Available</span>
          </div>
          <div class="flex-between" style="align-items: flex-end; margin-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Starting Fare (Dzire)</span>
              <span class="card-route__fare">₹6,500</span>
            </div>
            <span class="btn btn-sm btn-primary">Book Now</span>
          </div>
        </div>
      </a>

      <!-- Route 5: Prayagraj to Varanasi -->
      <a class="card-route" href="/routes/prayagraj-to-varanasi-taxi/" title="Book Prayagraj to Varanasi Taxi">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Prayagraj</span>
            <span class="card-route__arrow"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
            <span>Varanasi</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-route" aria-hidden="true"></i> 125 km</span>
            <span class="card-route__tag"><i class="fas fa-stopwatch" aria-hidden="true"></i> ~2.5 hours</span>
            <span class="card-route__tag"><i class="fas fa-car" aria-hidden="true"></i> Clean AC Cab</span>
          </div>
          <div class="flex-between" style="align-items: flex-end; margin-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">One-Way Fare (Dzire)</span>
              <span class="card-route__fare">₹3,250</span>
            </div>
            <span class="btn btn-sm btn-primary">Book Now</span>
          </div>
        </div>
      </a>

      <!-- Route 6: Varanasi to Gaya -->
      <a class="card-route" href="/routes/varanasi-to-gaya-cab/" title="Book Varanasi to Gaya Taxi">
        <div class="card-route__body">
          <div class="card-route__cities">
            <span>Varanasi</span>
            <span class="card-route__arrow"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
            <span>Gaya / Bodhgaya</span>
          </div>
          <div class="card-route__meta">
            <span class="card-route__tag"><i class="fas fa-route" aria-hidden="true"></i> 220 km</span>
            <span class="card-route__tag"><i class="fas fa-stopwatch" aria-hidden="true"></i> ~4.5 hours</span>
            <span class="card-route__tag"><i class="fas fa-praying-hands" aria-hidden="true"></i> Pind Daan Special</span>
          </div>
          <div class="flex-between" style="align-items: flex-end; margin-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Starting Fare (Dzire)</span>
              <span class="card-route__fare">₹8,500</span>
            </div>
            <span class="btn btn-sm btn-primary">Book Now</span>
          </div>
        </div>
      </a>

    </div>

    <!-- Additional Route Options Strip -->
    <div class="mt-8 text-center">
      <p class="text-muted mb-4">
        Need transfers to Lucknow, Vindhyachal, Chitrakoot, or Bodhgaya? We operate round-the-clock across all major tourist corridors.
      </p>
      <a class="btn btn-secondary" href="/services/outstation-taxi-varanasi/">
        <i class="fas fa-list-ul" aria-hidden="true"></i> View All Outstation Routes &amp; Pricing
      </a>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     5. FLEET SHOWCASE
     ═══════════════════════════════════════════════════════════ -->
<section class="section" aria-labelledby="fleet-heading">
  <div class="container">
    
    <div class="text-center" style="max-width: 760px; margin: 0 auto 3rem;">
      <span class="section-label">Our Well-Maintained Vehicles</span>
      <h2 id="fleet-heading">Choose Your Vehicle for Local &amp; Outstation Travel</h2>
      <div class="divider"></div>
      <p>
        Every vehicle in our fleet is commercially licensed, thoroughly sanitized, and maintained to the highest safety standards. Whether you are traveling solo, as a family, or leading a pilgrim congregation, we have the ideal AC ride.
      </p>
    </div>

    <div class="grid grid-4">
      
      <!-- Vehicle 1: Swift Dzire -->
      <div class="card-fleet">
        <div class="card-fleet__icon text-saffron">
          <i class="fas fa-car-side" aria-hidden="true"></i>
        </div>
        <h3 class="card-fleet__name">Swift Dzire</h3>
        <p class="card-fleet__capacity">
          <i class="fas fa-user-friends" aria-hidden="true"></i> Up to 4 Passengers · 2 Bags
        </p>
        <div class="card-fleet__fare">₹2,000</div>
        <div class="text-muted" style="font-size: var(--fs-xs); margin-bottom: 0.75rem;">Local 8hr/80km Package</div>
        <ul class="fleet-specs-list">
          <li><i class="fas fa-check" aria-hidden="true"></i> Outstation: ₹13 / km</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Airport One-Way: ₹1,000</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Chilled Air Conditioning</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Punctual &amp; Fuel Efficient</li>
        </ul>
        <a href="/fleet/swift-dzire/" class="btn btn-sm btn-primary btn-full mt-4">View Sedan Details</a>
      </div>

      <!-- Vehicle 2: Maruti Ertiga -->
      <div class="card-fleet">
        <div class="card-fleet__icon text-saffron">
          <i class="fas fa-car" aria-hidden="true"></i>
        </div>
        <h3 class="card-fleet__name">Maruti Ertiga</h3>
        <p class="card-fleet__capacity">
          <i class="fas fa-user-friends" aria-hidden="true"></i> Up to 6 Passengers · 3 Bags
        </p>
        <div class="card-fleet__fare">₹2,400</div>
        <div class="text-muted" style="font-size: var(--fs-xs); margin-bottom: 0.75rem;">Local 8hr/80km Package</div>
        <ul class="fleet-specs-list">
          <li><i class="fas fa-check" aria-hidden="true"></i> Outstation: ₹16 / km</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Airport One-Way: ₹1,200</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Dual AC with Rear Vents</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Best Value Family MUV</li>
        </ul>
        <a href="/fleet/maruti-ertiga/" class="btn btn-sm btn-primary btn-full mt-4">View Ertiga Details</a>
      </div>

      <!-- Vehicle 3: Toyota Innova Crysta -->
      <div class="card-fleet">
        <div class="card-fleet__icon text-saffron">
          <i class="fas fa-shuttle-van" aria-hidden="true"></i>
        </div>
        <h3 class="card-fleet__name">Innova Crysta</h3>
        <p class="card-fleet__capacity">
          <i class="fas fa-user-friends" aria-hidden="true"></i> Up to 7 Passengers · 4 Bags
        </p>
        <div class="card-fleet__fare">₹3,500</div>
        <div class="text-muted" style="font-size: var(--fs-xs); margin-bottom: 0.75rem;">Local 8hr/80km Package</div>
        <ul class="fleet-specs-list">
          <li><i class="fas fa-check" aria-hidden="true"></i> Outstation: ₹19 / km</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Airport One-Way: ₹1,500</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Captain Seats &amp; Luxury Legroom</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Premium Long Distance Ride</li>
        </ul>
        <a href="/fleet/innova-crysta/" class="btn btn-sm btn-primary btn-full mt-4">View Innova Details</a>
      </div>

      <!-- Vehicle 4: Tempo Traveller & Force Urbania -->
      <div class="card-fleet">
        <div class="card-fleet__icon text-saffron">
          <i class="fas fa-bus-alt" aria-hidden="true"></i>
        </div>
        <h3 class="card-fleet__name">Tempo Traveller</h3>
        <p class="card-fleet__capacity">
          <i class="fas fa-users" aria-hidden="true"></i> 12, 17, 20 &amp; 26 Seater Options
        </p>
        <div class="card-fleet__fare">₹2,600*</div>
        <div class="text-muted" style="font-size: var(--fs-xs); margin-bottom: 0.75rem;">Urbania 6-7 Local 8hr</div>
        <ul class="fleet-specs-list">
          <li><i class="fas fa-check" aria-hidden="true"></i> Force Urbania 9-12: ₹6,500</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Tempo Outstation: ₹32–35/km</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Pushback Seats &amp; Music System</li>
          <li><i class="fas fa-check" aria-hidden="true"></i> Ideal for Large Pilgrim Groups</li>
        </ul>
        <a href="/fleet/tempo-traveller-rental/" class="btn btn-sm btn-primary btn-full mt-4">View Tempo Options</a>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     6. TRUST BAR
     ═══════════════════════════════════════════════════════════ -->
<section class="trust-bar" aria-label="Business Metrics and Trust Badges">
  <div class="container">
    <div class="trust-bar__grid">
      
      <div class="trust-item">
        <div class="trust-item__num">20+</div>
        <div class="trust-item__label">Years of Spiritual Travel Excellence</div>
      </div>

      <div class="trust-item">
        <div class="trust-item__num">10,000+</div>
        <div class="trust-item__label">Happy Pilgrims &amp; Tourist Families</div>
      </div>

      <div class="trust-item">
        <div class="trust-item__num">4.8★</div>
        <div class="trust-item__label">Google Rating (470+ Verified Reviews)</div>
      </div>

      <div class="trust-item">
        <div class="trust-item__num">24/7</div>
        <div class="trust-item__label">On-Demand Dispatch &amp; Road Support</div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     7. FEATURED TOURS
     ═══════════════════════════════════════════════════════════ -->
<section class="section" aria-labelledby="tours-heading">
  <div class="container">
    
    <div class="text-center" style="max-width: 760px; margin: 0 auto 3rem;">
      <span class="section-label">Carefully Curated Pilgrimages</span>
      <h2 id="tours-heading">Featured Spiritual Pilgrimage Packages</h2>
      <div class="divider"></div>
      <p>
        Experience sacred rituals without logistics anxiety. Our experienced drivers know the exact temple entry gates, parking protocols, and puja timings across Varanasi, Ayodhya, and Prayagraj.
      </p>
    </div>

    <div class="grid grid-3">
      
      <!-- Tour 1: Kashi Darshan Package -->
      <article class="card-tour">
        <div class="card-tour__body">
          <span class="tour-badge">Full Day Tour</span>
          <h3 class="card-tour__title">Kashi Darshan Cab Package</h3>
          <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.6; margin-bottom: 1.25rem;">
            A complete 8 to 12-hour sacred itinerary covering Kashi Vishwanath corridor, Annapurna Mandir, Kal Bhairav, Sankat Mochan, Durga Kund, Tulsi Manas Mandir, BHU New Vishwanath, and evening Dashashwamedh Ghat Ganga Aarti.
          </p>
          <div class="alert alert-info" style="padding: 0.6rem 0.8rem; font-size: var(--fs-xs); margin-bottom: 1rem;">
            <i class="fas fa-info-circle" aria-hidden="true"></i> Vehicles park at designated Godaulia / Maidagin zones; darshan sanctum access is on foot.
          </div>
          <div class="flex-between" style="align-items: flex-end; border-top: 1px solid var(--clr-border); padding-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Package Starts At</span>
              <span class="card-tour__price">₹2,000</span>
              <span class="card-tour__includes">8hr / 80km AC Sedan</span>
            </div>
            <a class="btn btn-sm btn-primary" href="/tours/kashi-darshan-cab-package/">View Tour</a>
          </div>
        </div>
      </article>

      <!-- Tour 2: Ayodhya Ram Mandir Tour -->
      <article class="card-tour">
        <div class="card-tour__body">
          <span class="tour-badge">Same Day / 2-Day</span>
          <h3 class="card-tour__title">Ayodhya Ram Mandir Taxi Tour</h3>
          <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.6; margin-bottom: 1.25rem;">
            Convenient early morning pickup from your Varanasi hotel or airport. Journey on smooth highways to Ayodhya for darshan at Shri Ram Janmabhoomi Teerth Kshetra, historic Hanuman Garhi, Kanak Bhawan, and tranquil Saryu Ghat Aarti.
          </p>
          <div class="alert alert-info" style="padding: 0.6rem 0.8rem; font-size: var(--fs-xs); margin-bottom: 1rem;">
            <i class="fas fa-info-circle" aria-hidden="true"></i> Private cabs park in official security parking plazas; e-carts serve senior citizens.
          </div>
          <div class="flex-between" style="align-items: flex-end; border-top: 1px solid var(--clr-border); padding-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Round-Trip Dzire</span>
              <span class="card-tour__price">₹6,500</span>
              <span class="card-tour__includes">Tolls extra / Urbania available</span>
            </div>
            <a class="btn btn-sm btn-primary" href="/tours/ayodhya-ram-mandir-taxi-package/">View Tour</a>
          </div>
        </div>
      </article>

      <!-- Tour 3: 3-City Pilgrimage -->
      <article class="card-tour">
        <div class="card-tour__body">
          <span class="tour-badge">Spiritual Triangle</span>
          <h3 class="card-tour__title">Varanasi + Prayagraj + Ayodhya</h3>
          <p class="text-muted" style="font-size: var(--fs-sm); line-height: 1.6; margin-bottom: 1.25rem;">
            The ultimate 3-Day holy yatra across Eastern UP. Complete Kashi Vishwanath darshan &amp; Ganga Aarti, followed by Triveni Sangam holy dip in Prayagraj, concluding with divine darshan at Ayodhya Ram Janmabhoomi before airport drop.
          </p>
          <div class="alert alert-info" style="padding: 0.6rem 0.8rem; font-size: var(--fs-xs); margin-bottom: 1rem;">
            <i class="fas fa-info-circle" aria-hidden="true"></i> Custom multi-day itineraries with luggage space and dedicated chauffeur.
          </div>
          <div class="flex-between" style="align-items: flex-end; border-top: 1px solid var(--clr-border); padding-top: 1rem;">
            <div>
              <span class="text-muted" style="font-size: var(--fs-xs); display: block;">Custom Itinerary</span>
              <span class="card-tour__price">₹22,500</span>
              <span class="card-tour__includes">2-Day Urbania 9-12 / Inquire Dzire</span>
            </div>
            <a class="btn btn-sm btn-primary" href="/tours/varanasi-prayagraj-ayodhya-package/">View Tour</a>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     8. WHY CHOOSE US (DARK BACKGROUND)
     ═══════════════════════════════════════════════════════════ -->
<section class="section section-dark" aria-labelledby="why-heading">
  <div class="container">
    
    <div class="text-center" style="max-width: 760px; margin: 0 auto 3.5rem;">
      <span class="section-label">The Book Cab Varanasi Guarantee</span>
      <h2 id="why-heading">Why Thousands of Pilgrims Choose Us Year After Year</h2>
      <div class="divider"></div>
      <p>
        Booking a taxi in a heritage pilgrimage destination requires trust, local familiarity, and unwavering reliability. Here is why families, NRI travelers, and devotional groups rely on Book Cab Varanasi.
      </p>
    </div>

    <div class="grid grid-3">
      
      <!-- Point 1 -->
      <div class="feature-box">
        <div class="feature-box__icon">
          <i class="fas fa-user-shield" aria-hidden="true"></i>
        </div>
        <h3>Professional &amp; Courteous Drivers</h3>
        <p>
          Our chauffeurs are police-verified, experienced on national highways, and familiar with temple crowd patterns, darshan protocols, and safe parking areas.
        </p>
      </div>

      <!-- Point 2 -->
      <div class="feature-box">
        <div class="feature-box__icon">
          <i class="fas fa-file-invoice-dollar" aria-hidden="true"></i>
        </div>
        <h3>100% Transparent Fares</h3>
        <p>
          Zero surprise charges at the end of your trip. We provide all-inclusive package options with driver allowances, kilometer allowances, and toll clarity upfront.
        </p>
      </div>

      <!-- Point 3 -->
      <div class="feature-box">
        <div class="feature-box__icon">
          <i class="fas fa-headset" aria-hidden="true"></i>
        </div>
        <h3>24/7 Dedicated Support</h3>
        <p>
          Round-the-clock telephone and WhatsApp coordination team. Whether your flight is delayed or you need a 3:30 AM pickup for Mangla Aarti, we are always on standby.
        </p>
      </div>

      <!-- Point 4 -->
      <div class="feature-box">
        <div class="feature-box__icon">
          <i class="fas fa-ticket-alt" aria-hidden="true"></i>
        </div>
        <h3>Toll-Included Tour Options</h3>
        <p>
          Selected multi-city tour packages come with state border permits, FASTag highway tolls, and parking taxes pre-packaged so you never have to fumble for cash en route.
        </p>
      </div>

      <!-- Point 5 -->
      <div class="feature-box">
        <div class="feature-box__icon">
          <i class="fas fa-snowflake" aria-hidden="true"></i>
        </div>
        <h3>Chilled Air-Conditioned Fleet</h3>
        <p>
          Every vehicle is fitted with strong air conditioning to keep your family relaxed even during peak North Indian summers, with pristine interiors and comfortable seats.
        </p>
      </div>

      <!-- Point 6 -->
      <div class="feature-box">
        <div class="feature-box__icon">
          <i class="fas fa-ban" aria-hidden="true"></i>
        </div>
        <h3>No Hidden Charges Guarantee</h3>
        <p>
          Honest billing guaranteed. What we quote on WhatsApp or phone is exactly what you pay. No unauthorized driver demands or mid-trip fare increases.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     9. FREQUENTLY ASKED QUESTIONS
     ═══════════════════════════════════════════════════════════ -->
<section class="section" aria-labelledby="faq-heading">
  <div class="container" style="max-width: 860px;">
    
    <div class="text-center" style="margin-bottom: 3rem;">
      <span class="section-label">Answers to Common Inquiries</span>
      <h2 id="faq-heading">Frequently Asked Questions</h2>
      <div class="divider"></div>
      <p>
        Got questions about temple access, vehicle categories, payment modes, or outstation billing? Find immediate answers below.
      </p>
    </div>

    <div class="faq-list">
      
      <!-- FAQ 1 -->
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-1">
          <span>How do I book a cab or tempo traveller with Book Cab Varanasi?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ans-1">
          <div class="faq-answer__inner">
            Booking is effortless! You can submit your trip details via our online booking form below, call our 24/7 hotline directly at <strong>+91-9838409911</strong>, or WhatsApp our reservations desk at <strong>+91-9648974238</strong>. We review your itinerary, recommend the ideal vehicle, and issue an immediate written fare quotation. Once you accept, your vehicle and driver details are dispatched promptly.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-2">
          <span>Are your taxi fares fixed or will there be hidden charges?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ans-2">
          <div class="faq-answer__inner">
            All our fares are 100% transparent and clearly documented. For local rentals (such as 8hr/80km or 12hr/120km), fuel and driver charges are included. Parking charges at temples or monuments are paid directly as per actual receipts. For outstation journeys, base rates per km (Dzire ₹13/km, Ertiga ₹16/km, Innova ₹19/km) or fixed route fares (e.g. Varanasi to Prayagraj one-way at ₹3,250) are guaranteed upfront.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-3">
          <span>Can your cab drop us right inside the temple gates at Kashi Vishwanath or Ayodhya?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ans-3">
          <div class="faq-answer__inner">
            <strong>Important notice:</strong> Due to security restrictions and narrow ancient lanes, private vehicles and taxis cannot drive directly into the inner sanctum of Kashi Vishwanath Temple or the inner perimeter of Ayodhya Ram Mandir. In Varanasi, our cabs park at authorized parking areas near Godaulia or Maidagin, from where the temple corridor entrance is a short 200–500 meter walk or 2-minute e-rickshaw ride. In Ayodhya, cabs drop passengers at designated pilgrim parking centers. We always guide senior citizens toward authorized e-cart pick-up points.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-4">
          <span>What vehicle options are available for family and group travel?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ans-4">
          <div class="faq-answer__inner">
            We maintain a versatile fleet to accommodate any party size. For individuals and small families (up to 4), our Maruti Swift Dzire sedans offer great comfort. For 5 to 6 passengers, the Maruti Ertiga is ideal. For premium luxury and extra luggage capacity, the Toyota Innova Crysta accommodates up to 7 passengers. For larger families and spiritual groups, we provide luxury Force Urbania vans (6–7 and 9–12 seaters), Force Tempo Travellers (12, 17, 20, 26 seaters), and 35-seater AC mini buses.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-5">
          <span>What is your cancellation and reschedule policy?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ans-5">
          <div class="faq-answer__inner">
            We understand that train schedules and pilgrimage plans can change unexpectedly. Cancellations made at least 12 hours prior to the scheduled pickup time incur zero cancellation fee. If your train or flight is delayed, notify our 24/7 team on WhatsApp, and we will reschedule your pickup time free of charge, subject to driver availability.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-ans-6">
          <span>Can I book a cab directly via WhatsApp on short notice?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-ans-6">
          <div class="faq-answer__inner">
            Yes, absolutely! Our dedicated WhatsApp desk at <strong>+91-9648974238</strong> is active 24 hours a day, 7 days a week. For immediate airport transfers from Varanasi Babatpur Airport, last-minute railway station pickups, or same-day outstation cabs to Prayagraj or Ayodhya, our team typically responds within 5 to 10 minutes with vehicle availability.
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     10. FULL BOOKING FORM
     ═══════════════════════════════════════════════════════════ -->
<?php
$form_section_id  = 'home-booking';
$form_origin      = 'Varanasi';
$form_destination = 'Ayodhya';
$form_trip_type   = 'one_way';
include __DIR__ . '/includes/booking-form.php';
?>

<!-- JavaScript to bind Quick Booking Widget to Full Booking Form -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Quick Search tab toggle
  var quickTabs = document.querySelectorAll('.quick-tab-btn');
  quickTabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      quickTabs.forEach(function(t) {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
      });
      this.classList.add('active');
      this.setAttribute('aria-selected', 'true');
    });
  });

  // Quick Search button handler
  var quickSearchBtn = document.getElementById('quick-search-btn');
  if (quickSearchBtn) {
    quickSearchBtn.addEventListener('click', function(e) {
      e.preventDefault();
      
      var activeTab = document.querySelector('.quick-tab-btn.active');
      var tripType = activeTab ? activeTab.dataset.type : 'one_way';
      var origin = document.getElementById('quick-origin') ? document.getElementById('quick-origin').value.trim() : '';
      var destination = document.getElementById('quick-destination') ? document.getElementById('quick-destination').value.trim() : '';
      var travelDate = document.getElementById('quick-date') ? document.getElementById('quick-date').value : '';
      var passengers = document.getElementById('quick-passengers') ? document.getElementById('quick-passengers').value : '';

      // Populate main form fields
      var formSec = 'home-booking';
      var targetForm = document.getElementById('bcv-form-' + formSec);

      if (targetForm) {
        var origInput = document.getElementById('origin-' + formSec);
        if (origInput && origin) origInput.value = origin;

        var destInput = document.getElementById('destination-' + formSec);
        if (destInput && destination) destInput.value = destination;

        var dateInput = document.getElementById('travel-date-' + formSec);
        if (dateInput && travelDate) dateInput.value = travelDate;

        var passSelect = document.getElementById('passengers-' + formSec);
        if (passSelect && passengers) passSelect.value = passengers;

        // Sync trip tab
        var matchingTab = targetForm.querySelector('.trip-tab[data-type="' + tripType + '"]');
        if (matchingTab) {
          matchingTab.click();
        }

        // Scroll to form smoothly
        var formSectionEl = document.getElementById(formSec);
        if (formSectionEl) {
          formSectionEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
          setTimeout(function() {
            var nameField = document.getElementById('cust-name-' + formSec);
            if (nameField) nameField.focus();
          }, 600);
        }
      }
    });
  }
});
</script>

<?php
include __DIR__ . '/includes/footer.php';
?>
