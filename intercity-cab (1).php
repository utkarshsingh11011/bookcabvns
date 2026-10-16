<?php
// Database Configuration
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'bookcabvaranasi'; 

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
$db_connected = !$conn->connect_error;

// Sanitize & Format Inputs
$start = isset($_GET['start']) ? trim(ucwords(strtolower(htmlspecialchars($_GET['start'])))) : '';
$end = isset($_GET['end']) ? trim(ucwords(strtolower(htmlspecialchars($_GET['end'])))) : '';
$is_custom = isset($_GET['custom']) ? true : false;

// Auto-detect Local vs Intercity
$is_local = ($start && $end && strtolower($start) === strtolower($end));
$routes = [];

if ($start && $end && !$is_custom && $db_connected) {
    if ($is_local) {
        // Fetch Local & Airport packages for the city
        $stmt = $conn->prepare("SELECT * FROM route_rates WHERE LOWER(origin) = LOWER(?) AND trip_type IN ('local', 'airport') ORDER BY fare_amount ASC");
        if ($stmt) {
            $stmt->bind_param("s", $start);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) {
                $routes[] = $row;
            }
            $stmt->close();
        }
    } else {
        // Fetch Intercity & Tour Packages between the two cities
        // Using LIKE to handle slight variations (e.g. "Allahabad" vs "Allahabad (Prayagraj)")
        $searchTerm = "%" . strtolower($end) . "%";
        $stmt = $conn->prepare("SELECT * FROM route_rates WHERE LOWER(origin) = LOWER(?) AND LOWER(destination) LIKE ? ORDER BY fare_amount ASC");
        if ($stmt) {
            $stmt->bind_param("ss", $start, $searchTerm);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) {
                $routes[] = $row;
            }
            $stmt->close();
        }
    }
}

// Dynamic SEO Variables
if ($is_local && !empty($routes)) {
    $page_title = $start . " Local Sightseeing & Airport Cabs | BOOK CAB varanasi";
    $page_desc = "Book reliable local taxi packages in ".$start.". Check our 8Hr & 12Hr slab rates for Dzire and Urbania with flat-rate transparent pricing.";
} elseif (!$is_local && !empty($routes)) {
    $page_title = $start . " to " . $end . " Cab Fare & Tour Packages | BOOK CAB varanasi";
    $page_desc = "Check exact flat-rate fares for a cab from ".$start." to ".$end.". Book Innova, Dzire, or Tempo Traveller instantly for your spiritual journey.";
} else {
    $page_title = "Plan Your Sacred Journey: Spiritual Circuit & Intercity Cab Portal";
    $page_desc = "Book flat-rate cabs for your spiritual journey across Varanasi, Prayagraj, Ayodhya, Bodh Gaya & Chitrakoot. Customize your yatra with BOOK CAB varanasi today!";
}

include("header.php");
?>

