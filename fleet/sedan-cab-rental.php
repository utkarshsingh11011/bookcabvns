<?php
require_once __DIR__ . '/../includes/config.php';

// SEO Variables
$page_title     = 'Sedan Cab Rental Varanasi | Swift Dzire & Ertiga Taxi | Book Cab Varanasi';
$meta_desc      = 'Book a sedan or Ertiga cab in Varanasi. Swift Dzire from ₹2,000 for 8hr/80km local. Outstation ₹13/km. Best for families up to 4-6 people.';
$canonical      = 'https://bookcabvaranasi.com/fleet/sedan-cab-rental/';
$og_title       = 'Sedan & Ertiga Cab Rental in Varanasi | Book Cab Varanasi';
$og_desc        = $meta_desc;
$whatsapp_route = 'sedan cab rental Varanasi';

$breadcrumbs = [
    ['name' => 'Home',             'url' => 'https://bookcabvaranasi.com/'],
    ['name' => 'Fleet',            'url' => 'https://bookcabvaranasi.com/fleet/tempo-traveller-rental/'],
    ['name' => 'Sedan Cab Rental', 'url' => $canonical],
];

// Schema.org Structured Data
$schema_data = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type'        => 'Service',
            '@id'          => $canonical . '#service',
            'name'         => 'Sedan & Ertiga Cab Rental in Varanasi',
            'serviceType'  => 'Car Rental with Driver, Sedan Taxi, Airport Cab, Local Sightseeing Taxi',
            'provider'     => ['@id' => 'https://bookcabvaranasi.com/#business'],
            'areaServed'   => [
                ['@type' => 'City', 'name' => 'Varanasi'],
                ['@type' => 'City', 'name' => 'Prayagraj'],
                ['@type' => 'City', 'name' => 'Ayodhya'],
            ],
            'description'  => 'Book clean, air-conditioned Maruti Swift Dzire sedans (4-seater) and Maruti Suzuki Ertiga MUVs (6-seater) in Varanasi for Babatpur Airport transfers, 8hr/80km local sightseeing, and outstation trips to Prayagraj, Ayodhya, and Vindhyachal.',
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $canonical . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name'  => 'How much luggage can fit inside the boot of a Swift Dzire sedan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'A Maruti Swift Dzire can comfortably accommodate 2 medium-sized trolley suitcases (up to 24 inches each) plus 1 to 2 small soft hand backpacks in the trunk. If you are traveling with more than 2 large international bags, we recommend booking a Maruti Ertiga or Toyota Innova.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Can 6 adult passengers comfortably sit in the Maruti Ertiga?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'The Maruti Ertiga has 3 rows of seating. It comfortably seats 4 to 5 adults plus 1 or 2 children, or 6 adults of average height for local city transfers. For long-distance outstation travel with 6 full-grown adults carrying luggage, the Toyota Innova Crysta is recommended for superior shoulder width and cargo flexibility.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Does the air-conditioning stay on during the entire 8-hour local package?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes, absolutely. The air conditioning remains switched on throughout your drive across the city. When the car is parked waiting for you while you perform temple darshan or shopping, the car engine is turned off in municipal parking areas, but cooling resumes the moment you step back inside.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'Are toll taxes and parking fees included in the sedan rental rates?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'For local packages (8hr/80km) and airport drops, municipal parking fees (typically ₹50–₹100 at temple lots or airport terminal) are paid directly by the guest at actuals. For outstation highway travel, toll plaza charges and state road permits are paid by the customer against valid receipts.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name'  => 'What happens if our trip exceeds 8 hours or 80 kilometers on the local package?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Extra usage is billed at transparent standard rates: ₹150 per additional hour and ₹13 per additional kilometer on the Swift Dzire (₹150/hr and ₹16/km on the Ertiga). You can also upgrade to our 12hr/120km package during your journey.',
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
      <span class="breadcrumb__current">Sedan Cab Rental</span>
    </nav>
    <span class="section-label" style="background:rgba(255,192,0,0.18);color:var(--clr-gold);margin-top:0.75rem;">Compact &amp; Family Fleet</span>
    <h1 class="page-hero__title" id="hero-heading">Sedan &amp; Ertiga Cab Rental in Varanasi</h1>
    <p class="page-hero__desc">Reliable, spotless Swift Dzire sedans and spacious Maruti Ertigas with chilled air conditioning and polite chauffeurs. Perfect for couple getaways, nuclear families, airport runs, and outstation pilgrimages.</p>
    <div class="flex gap-4 mt-6" style="flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+<?php echo BCV_PHONE_RAW; ?>" onclick="bcvTrack('click_call','hero_sedan')">
        <i class="fas fa-phone" aria-hidden="true"></i> Call Dispatch: +91-9838409911
      </a>
      <a class="btn btn-whatsapp btn-lg" href="<?php echo htmlspecialchars(bcv_whatsapp_link($whatsapp_route)); ?>"
         target="_blank" rel="noopener" onclick="bcvTrack('click_whatsapp','hero_sedan')">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp Us
      </a>
      <a class="btn btn-secondary btn-lg" href="#sedan-booking" style="color:var(--clr-white);border-color:rgba(255,255,255,0.4);">
        <i class="fas fa-car" aria-hidden="true"></i> Book Online
      </a>
    </div>
  </div>
