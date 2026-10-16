<?php include 'header.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

<style>
    /* Styling */
    .planner-section { background: #fdfbf7; padding: 40px 20px; min-height: 80vh; font-family: 'Segoe UI', sans-serif; }
    .planner-container { max-width: 900px; margin: 0 auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-top: 6px solid #ff9800; }
    
    h1 { color: #e65100; text-align: center; margin-bottom: 10px; font-size: 28px; }
    .subtitle { text-align: center; color: #666; margin-bottom: 30px; }
    
    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
    .form-group label { font-weight: bold; display: block; margin-bottom: 8px; color: #333; }
    .form-control { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 16px; box-sizing: border-box; }
    
    .checkbox-group { display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 10px; background: #fff8e1; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
    .checkbox-item { display: flex; align-items: center; gap: 8px; }
    .checkbox-item label { font-weight: normal; cursor: pointer; margin: 0; }
    
    .btn-generate { width: 100%; background: #222; color: white; padding: 15px; font-size: 18px; font-weight: bold; border: none; border-radius: 8px; cursor: pointer; transition: 0.3s; }
    .btn-generate:hover { background: #ff9800; }

    /* PDF PREVIEW AREA */
    #result-area { display: none; margin-top: 40px; border: 2px solid #ddd; padding: 0; background: #fff; }
    
    /* This specific div is what gets printed to PDF */
    #pdf-print-container { padding: 40px; background: #fff; color: #000; }

    .pdf-header { text-align: center; border-bottom: 3px solid #ff9800; padding-bottom: 20px; margin-bottom: 30px; }
    .pdf-header h2 { margin: 0; color: #e65100; font-size: 32px; text-transform: uppercase; }
    .pdf-header p { margin: 5px 0; font-size: 14px; color: #555; }
    
    .trip-summary { background: #f4f4f4; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #333; }
    
    .day-block { margin-bottom: 25px; page-break-inside: avoid; } /* Avoid splitting days in PDF */
    .day-title { background: #222; color: white; display: block; padding: 8px 15px; font-size: 16px; font-weight: bold; margin-bottom: 10px; border-radius: 4px; }
    .timeline-item { display: flex; margin-bottom: 8px; font-size: 14px; padding-left: 10px; border-left: 2px solid #ddd; margin-left: 10px; }
    .time { font-weight: bold; min-width: 85px; color: #e65100; }
    
    .vehicle-box { background: #fff3e0; border: 1px dashed #ff9800; padding: 15px; margin-top: 30px; border-radius: 8px; }
    .footer-note { text-align: center; font-size: 12px; color: #999; margin-top: 40px; border-top: 1px solid #eee; padding-top: 10px; }

    /* Alert Box */
    #contact-alert { display: none; background: #ffebee; color: #c62828; padding: 20px; text-align: center; border-radius: 8px; border: 1px solid #ef9a9a; margin-top: 20px; }
    
    @media (max-width: 600px) { .form-grid { grid-template-columns: 1fr; } #pdf-print-container { padding: 20px; } }
</style>

<div class="planner-section">
    <div class="planner-container">
        <h1>SMART TRIP PLANNER 🗺️</h1>
        <p class="subtitle">Enter your dates & arrival city. Our AI will build the shortest route.</p>

        <form onsubmit="generatePlan(event)">
            <div class="form-grid">
                <div class="form-group">
                    <label>Start Date:</label>
                    <input type="date" id="startDate" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Total Days (Max 10):</label>
                    <input type="number" id="days" class="form-control" min="1" max="15" placeholder="e.g. 5" required>
                </div>
            </div>

            <div class="form-grid">
                 <div class="form-group">
                    <label>Arrival City (Start Point):</label>
                    <select id="startCity" class="form-control">
                        <option value="Varanasi">Varanasi</option>
                        <option value="Ayodhya">Ayodhya</option>
                        <option value="Prayagraj">Prayagraj</option>
                        <option value="Lucknow">Lucknow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Arrival Time:</label>
                    <select id="arrivalTime" class="form-control">
                        <option value="Morning">Morning (Before 10 AM)</option>
                        <option value="Afternoon">Afternoon (12 PM - 3 PM)</option>
                        <option value="Evening">Evening (After 5 PM)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Select Places to Visit:</label>
                <div class="checkbox-group">
                    <div class="checkbox-item"><input type="checkbox" id="city_varanasi" checked> <label>Varanasi</label></div>
                    <div class="checkbox-item"><input type="checkbox" id="city_ayodhya" checked> <label>Ayodhya</label></div>
                    <div class="checkbox-item"><input type="checkbox" id="city_prayagraj" checked> <label>Prayagraj</label></div>
                    <div class="checkbox-item"><input type="checkbox" id="city_gaya"> <label>Bodhgaya & Gaya</label></div>
                    <div class="checkbox-item"><input type="checkbox" id="city_naimish"> <label>Naimisharanya</label></div>
                    <div class="checkbox-item"><input type="checkbox" id="city_lucknow"> <label>Lucknow</label></div>
                </div>
            </div>

            <button type="submit" class="btn-generate">✨ Generate Optimized Itinerary</button>
        </form>

        <div id="contact-alert">
            <h3>Custom Tour Required</h3>
            <p>For trips longer than 10 days, please contact our expert team for a tailored package.</p>
            <p><strong>Call/WhatsApp:</strong> +91-9648974238</p>
        </div>

        <div id="result-area">
            <div id="pdf-print-container">
                <div class="pdf-header">
                    <h2>Book Cab Varanasi</h2>
                    <p>India's Most Trusted Travel Partner</p>
                    <p><strong>📞 +91-9648974238</strong> | 🌐 bookcabvaranasi.com</p>
                </div>

                <div class="trip-summary">
                    <strong>Trip Summary:</strong> <span id="summary-text"></span>
                </div>

                <div id="dynamic-itinerary">
                    </div>

                <div class="vehicle-box">
                    <h4 style="margin:0 0 10px 0; color:#e65100;">Recommended Vehicle</h4>
                    <p id="vehicle-text" style="font-size:14px; margin:0;"></p>
                </div>

                <div class="footer-note">
                    <p>Generated on <?php echo date('d-M-Y'); ?>. Prices and timings subject to traffic conditions.</p>
                    <p>Address: Varanasi Cantt, Uttar Pradesh, India.</p>
                </div>
            </div>

            <div style="padding:20px; text-align:center; background:#eee;">
                <button onclick="downloadPDF()" class="btn-generate" style="background:#d32f2f; width:auto; padding:10px 30px;">⬇️ Download PDF</button>
            </div>
        </div>

    </div>
</div>

<script>
    function generatePlan(e) {
        e.preventDefault();
        
        // 1. Get Inputs
        let daysTotal = parseInt(document.getElementById('days').value);
        let startCity = document.getElementById('startCity').value;
        let startDate = document.getElementById('startDate').value;
        let arrivalTime = document.getElementById('arrivalTime').value;

        // Check Days Limit
        if (daysTotal > 10) {
            document.getElementById('contact-alert').style.display = 'block';
            document.getElementById('result-area').style.display = 'none';
            return;
        } else {
            document.getElementById('contact-alert').style.display = 'none';
        }

        // 2. Get Selected Destinations
        let wants = {
            varanasi: document.getElementById('city_varanasi').checked,
            ayodhya: document.getElementById('city_ayodhya').checked,
            prayagraj: document.getElementById('city_prayagraj').checked,
            gaya: document.getElementById('city_gaya').checked,
            naimish: document.getElementById('city_naimish').checked,
            lucknow: document.getElementById('city_lucknow').checked
        };
        
        // Ensure Start City is "Wanted"
        if(startCity === 'Varanasi') wants.varanasi = true;
        if(startCity === 'Ayodhya') wants.ayodhya = true;
        if(startCity === 'Prayagraj') wants.prayagraj = true;
        if(startCity === 'Lucknow') wants.lucknow = true;

        // 3. THE ROUTE OPTIMIZER ALGORITHM
        // We define a standard "West to East" line: 
        // Naimish <-> Lucknow <-> Ayodhya <-> Prayagraj <-> Varanasi <-> Bodhgaya
        
        let sequence = [];
        
        // Scenario A: Starting from EAST (Varanasi/Prayagraj/Gaya) -> Moving WEST
        if (startCity === 'Varanasi' || startCity === 'Gaya' || startCity === 'Prayagraj') {
            if (startCity === 'Gaya') sequence.push('Gaya');
            
            // If starting Varanasi, do Varanasi then move left
            if (startCity === 'Varanasi') sequence.push('Varanasi');
            
            // If Gaya was start, next is Varanasi
            if (wants.varanasi && startCity !== 'Varanasi') sequence.push('Varanasi');
            
            // If Prayagraj is start
            if (startCity === 'Prayagraj') sequence.push('Prayagraj');
            else if (wants.prayagraj) sequence.push('Prayagraj');
            
            if (wants.ayodhya) sequence.push('Ayodhya');
            if (wants.lucknow) sequence.push('Lucknow');
            if (wants.naimish) sequence.push('Naimisharanya');
            
            // If Gaya selected but wasn't start, add it at end (or beginning depending on logic, keeping it simple here)
            if (wants.gaya && startCity !== 'Gaya' && startCity !== 'Varanasi') sequence.push('Gaya'); // Logic adjustment
             if (wants.gaya && startCity === 'Varanasi') { sequence = ['Varanasi', 'Gaya', 'Prayagraj', 'Ayodhya', 'Lucknow']; } // Correction for VNS start
        } 
        
        // Scenario B: Starting from WEST (Lucknow/Ayodhya) -> Moving EAST
        else {
            if (startCity === 'Lucknow') sequence.push('Lucknow');
            if (wants.naimish) sequence.push('Naimisharanya'); // Visit Naimish from LKO
            
            if (startCity === 'Ayodhya') sequence.push('Ayodhya');
            else if (wants.ayodhya) sequence.push('Ayodhya');
            
            if (wants.prayagraj) sequence.push('Prayagraj');
            if (wants.varanasi) sequence.push('Varanasi');
            if (wants.gaya) sequence.push('Gaya');
            
            if (wants.lucknow && startCity !== 'Lucknow') sequence.push('Lucknow'); // Loop back if needed
        }
        
        // Filter Sequence to only include unique selected cities
        // (Simple cleaning to avoid duplicates if logic overlapped)
        let finalRoute = [...new Set(sequence)]; 

        // 4. Generate HTML
        let html = "";
        let currentDay = 1;
        let currentDate = moment(startDate);

        // Loop through the route
        finalRoute.forEach((city, index) => {
            if (currentDay > daysTotal) return;

            let dateStr = currentDate.format('Do MMM (ddd)');
            
            html += `<div class="day-block">`;
            
            // Is this the first city? (Arrival)
            if (index === 0) {
                html += `<div class="day-title">Day ${currentDay} - ${dateStr}: Arrival in ${city}</div>`;
                if(arrivalTime === 'Morning') {
                    html += row("09:00 AM", `Pickup from ${city} Airport/Station.`);
                    html += row("11:00 AM", `Local Sightseeing in ${city} (Main Temple).`);
                    html += row("05:00 PM", `Evening Aarti / Leisure.`);
                } else {
                    html += row("Afternoon", `Pickup & Check-in at ${city}.`);
                    html += row("Evening", `Evening visit to local markets/temple.`);
                }
            } else {
                // Transfer Day
                html += `<div class="day-title">Day ${currentDay} - ${dateStr}: Transfer to ${city}</div>`;
                html += row("08:00 AM", "Breakfast & Checkout.");
                html += row("09:00 AM", `Drive to ${city} (Scenic Route).`);
                html += row("01:00 PM", `Arrival in ${city} & Hotel Check-in.`);
                html += row("04:00 PM", `Major Darshan/Sightseeing in ${city}.`);
            }
            
            html += `</div>`;
            
            // Increment Date
            currentDate.add(1, 'days');
            currentDay++;
            
            // If city is Varanasi or Ayodhya, usually needs 2 days? 
            // For simplicity in this auto-generator, we keep 1 day per city unless user selected few cities but many days.
            // FILLER LOGIC: If we have extra days left and we are at a major city
            if (daysTotal > finalRoute.length && (city === 'Varanasi' || city === 'Ayodhya') && currentDay <= daysTotal) {
                 let extraDate = currentDate.format('Do MMM (ddd)');
                 html += `<div class="day-block"><div class="day-title">Day ${currentDay} - ${extraDate}: ${city} In-Depth</div>`;
                 html += row("Morning", "Detailed Heritage Tour / Morning Aarti.");
                 html += row("Afternoon", "Local Food Tour & Shopping.");
                 html += `</div>`;
                 currentDate.add(1, 'days');
                 currentDay++;
            }
        });

        // 5. Update UI
        document.getElementById('dynamic-itinerary').innerHTML = html;
        document.getElementById('summary-text').innerText = `${daysTotal} Days Trip starting from ${startCity} on ${moment(startDate).format('DD-MMM-YYYY')}. Route: ${finalRoute.join(' ➔ ')}`;
        
        // Vehicle Logic
        let vehicle = "Sedan (Dzire/Etios)";
        if(daysTotal > 5) vehicle = "Innova Crysta (For Comfort)";
        document.getElementById('vehicle-text').innerHTML = `${vehicle} <br><em>(Driver Allowance & Fuel included in our package)</em>`;

        document.getElementById('result-area').style.display = 'block';
        
        // Scroll to result
        setTimeout(() => {
             document.getElementById('result-area').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 100);
    }

    function row(time, text) {
        return `<div class="timeline-item"><span class="time">${time}</span> <span>${text}</span></div>`;
    }

    function downloadPDF() {
        // Select the specific container that looks good
        const element = document.getElementById('pdf-print-container');
        
        var opt = {
          margin:       0.2,
          filename:     'BookCabVaranasi_Itinerary.pdf',
          image:        { type: 'jpeg', quality: 0.98 },
          html2canvas:  { scale: 2, useCORS: true },
          jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
        };
        
        // Generate
        html2pdf().set(opt).from(element).save();
    }
</script>

<?php include 'footer.php'; ?>