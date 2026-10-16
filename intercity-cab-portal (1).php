<?php
// Database Configuration
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'bookcabvaranasi'; 

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
$db_connected = !$conn->connect_error;

$start = isset($_GET['start']) ? htmlspecialchars(strtolower($_GET['start'])) : '';
$end = isset($_GET['end']) ? htmlspecialchars(strtolower($_GET['end'])) : '';
$trip_type = isset($_GET['type']) ? htmlspecialchars($_GET['type']) : 'one_way'; // one_way or round_trip
$is_custom = isset($_GET['custom']) ? true : false;

$is_local = ($start && $end && $start === $end);
$route_data = null;
$local_data = null;

if ($start && $end && !$is_custom && $db_connected) {
    if ($is_local) {
        // Local Package Logic
        $stmt = $conn->prepare("SELECT * FROM local_packages WHERE LOWER(city_name) = ?");
        if ($stmt) {
            $stmt->bind_param("s", $start);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) $local_data = $result->fetch_assoc();
            $stmt->close();
        }
    } else {
        // Intercity Logic
        $stmt = $conn->prepare("SELECT * FROM intercity_routes WHERE LOWER(start_city) = ? AND LOWER(end_city) = ?");
        if ($stmt) {
            $stmt->bind_param("ss", $start, $end);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) $route_data = $result->fetch_assoc();
            $stmt->close();
        }
    }
}

// Dynamic SEO Variables
if ($is_local && $local_data) {
    $page_title = ucfirst($start) . " Local Cab Service | 8Hr & 12Hr Rental Packages | BOOK CAB varanasi";
    $page_desc = "Book reliable local taxi packages in ".ucfirst($start).". Choose between 8 Hours/80 KM or 12 Hours/120 KM slabs with flat-rate transparent pricing.";
} elseif (!$is_local && $route_data) {
    $type_text = ($trip_type === 'round_trip') ? 'Round-Trip' : 'One-Way';
    $page_title = ucfirst($start) . " to " . ucfirst($end) . " {$type_text} Cab Fare | BOOK CAB varanasi";
    $page_desc = "Check exact flat-rate fares for a {$type_text} cab from ".ucfirst($start)." to ".ucfirst($end).". Book Innova, Dzire, or Tempo Traveller instantly.";
} else {
    $page_title = "Plan Your Sacred Journey: Spiritual Circuit & Intercity Cab Portal";
    $page_desc = "Book flat-rate cabs for your spiritual journey across Varanasi, Prayagraj, Ayodhya, Bodh Gaya & Chitrakoot. Customize your yatra with BOOK CAB varanasi today!";
}

include("header.php");
?>