</section>

<!-- ═══ TRUST BAR ═══ -->
<section class="trust-bar" aria-label="Sedan Rental Highlights">
  <div class="container">
    <div class="trust-bar__grid">
      <div class="trust-item">
        <div class="trust-item__num">₹2,000</div>
        <div class="trust-item__label">8hr / 80km Dzire Package</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹13 / km</div>
        <div class="trust-item__label">Outstation Dzire Base Rate</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">₹300</div>
        <div class="trust-item__label">Flat Daily Driver BATA</div>
      </div>
      <div class="trust-item">
        <div class="trust-item__num">4.8 ★</div>
        <div class="trust-item__label">Over 470 Customer Reviews</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SEDAN OVERVIEW ═══ -->
<section class="section">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Smart City Navigation</span>
        <h2>The Ideal Fleet for Varanasi's Historic Streets</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Varanasi's dynamic urban landscape requires nimble vehicles that can gracefully maneuver crowded arterial intersections, navigate narrow approaches leading toward the ghats, and squeeze into compact municipal parking bays near Godowlia and Maidagin.</p>
        <p class="mt-4">The <strong>Maruti Suzuki Swift Dzire</strong> (4-passenger sedan) and <strong>Maruti Suzuki Ertiga</strong> (6-passenger compact MUV) represent the undisputed champions of Indian urban cab mobility. Delivering class-leading ride comfort, whisper-quiet cabin insulation, powerful multi-vent air-conditioning, and remarkable fuel efficiency, they provide the smoothest, most economical travel experience for individual travelers, couples, and nuclear families.</p>
        <p class="mt-4">At <strong>Book Cab Varanasi</strong>, every sedan and Ertiga undergoes daily interior vacuuming, sanitization, and tire checks. Driven by courteous local chauffeurs who understand Banaras courtesies, your journey is always peaceful and on-time.</p>
      </div>

      <div class="highlight-box" style="padding:2rem;border-radius:var(--radius-lg);box-shadow:var(--shadow-md);">
        <h3 style="font-size:var(--fs-xl);color:var(--clr-navy);margin-bottom:1rem;"><i class="fas fa-thumbs-up text-saffron" aria-hidden="true"></i> Why Book Our Sedans &amp; Ertigas?</h3>
        <ul style="display:flex;flex-direction:column;gap:0.85rem;font-size:var(--fs-sm);color:var(--clr-text);">
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Compact Agility:</strong> Effortless movement through Godowlia, Luxa, and Sigra where larger tourist buses get stalled.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Guaranteed Working AC:</strong> Ice-cold climate control maintained throughout summer afternoons.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>Zero Hidden Commissions:</strong> Transparent driver bills with no forced stops at souvenir silk emporiums.</span></li>
          <li style="display:flex;gap:0.75rem;"><i class="fas fa-check-circle text-saffron" style="margin-top:3px;"></i> <span><strong>GPS Live Tracking:</strong> Real-time safety monitoring for solo female travelers and senior citizen couples.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FARE TABLE ═══ -->
