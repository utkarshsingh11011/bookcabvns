<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Tempo Traveller Hire in Varanasi | Force Urbania & Mini Bus Rental';
$meta_desc      = 'Hire a tempo traveller or Force Urbania in Varanasi. 12 to 26 seater options. Local 8hr from ₹5,000. Outstation ₹32/km. Tour packages for groups.';
$canonical      = 'https://bookcabvaranasi.com/fleet/tempo-traveller-rental/';
$og_title       = 'Tempo Traveller Hire in Varanasi | Force Urbania Rental | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'Tempo Traveller hire Varanasi';

$breadcrumbs = [
    ['name' => 'Home',            'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Fleet',           'url' => 'https://bookcabvaranasi.com/fleet/tempo-traveller-rental/'],
    ['name' => 'Tempo Traveller', 'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Tempo Traveller & Force Urbania Hire in Varanasi',
            'serviceType'  => 'Group Transport Rental, Tempo Traveller Hire, Luxury Minibus Rental',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                ['@type' => 'City', 'name' => 'Varanasi'],
                ['@type' => 'City', 'name' => 'Ayodhya'],
                ['@type' => 'City', 'name' => 'Prayagraj'],
            ],
            'description'  => 'Premium group passenger transport in Varanasi featuring 12, 16, 21, and 26-seater Tempo Travellers, luxury Force Urbania vans, and 35-seater minibuses for pilgrimage tours, weddings, and family vacations.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'What is the main difference between Force Urbania and a traditional Tempo Traveller?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'The Force Urbania is a next-generation European-designed luxury passenger vehicle built on a monocoque chassis. It features ultra-plush individual captain recliner seats, aircraft-style overhead AC blowers and reading lights, panoramic sealed windows, and superior car-like suspension with negligible vibration and noise. The traditional Tempo Traveller is built on a heavy-duty ladder-frame chassis with a higher roof and robust carrying capacity, offering phenomenal durability and budget-friendly pricing for larger groups of 16 to 26 people.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Is air conditioning guaranteed to work properly during highway journeys?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes, 100%. All our Tempo Travellers and Force Urbania vehicles are equipped with high-capacity dual-compressor rooftop AC units with individualized passenger vents across every seating row. The air conditioning remains active throughout your entire travel period, even during summer months across Uttar Pradesh and Bihar.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'How much luggage can be stored in a 16-seater or 26-seater Tempo Traveller?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Our 16 and 17-seater vehicles feature a dedicated rear luggage boot that easily accommodates 10 to 12 medium trolley suitcases. In addition, all vehicles have interior overhead parcel racks for hand baggage and sturdy, all-weather waterproof roof carriers capable of securely carrying additional large bags or bedding for extended pilgrimage yatras.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can we hire a Tempo Traveller for multi-day pilgrimage tours (e.g., Varanasi-Prayagraj-Ayodhya-Gaya)?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. Multi-day pilgrimage packages are our most popular service. You receive a dedicated group vehicle and an experienced highway driver who stays with your party for the entire duration of 3 to 7 days, coordinating hotel transfers, temple parking, and roadside food stops.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What is the minimum billing distance and driver allowance for outstation bookings?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'For all outstation hires, minimum billing is 250 km per calendar day. The driver allowance (BATA) is fixed at ₹500 per day for all Tempo Traveller and Force Urbania models. Toll taxes, state border entry permits, and municipal parking charges are billed at actuals.',
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
      <a href="/fleet/tempo-traveller-rental/">Fleet</a>
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span class="breadcrumb__current">Tempo Traveller Hire</span>
    </nav>
    <span class="section-label" style="background:rgba(255,192,0,0.18);color:var(--clr-gold);margin-top:0.75rem;">Premium Group Travel Fleet</span>
    <h1 class="page-hero__title" id="hero-heading">Tempo Traveller &amp; Force Urbania Hire in Varanasi</h1>
    <p class="page-hero__desc">Travel together in supreme comfort. Rent 12 to 26-seater Tempo Travellers, luxury Force Urbania vans, and 35-seater minibuses for Kashi-Ayodhya-Prayagraj group pilgrimages, weddings, and family vacations.</p>
    <div class="flex gap-4 mt-6" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero_tempo')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call Tours: +91-9648974238
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero_tempo')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Us
      </a>
      <a class="btn btn-secondary btn-lg" href="#fleet-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4);">
        <i class="fas fa-file-invoice" aria-hidden="true"></i> Request Group Quote
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<section class="trust-bar" aria-label="Group Transport Highlights">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">12–26</div>
        <div class="trust-item__label">Passenger Seating Options</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">100%</div>
        <div class="trust-item__label">Dual AC &amp; Reclining Seats</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">20+ Yrs</div>
        <div class="trust-item__label">Highway Safety Record</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹500</div>
        <div class="trust-item__label">Flat Daily Driver BATA</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FLEET INTRO ═══ -->
<section class="section">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Seamless Group Transportation</span>
        <h2>Why Keep Your Family &amp; Pilgrims Together in One Vehicle?</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">When traveling on sacred yatras across Uttar Pradesh and Bihar, splitting a large joint family or pilgrim mandali into multiple small hatchback or sedan taxis leads to fractured communication, mismatched arrival times, parking headaches, and higher aggregate costs.</p>
        <p class="mt-4"><strong>Book Cab Varanasi</strong> offers Uttar Pradesh's finest fleet of <strong>Force Tempo Travellers</strong> and <strong>Force Urbania Luxury Vans</strong>. Built specifically for long-distance comfort, our vehicles feature spacious 2x1 pushback bucket seating, ample legroom, dedicated overhead luggage racks, powerful multi-vent air conditioning, and veteran highway drivers who know every highway turning point and temple approach.</p>
        <p class="mt-4">Whether you need an airport transfer for 15 executives, a same-day yatra to Ayodhya Ram Mandir, or a 5-day circuit covering Varanasi, Prayagraj, Chitrakoot, and Bodhgaya, our group coaches deliver unmatched camaraderie and peace of mind.</p>
      </div>

      <div class="highlight-box" style="padding:2rem;border-radius:var(--radius-lg);box-shadow:var(--shadow-md);">
        <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:1rem;"><i class="fas fa-star text-saffron" aria-hidden="true"></i> Best Suited For:</h3>
        <ul style="display:flex;flex-direction:column;gap:0.85rem;font-size:var(--fs-sm);color:var(--clr-text);">
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Pilgrimage &amp; Yatra Groups:</strong> Joint family visits to Kashi Vishwanath, Ayodhya Ram Mandir, and Triveni Sangam.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Wedding &amp; Barat Transport:</strong> Punctual guest shuttles between hotels, banquet lawns, and transit terminals.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Corporate &amp; Academic Tours:</strong> Comfortable transport for BHU seminars, delegates, and international research tours.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Magh Mela &amp; Maha Kumbh:</strong> Specialized group shuttles directly to Prayagraj Sangam mela parking grounds.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FARE COMPARISON TABLE ═══ -->
<section class="section section-warm" id="tempo-rates">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Verified Rates</span>
      <h2>Tempo Traveller &amp; Urbania Rental Fare Table</h2>
      <div class="divider"></div>
      <p>Transparent rates for local Banaras packages, airport transfers, and outstation highway travel.</p>
    </div>

    <div class="fare-wrapper">
      <table class="fare-table" aria-label="Tempo Traveller Rental Rates">
        <thead>
          <tr>
            <th scope="col">Vehicle Type &amp; Model</th>
            <th scope="col">Capacity</th>
            <th scope="col">Airport Transfer (VNS)</th>
            <th scope="col">Local 8hr / 80km</th>
            <th scope="col">Local 12hr / 120km</th>
            <th scope="col">Outstation Rate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <strong>Force Urbania (6–7 Seater)</strong>
              <div class="note">VIP luxury van, recliner captain chairs</div>
            </td>
            <td>6–7 Seats</td>
            <td class="price">₹1,500</td>
            <td class="price">₹2,600</td>
            <td class="price">₹3,500</td>
            <td>₹35 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td>
              <strong>Force Urbania (9–12 Seater)</strong>
              <div class="note">Ultra luxury tourer, panoramic windows</div>
            </td>
            <td>9–12 Seats</td>
            <td class="price">₹3,000</td>
            <td class="price">₹6,500</td>
            <td>On Request</td>
            <td>₹35 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td>
              <strong>Tempo Traveller (16/17 Seater)</strong>
              <div class="note">High roof, 2x1 pushback seats, dual AC</div>
            </td>
            <td>16–17 Seats</td>
            <td class="price">₹3,500 <span class="note">est.</span></td>
            <td class="price">₹5,000</td>
            <td class="price">₹6,000</td>
            <td>₹32 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td>
              <strong>Tempo Traveller (21 Seater)</strong>
              <div class="note">Spacious group coach, large luggage boot</div>
            </td>
            <td>21 Seats</td>
            <td>On Request</td>
            <td class="price">₹6,000</td>
            <td class="price">₹7,000</td>
            <td>₹32 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td>
              <strong>Tempo Traveller (26 Seater)</strong>
              <div class="note">Maximum passenger capacity, roof carrier</div>
            </td>
            <td>26 Seats</td>
            <td>On Request</td>
            <td class="price">₹6,500</td>
            <td class="price">₹7,500</td>
            <td>₹35 / km <div class="note">(Min. 250 km/day)</div></td>
          </tr>
          <tr>
            <td>
              <strong>35-Seater Mini Bus / Coach</strong>
              <div class="note">Large wedding &amp; corporate coach</div>
            </td>
            <td>35 Seats</td>
            <td>On Request</td>
            <td>On Request</td>
            <td>On Request</td>
            <td>₹55 / km <div class="note">(Tolls &amp; Parking Included)</div></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="grid grid-2 mt-6">
      <div class="alert alert-info">
        <i class="fas fa-info-circle" aria-hidden="true"></i>
        <strong>Key Billing Terms:</strong> Minimum outstation billing is 250 km/day. Driver daily allowance (BATA) is ₹500/day for all Tempo Travellers and Urbania models. Fuel and vehicle AC are included.
      </div>
      <div class="alert alert-warning">
        <i class="fas fa-receipt" aria-hidden="true"></i>
        <strong>Tolls &amp; Parking:</strong> Toll taxes, state commercial permits, and municipal/temple parking fees are billed at actuals (unless booked under an all-inclusive curated tour package). On the 35-seater minibus, tolls &amp; parking are included in the ₹55/km rate.
      </div>
    </div>
  </div>
</section>

<!-- ═══ URBANIA VS TEMPO TRAVELLER COMPARISON ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Vehicle Guide</span>
      <h2>Force Urbania vs. Tempo Traveller — Which Should You Hire?</h2>
      <div class="divider"></div>
      <p>Both models are built by Force Motors, but each caters to different travel priorities and group dynamics.</p>
    </div>

    <div class="grid grid-2" style="gap:2.5rem;">
      <!-- Urbania Card -->
      <div class="card card-body" style="border:2px solid var(--clr-saffron);border-radius:var(--radius-lg);box-shadow:var(--shadow-md);">
        <div class="tag tag--saffron" style="margin-bottom:0.75rem;">Premium Executive &amp; VIP Travel</div>
        <h3 style="font-size:var(--fs-2xl);color:var(--clr-navy);">Force Urbania</h3>
        <p class="text-sm mt-2" style="color:var(--clr-text-muted);">The vanguard of luxury passenger transit in India. Engineered with European chassis technology and aerodynamic styling.</p>
        <ul style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.75rem;font-size:var(--fs-sm);">
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <strong>Monocoque Body:</strong> Unibody construction providing car-like ride quality and whisper-quiet cabin acoustics.</li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <strong>Ultra-Plush Recliners:</strong> Ergonomic captain seats with wide armrests and individual seatbelts.</li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <strong>Aircraft-Style Comfort:</strong> Overhead personal AC louvers, reading spotlights, and USB mobile chargers.</li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-saffron"></i> <strong>Panoramic Windows:</strong> Massive tinted glass side windows offering spectacular views of the Ganges plains.</li>
        </ul>
        <div class="mt-6" style="border-top:1px solid var(--clr-border);padding-top:1rem;">
          <div class="font-bold text-navy">Recommended For:</div>
          <p class="text-sm text-muted mt-1">VIP family yatras, senior citizens desiring maximum suspension comfort, NRI travelers, and corporate executive retreats.</p>
        </div>
      </div>

      <!-- Tempo Traveller Card -->
      <div class="card card-body" style="border:2px solid var(--clr-navy);border-radius:var(--radius-lg);box-shadow:var(--shadow-md);">
        <div class="tag" style="margin-bottom:0.75rem;background:var(--clr-navy-light);color:var(--clr-navy);">Ultimate Group Value &amp; Capacity</div>
        <h3 style="font-size:var(--fs-2xl);color:var(--clr-navy);">Force Tempo Traveller</h3>
        <p class="text-sm mt-2" style="color:var(--clr-text-muted);">The time-tested workhorse of Indian tourism. Unmatched capacity, stand-up aisle height, and cavernous luggage options.</p>
        <ul style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.75rem;font-size:var(--fs-sm);">
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-navy"></i> <strong>Full Stand-Up Height:</strong> Over 6 feet interior roof clearance allows tall passengers to walk comfortably down the central aisle.</li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-navy"></i> <strong>Capacity up to 26 Seats:</strong> Perfect for accommodating large joint families, wedding contingents, or bhajan mandalis.</li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-navy"></i> <strong>Dual Luggage Flexibility:</strong> Deep rear boot PLUS heavy-duty exterior waterproof roof carrier for excessive luggage.</li>
          <li style="display:flex;gap:0.6rem;"><i class="fas fa-check text-navy"></i> <strong>High-Performance Dual AC:</strong> Powerful rooftop air-conditioning units designed to handle intense North Indian summers.</li>
        </ul>
        <div class="mt-6" style="border-top:1px solid var(--clr-border);padding-top:1rem;">
          <div class="font-bold text-navy">Recommended For:</div>
          <p class="text-sm text-muted mt-1">Joint family pilgrimages of 14–26 people, wedding guest shuttles, school/college excursions, and budget-conscious yatras.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ AVAILABLE CAPACITIES ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Fleet Specifications</span>
      <h2>Available Seating Configurations &amp; Layouts</h2>
      <div class="divider"></div>
      <p>Select the exact size that fits your party to avoid cramped seating and optimize your travel budget.</p>
    </div>

    <div class="grid grid-3">
      <!-- 6-7 Urbania -->
      <div class="card card-body">
        <div style="font-size:2.2rem;margin-bottom:0.5rem;">🚐</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);">Force Urbania (6–7 Seater)</h3>
        <p class="text-sm mt-1 text-muted">VIP executive configuration featuring individual leatherette captain seats with spacious center aisle.</p>
        <div class="fare-table mt-4" style="font-size:0.85rem;">
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Airport Drop:</span> <strong class="text-saffron">₹1,500</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 8hr/80km:</span> <strong class="text-saffron">₹2,600</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;">
            <span>Outstation Rate:</span> <strong class="text-saffron">₹35 / km</strong>
          </div>
        </div>
      </div>

      <!-- 9-12 Urbania -->
      <div class="card card-body">
        <div style="font-size:2.2rem;margin-bottom:0.5rem;">🚌</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);">Force Urbania (9–12 Seater)</h3>
        <p class="text-sm mt-1 text-muted">The ultimate luxury family tourer for Ayodhya and Prayagraj trips. Ample boot space and whisper-quiet suspension.</p>
        <div class="fare-table mt-4" style="font-size:0.85rem;">
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Airport Drop:</span> <strong class="text-saffron">₹3,000</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 8hr/80km:</span> <strong class="text-saffron">₹6,500</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;">
            <span>Outstation Rate:</span> <strong class="text-saffron">₹35 / km</strong>
          </div>
        </div>
      </div>

      <!-- 16/17 Tempo -->
      <div class="card card-body">
        <div style="font-size:2.2rem;margin-bottom:0.5rem;">🚍</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);">Tempo Traveller (16/17 Seater)</h3>
        <p class="text-sm mt-1 text-muted">Our most popular size. High roof, 2x1 pushback seats, and a generous rear luggage compartment for 12 suitcases.</p>
        <div class="fare-table mt-4" style="font-size:0.85rem;">
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 8hr/80km:</span> <strong class="text-saffron">₹5,000</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 12hr/120km:</span> <strong class="text-saffron">₹6,000</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;">
            <span>Outstation Rate:</span> <strong class="text-saffron">₹32 / km</strong>
          </div>
        </div>
      </div>

      <!-- 21 Tempo -->
      <div class="card card-body">
        <div style="font-size:2.2rem;margin-bottom:0.5rem;">🚍</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);">Tempo Traveller (21 Seater)</h3>
        <p class="text-sm mt-1 text-muted">Ideal for mid-sized community groups, wedding guests, and bhajan mandalis requiring plenty of room and roof carrier storage.</p>
        <div class="fare-table mt-4" style="font-size:0.85rem;">
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 8hr/80km:</span> <strong class="text-saffron">₹6,000</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 12hr/120km:</span> <strong class="text-saffron">₹7,000</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;">
            <span>Outstation Rate:</span> <strong class="text-saffron">₹32 / km</strong>
          </div>
        </div>
      </div>

      <!-- 26 Tempo -->
      <div class="card card-body">
        <div style="font-size:2.2rem;margin-bottom:0.5rem;">🚍</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);">Tempo Traveller (26 Seater)</h3>
        <p class="text-sm mt-1 text-muted">Maximum group capacity without stepping up to a bus. Excellent for large wedding parties and pilgrim yatras.</p>
        <div class="fare-table mt-4" style="font-size:0.85rem;">
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 8hr/80km:</span> <strong class="text-saffron">₹6,500</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local 12hr/120km:</span> <strong class="text-saffron">₹7,500</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;">
            <span>Outstation Rate:</span> <strong class="text-saffron">₹35 / km</strong>
          </div>
        </div>
      </div>

      <!-- 35 Bus -->
      <div class="card card-body">
        <div style="font-size:2.2rem;margin-bottom:0.5rem;">🚌</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);">35-Seater Mini Coach</h3>
        <p class="text-sm mt-1 text-muted">Full-size luxury mini coach with air-suspension, sound system, and cavernous belly luggage compartments.</p>
        <div class="fare-table mt-4" style="font-size:0.85rem;">
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Local Package:</span> <strong>On Request</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;border-bottom:1px solid var(--clr-border);">
            <span>Outstation Rate:</span> <strong class="text-saffron">₹55 / km</strong>
          </div>
          <div style="display:flex;justify-content:space-between;padding:0.35rem 0;">
            <span>Tolls &amp; Parking:</span> <strong style="color:var(--clr-success);">Included</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ POPULAR GROUP PILGRIMAGE PACKAGES ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Curated Group Yatras</span>
      <h2>Popular Tour Packages for Groups in Force Urbania</h2>
      <div class="divider"></div>
      <p>All-inclusive flat fares covering vehicle, driver allowance, highway tolls, and parking for 9 to 12 passengers.</p>
    </div>

    <div class="grid grid-3">
      <!-- Prayagraj Day Trip -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Same-Day Yatra</div>
          <h3 class="card-tour__title">Prayagraj Sangam Day Trip</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Triveni Sangam holy snan, Bade Hanuman Mandir, and Anand Bhavan in luxury Force Urbania (9–12 seater).</p>
          <div class="card-tour__price">₹10,000</div>
          <div class="card-tour__includes">Toll &amp; Parking Included · All-Inclusive</div>
          <a class="btn btn-primary btn-full mt-4" href="/tours/prayagraj-sangam-sightseeing/">View Prayagraj Tour</a>
        </div>
      </div>

      <!-- Vindhyachal + Chunar -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Shaktipeeth &amp; Heritage</div>
          <h3 class="card-tour__title">Vindhyachal + Chunar Fort Tour</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Maa Vindhyavasini darshan, Ashtabhuja, Kali Khoh, and historic Chunar Fort along the Ganges.</p>
          <div class="card-tour__price">₹9,500</div>
          <div class="card-tour__includes">Toll &amp; Parking Included · 9–12 Seater</div>
          <a class="btn btn-secondary btn-full mt-4" href="/services/outstation-taxi-varanasi/">Request Vindhyachal</a>
        </div>
      </div>

      <!-- Prayagraj + Sitamarhi + Vindhyachal -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Full-Day Tri-Tirtha</div>
          <h3 class="card-tour__title">Prayagraj + Sitamarhi + Vindhyachal</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Comprehensive pilgrimage covering Sangam, the sacred Sitamarhi Valmiki Ashram, and Vindhyavasini shrine.</p>
          <div class="card-tour__price">₹12,500</div>
          <div class="card-tour__includes">All-Inclusive · Force Urbania (9–12)</div>
          <a class="btn btn-primary btn-full mt-4" href="/services/outstation-taxi-varanasi/">Book Tri-Tirtha</a>
        </div>
      </div>

      <!-- Ayodhya Day Trip -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Ram Mandir Special</div>
          <h3 class="card-tour__title">Ayodhya Ram Mandir Day Trip</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Full-day darshan of Ram Lalla, Hanuman Garhi, and evening Saryu Aarti with round-trip Varanasi transfer.</p>
          <div class="card-tour__price">₹18,500</div>
          <div class="card-tour__includes">Tolls &amp; Parking Included · 9–12 Seater</div>
          <a class="btn btn-primary btn-full mt-4" href="/tours/ayodhya-ram-mandir-taxi-package/">View Ayodhya Tour</a>
        </div>
      </div>

      <!-- Gaya & Bodhgaya -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">Pind Daan &amp; Bodhi Tree</div>
          <h3 class="card-tour__title">Gaya &amp; Bodhgaya Day Trip</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Vishnupad Temple ancestral rituals and Mahabodhi Temple UNESCO site in comfortable group transport.</p>
          <div class="card-tour__price">₹22,500</div>
          <div class="card-tour__includes">All Highway Tolls Included · 9–12 Seater</div>
          <a class="btn btn-secondary btn-full mt-4" href="/services/outstation-taxi-varanasi/">Book Gaya Tour</a>
        </div>
      </div>

      <!-- Prayagraj to Ayodhya 2-Day -->
      <div class="card-tour">
        <div class="card-tour__body">
          <div class="card-tour__tag">2-Day Extended Circuit</div>
          <h3 class="card-tour__title">Prayagraj to Ayodhya 2-Day Yatra</h3>
          <p class="text-sm" style="color:var(--clr-text-muted);margin-bottom:1rem;">Sangam bath, overnight stay in Ayodhya, morning Ram Mandir darshan, and seamless return travel.</p>
          <div class="card-tour__price">₹22,500</div>
          <div class="card-tour__includes">2 Full Days Vehicle &amp; Driver Included</div>
          <a class="btn btn-primary btn-full mt-4" href="/routes/prayagraj-to-ayodhya-cab/">Explore 2-Day Yatra</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ AMENITIES & SAFETY ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Travel Standards</span>
      <h2>On-Board Amenities &amp; Safety Features</h2>
      <div class="divider"></div>
      <p>Every group vehicle in our fleet is rigorously inspected before departure for maximum comfort and security.</p>
    </div>

    <div class="grid grid-3">
      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:0.5rem;">❄️</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Individual High-Output AC</h3>
        <p class="text-sm mt-2 text-muted">Roof-mounted dual compressor units with independent airflow louvers for every row, guaranteeing uniform cooling even during extreme heat.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:0.5rem;">💺</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Pushback Reclining Seats</h3>
        <p class="text-sm mt-2 text-muted">Ergonomic bucket seats with thick foam cushioning, padded armrests, and adjustable backrests for restful highway naps.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🧳</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Dual Luggage Capacity</h3>
        <p class="text-sm mt-2 text-muted">Spacious interior rear boot space supplemented by an overhead waterproof luggage carrier fitted with heavy-duty tarpaulin covers.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🔌</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Mobile Charging Points</h3>
        <p class="text-sm mt-2 text-muted">Convenient USB and 12V charging ports situated along the seating rows so your phones and cameras stay charged for temple photography.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🎵</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Stereo &amp; Mic System</h3>
        <p class="text-sm mt-2 text-muted">Bluetooth stereo system and public address microphone, perfect for playing devotional bhajans or guiding group commentary.</p>
      </div>

      <div class="card card-body">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🛡️</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Vetted Highway Chauffeurs</h3>
        <p class="text-sm mt-2 text-muted">Background-checked, non-smoking, polite drivers with at least 10+ years of highway driving experience across North Indian pilgrimage corridors.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FAQS ═══ -->
