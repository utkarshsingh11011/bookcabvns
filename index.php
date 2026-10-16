<?php
require_once __DIR__ . '/includes/config.php';

// SEO Variables
$page_title  = 'Book Cab Varanasi | #1 Taxi, Tempo Traveller & Pilgrimage Tour Service';
$meta_desc   = 'Book a reliable cab, tempo traveller or tour bus in Varanasi. Transparent fares for airport, local sightseeing & outstation trips to Ayodhya & Prayagraj. Call 24/7.';
$canonical   = 'https://bookcabvaranasi.com/';
$og_title    = $page_title;
$og_desc     = $meta_desc;
$og_image    = 'https://bookcabvaranasi.com/assets/img/og-default.jpg';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://bookcabvaranasi.com/'],
];
$whatsapp_route = 'Varanasi cab booking';

// Schema.org Structured Data
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
            "image" => "https://bookcabvaranasi.com/assets/img/og-default.jpg",
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
                        "text" => "You can book instantly online by filling out our quick booking form, calling our 24/7 helpline at +91-9838409911, or messaging us on WhatsApp at +91-9648974238. Our dispatch team confirms vehicle availability and transparent fixed fares within 10 to 15 minutes."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Are your taxi fares fixed or are there hidden charges?",
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
                        "text" => "Due to strict government regulations and high-security pedestrian zones, private four-wheelers cannot enter inner temple corridors. In Varanasi, drivers drop at Godowlia Chowk or Maidagin (300-400m from Vishwanath Dham). In Ayodhya, cabs drop at designated parking plazas (Tedhi Bazar / Amaniganj)."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What vehicles are available for family and large group pilgrimages?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "We maintain Swift Dzire (4-seater), Maruti Ertiga (6-seater), Toyota Innova Crysta (7-seater), luxury Force Urbania vans (6-12 seats), and Force Tempo Travellers (12 to 26 seats)."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What is your cancellation and rescheduling policy?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "We offer free cancellation up to 4 hours before local trips and 12 hours before outstation trips. Rescheduling is completely free subject to vehicle availability on your new dates."
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

<!-- ═══════════════════════════════════════════════════════════
     1. HERO SECTION (Cinematic Photography + Value Proposition)
     ═══════════════════════════════════════════════════════════ -->
<section class="hero-cinematic" aria-labelledby="hero-heading">
  <div class="container">
    <div style="max-width: 800px;">
      
      <!-- Trust Eyebrow -->
      <div class="hero-pill-badge">
        <i class="fas fa-certificate text-gold" aria-hidden="true"></i>
        <span>Uttar Pradesh's #1 Pilgrimage &amp; Cab Network</span>
      </div>

      <!-- H1 -->
      <h1 class="hero-headline" id="hero-heading">
        Varanasi's Premier <span class="text-gold">Taxi &amp; Tempo Traveller</span> Service
      </h1>

      <!-- Subtext -->
      <p class="hero-subtext">
        Serving over <strong>10,000+ happy pilgrims</strong> and families for over 20+ years. Seamless airport transfers, local Kashi temple sightseeing, and reliable outstation cabs to Ayodhya Ram Mandir &amp; Prayagraj Triveni Sangam with verified polite chauffeurs and guaranteed clean AC vehicles.
      </p>

      <!-- Primary Action Buttons -->
      <div class="flex gap-4" style="flex-wrap: wrap;">
        <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero')">
          <i class="fas fa-phone-alt" aria-hidden="true"></i> Call +91-9838409911
        </a>
        <a class="btn btn-whatsapp-pulse btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link('Hello Book Cab Varanasi, I need a taxi quotation')); ?>" target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero')">
          <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Instant Quote
        </a>
      </div>

      <!-- Live Trust Bar Under Hero Buttons -->
      <div class="flex gap-6 mt-6 items-center" style="flex-wrap: wrap; border-top: 1px solid rgba(255,255,255,0.18); padding-top: 1.5rem;">
        <div class="flex items-center gap-2 text-sm text-white">
          <i class="fas fa-star" style="color:#FFC000;" aria-hidden="true"></i>
          <span><strong>4.8 / 5.0 Rating</strong> (470+ Reviews)</span>
        </div>
        <div class="flex items-center gap-2 text-sm text-white">
          <i class="fas fa-shield-alt" style="color:#25D366;" aria-hidden="true"></i>
          <span><strong>100% Verified</strong> Chauffeurs</span>
        </div>
        <div class="flex items-center gap-2 text-sm text-white">
          <i class="fas fa-bolt" style="color:#FFD54F;" aria-hidden="true"></i>
          <span><strong>Zero</strong> Hidden Surges</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     2. FLOATING BOOKING & SEARCH ENGINE WIDGET
     ═══════════════════════════════════════════════════════════ -->