<section class="section section-warm" id="sedan-fares">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Transparent Rates</span>
      <h2>Sedan &amp; Ertiga Fare Comparison Table</h2>
      <div class="divider"></div>
      <p>Compare our verified, fixed rates across airport transfers, local Banaras hours, and outstation trips.</p>
    </div>

    <div class="fare-wrapper">
      <table class="fare-table" aria-label="Sedan and Ertiga Fare Table">
        <thead>
          <tr>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Capacity</th>
            <th scope="col">Airport Transfer (VNS)</th>
            <th scope="col">Local 8hr / 80km</th>
            <th scope="col">Local 12hr / 120km</th>
            <th scope="col">Outstation / km</th>
            <th scope="col">Driver BATA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <strong>Maruti Swift Dzire</strong>
              <div class="note">Comfortable compact sedan, AC, clean trunk</div>
            </td>
            <td>4 Passengers</td>
            <td class="price">₹1,000</td>
            <td class="price">₹2,000</td>
            <td class="price">₹2,600</td>
            <td>₹13 / km <div class="note">(Min. 250 km/day)</div></td>
            <td>₹300 / day</td>
          </tr>
          <tr>
            <td>
              <strong>Maruti Suzuki Ertiga</strong>
              <div class="note">Flexible 3-row MUV, rear AC vents</div>
            </td>
            <td>6 Passengers</td>
            <td class="price">₹1,200</td>
            <td class="price">₹2,400</td>
            <td class="price">₹3,200</td>
            <td>₹16 / km <div class="note">(Min. 250 km/day)</div></td>
            <td>₹300 / day</td>
          </tr>
          <tr>
            <td>
              <strong>Toyota Innova Crysta</strong>
              <div class="note">Reference comparison: Premium MPV</div>
            </td>
            <td>6/7 Passengers</td>
            <td class="price">₹1,500</td>
            <td class="price">₹3,500</td>
            <td class="price">₹4,500</td>
            <td>₹19 / km <div class="note">(Min. 250 km/day)</div></td>
            <td>₹400 / day</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="grid grid-2 mt-6">
      <div class="alert alert-info">
        <i class="fas fa-check-circle" aria-hidden="true"></i>
        <strong>Fare Inclusions:</strong> Vehicle hire, clean AC cabin, vehicle fuel, and driver charges are fully included in all local package and airport quotes.
      </div>
      <div class="alert alert-warning">
        <i class="fas fa-exclamation-circle" aria-hidden="true"></i>
        <strong>Outstation Conditions:</strong> Minimum billing is 250 km/day. Interstate highway tolls, municipal parking, and state commercial road taxes are extra as per actual receipts. Driver daily allowance (BATA) is flat ₹300/day for Dzire &amp; Ertiga.
      </div>
    </div>
  </div>
</section>