<section class="section" id="tempo-faqs">
  <div class="container" style="max-width:820px;">
    <div class="text-center" style="margin-bottom:2.5rem;">
      <span class="section-label">Got Questions?</span>
      <h2>Frequently Asked Questions About Tempo Hire</h2>
      <div class="divider"></div>
      <p>Everything you need to know before booking a group vehicle in Varanasi.</p>
    </div>

    <div class="faq-list">
      <?php
      $tempo_faqs = [
          [
              'q' => 'What is the main difference between Force Urbania and a Tempo Traveller?',
              'a' => 'The Force Urbania is a next-generation luxury van built on a modern monocoque unibody chassis. It delivers passenger car-like suspension smoothness, whisper-quiet cabin acoustics, aircraft-style reading lights and AC vents, and plush recliner captain chairs. In contrast, the traditional Tempo Traveller is built on a heavy-duty ladder-frame chassis with higher roof clearance (allowing tall adults to stand up freely), higher seating capacity (up to 26 seats), and unmatched value-for-money for large groups.'
          ],
          [
              'q' => 'Is air conditioning guaranteed on long highway routes and summer tours?',
              'a' => 'Yes, 100%. All our Tempo Travellers and Force Urbania vehicles are equipped with high-capacity dual-compressor rooftop AC units with independent vents at every seat row. The AC remains fully functional throughout your journey across Varanasi, Ayodhya, Prayagraj, and Bodhgaya.'
          ],
          [
              'q' => 'Which vehicle size should we choose for our group?',
              'a' => 'For 5 to 7 passengers seeking maximum luxury, choose the Force Urbania 6–7 Seater. For 8 to 11 passengers, the Force Urbania 9–12 Seater is unbeatable. For 12 to 16 passengers, hire a 16/17-Seater Tempo Traveller. For larger groups of 18 to 25 people, the 21-seater or 26-seater Tempo Traveller offers the perfect capacity with ample luggage room.'
          ],
          [
              'q' => 'Can we book a Tempo Traveller for multi-day pilgrimage circuits?',
              'a' => 'Yes. Over 70% of our group bookings are for 3 to 7-day pilgrimage circuits covering Varanasi, Prayagraj, Ayodhya, Chitrakoot, and Bodhgaya. The vehicle and driver stay exclusively with your party throughout the entire journey.'
          ],
          [
              'q' => 'How are driver allowances and toll taxes billed for outstation trips?',
              'a' => 'For outstation rentals, driver allowance (BATA) is flat ₹500 per day for all Tempo Traveller and Urbania models. Toll taxes and state commercial entry permits (such as entering Bihar for Gaya) are billed at actuals against valid receipts, unless you book one of our all-inclusive curated tour packages where all tolls and parking are included.'
          ],
          [
              'q' => 'Can a Tempo Traveller drive into narrow streets near the Varanasi Ghats?',
              'a' => 'No. Heavy commercial vehicles and Tempo Travellers cannot enter the narrow medieval lanes of Godowlia or old Banaras. Our driver drops your group at designated municipal parking facilities (such as Godowlia multi-level parking, Maidagin, or Namo Ghat), from where passengers take short local e-rickshaws or walk directly to the temple gates.'
          ],
      ];

      foreach ($tempo_faqs as $k => $item):
      ?>
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-tempo-<?php echo $k; ?>">
          <?php echo htmlspecialchars($item['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-tempo-<?php echo $k; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($item['a']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ RELATED VEHICLES & TOURS ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Fleet Navigation</span>
      <h2>Related Fleet &amp; Pilgrimage Tours</h2>
      <div class="divider"></div>
      <p>Compare our vehicle offerings or explore curated pilgrimage itineraries.</p>
    </div>

    <div class="grid grid-3 text-center">
      <a class="card card-body" href="/fleet/sedan-cab-rental/" style="border:1px solid var(--clr-border);">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🚗</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Sedan &amp; Ertiga Cab Rental</h3>
        <p class="text-sm text-muted mt-1">Dzire &amp; Ertiga for couples and small families</p>
        <span class="text-sm text-saffron mt-3" style="font-weight:600;">View Sedans →</span>
      </a>

      <a class="card card-body" href="/tours/ayodhya-ram-mandir-taxi-package/" style="border:1px solid var(--clr-border);">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🏹</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Ayodhya Tour Package</h3>
        <p class="text-sm text-muted mt-1">Day trip in Urbania 9–12 Seater for ₹18,500</p>
        <span class="text-sm text-saffron mt-3" style="font-weight:600;">View Package →</span>
      </a>

      <a class="card card-body" href="/tours/prayagraj-sangam-sightseeing/" style="border:1px solid var(--clr-border);">
        <div style="font-size:2rem;margin-bottom:0.5rem;">🌊</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Prayagraj Sangam Tour</h3>
        <p class="text-sm text-muted mt-1">Sangam holy bath tour for ₹10,000 all-inclusive</p>
        <span class="text-sm text-saffron mt-3" style="font-weight:600;">View Tour →</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BOOKING INQUIRY FORM ═══ -->
<?php
$form_origin      = 'Varanasi';
$form_destination = 'Ayodhya / Outstation';
$form_section_id  = 'fleet-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