<div class="container pro-search-container" id="quick-search">
  <div class="pro-search-box">
    
    <!-- Trip Tabs -->
    <div class="pro-search-tabs" role="tablist" aria-label="Trip Types">
      <button type="button" class="pro-tab-item active" data-type="one_way" role="tab" aria-selected="true">
        <i class="fas fa-arrow-right" aria-hidden="true"></i> Outstation (One-Way)
      </button>
      <button type="button" class="pro-tab-item" data-type="round_trip" role="tab" aria-selected="false">
        <i class="fas fa-sync-alt" aria-hidden="true"></i> Round Trip / Day Trip
      </button>
      <button type="button" class="pro-tab-item" data-type="local" role="tab" aria-selected="false">
        <i class="fas fa-gopuram" aria-hidden="true"></i> Local Sightseeing (8hr/80km)
      </button>
      <button type="button" class="pro-tab-item" data-type="airport" role="tab" aria-selected="false">
        <i class="fas fa-plane-departure" aria-hidden="true"></i> Airport Transfer (VNS)
      </button>
    </div>

    <!-- Search Fields Form -->
    <form id="hero-quick-form" class="pro-search-fields" onsubmit="return handleHeroSearch(event)">
      
      <div class="pro-field-group">
        <label for="search-origin">Pickup Location</label>
        <div class="pro-input-wrap">
          <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
          <input type="text" id="search-origin" name="origin" placeholder="Varanasi / Airport / Hotel" value="Varanasi" required>
        </div>
      </div>

      <div class="pro-field-group" id="dest-wrap">
        <label for="search-dest">Destination</label>
        <div class="pro-input-wrap">
          <i class="fas fa-location-arrow" aria-hidden="true"></i>
          <select id="search-dest" name="destination">
            <option value="Ayodhya">Ayodhya (Ram Mandir)</option>
            <option value="Prayagraj">Prayagraj (Sangam)</option>
            <option value="Gaya">Gaya / Bodhgaya</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Varanasi Local Sightseeing">Varanasi Temple Sightseeing</option>
            <option value="VNS Babatpur Airport">LBS Airport Babatpur</option>
          </select>
        </div>
      </div>

      <div class="pro-field-group">
        <label for="search-date">Travel Date</label>
        <div class="pro-input-wrap">
          <i class="fas fa-calendar-alt" aria-hidden="true"></i>
          <input type="date" id="search-date" name="travel_date" required min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
        </div>
      </div>

      <div class="pro-field-group">
        <label for="search-car">Vehicle Class</label>
        <div class="pro-input-wrap">
          <i class="fas fa-car" aria-hidden="true"></i>
          <select id="search-car" name="vehicle">
            <option value="Sedan (Swift Dzire)">Sedan (Swift Dzire) · 4 Seats</option>
            <option value="Ertiga (6-Seater MPV)">Maruti Ertiga · 6 Seats</option>
            <option value="Innova Crysta">Toyota Innova Crysta · 7 Seats</option>
            <option value="Force Urbania / Tempo">Force Urbania / Tempo · 9-26 Seats</option>
          </select>
        </div>
      </div>

      <div class="pro-field-group">
        <button type="submit" class="btn-search-cabs">
          <i class="fas fa-search" aria-hidden="true"></i> Search Cabs &amp; Fares
        </button>
      </div>

    </form>

  </div>
</div>