<head>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    
    <!-- High Contrast & Accessibility CSS Overrides -->
    <style>
        body { font-size: 16px; color: #1a1a1a; }
        .accessible-card { background: #ffffff; border: 1px solid #d1d5db; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); padding: 30px; }
        .accessible-table th { background-color: #0a2540 !important; color: #ffffff !important; font-size: 1.1rem; padding: 15px; }
        .accessible-table td { padding: 15px; vertical-align: middle; border-bottom: 1px solid #e5e7eb; font-size: 1.05rem; }
        .btn-high-contrast { background-color: #0a2540; color: #ffffff; font-weight: 700; padding: 12px 28px; border-radius: 6px; text-decoration: none; display: inline-block; transition: background 0.2s; border: 2px solid transparent; }
        .btn-high-contrast:hover, .btn-high-contrast:focus { background-color: #000000; color: #ffffff; outline: 3px solid #f8c12c; }
        .btn-outline-hc { background-color: transparent; color: #0a2540; border: 2px solid #0a2540; font-weight: 700; padding: 12px 28px; border-radius: 6px; text-decoration: none; display: inline-block; }
        .btn-outline-hc:hover { background-color: #0a2540; color: #ffffff; }
        .toggle-group { display: flex; justify-content: center; margin-bottom: 25px; gap: 10px; }
        .toggle-btn { padding: 10px 20px; border: 2px solid #0a2540; border-radius: 4px; color: #0a2540; font-weight: 600; cursor: pointer; background: #fff; }
        .toggle-btn.active { background: #0a2540; color: #fff; }
    </style>

    <!-- Dynamic JSON-LD Schema Markup -->
    <?php if ($start && $end): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TaxiService",
      "name": "BOOK CAB varanasi - <?php echo ucfirst($start); ?> to <?php echo ucfirst($end); ?>",
      "provider": {
        "@type": "LocalBusiness",
        "name": "BOOK CAB varanasi",
        "telephone": "+91-9838409911"
      },
      "areaServed": {
        "@type": "City",
        "name": "<?php echo ucfirst($start); ?>"
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
                        <?php if ($is_local && $local_data): ?>
                            Local Cab Packages in <?php echo ucfirst($start); ?>
                        <?php elseif (!$is_local && $route_data): ?>
                            <?php echo ucfirst($start); ?> to <?php echo ucfirst($end); ?> Cab Fare
                        <?php else: ?>
                            Plan Your Sacred Journey
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="space">
    <div class="container">
        
        <!-- Search Widget -->
        <section class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="accessible-card">
                    <h2 class="text-center mb-4" style="color: #0a2540;">Search Route Fares</h2>
                    <form id="routeSearchForm" action="intercity-cab.php" method="GET">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="start_city" style="font-weight: 600; color: #1a1a1a;">Starting Destination</label>
                                <select name="start" id="start_city" class="form-control" style="border: 2px solid #cbd5e1; height: 50px;" required>
                                    <option value="" disabled <?php echo !$start ? 'selected' : ''; ?>>Select Start City</option>
                                    <option value="varanasi" <?php echo $start == 'varanasi' ? 'selected' : ''; ?>>Varanasi</option>
                                    <option value="ayodhya" <?php echo $start == 'ayodhya' ? 'selected' : ''; ?>>Ayodhya</option>
                                    <option value="prayagraj" <?php echo $start == 'prayagraj' ? 'selected' : ''; ?>>Prayagraj</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_city" style="font-weight: 600; color: #1a1a1a;">Ending Destination</label>
                                <select name="end" id="end_city" class="form-control" style="border: 2px solid #cbd5e1; height: 50px;" required>
                                    <option value="" disabled <?php echo !$end ? 'selected' : ''; ?>>Select End City</option>
                                    <option value="varanasi" <?php echo $end == 'varanasi' ? 'selected' : ''; ?>>Varanasi</option>
                                    <option value="ayodhya" <?php echo $end == 'ayodhya' ? 'selected' : ''; ?>>Ayodhya</option>
                                    <option value="prayagraj" <?php echo $end == 'prayagraj' ? 'selected' : ''; ?>>Prayagraj</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Dynamic Trip Type Toggle (Only visible if Intercity) -->
                        <div id="tripTypeContainer" style="display: <?php echo (!$start || $is_local) ? 'none' : 'block'; ?>;">
                            <div class="toggle-group mt-3">
                                <button type="button" class="toggle-btn <?php echo $trip_type == 'one_way' ? 'active' : ''; ?>" onclick="setTripType('one_way')">One-Way</button>
                                <button type="button" class="toggle-btn <?php echo $trip_type == 'round_trip' ? 'active' : ''; ?>" onclick="setTripType('round_trip')">Round-Trip</button>
                            </div>
                            <input type="hidden" name="type" id="trip_type" value="<?php echo $trip_type; ?>">
                        </div>

                        <div class="form-check mb-4 mt-2">
                            <input class="form-check-input" type="checkbox" name="custom" id="customTrip" value="1" <?php echo $is_custom ? 'checked' : ''; ?> style="width: 20px; height: 20px; margin-top: 2px;">
                            <label class="form-check-label" for="customTrip" style="display:inline; margin-left: 10px; font-weight: 500; color: #1a1a1a;">
                                <strong>Custom Trip / Add Sub-Stops</strong> (Select this if you plan to visit multiple places on the way)
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-high-contrast" style="font-size: 1.1rem; width: 100%; max-width: 300px;">Search Fares</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script>
        function setTripType(type) {
            document.getElementById('trip_type').value = type;
            document.querySelectorAll('.toggle-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }

        // Real-time listener to show/hide the Intercity toggle based on Start/End match
        document.getElementById('start_city').addEventListener('change', checkLocalMode);
        document.getElementById('end_city').addEventListener('change', checkLocalMode);

        function checkLocalMode() {
            var s = document.getElementById('start_city').value;
            var e = document.getElementById('end_city').value;
            if (s && e && s === e) {
                document.getElementById('tripTypeContainer').style.display = 'none';
            } else if (s && e) {
                document.getElementById('tripTypeContainer').style.display = 'block';
            }
        }
        
        document.getElementById('routeSearchForm').addEventListener('submit', function(e) {
            var start = document.getElementById('start_city').value;
            var end = document.getElementById('end_city').value;
            var custom = document.getElementById('customTrip').checked;
            var t_type = document.getElementById('trip_type').value;

            if (start && end && !custom) {
                e.preventDefault();
                // Redirect to SEO friendly URL
                var query = '?start=' + start + '&end=' + end;
                if(start !== end) query += '&type=' + t_type;
                window.location.href = 'intercity-cab.php' + query;
            }
        });
        </script>

        <!-- Pricing Engine Display Logic -->
        <?php if ($start && $end): ?>
            
            <?php if ($is_local && $local_data && !$is_custom): ?>
                <!-- FLOW: Local Package -->
                <section class="title-area text-center mt-5">
                    <h2 class="sec-title" style="color: #0a2540;">Local Rental Packages in <?php echo ucfirst($start); ?></h2>
                </section>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="table-responsive accessible-card" style="padding: 0;">
                            <table class="table accessible-table text-center mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Vehicle Type</th>
                                        <th scope="col">8 Hours / 80 KM</th>
                                        <th scope="col">12 Hours / 120 KM</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Swift Dzire</strong> (4+1 Pax)</td>
                                        <td>₹ <?php echo number_format($local_data['pkg8_dzire']); ?></td>
                                        <td>₹ <?php echo number_format($local_data['pkg12_dzire']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Maruti Ertiga</strong> (6+1 Pax)</td>
                                        <td>₹ <?php echo number_format($local_data['pkg8_ertiga']); ?></td>
                                        <td>₹ <?php echo number_format($local_data['pkg12_ertiga']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Toyota Innova</strong> (6+1 Pax)</td>
                                        <td>₹ <?php echo number_format($local_data['pkg8_innova']); ?></td>
                                        <td>₹ <?php echo number_format($local_data['pkg12_innova']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tempo Traveller</strong> (16 Seater)</td>
                                        <td>₹ <?php echo number_format($local_data['pkg8_tempo']); ?></td>
                                        <td>₹ <?php echo number_format($local_data['pkg12_tempo']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <?php elseif (!$is_local && $route_data && !$is_custom): ?>
                <!-- FLOW: Intercity Route (One-Way or Round-Trip) -->
                <section class="title-area text-center mt-5">
                    <h2 class="sec-title" style="color: #0a2540;">
                        <?php echo ($trip_type == 'round_trip') ? 'Round-Trip' : 'One-Way'; ?> Fares: 
                        <?php echo ucfirst($start); ?> to <?php echo ucfirst($end); ?>
                    </h2>
                </section>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="table-responsive accessible-card" style="padding: 0;">
                            <table class="table accessible-table text-center mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Vehicle Type</th>
                                        <th scope="col">Capacity</th>
                                        <th scope="col">Total Fare</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $prefix = ($trip_type == 'round_trip') ? 'rt_' : 'ow_';
                                    ?>
                                    <tr>
                                        <td><strong>Swift Dzire</strong></td>
                                        <td>4+1 Pax</td>
                                        <td style="font-weight: 700;">₹ <?php echo number_format($route_data[$prefix.'dzire']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Maruti Ertiga / Kia Carens</strong></td>
                                        <td>6+1 Pax</td>
                                        <td style="font-weight: 700;">₹ <?php echo number_format($route_data[$prefix.'ertiga']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Toyota Innova Crysta</strong></td>
                                        <td>6+1 / 7+1 Pax</td>
                                        <td style="font-weight: 700;">₹ <?php echo number_format($route_data[$prefix.'innova']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tempo Traveller</strong></td>
                                        <td>16/17 Seater</td>
                                        <td style="font-weight: 700;">₹ <?php echo number_format($route_data[$prefix.'tempo']); ?></td>
                                        <td><a href="contact.php" class="btn-high-contrast">Book Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <?php else: ?>
                <!-- FLOW: Custom Trip or Missing DB Data -->
                <section class="title-area text-center mt-5">
                    <h2 class="sec-title" style="color: #0a2540;">Custom Quotation: <?php echo ucfirst($start); ?> to <?php echo ucfirst($end); ?></h2>
                    <p style="font-size: 1.1rem; color: #4b5563; max-width: 600px; margin: 0 auto;">
                        <?php if ($is_custom): ?>
                            Since you opted to add sub-stops, your itinerary is unique. Request a custom quotation below for exact pricing.
                        <?php else: ?>
                            We offer specialized packages for this route. Please request a quotation for our best pricing.
                        <?php endif; ?>
                    </p>
                </section>
                
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-6 text-center">
                        <div class="accessible-card">
                            <h3 style="color: #0a2540; margin-bottom: 20px;">Ready to customize your journey?</h3>
                            <a href="contact.php?subject=Quotation for <?php echo urlencode(ucfirst($start).' to '.ucfirst($end)); ?>" class="btn-high-contrast" style="font-size: 1.2rem; padding: 15px 40px;">Ask for Quotation</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        
        <?php endif; ?>

    </div>
</main>

<?php include("footer.php"); ?>