<!-- ═══ DZIRE VS ERTIGA VEHICLE BREAKDOWN ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Vehicle Matcher</span>
      <h2>Choose Your Car: Swift Dzire vs. Maruti Ertiga</h2>
      <div class="divider"></div>
      <p>Decide whether a dedicated sedan or a flexible 6-seater MUV fits your passenger count and luggage needs.</p>
    </div>

    <div class="grid grid-2" style="gap:2.5rem;">
      <!-- Swift Dzire -->
      <div class="card card-body" style="border:1.5px solid var(--clr-border);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);">
        <div class="flex-between">
          <span class="tag tag--saffron">Compact Sedan</span>
          <span class="font-bold text-saffron">₹2,000 / 8hr</span>
        </div>
        <h3 style="font-size:var(--fs-2xl);color:var(--clr-navy);margin-top:0.75rem;">Maruti Suzuki Swift Dzire</h3>
        <p class="text-sm mt-2 text-muted">India's most beloved passenger sedan. Known for its soft suspension, peaceful rear seat comfort, and ability to zip through tight city lanes.</p>

        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md);margin:1.25rem 0;">
          <div class="flex-between text-sm py-1 border-bottom" style="border-bottom:1px solid var(--clr-border);">
            <span>Passenger Capacity:</span>
            <strong>Up to 4 Adults</strong>
          </div>
          <div class="flex-between text-sm py-1 border-bottom" style="border-bottom:1px solid var(--clr-border);">
            <span>Luggage Boot:</span>
            <strong>2 Medium Suitcases + 2 Bags</strong>
          </div>
          <div class="flex-between text-sm py-1 border-bottom" style="border-bottom:1px solid var(--clr-border);">
            <span>Air Conditioning:</span>
            <strong>Powerful Climate Control</strong>
          </div>
          <div class="flex-between text-sm py-1">
            <span>Best Suited For:</span>
            <strong>Couples, Solo, Senior Citizens</strong>
          </div>
        </div>

        <ul style="display:flex;flex-direction:column;gap:0.5rem;font-size:var(--fs-sm);margin-bottom:1.5rem;">
          <li><i class="fas fa-check text-success" aria-hidden="true"></i> Smooth ride over Banaras road bumps</li>
          <li><i class="fas fa-check text-success" aria-hidden="true"></i> Easy boarding height for elderly pilgrims</li>
          <li><i class="fas fa-check text-success" aria-hidden="true"></i> High fuel efficiency guarantees lowest rental rates</li>
        </ul>

        <a class="btn btn-primary btn-full" href="#sedan-booking">Book Swift Dzire</a>
      </div>

      <!-- Maruti Ertiga -->
      <div class="card card-body" style="border:1.5px solid var(--clr-border);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);">
        <div class="flex-between">
          <span class="tag" style="background:var(--clr-navy-light);color:var(--clr-navy);">Ergonomic 6-Seater MUV</span>
          <span class="font-bold text-saffron">₹2,400 / 8hr</span>
        </div>
        <h3 style="font-size:var(--fs-2xl);color:var(--clr-navy);margin-top:0.75rem;">Maruti Suzuki Ertiga</h3>
        <p class="text-sm mt-2 text-muted">A remarkably versatile 3-row compact multi-utility vehicle. Offers elevated seating position, rear ceiling AC blowers, and flexible cargo space.</p>

        <div style="background:var(--clr-off-white);padding:1rem;border-radius:var(--radius-md);margin:1.25rem 0;">
          <div class="flex-between text-sm py-1 border-bottom" style="border-bottom:1px solid var(--clr-border);">
            <span>Passenger Capacity:</span>
            <strong>Up to 6 Passengers</strong>
          </div>
          <div class="flex-between text-sm py-1 border-bottom" style="border-bottom:1px solid var(--clr-border);">
            <span>Luggage Boot:</span>
            <strong>2 Bags (6 seats up) / 4 Bags (rear row folded)</strong>
          </div>
          <div class="flex-between text-sm py-1 border-bottom" style="border-bottom:1px solid var(--clr-border);">
            <span>Air Conditioning:</span>
            <strong>Dual AC (Front + Roof Blowers)</strong>
          </div>
          <div class="flex-between text-sm py-1">
            <span>Best Suited For:</span>
            <strong>Families with Kids &amp; Grandparents</strong>
          </div>
        </div>

        <ul style="display:flex;flex-direction:column;gap:0.5rem;font-size:var(--fs-sm);margin-bottom:1.5rem;">
          <li><i class="fas fa-check text-success" aria-hidden="true"></i> Independent rear roof AC vents for 2nd &amp; 3rd row</li>
          <li><i class="fas fa-check text-success" aria-hidden="true"></i> Easy upright entry without crouching</li>
          <li><i class="fas fa-check text-success" aria-hidden="true"></i> Rear seats fold flat for extra baggage capacity</li>
        </ul>

        <a class="btn btn-secondary btn-full" href="#sedan-booking">Book Maruti Ertiga</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ROUTE SUITABILITY & LIMITATIONS ═══ -->