<main id="main-content">
  <div class="container py-8">

    <!-- ═══════════════════════════════════════════════════════════
         3. CITY HUBS SECTION (With Rich Photography)
         ═══════════════════════════════════════════════════════════ -->
    <section class="mb-12">
      <div class="flex justify-between items-end mb-6" style="flex-wrap:wrap;gap:1rem;">
        <div>
          <span class="section-label">Regional Destinations</span>
          <h2>Explore the Sacred UP Circuit</h2>
        </div>
        <p class="text-muted text-sm" style="max-width:400px;">Direct, chauffeur-driven taxi service connecting holy shrines with 24/7 doorstep pickup.</p>
      </div>

      <div class="grid-3 gap-6">

        <!-- Hub: Varanasi -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/varanasi-ghats.jpg" alt="Varanasi Ganges Ghats and Ganga Aarti" loading="lazy">
            <span class="card-pro__badge">Eternal Kashi</span>
            <span class="card-pro__price-pill">From ₹1,000</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Varanasi (Kashi)</h3>
              <p class="card-pro__desc">LBS Babatpur Airport transfers, 8hr/80km local temple sightseeing, Kashi Vishwanath Dham corridor, and evening Dashashwamedh Ganga Aarti.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-plane" aria-hidden="true"></i> Airport 26km</span>
                <span class="chip-item"><i class="fas fa-gopuram" aria-hidden="true"></i> Vishwanath</span>
                <span class="chip-item"><i class="fas fa-ship" aria-hidden="true"></i> Subah-e-Banaras</span>
              </div>
            </div>
            <a class="btn btn-primary btn-full mt-2" href="/locations/varanasi/">Explore Varanasi Cabs ›</a>
          </div>
        </div>

        <!-- Hub: Ayodhya -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/ayodhya-temple.jpg" alt="Ayodhya Ram Mandir Sanctum" loading="lazy">
            <span class="card-pro__badge card-pro__badge--gold">Ram Janmabhoomi</span>
            <span class="card-pro__price-pill">From ₹6,500</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Ayodhya Dham</h3>
              <p class="card-pro__desc">Direct highway cabs to Shri Ram Janmabhoomi Mandir, Hanuman Garhi, Kanak Bhawan, and Saryu River Maha Aarti with Tedhi Bazar parking support.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-road" aria-hidden="true"></i> 200 km · 4.5 hr</span>
                <span class="chip-item"><i class="fas fa-monument" aria-hidden="true"></i> Ram Mandir</span>
                <span class="chip-item"><i class="fas fa-water" aria-hidden="true"></i> Saryu Ghat</span>
              </div>
            </div>
            <a class="btn btn-primary btn-full mt-2" href="/locations/ayodhya/">Explore Ayodhya Cabs ›</a>
          </div>
        </div>

        <!-- Hub: Prayagraj -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/prayagraj-sangam.jpg" alt="Prayagraj Triveni Sangam Confluence" loading="lazy">
            <span class="card-pro__badge">Triveni Sangam</span>
            <span class="card-pro__price-pill">From ₹3,250</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Prayagraj (Allahabad)</h3>
              <p class="card-pro__desc">Holy dip at the confluence of Ganga, Yamuna &amp; Saraswati, subterranean Bade Hanuman temple, Anand Bhavan, and Magh Mela transportation.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-road" aria-hidden="true"></i> 125 km · 2.5 hr</span>
                <span class="chip-item"><i class="fas fa-water" aria-hidden="true"></i> Holy Snan</span>
                <span class="chip-item"><i class="fas fa-hands-praying" aria-hidden="true"></i> Bade Hanuman</span>
              </div>
            </div>
            <a class="btn btn-primary btn-full mt-2" href="/locations/prayagraj/">Explore Prayagraj Cabs ›</a>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         4. POPULAR INTERCITY ROUTES (Verified Fares)
         ═══════════════════════════════════════════════════════════ -->
    <section class="mb-12">
      <div class="flex justify-between items-end mb-6" style="flex-wrap:wrap;gap:1rem;">
        <div>
          <span class="section-label">Transparent Tariffs</span>
          <h2>Popular Intercity Cab Routes</h2>
        </div>
        <a class="btn btn-outline btn-sm" href="/services/outstation-taxi-varanasi/">View All 20+ Routes ›</a>
      </div>

      <div class="grid-3 gap-6">

        <div class="card card-route">
          <div class="card-route__body">
            <div class="card-route__cities">
              <span>Varanasi</span>
              <span class="card-route__arrow">→</span>
              <span>Ayodhya</span>
            </div>
            <div class="card-route__meta">
              <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 200 km</span>
              <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> ~4.5 Hours</span>
              <span class="card-route__tag"><i class="fas fa-shield-alt" aria-hidden="true"></i> NH-27</span>
            </div>
            <div class="flex justify-between items-center mt-3 pt-3" style="border-top:1px solid #E2E8F0;">
              <div>
                <span class="text-xs text-muted">Sedan One-Way</span>
                <div class="card-route__fare">₹6,500</div>
              </div>
              <a class="btn btn-primary btn-sm" href="/routes/varanasi-to-ayodhya-cab/">Book Cab ›</a>
            </div>
          </div>
        </div>

        <div class="card card-route">
          <div class="card-route__body">
            <div class="card-route__cities">
              <span>Varanasi</span>
              <span class="card-route__arrow">→</span>
              <span>Prayagraj</span>
            </div>
            <div class="card-route__meta">
              <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 125 km</span>
              <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> ~2.5 Hours</span>
              <span class="card-route__tag"><i class="fas fa-shield-alt" aria-hidden="true"></i> 6-Lane NH-19</span>
            </div>
            <div class="flex justify-between items-center mt-3 pt-3" style="border-top:1px solid #E2E8F0;">
              <div>
                <span class="text-xs text-muted">Sedan One-Way</span>
                <div class="card-route__fare">₹3,250</div>
              </div>
              <a class="btn btn-primary btn-sm" href="/routes/varanasi-to-prayagraj-taxi/">Book Cab ›</a>
            </div>
          </div>
        </div>

        <div class="card card-route">
          <div class="card-route__body">
            <div class="card-route__cities">
              <span>Prayagraj</span>
              <span class="card-route__arrow">→</span>
              <span>Ayodhya</span>
            </div>
            <div class="card-route__meta">
              <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 160 km</span>
              <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> ~3.5 Hours</span>
              <span class="card-route__tag"><i class="fas fa-shield-alt" aria-hidden="true"></i> NH-330</span>
            </div>
            <div class="flex justify-between items-center mt-3 pt-3" style="border-top:1px solid #E2E8F0;">
              <div>
                <span class="text-xs text-muted">Sedan One-Way</span>
                <div class="card-route__fare">₹4,500</div>
              </div>
              <a class="btn btn-primary btn-sm" href="/routes/prayagraj-to-ayodhya-cab/">Book Cab ›</a>
            </div>
          </div>
        </div>

        <div class="card card-route">
          <div class="card-route__body">
            <div class="card-route__cities">
              <span>Ayodhya</span>
              <span class="card-route__arrow">→</span>
              <span>Varanasi</span>
            </div>
            <div class="card-route__meta">
              <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 200 km</span>
              <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> ~4.5 Hours</span>
              <span class="card-route__tag"><i class="fas fa-check-circle" aria-hidden="true"></i> Catch Aarti</span>
            </div>
            <div class="flex justify-between items-center mt-3 pt-3" style="border-top:1px solid #E2E8F0;">
              <div>
                <span class="text-xs text-muted">Sedan One-Way</span>
                <div class="card-route__fare">₹6,500</div>
              </div>
              <a class="btn btn-primary btn-sm" href="/routes/ayodhya-to-varanasi-cab/">Book Cab ›</a>
            </div>
          </div>
        </div>

        <div class="card card-route">
          <div class="card-route__body">
            <div class="card-route__cities">
              <span>Prayagraj</span>
              <span class="card-route__arrow">→</span>
              <span>Varanasi</span>
            </div>
            <div class="card-route__meta">
              <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 125 km</span>
              <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> ~2.5 Hours</span>
              <span class="card-route__tag"><i class="fas fa-water" aria-hidden="true"></i> Sangam Pickup</span>
            </div>
            <div class="flex justify-between items-center mt-3 pt-3" style="border-top:1px solid #E2E8F0;">
              <div>
                <span class="text-xs text-muted">Sedan One-Way</span>
                <div class="card-route__fare">₹3,250</div>
              </div>
              <a class="btn btn-primary btn-sm" href="/routes/prayagraj-to-varanasi-taxi/">Book Cab ›</a>
            </div>
          </div>
        </div>

        <div class="card card-route">
          <div class="card-route__body">
            <div class="card-route__cities">
              <span>Varanasi</span>
              <span class="card-route__arrow">→</span>
              <span>Gaya / Bodhgaya</span>
            </div>
            <div class="card-route__meta">
              <span class="card-route__tag"><i class="fas fa-road" aria-hidden="true"></i> 245 km</span>
              <span class="card-route__tag"><i class="fas fa-clock" aria-hidden="true"></i> ~5.5 Hours</span>
              <span class="card-route__tag"><i class="fas fa-om" aria-hidden="true"></i> Pind Daan Yatra</span>
            </div>
            <div class="flex justify-between items-center mt-3 pt-3" style="border-top:1px solid #E2E8F0;">
              <div>
                <span class="text-xs text-muted">Sedan One-Way</span>
                <div class="card-route__fare">₹8,500</div>
              </div>
              <a class="btn btn-primary btn-sm" href="/services/outstation-taxi-varanasi/">Book Cab ›</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         5. FLEET SHOWCASE (Real Vehicle Photos & Specs)
         ═══════════════════════════════════════════════════════════ -->
    <section class="mb-12">
      <div class="flex justify-between items-end mb-6" style="flex-wrap:wrap;gap:1rem;">
        <div>
          <span class="section-label">Pristine Vehicles</span>
          <h2>Our Chauffeur-Driven Fleet</h2>
        </div>
        <p class="text-muted text-sm" style="max-width:400px;">Every car is thoroughly detailed, air-conditioned, and GPS-monitored before dispatch.</p>
      </div>

      <div class="grid-4 gap-6">

        <!-- Fleet 1: Dzire -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/car-sedan.jpg" alt="Maruti Swift Dzire Sedan Taxi" loading="lazy">
            <span class="card-pro__badge">Budget Value</span>
            <span class="card-pro__price-pill">₹2,000 / 8hr</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Swift Dzire / Sedan</h3>
              <p class="card-pro__desc">Smooth, air-conditioned, fuel-efficient sedan ideal for couples and small families.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-users" aria-hidden="true"></i> 4 Seats</span>
                <span class="chip-item"><i class="fas fa-snowflake" aria-hidden="true"></i> AC</span>
                <span class="chip-item"><i class="fas fa-suitcase" aria-hidden="true"></i> 2 Bags</span>
              </div>
            </div>
            <div class="flex gap-2 mt-2">
              <a class="btn btn-outline btn-sm flex-1 text-center" href="/fleet/sedan-cab-rental/">Details</a>
              <a class="btn btn-whatsapp btn-sm flex-1 text-center" href="<?php echo htmlspecialchars(bcv_whatsapp_link('I want to book a Swift Dzire sedan')); ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
          </div>
        </div>

        <!-- Fleet 2: Ertiga -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/car-ertiga.jpg" alt="Maruti Ertiga 6 Seater MPV" loading="lazy">
            <span class="card-pro__badge card-pro__badge--gold">Family Favorite</span>
            <span class="card-pro__price-pill">₹2,400 / 8hr</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Maruti Ertiga (MPV)</h3>
              <p class="card-pro__desc">Versatile 6-seater with roof-mounted rear AC blowers and foldable third-row luggage room.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-users" aria-hidden="true"></i> 6 Seats</span>
                <span class="chip-item"><i class="fas fa-snowflake" aria-hidden="true"></i> Dual AC</span>
                <span class="chip-item"><i class="fas fa-suitcase" aria-hidden="true"></i> 4 Bags</span>
              </div>
            </div>
            <div class="flex gap-2 mt-2">
              <a class="btn btn-outline btn-sm flex-1 text-center" href="/fleet/ertiga-cab-rental/">Details</a>
              <a class="btn btn-whatsapp btn-sm flex-1 text-center" href="<?php echo htmlspecialchars(bcv_whatsapp_link('I want to book an Ertiga MPV')); ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
          </div>
        </div>

        <!-- Fleet 3: Innova Crysta -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/car-innova.jpg" alt="Toyota Innova Crysta Luxury Cab" loading="lazy">
            <span class="card-pro__badge">VIP Executive</span>
            <span class="card-pro__price-pill">₹3,500 / 8hr</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Innova Crysta</h3>
              <p class="card-pro__desc">Top-of-the-line highway suspension, reclining captain chairs, and zero fatigue for elderly guests.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-users" aria-hidden="true"></i> 7 Seats</span>
                <span class="chip-item"><i class="fas fa-couch" aria-hidden="true"></i> Captains</span>
                <span class="chip-item"><i class="fas fa-suitcase" aria-hidden="true"></i> 5 Bags</span>
              </div>
            </div>
            <div class="flex gap-2 mt-2">
              <a class="btn btn-outline btn-sm flex-1 text-center" href="/fleet/innova-crysta-rental/">Details</a>
              <a class="btn btn-whatsapp btn-sm flex-1 text-center" href="<?php echo htmlspecialchars(bcv_whatsapp_link('I want to book an Innova Crysta')); ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
          </div>
        </div>

        <!-- Fleet 4: Tempo Traveller -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/car-tempo.jpg" alt="Force Urbania and Tempo Traveller Group Van" loading="lazy">
            <span class="card-pro__badge">Group Travel</span>
            <span class="card-pro__price-pill">From ₹5,000</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Urbania &amp; Tempo</h3>
              <p class="card-pro__desc">High-roof luxury 9 to 26 seater coaches with pushback seats, individual AC vents, and massive luggage hold.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-users" aria-hidden="true"></i> 9-26 Seats</span>
                <span class="chip-item"><i class="fas fa-tv" aria-hidden="true"></i> Recliners</span>
                <span class="chip-item"><i class="fas fa-shield-alt" aria-hidden="true"></i> Audio / Mic</span>
              </div>
            </div>
            <div class="flex gap-2 mt-2">
              <a class="btn btn-outline btn-sm flex-1 text-center" href="/fleet/tempo-traveller-rental/">Details</a>
              <a class="btn btn-whatsapp btn-sm flex-1 text-center" href="<?php echo htmlspecialchars(bcv_whatsapp_link('I need a Tempo Traveller quote')); ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         6. FEATURED PILGRIMAGE TOURS (Rich Cards)
         ═══════════════════════════════════════════════════════════ -->
    <section class="mb-12">
      <div class="flex justify-between items-end mb-6" style="flex-wrap:wrap;gap:1rem;">
        <div>
          <span class="section-label">All-Inclusive Packages</span>
          <h2>Curated Pilgrimage Tour Packages</h2>
        </div>
        <p class="text-muted text-sm" style="max-width:400px;">Hassle-free yatra packages with dedicated chauffeur, fuel, highway tolls, and parking included.</p>
      </div>

      <div class="grid-3 gap-6">

        <!-- Tour 1 -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/varanasi-ghats.jpg" alt="Kashi Darshan Varanasi Tour" loading="lazy">
            <span class="card-pro__badge">Full Day Tour</span>
            <span class="card-pro__price-pill">₹2,000 (8hr)</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Kashi Darshan Cab Package</h3>
              <p class="card-pro__desc">Visit Kashi Vishwanath Dham, Annapurna Mandir, Kal Bhairav, Sankat Mochan, BHU Birla Temple, Sarnath, and Dashashwamedh evening Ganga Aarti.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-clock" aria-hidden="true"></i> 8hr / 80km</span>
                <span class="chip-item"><i class="fas fa-lock" aria-hidden="true"></i> Luggage Safe</span>
                <span class="chip-item"><i class="fas fa-check-circle" aria-hidden="true"></i> Doorstep Pick</span>
              </div>
            </div>
            <a class="btn btn-primary btn-full mt-2" href="/tours/kashi-darshan-cab-package/">View Tour Itinerary ›</a>
          </div>
        </div>

        <!-- Tour 2 -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/ayodhya-temple.jpg" alt="Ayodhya Ram Mandir Day Trip" loading="lazy">
            <span class="card-pro__badge card-pro__badge--gold">Day Pilgrimage</span>
            <span class="card-pro__price-pill">₹18,500 All-Incl</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Ayodhya Ram Mandir Day Package</h3>
              <p class="card-pro__desc">Early morning departure from Varanasi to Ayodhya. Covers Ram Janmabhoomi, Hanuman Garhi, Kanak Bhawan, and Saryu River Ghat. Return same evening.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-shuttle-van" aria-hidden="true"></i> Urbania 9-12</span>
                <span class="chip-item"><i class="fas fa-receipt" aria-hidden="true"></i> Tolls Included</span>
                <span class="chip-item"><i class="fas fa-parking" aria-hidden="true"></i> Parking Free</span>
              </div>
            </div>
            <a class="btn btn-primary btn-full mt-2" href="/tours/ayodhya-ram-mandir-taxi-package/">View Tour Itinerary ›</a>
          </div>
        </div>

        <!-- Tour 3 -->
        <div class="card-pro">
          <div class="card-pro__image-wrap">
            <img src="/assets/img/prayagraj-sangam.jpg" alt="3-City Spiritual Triangle Tour" loading="lazy">
            <span class="card-pro__badge">2-Day Grand Yatra</span>
            <span class="card-pro__price-pill">₹22,500 All-Incl</span>
          </div>
          <div class="card-pro__content">
            <div>
              <h3 class="card-pro__title">Varanasi-Prayagraj-Ayodhya (2 Days)</h3>
              <p class="card-pro__desc">The ultimate UP spiritual circuit. Day 1: Triveni Sangam holy snan &amp; temples. Day 2: Ayodhya Ram Janmabhoomi &amp; Saryu Aarti before returning to Kashi.</p>
              <div class="chips-row">
                <span class="chip-item"><i class="fas fa-calendar-alt" aria-hidden="true"></i> 2 Full Days</span>
                <span class="chip-item"><i class="fas fa-shuttle-van" aria-hidden="true"></i> Urbania Van</span>
                <span class="chip-item"><i class="fas fa-star" aria-hidden="true"></i> Top Rated</span>
              </div>
            </div>
            <a class="btn btn-primary btn-full mt-2" href="/tours/varanasi-prayagraj-ayodhya-package/">View Tour Itinerary ›</a>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         7. WHY CHOOSE US (Trust & Safety Feature Grid)
         ═══════════════════════════════════════════════════════════ -->
    <section class="card mb-12" style="background:#0B2545;color:#FFFFFF;border:none;padding:clamp(2rem, 5vw, 3.5rem);border-radius:24px;">
      <div class="text-center mb-8">
        <span class="section-label" style="background:rgba(255,192,0,0.2);color:#FFC000;">Why Book With Us</span>
        <h2 style="color:#FFFFFF;margin-bottom:0.75rem;">The Book Cab Varanasi Guarantee</h2>
        <p style="color:rgba(255,255,255,0.75);max-width:600px;margin:0 auto;">Dedicated to providing safe, comfortable, and spiritually fulfilling travel experiences for over two decades.</p>
      </div>

      <div class="grid-3 gap-6">

        <div class="feature-box">
          <div class="feature-box__icon"><i class="fas fa-user-check" aria-hidden="true"></i></div>
          <h3>Verified Local Chauffeurs</h3>
          <p>Our drivers are courteous, background-verified professionals who know temple gates, parking spots, and shortest routes intimately.</p>
        </div>

        <div class="feature-box">
          <div class="feature-box__icon"><i class="fas fa-receipt" aria-hidden="true"></i></div>
          <h3>Zero Hidden Charges</h3>
          <p>Transparent upfront pricing. All fuel, driver BATA, and vehicle rates are disclosed before you travel with no surge fees.</p>
        </div>

        <div class="feature-box">
          <div class="feature-box__icon"><i class="fas fa-snowflake" aria-hidden="true"></i></div>
          <h3>Guaranteed Chilled AC</h3>
          <p>High-efficiency air conditioning kept active throughout your travel. Sanitized interiors and bottled water on outstation routes.</p>
        </div>

        <div class="feature-box">
          <div class="feature-box__icon"><i class="fas fa-plane" aria-hidden="true"></i></div>
          <h3>Flight Delay Protection</h3>
          <p>We monitor live arrival status at Babatpur Airport (VNS). If your flight is delayed, your chauffeur adjusts pickup time at zero penalty.</p>
        </div>

        <div class="feature-box">
          <div class="feature-box__icon"><i class="fas fa-lock" aria-hidden="true"></i></div>
          <h3>Temple Baggage Care</h3>
          <p>Electronic items, cameras, and luggage are safely held in your locked private cab while you perform darshan inside security cordons.</p>
        </div>

        <div class="feature-box">
          <div class="feature-box__icon"><i class="fas fa-headset" aria-hidden="true"></i></div>
          <h3>24/7 Dedicated Support</h3>
          <p>Round-the-clock telephone and WhatsApp helpline ready to assist with custom itineraries, emergencies, or instant bookings.</p>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         8. VERIFIED PILGRIM TESTIMONIALS (Social Proof)
         ═══════════════════════════════════════════════════════════ -->
    <section class="mb-12">
      <div class="text-center mb-8">
        <span class="section-label">Verified Reviews</span>
        <h2>What Pilgrims &amp; Families Say</h2>
        <div class="stars my-2" aria-label="5 out of 5 stars">★★★★★</div>
        <p class="text-muted">4.8 / 5.0 Average Rating based on 470+ verified Google and WhatsApp reviews</p>
      </div>

      <div class="grid-3 gap-6">

        <div class="testimonial-card">
          <div class="testimonial-header">
            <img class="testimonial-avatar" src="/assets/img/avatar-1.jpg" alt="Amitabh Mukherjee" loading="lazy">
            <div>
              <div class="testimonial-name">Amitabh Mukherjee</div>
              <div class="testimonial-meta">Kolkata · Traveled with elderly parents</div>
            </div>
          </div>
          <div class="stars mb-2" style="font-size:0.85rem;">★★★★★</div>
          <p class="testimonial-quote">
            "Booked an Innova Crysta for our 2-day Varanasi-Ayodhya yatra. Chauffeur Rajesh was exceptionally polite and helped my 74-year-old mother navigate Tedhi Bazar parking in Ayodhya. Pristine AC and completely honest pricing."
          </p>
          <span class="text-xs text-muted"><i class="fas fa-check-circle text-success" aria-hidden="true"></i> Verified Booking</span>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-header">
            <img class="testimonial-avatar" src="/assets/img/avatar-2.jpg" alt="Pooja Sharma" loading="lazy">
            <div>
              <div class="testimonial-name">Pooja Sharma</div>
              <div class="testimonial-meta">New Delhi · Family pilgrimage</div>
            </div>
          </div>
          <div class="stars mb-2" style="font-size:0.85rem;">★★★★★</div>
          <p class="testimonial-quote">
            "We took the 12-seater Force Urbania for 9 family members for Kashi Darshan and Triveni Sangam. The vehicle was like new, high roof, pushback seats, and our bags were safely stored while we were at the ghats. Highly recommended!"
          </p>
          <span class="text-xs text-muted"><i class="fas fa-check-circle text-success" aria-hidden="true"></i> Verified Booking</span>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-header">
            <img class="testimonial-avatar" src="/assets/img/avatar-3.jpg" alt="Ramesh Kulkarni" loading="lazy">
            <div>
              <div class="testimonial-name">Ramesh Kulkarni</div>
              <div class="testimonial-meta">Bengaluru · Airport &amp; Outstation</div>
            </div>
          </div>
          <div class="stars mb-2" style="font-size:0.85rem;">★★★★★</div>
          <p class="testimonial-quote">
            "Our flight was delayed by 2 hours landing at Babatpur at midnight. The driver was waiting calmly with a placard, helped with heavy luggage, and dropped us at Assi Ghat. Booked our Ayodhya trip with them the next morning."
          </p>
          <span class="text-xs text-muted"><i class="fas fa-check-circle text-success" aria-hidden="true"></i> Verified Booking</span>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         9. FREQUENTLY ASKED QUESTIONS (Accordion)
         ═══════════════════════════════════════════════════════════ -->
    <section class="mb-12">
      <div class="text-center mb-8">
        <span class="section-label">Common Queries</span>
        <h2>Frequently Asked Questions</h2>
        <p class="text-muted">Everything you need to know before booking your cab in Varanasi.</p>
      </div>

      <div class="faq-list" style="max-width:850px;margin:0 auto;">

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-home-1">
            <span>How do I book a cab with Book Cab Varanasi?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-home-1" class="faq-answer">
            <p>You can book instantly online by filling out our quick booking form below, calling our 24/7 hotline at <a href="tel:+<?php echo BCV_PHONE_RAW; ?>">+91-9838409911</a>, or messaging us on WhatsApp at <a href="<?php echo BCV_WHATSAPP_URL; ?>" target="_blank" rel="noopener">+91-9648974238</a>. Our reservation team confirms vehicle availability and transparent fixed fares within 10 to 15 minutes.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-home-2">
            <span>Are your taxi fares fixed or will there be hidden charges?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-home-2" class="faq-answer">
            <p>All our taxi fares are 100% transparent. Fuel charges and driver allowances are included in local and tour packages. Outstation one-way and round-trip base fares are clearly stated upfront, with state highway tolls and parking charges billed as per actual receipts.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-home-3">
            <span>Can your taxi drop us right inside the temple premises at Kashi Vishwanath or Ayodhya Ram Mandir?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-home-3" class="faq-answer">
            <p>Due to strict government regulations and high-security pedestrian zones, private four-wheelers cannot enter inner temple corridors. In Varanasi, drivers drop at Godowlia Chowk or Maidagin (300-400m from Vishwanath Dham). In Ayodhya, cabs drop at designated parking plazas (Tedhi Bazar / Amaniganj).</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-home-4">
            <span>What vehicles are available for family and large group pilgrimages?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-home-4" class="faq-answer">
            <p>We maintain Swift Dzire (4-seater), Maruti Ertiga (6-seater), Toyota Innova Crysta (7-seater), luxury Force Urbania vans (6-12 seats), and Force Tempo Travellers (12 to 26 seats), as well as 35-seater AC mini coaches for large pilgrim groups.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-home-5">
            <span>What is your cancellation and reschedule policy?</span>
            <i class="fas fa-chevron-down faq-icon" aria-hidden="true"></i>
          </button>
          <div id="faq-home-5" class="faq-answer">
            <p>We offer free cancellation up to 4 hours before local trips and 12 hours before outstation trips. Rescheduling is completely free subject to vehicle availability on your new requested dates.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════
         10. FULL BOOKING INQUIRY FORM (Conversion Anchor)
         ═══════════════════════════════════════════════════════════ -->
    <section class="card mb-12" id="booking-form-section" style="border:2px solid #E2E8F0;box-shadow:0 12px 36px rgba(13,44,85,0.08);">
      <?php
      $form_section_id  = 'home-booking-form';
      $form_origin      = 'Varanasi';
      $form_destination = 'Ayodhya';
      include __DIR__ . '/includes/booking-form.php';
      ?>
    </section>

  </div><!-- /.container -->
