<?php
/**
 * Reusable booking inquiry form — Book Cab Varanasi
 * Variables expected:
 *   $form_origin      (string) - pre-fill origin city
 *   $form_destination (string) - pre-fill destination city
 *   $form_trip_type   (string) - 'one_way' | 'round_trip' | 'multi_day'
 *   $form_section_id  (string) - unique ID for the section (default: 'booking-form')
 */
if (!defined('BCV_DOMAIN')) { require_once __DIR__ . '/config.php'; }

$form_section_id  = $form_section_id  ?? 'booking-form';
$form_origin      = htmlspecialchars($form_origin      ?? '', ENT_QUOTES);
$form_destination = htmlspecialchars($form_destination ?? '', ENT_QUOTES);
$form_trip_type   = $form_trip_type   ?? 'one_way';
?>

<section class="section section-warm" id="<?php echo $form_section_id; ?>" aria-labelledby="form-heading-<?php echo $form_section_id; ?>">
  <div class="container">
    <div style="max-width:820px;margin:0 auto">

      <!-- Section Header -->
      <div class="text-center" style="margin-bottom:2.5rem">
        <span class="section-label">Book Your Cab</span>
        <h2 id="form-heading-<?php echo $form_section_id; ?>">Request a Free Quote</h2>
        <div class="divider"></div>
        <p>Fill in your journey details and we'll respond within minutes with a confirmed fare.</p>
      </div>

      <div class="booking-widget">

        <!-- Success message (hidden until API returns 201) -->
        <div class="form-success" id="form-success-<?php echo $form_section_id; ?>" role="alert" aria-live="assertive">
          <div class="form-success__icon">✅</div>
          <h3 style="color:#166534;margin-bottom:.5rem">Inquiry Received!</h3>
          <p style="color:#166534">Your reference ID: <span class="form-success__id" id="inquiry-id-<?php echo $form_section_id; ?>"></span></p>
          <p style="margin-top:1rem;color:#374151">We'll call or WhatsApp you back within 15 minutes to confirm availability and fare.</p>
          <a class="btn btn-whatsapp mt-4" href="<?php echo htmlspecialchars(bcv_whatsapp_link('my upcoming trip')); ?>"
             target="_blank" rel="noopener">
            <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
          </a>
        </div>

        <!-- ── Booking Form ── -->
        <form id="bcv-form-<?php echo $form_section_id; ?>"
              class="bcv-booking-form"
              novalidate
              aria-label="Cab booking inquiry form"
              data-section="<?php echo $form_section_id; ?>">

          <!-- CSRF token -->
          <?php
          if (session_status() === PHP_SESSION_NONE) session_start();
          if (empty($_SESSION['csrf_token'])) {
              $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
          }
          ?>
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
          <input type="hidden" name="landing_page" value="<?php echo htmlspecialchars(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH)); ?>">

          <!-- Trip Type -->
          <div class="form-group">
            <p class="form-label" id="trip-type-label-<?php echo $form_section_id; ?>">Trip Type <span aria-hidden="true">*</span></p>
            <div class="trip-tabs" role="group" aria-labelledby="trip-type-label-<?php echo $form_section_id; ?>">
              <button type="button" class="trip-tab<?php echo $form_trip_type==='one_way'?' active':''; ?>"
                      data-type="one_way" aria-pressed="<?php echo $form_trip_type==='one_way'?'true':'false'; ?>">
                One Way
              </button>
              <button type="button" class="trip-tab<?php echo $form_trip_type==='round_trip'?' active':''; ?>"
                      data-type="round_trip" aria-pressed="<?php echo $form_trip_type==='round_trip'?'true':'false'; ?>">
                Round Trip
              </button>
              <button type="button" class="trip-tab<?php echo $form_trip_type==='multi_day'?' active':''; ?>"
                      data-type="multi_day" aria-pressed="<?php echo $form_trip_type==='multi_day'?'true':'false'; ?>">
                Multi-Day
              </button>
            </div>
            <input type="hidden" name="trip_type" value="<?php echo htmlspecialchars($form_trip_type); ?>">
          </div>

          <!-- Origin / Destination -->
          <div class="form-row form-row-2">
            <div class="form-group">
              <label class="form-label" for="origin-<?php echo $form_section_id; ?>">
                From (City / Area) <span aria-label="required">*</span>
              </label>
              <input class="form-control" type="text" id="origin-<?php echo $form_section_id; ?>"
                     name="origin" value="<?php echo $form_origin; ?>"
                     placeholder="e.g. Varanasi" autocomplete="address-level2"
                     required aria-required="true"
                     aria-describedby="origin-err-<?php echo $form_section_id; ?>">
              <span class="form-error" id="origin-err-<?php echo $form_section_id; ?>" role="alert">Please enter your pickup city.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="destination-<?php echo $form_section_id; ?>">
                To (City / Area) <span aria-label="required">*</span>
              </label>
              <input class="form-control" type="text" id="destination-<?php echo $form_section_id; ?>"
                     name="destination" value="<?php echo $form_destination; ?>"
                     placeholder="e.g. Ayodhya" autocomplete="address-level2"
                     required aria-required="true"
                     aria-describedby="dest-err-<?php echo $form_section_id; ?>">
              <span class="form-error" id="dest-err-<?php echo $form_section_id; ?>" role="alert">Please enter your drop-off city.</span>
            </div>
          </div>

          <!-- Travel Date / Return Date -->
          <div class="form-row form-row-2">
            <div class="form-group">
              <label class="form-label" for="travel-date-<?php echo $form_section_id; ?>">
                Travel Date <span aria-label="required">*</span>
              </label>
              <input class="form-control" type="date" id="travel-date-<?php echo $form_section_id; ?>"
                     name="travel_date"
                     min="<?php echo date('Y-m-d'); ?>"
                     required aria-required="true"
                     aria-describedby="date-err-<?php echo $form_section_id; ?>">
              <span class="form-error" id="date-err-<?php echo $form_section_id; ?>" role="alert">Please select a future travel date.</span>
            </div>
            <div class="form-group return-date-row" style="<?php echo $form_trip_type!=='round_trip'?'display:none':''; ?>">
              <label class="form-label" for="return-date-<?php echo $form_section_id; ?>">Return Date</label>
              <input class="form-control" type="date" id="return-date-<?php echo $form_section_id; ?>"
                     name="return_date" min="<?php echo date('Y-m-d'); ?>">
            </div>
          </div>

          <!-- Passengers / Vehicle -->
          <div class="form-row form-row-2">
            <div class="form-group">
              <label class="form-label" for="passengers-<?php echo $form_section_id; ?>">
                Passengers <span aria-label="required">*</span>
              </label>
              <select class="form-control" id="passengers-<?php echo $form_section_id; ?>"
                      name="passengers" required aria-required="true">
                <option value="">Select passengers</option>
                <?php for($p=1;$p<=26;$p++): ?>
                <option value="<?php echo $p; ?>"><?php echo $p; ?> <?php echo $p===1?'person':'people'; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="vehicle-<?php echo $form_section_id; ?>">Vehicle Preference</label>
              <select class="form-control" id="vehicle-<?php echo $form_section_id; ?>" name="vehicle_preference">
                <option value="">Any / Best available</option>
                <option value="sedan">Sedan (Swift Dzire) — up to 4</option>
                <option value="ertiga">Ertiga SUV — up to 6</option>
                <option value="innova">Innova Crysta — up to 7</option>
                <option value="tempo_small">Tempo Traveller 12 Seater</option>
                <option value="tempo_mid">Tempo Traveller 17 Seater</option>
                <option value="tempo_large">Tempo Traveller 26 Seater</option>
                <option value="urbania_small">Force Urbania 6–7 Seater</option>
                <option value="urbania_large">Force Urbania 9–12 Seater</option>
                <option value="minibus">Mini Bus 35 Seater</option>
              </select>
            </div>
          </div>

          <!-- Name / Phone -->
          <div class="form-row form-row-2">
            <div class="form-group">
              <label class="form-label" for="cust-name-<?php echo $form_section_id; ?>">
                Your Name <span aria-label="required">*</span>
              </label>
              <input class="form-control" type="text" id="cust-name-<?php echo $form_section_id; ?>"
                     name="customer_name" autocomplete="name"
                     placeholder="Full name" required aria-required="true"
                     aria-describedby="name-err-<?php echo $form_section_id; ?>">
              <span class="form-error" id="name-err-<?php echo $form_section_id; ?>" role="alert">Please enter your name.</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="cust-phone-<?php echo $form_section_id; ?>">
                Mobile Number <span aria-label="required">*</span>
              </label>
              <input class="form-control" type="tel" id="cust-phone-<?php echo $form_section_id; ?>"
                     name="customer_phone" autocomplete="tel"
                     placeholder="+91 XXXXX XXXXX"
                     pattern="[6-9][0-9]{9}"
                     required aria-required="true"
                     aria-describedby="phone-err-<?php echo $form_section_id; ?>">
              <span class="form-error" id="phone-err-<?php echo $form_section_id; ?>" role="alert">Please enter a valid 10-digit Indian mobile number.</span>
            </div>
          </div>

          <!-- Instructions -->
          <div class="form-group">
            <label class="form-label" for="instructions-<?php echo $form_section_id; ?>">Special Instructions <span class="text-muted">(optional)</span></label>
            <textarea class="form-control" id="instructions-<?php echo $form_section_id; ?>"
                      name="instructions" rows="3" maxlength="500"
                      placeholder="Pickup address, hotel name, special requirements..."></textarea>
          </div>

          <!-- Privacy consent -->
          <div class="form-group">
            <div class="form-checkbox">
              <input type="checkbox" id="privacy-<?php echo $form_section_id; ?>"
                     name="privacy_consent" value="1"
                     required aria-required="true"
                     aria-describedby="privacy-err-<?php echo $form_section_id; ?>">
              <label for="privacy-<?php echo $form_section_id; ?>">
                I agree to the <a href="/privacy-policy/" target="_blank">Privacy Policy</a>.
                My contact details will only be used to respond to this inquiry.
              </label>
            </div>
            <span class="form-error" id="privacy-err-<?php echo $form_section_id; ?>" role="alert">Please accept the privacy policy to proceed.</span>
          </div>

          <!-- API error message -->
          <div class="alert alert-warning" id="api-error-<?php echo $form_section_id; ?>" style="display:none" role="alert">
            <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
            <span id="api-error-msg-<?php echo $form_section_id; ?>">Something went wrong. Please try again or call us directly.</span>
          </div>

          <!-- Submit -->
          <button type="submit" class="btn btn-primary btn-lg btn-full" id="submit-btn-<?php echo $form_section_id; ?>">
            <span class="btn-text">Get Free Quote</span>
            <span class="spinner" style="display:none" aria-hidden="true"></span>
          </button>

          <p style="font-size:.78rem;color:var(--clr-text-muted);text-align:center;margin-top:.75rem">
            🔒 No payment required. We'll send you a confirmed quote via call or WhatsApp.
          </p>

        </form><!-- /.bcv-booking-form -->
      </div><!-- /.booking-widget -->

    </div>
  </div>