<section class="section section-warm">
  <div class="container">
    <div class="grid grid-2" style="align-items:center;gap:3rem;">
      <div>
        <span class="section-label">Route Suitability</span>
        <h2>Where Our Sedans &amp; Ertigas Excel</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">Our sedans and Ertigas are deployed across several high-frequency travel corridors:</p>

        <div style="display:flex;flex-direction:column;gap:1rem;margin-top:1.5rem;">
          <div style="background:var(--clr-white);padding:1rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-saffron);">
            <strong>Local Sightseeing &amp; Temple Circuit:</strong>
            <p class="text-sm text-muted mt-1">Visiting Kashi Vishwanath drop points, Sankat Mochan, BHU campus, and evening Ganga Aarti with zero parking friction.</p>
          </div>
          <div style="background:var(--clr-white);padding:1rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-navy);">
            <strong>Babatpur Airport Transfers (VNS):</strong>
            <p class="text-sm text-muted mt-1">Prompt 26 km journey in 45 minutes. Flat ₹1,000 rate on Dzire and ₹1,200 on Ertiga with flight delay monitoring.</p>
          </div>
          <div style="background:var(--clr-white);padding:1rem;border-radius:var(--radius-md);border-left:4px solid var(--clr-gold-dark);">
            <strong>Day Trips to Prayagraj &amp; Vindhyachal:</strong>
            <p class="text-sm text-muted mt-1">Varanasi to Prayagraj (125 km, ~2.5 hrs, ₹3,250 one-way) and Vindhyachal Shaktipeeth (70 km, ~2 hrs, ₹2,500 one-way).</p>
          </div>
        </div>
      </div>

      <div>
        <span class="section-label" style="background:#fee2e2;color:#b91c1c;">Know The Limits</span>
        <h2>When Should You Upgrade Beyond Sedans?</h2>
        <div class="divider divider--left"></div>
        <p class="mt-4">To ensure you don't face unexpected space issues on arrival, please consider our larger vehicles under the following circumstances:</p>

        <div class="alert alert-warning mt-4">
          <i class="fas fa-triangle-exclamation" aria-hidden="true"></i>
          <strong>Excess Luggage Notice:</strong>
          <ul style="margin-top:0.5rem;padding-left:1.25rem;list-style:disc;font-size:var(--fs-sm);">
            <li><strong>4+ Large Trolley Bags:</strong> Sedans have limited trunk depth. If your party carries multiple 28-inch international suitcases, choose an <a href="/services/outstation-taxi-varanasi/" style="color:var(--clr-saffron);font-weight:600;text-decoration:underline;">Innova Crysta</a>.</li>
            <li><strong>6 Tall Adults on Outstation Trips:</strong> While the Ertiga accommodates 6 adults for local city hops, long 5-hour highway journeys to Ayodhya with full luggage are substantially more comfortable in an Innova Crysta or a 9–12 seater <a href="/fleet/tempo-traveller-rental/" style="color:var(--clr-saffron);font-weight:600;text-decoration:underline;">Force Urbania</a>.</li>
            <li><strong>Groups of 7 or More:</strong> By regional transport law, standard sedans and Ertigas cannot exceed their RTO seating limits. Groups of 7–26 passengers must reserve a <a href="/fleet/tempo-traveller-rental/" style="color:var(--clr-saffron);font-weight:600;text-decoration:underline;">Tempo Traveller</a>.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ HOW TO BOOK ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Easy Reservation</span>
      <h2>How to Book Your Sedan or Ertiga</h2>
      <div class="divider"></div>
      <p>Reserve in three minutes with verified local dispatch.</p>
    </div>

    <div class="grid grid-3">
      <div class="card card-body text-center" style="border:1.5px solid var(--clr-border);">
        <div style="width:50px;height:50px;border-radius:50%;background:var(--clr-saffron-light);color:var(--clr-saffron);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1.25rem;">1</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Fill In Details</h3>
        <p class="text-sm">Submit your pickup location, journey date, passenger count, and preferred car model (Dzire or Ertiga).</p>
      </div>

      <div class="card card-body text-center" style="border:1.5px solid var(--clr-border);">
        <div style="width:50px;height:50px;border-radius:50%;background:var(--clr-navy-light);color:var(--clr-navy);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1.25rem;">2</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Get Quick Confirmation</h3>
        <p class="text-sm">Our reservations desk verifies availability and shares vehicle details and an exact fare quote in 10 minutes.</p>
      </div>

      <div class="card card-body text-center" style="border:1.5px solid var(--clr-border);">
        <div style="width:50px;height:50px;border-radius:50%;background:var(--clr-saffron-light);color:var(--clr-saffron);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1.25rem;">3</div>
        <h3 style="font-size:var(--fs-lg);color:var(--clr-navy);margin-bottom:0.5rem;">Enjoy Your Ride</h3>
        <p class="text-sm">Your sanitized car arrives on schedule. Complete payment easily via UPI, Cash, or Card at the end of your journey.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FAQS ═══ -->