</main>

<!-- Quick Search Interactive Script -->
<script>
document.querySelectorAll('.pro-tab-item').forEach(function(tab) {
  tab.addEventListener('click', function() {
    document.querySelectorAll('.pro-tab-item').forEach(function(t) {
      t.classList.remove('active');
      t.setAttribute('aria-selected', 'false');
    });
    this.classList.add('active');
    this.setAttribute('aria-selected', 'true');

    var type = this.getAttribute('data-type');
    var destWrap = document.getElementById('dest-wrap');
    var destSelect = document.getElementById('search-dest');
    var originInput = document.getElementById('search-origin');

    if (type === 'airport') {
      originInput.value = 'Lal Bahadur Shastri Airport (VNS)';
      destSelect.value = 'Varanasi';
    } else if (type === 'local') {
      originInput.value = 'Varanasi Hotel / City';
      destSelect.value = 'Varanasi Local Sightseeing';
    } else {
      originInput.value = 'Varanasi';
      destSelect.value = 'Ayodhya';
    }
  });
});

function handleHeroSearch(e) {
  e.preventDefault();
  var origin = document.getElementById('search-origin').value;
  var dest = document.getElementById('search-dest').value;
  var date = document.getElementById('search-date').value;
  var activeTab = document.querySelector('.pro-tab-item.active');
  var tripType = activeTab ? activeTab.getAttribute('data-type') : 'one_way';

  // Populate booking form fields
  var bookingSec = document.getElementById('home-booking-form');
  if (bookingSec) {
    var formOrigin = document.getElementById('origin-home-booking-form');
    var formDest = document.getElementById('destination-home-booking-form');
    var formDate = document.getElementById('travel-date-home-booking-form');

    if (formOrigin) formOrigin.value = origin;
    if (formDest) formDest.value = dest;
    if (formDate) formDate.value = date;

    var matchingTab = bookingSec.querySelector('.trip-tab[data-type="' + tripType + '"]');
    if (matchingTab) matchingTab.click();

    bookingSec.scrollIntoView({ behavior: 'smooth', block: 'start' });
    setTimeout(function() {
      var nameField = document.getElementById('cust-name-home-booking-form');
      if (nameField) nameField.focus();
    }, 600);
  }
  return false;
}
</script>

<?php
include __DIR__ . '/includes/footer.php';
?>