</section>

<script>
(function(){
  document.querySelectorAll('.bcv-booking-form').forEach(function(form){
    var sectionId   = form.dataset.section;
    var submitBtn   = document.getElementById('submit-btn-'   + sectionId);
    var successEl   = document.getElementById('form-success-' + sectionId);
    var inquiryIdEl = document.getElementById('inquiry-id-'   + sectionId);
    var apiErrorEl  = document.getElementById('api-error-'    + sectionId);
    var apiErrMsg   = document.getElementById('api-error-msg-'+ sectionId);
    var formStarted = false;

    // Track form start
    form.addEventListener('input', function(){
      if(!formStarted){
        formStarted = true;
        if(window.bcvTrack) bcvTrack('booking_form_start', sectionId);
      }
    }, { once: false });

    form.addEventListener('submit', function(e){
      e.preventDefault();
      if(!validateForm(form, sectionId)) return;

      // Show loading state
      submitBtn.disabled = true;
      submitBtn.querySelector('.btn-text').style.display = 'none';
      submitBtn.querySelector('.spinner').style.display  = 'inline-block';
      apiErrorEl.style.display = 'none';

      var data = {};
      new FormData(form).forEach(function(v, k){ data[k] = v; });
      // Do not send CSRF token in body for JSON — keep it in hidden field (server reads $_SESSION)

      fetch('/api/booking-inquiry.php', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
        body:    JSON.stringify(data)
      })
      .then(function(res){
        if(res.status === 201) return res.json();
        return res.json().then(function(d){ throw new Error(d.message || 'Server error'); });
      })
      .then(function(json){
        if(window.bcvTrack) bcvTrack('booking_form_submit', sectionId);
        form.style.display = 'none';
        if(inquiryIdEl) inquiryIdEl.textContent = json.inquiryId || '';
        successEl.classList.add('visible');
        successEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
      })
      .catch(function(err){
        submitBtn.disabled = false;
        submitBtn.querySelector('.btn-text').style.display = '';
        submitBtn.querySelector('.spinner').style.display  = 'none';
        if(apiErrMsg) apiErrMsg.textContent = err.message || 'Submission failed. Please try again.';
        apiErrorEl.style.display = '';
        if(window.bcvTrack) bcvTrack('booking_form_error', sectionId);
      });
    });

    function validateForm(form, id){
      var valid = true;
      function check(inputId, errorId, condition){
        var input = document.getElementById(inputId + '-' + id);
        var error = document.getElementById(errorId + '-' + id);
        if(!input || !error) return;
        var ok = condition ? condition(input) : input.checkValidity();
        input.classList.toggle('error', !ok);
        error.classList.toggle('visible', !ok);
        if(!ok) valid = false;
      }
      check('origin',       'origin-err',  function(i){ return i.value.trim().length >= 2; });
      check('destination',  'dest-err',    function(i){ return i.value.trim().length >= 2; });
      check('travel-date',  'date-err',    function(i){ return i.value && new Date(i.value) >= new Date(new Date().toDateString()); });
      check('cust-name',    'name-err',    function(i){ return i.value.trim().length >= 2; });
      check('cust-phone',   'phone-err',   function(i){ return /^[6-9]\d{9}$/.test(i.value.replace(/\D/g,'')); });
      var privacyEl = document.getElementById('privacy-' + id);
      var privacyErrEl = document.getElementById('privacy-err-' + id);
      if(privacyEl && privacyErrEl){
        var ok = privacyEl.checked;
        privacyErrEl.classList.toggle('visible', !ok);
        if(!ok) valid = false;
      }
      return valid;
    }
  });
})();
</script>