<head>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    
    <!-- High Contrast & Spiritual Theme CSS Overrides -->
    <style>
        body { font-size: 16px; color: #1a1a1a; }
        .accessible-card { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); padding: 30px; margin-bottom: 30px; }
        
        /* Form & Inputs */
        label { font-weight: 700; color: #1f2937; margin-bottom: 8px; display: block; }
        .form-control { border: 2px solid #d1d5db; height: 55px; font-size: 1.1rem; border-radius: 8px; }
        .form-control:focus { border-color: #f59e0b; box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.2); }
        
        /* Vibrant Spiritual CTA Buttons */
        .btn-spiritual { 
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); 
            color: #ffffff; 
            font-weight: 800; 
            font-size: 1.15rem;
            text-transform: uppercase;
            padding: 15px 35px; 
            border-radius: 8px; 
            text-decoration: none; 
            display: inline-block; 
            transition: all 0.3s ease; 
            border: 2px solid transparent; 
            box-shadow: 0 4px 6px -1px rgba(217, 119, 6, 0.4);
        }
        .btn-spiritual:hover, .btn-spiritual:focus { 
            background: #b45309; 
            color: #ffffff; 
            outline: 3px solid #fef3c7; 
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(217, 119, 6, 0.5);
        }
        
        /* Itinerary Highlights styling */
        .highlight-box { background-color: #fef3c7; border-left: 4px solid #f59e0b; padding: 15px; border-radius: 4px; margin-top: 15px; }
        .highlight-title { font-weight: 700; color: #92400e; font-size: 0.95rem; text-transform: uppercase; margin-bottom: 5px; }
        
        /* Info Tags */
        .info-tag { display: inline-block; background: #e5e7eb; color: #374151; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; margin-right: 10px; margin-bottom: 10px; }
        
        /* Table Styles for Clean Data */
        .pricing-grid { display: grid; gap: 20px; grid-template-columns: 1fr; }
        @media (min-width: 992px) { .pricing-grid { grid-template-columns: repeat(2, 1fr); } }
    </style>

    <!-- Dynamic JSON-LD Schema Markup -->
    <?php if ($start && $end): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TaxiService",
      "name": "BOOK CAB varanasi - <?php echo $start; ?> to <?php echo $end; ?>",
      "provider": {
        "@type": "LocalBusiness",
        "name": "BOOK CAB varanasi",
        "telephone": "+91-9838409911"
      },
      "areaServed": {
        "@type": "City",
        "name": "<?php echo $start; ?>"
      }
    }
    </script>
    <?php endif; ?>
</head>

<div class="breadcumb-wrapper" data-bg-src="assets/img/f2.jpg" data-overlay="title" data-opacity="8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="breadcumb-content text-center">
                    <h1 class="breadcumb-title text-white" style="margin-top: 50px;">
                        <?php if ($is_local && !empty($routes)): ?>
                            Local Cabs & Airport Transfers: <?php echo $start; ?>
                        <?php elseif (!$is_local && !empty($routes)): ?>
                            <?php echo $start; ?> to <?php echo $end; ?> Fares & Tours
                        <?php else: ?>
                            Plan Your Sacred Journey
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="space" style="background-color: #f9fafb;">
    <div class="container">
        
        <!-- Search Widget -->
        <section class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="accessible-card border-top-0" style="border-top: 5px solid #f59e0b !important;">
                    <h2 class="text-center mb-4" style="color: #111827; font-weight: 800;">Find Your Route</h2>
                    <form id="routeSearchForm" action="intercity-cab.php" method="GET">
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="start_city">Starting Destination</label>
                                <select name="start" id="start_city" class="form-control" required>
                                    <option value="" disabled <?php echo !$start ? 'selected' : ''; ?>>Select Start City</option>
                                    <option value="Varanasi" <?php echo strtolower($start) == 'varanasi' ? 'selected' : ''; ?>>Varanasi</option>
                                    <option value="Ayodhya" <?php echo strtolower($start) == 'ayodhya' ? 'selected' : ''; ?>>Ayodhya</option>
                                    <option value="Prayagraj" <?php echo strtolower($start) == 'prayagraj' ? 'selected' : ''; ?>>Prayagraj</option>
                                    <option value="Lucknow" <?php echo strtolower($start) == 'lucknow' ? 'selected' : ''; ?>>Lucknow</option>
                                    <option value="Gaya" <?php echo strtolower($start) == 'gaya' ? 'selected' : ''; ?>>Gaya / Bodhgaya</option>
                                    <option value="Mirzapur" <?php echo strtolower($start) == 'mirzapur' ? 'selected' : ''; ?>>Vindhyachal (Mirzapur)</option>
                                </select>
                            </div>
                            <div class="col-md-2 d-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-exchange-alt" style="font-size: 24px; color: #9ca3af; margin-top: 15px;"></i>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="end_city">Ending Destination</label>
                                <select name="end" id="end_city" class="form-control" required>
                                    <option value="" disabled <?php echo !$end ? 'selected' : ''; ?>>Select End City</option>
                                    <option value="Varanasi" <?php echo strtolower($end) == 'varanasi' ? 'selected' : ''; ?>>Varanasi (Local Package)</option>
                                    <option value="Ayodhya" <?php echo strtolower($end) == 'ayodhya' ? 'selected' : ''; ?>>Ayodhya</option>
                                    <option value="Prayagraj" <?php echo strtolower($end) == 'prayagraj' ? 'selected' : ''; ?>>Prayagraj (Allahabad)</option>
                                    <option value="Lucknow" <?php echo strtolower($end) == 'lucknow' ? 'selected' : ''; ?>>Lucknow</option>
                                    <option value="Gaya" <?php echo strtolower($end) == 'gaya' ? 'selected' : ''; ?>>Gaya / Bodhgaya</option>
                                    <option value="Mirzapur" <?php echo strtolower($end) == 'mirzapur' ? 'selected' : ''; ?>>Vindhyachal (Mirzapur)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-check mb-4 mt-3 text-center">
                            <input class="form-check-input" type="checkbox" name="custom" id="customTrip" value="1" <?php echo $is_custom ? 'checked' : ''; ?> style="width: 20px; height: 20px; margin-top: 2px;">
                            <label class="form-check-label" for="customTrip" style="display:inline; margin-left: 10px; font-weight: 500; color: #4b5563;">
                                <strong>Custom Trip / Add Sub-Stops</strong> (Select this if you plan to visit multiple places on the way)
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-spiritual">View Exact Fares</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script>
        document.getElementById('routeSearchForm').addEventListener('submit', function(e) {
            var start = document.getElementById('start_city').value.toLowerCase().replace(/[^a-z0-9]/g, '-');
            var end = document.getElementById('end_city').value.toLowerCase().replace(/[^a-z0-9]/g, '-');
            var custom = document.getElementById('customTrip').checked;

            if (start && end && !custom && start !== end) {
                e.preventDefault();
                // Redirect to Clean SEO URL: /intercity-cab/start-to-end
                window.location.href = '/intercity-cab/' + start + '-to-' + end;
            }
        });
        </script>

        <!-- Pricing Engine Display Logic -->
        <?php if ($start && $end): ?>
            
            <?php if (!empty($routes) && !$is_custom): ?>
                
                <section class="title-area text-center mt-5 mb-5">
                    <h2 class="sec-title" style="color: #111827;">Available Vehicles & Pricing</h2>
                    <p class="text-muted">Transparent flat rates. No hidden fees. Book instantly via WhatsApp.</p>
                </section>
                
                <div class="pricing-grid">
                    <?php foreach ($routes as $route): ?>
                        <div class="accessible-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 style="margin: 0; color: #1f2937; font-weight: 800; font-size: 1.5rem;"><?php echo htmlspecialchars($route['vehicle_category']); ?></h3>
                                <span style="font-size: 1.8rem; font-weight: 800; color: #b45309;">₹<?php echo number_format($route['fare_amount']); ?></span>
                            </div>
                            
                            <h4 style="font-size: 1.1rem; color: #4b5563; border-bottom: 2px solid #f3f4f6; padding-bottom: 10px; margin-bottom: 15px;">
                                <?php echo htmlspecialchars($route['destination']); ?>
                            </h4>

                            <div class="mb-4">
                                <?php if ($route['trip_type'] == 'tour_package'): ?>
                                    <span class="info-tag"><i class="fas fa-calendar-day text-warning me-1"></i> <?php echo $route['trip_duration_days']; ?> Day(s) Tour</span>
                                <?php endif; ?>
                                
                                <?php if ($route['allowed_distance_km']): ?>
                                    <span class="info-tag"><i class="fas fa-road text-warning me-1"></i> Max <?php echo $route['allowed_distance_km']; ?> KM</span>
                                <?php endif; ?>
                                
                                <?php if ($route['allowed_hours']): ?>
                                    <span class="info-tag"><i class="fas fa-clock text-warning me-1"></i> <?php echo $route['allowed_hours']; ?> Hours</span>
                                <?php endif; ?>
                                
                                <span class="info-tag"><i class="fas fa-info-circle text-warning me-1"></i> <?php echo htmlspecialchars($route['extra_charge_notes']); ?></span>
                            </div>

                            <?php if (!empty($route['itinerary_highlights'])): ?>
                            <div class="highlight-box">
                                <div class="highlight-title">Trip Highlights</div>
                                <p style="margin: 0; font-size: 0.95rem; color: #4b5563;"><?php echo htmlspecialchars($route['itinerary_highlights']); ?></p>
                            </div>
                            <?php endif; ?>

                            <div class="mt-4 text-center">
                                <?php 
                                $msg = "Hi, I want to book a " . $route['vehicle_category'] . " for " . $route['destination'] . " (Fare: Rs. " . $route['fare_amount'] . ")";
                                ?>
                                <a href="https://wa.me/919648974238?text=<?php echo urlencode($msg); ?>" target="_blank" class="btn-spiritual w-100"><i class="fab fa-whatsapp me-2"></i> Book Now</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <!-- FLOW: Custom Trip or Missing DB Data -->
                <section class="title-area text-center mt-5">
                    <h2 class="sec-title" style="color: #111827;">Custom Quotation Required</h2>
                    <p style="font-size: 1.1rem; color: #4b5563; max-width: 600px; margin: 0 auto;">
                        <?php if ($is_custom): ?>
                            Since you opted to add sub-stops, your itinerary distance and time will vary. We will create a custom spiritual package for you.
                        <?php else: ?>
                            We offer specialized packages for this route. Please request a quotation for our best pricing.
                        <?php endif; ?>
                    </p>
                </section>
                
                <div class="row justify-content-center mt-4 mb-5">
                    <div class="col-lg-6 text-center">
                        <div class="accessible-card" style="border-top: 5px solid #0a2540 !important;">
                            <h3 style="color: #111827; margin-bottom: 20px;">Ready to customize your journey?</h3>
                            <a href="contact.php?subject=Quotation for <?php echo urlencode($start.' to '.$end); ?>" class="btn-spiritual"><i class="fas fa-envelope me-2"></i> Ask for Quotation</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        
        <?php endif; ?>

    </div>
</main>

<?php include("footer.php"); ?>