<section class="section section-warm" id="sedan-faqs">
  <div class="container" style="max-width:820px;">
    <div class="text-center" style="margin-bottom:2.5rem;">
      <span class="section-label">Frequently Asked</span>
      <h2>Common Questions About Sedan &amp; Ertiga Rental</h2>
      <div class="divider"></div>
      <p>Clear facts to ensure a seamless booking experience.</p>
    </div>

    <div class="faq-list">
      <?php
      $sedan_faqs = [
          [
              'q' => 'How many bags can fit in the Swift Dzire trunk?',
              'a' => 'A standard tourist Maruti Swift Dzire easily carries 2 medium-sized trolley bags (up to 24 inches) plus two soft backpacks or duffle bags. If your group is traveling with multiple large 28-inch suitcases, we suggest opting for the Maruti Ertiga (where the third-row seat folds flat) or an Innova Crysta.'
          ],
          [
              'q' => 'Can 6 adults comfortably sit in the Maruti Ertiga?',
              'a' => 'Yes, for city sightseeing and short transfers within Varanasi, 6 adults can sit comfortably across the three rows. For long-distance outstation travel of 4+ hours (such as to Ayodhya or Gaya), 4 to 5 adults plus children travel with maximum comfort, as the 6th seat leaves limited luggage space in the rear boot.'
          ],
          [
              'q' => 'Is the air conditioning kept switched on during the entire 8hr local package?',
              'a' => 'Yes. Air conditioning is included throughout your journey. When the vehicle is stopped in municipal parking lots while you are performing darshan or attending Ganga Aarti, the vehicle is turned off, but cooling resumes the second you re-enter the vehicle.'
          ],
          [
              'q' => 'Are parking charges and highway tolls included in the sedan rental rates?',
              'a' => 'For local packages (8hr/80km) and airport drops, municipal parking fees (typically ₹50 to ₹100 per temple or monument) are paid directly by the client as per actual municipal receipts. On outstation trips, highway toll plazas are billed at actuals.'
          ],
          [
              'q' => 'Can we use the sedan for early morning Ganga Aarti and late-night station pickup?',
              'a' => 'Yes. We operate 24 hours a day. Whether you need a 4:00 AM pickup for Subah-e-Banaras at Assi Ghat or a midnight pickup from Varanasi Cantt Station (BSB), your driver will be present punctually.'
          ],
          [
              'q' => 'What happens if we exceed the 8 hours or 80 km limit in the local package?',
              'a' => 'Extra usage is billed at transparent standard rates: ₹150 per additional hour and ₹13 per additional kilometer on the Swift Dzire (₹150/hr and ₹16/km on the Ertiga). You can also choose to upgrade to our 12hr/120km package during your journey.'
          ],
      ];

      foreach ($sedan_faqs as $m => $item):
      ?>
      <div class="faq-item">
        <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-sedan-<?php echo $m; ?>">
          <?php echo htmlspecialchars($item['q']); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" id="faq-sedan-<?php echo $m; ?>" role="region">
          <div class="faq-answer__inner">
            <?php echo htmlspecialchars($item['a']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ RELATED SERVICES & LINKS ═══ -->
<section class="section">
  <div class="container">
    <div class="text-center" style="max-width:760px;margin:0 auto 2.5rem;">
      <span class="section-label">Explore More</span>
      <h2>Related Services &amp; Fleet Options</h2>
      <div class="divider"></div>
      <p>Connect with other top services and routes across our Banaras network.</p>
    </div>

    <div class="grid grid-4 text-center">
      <a class="card card-body" href="/services/varanasi-local-8hr-80km/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🕒</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Local 8hr Sightseeing</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">From ₹2,000 →</span>
      </a>

      <a class="card card-body" href="/services/varanasi-airport-taxi/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">✈️</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Airport Taxi VNS</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">From ₹1,000 →</span>
      </a>

      <a class="card card-body" href="/routes/varanasi-to-prayagraj-taxi/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🌊</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Prayagraj Taxi</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">₹3,250 One-Way →</span>
      </a>

      <a class="card card-body" href="/fleet/tempo-traveller-rental/" style="border:1px solid var(--clr-border);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🚐</div>
        <h3 style="font-size:var(--fs-base);color:var(--clr-navy);">Tempo Traveller Hire</h3>
        <span class="text-sm text-saffron mt-2" style="font-weight:600;">12 to 26 Seaters →</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══ BOOKING INQUIRY FORM ═══ -->
<?php
$form_origin      = 'Varanasi';
$form_destination = '';
$form_section_id  = 'sedan-booking';
include __DIR__ . '/../includes/booking-form.php';
include __DIR__ . '/../includes/footer.php';
?>
