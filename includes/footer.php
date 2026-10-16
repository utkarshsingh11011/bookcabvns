<?php
/**
 * Shared site footer — Book Cab Varanasi
 */
if (!defined('BCV_DOMAIN')) { require_once __DIR__ . '/config.php'; }
?>

<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand / About -->
      <div class="footer-brand">
        <img class="footer-brand__logo" src="/assets/img/logo.png" alt="Book Cab Varanasi" width="180" height="48" loading="lazy">
        <p class="footer-brand__text">
          Your trusted cab, tempo traveller and pilgrimage tour partner in Varanasi for over <?php echo BCV_YEARS; ?> years.
          We've served <?php echo BCV_CUSTOMERS; ?> happy travellers across the Kashi-Ayodhya-Prayagraj spiritual circuit.
        </p>
        <div class="footer-social" aria-label="Social media links">
          <a href="<?php echo BCV_INSTAGRAM; ?>" target="_blank" rel="noopener" aria-label="Follow on Instagram" title="Instagram">
            <i class="fab fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="<?php echo BCV_FACEBOOK; ?>" target="_blank" rel="noopener" aria-label="Follow on Facebook" title="Facebook">
            <i class="fab fa-facebook-f" aria-hidden="true"></i>
          </a>
          <a href="<?php echo BCV_WHATSAPP_URL; ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" title="WhatsApp"
             onclick="bcvTrack('click_whatsapp','footer')">
            <i class="fab fa-whatsapp" aria-hidden="true"></i>
          </a>
          <a href="<?php echo BCV_GMAPS; ?>" target="_blank" rel="noopener" aria-label="View on Google Maps" title="Google Maps">
            <i class="fas fa-map-location-dot" aria-hidden="true"></i>
          </a>
        </div>
      </div>

      <!-- Popular Routes -->
      <div>
        <p class="footer-col__title">Popular Routes</p>
        <ul class="footer-links">
          <li><a href="/routes/varanasi-to-ayodhya-cab/">Varanasi to Ayodhya Cab</a></li>
          <li><a href="/routes/varanasi-to-prayagraj-taxi/">Varanasi to Prayagraj Taxi</a></li>
          <li><a href="/routes/ayodhya-to-varanasi-cab/">Ayodhya to Varanasi Cab</a></li>
          <li><a href="/routes/prayagraj-to-varanasi-taxi/">Prayagraj to Varanasi</a></li>
          <li><a href="/routes/prayagraj-to-ayodhya-cab/">Prayagraj to Ayodhya</a></li>
          <li><a href="/routes/ayodhya-to-prayagraj-cab/">Ayodhya to Prayagraj</a></li>
        </ul>
      </div>

      <!-- Services & Tours -->
      <div>
        <p class="footer-col__title">Services &amp; Tours</p>
        <ul class="footer-links">
          <li><a href="/services/varanasi-airport-taxi/">Airport Taxi Varanasi</a></li>
          <li><a href="/services/varanasi-local-8hr-80km/">Local Sightseeing Cab</a></li>
          <li><a href="/services/kashi-vishwanath-darshan-cab/">Kashi Vishwanath Darshan</a></li>
          <li><a href="/tours/ayodhya-ram-mandir-taxi-package/">Ayodhya Ram Mandir Tour</a></li>
          <li><a href="/tours/prayagraj-sangam-sightseeing/">Prayagraj Sangam Tour</a></li>
          <li><a href="/tours/varanasi-prayagraj-ayodhya-package/">3-City Pilgrimage Package</a></li>
          <li><a href="/fleet/tempo-traveller-rental/">Tempo Traveller Hire</a></li>
          <li><a href="/guides/prayagraj-magh-mela-transport/">Magh Mela Transport Guide</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <p class="footer-col__title">Contact Us</p>
        <ul class="footer-contact">
          <li>
            <i class="fas fa-phone" aria-hidden="true"></i>
            <div>
              <div>Main: <a href="tel:+<?php echo BCV_PHONE_RAW; ?>"><?php echo BCV_PHONE_MAIN; ?></a></div>
              <div>Tours: <a href="tel:+91<?php echo substr(BCV_PHONE_TOURS, -10); ?>"><?php echo BCV_PHONE_TOURS; ?></a></div>
            </div>
          </li>
          <li>
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <a href="mailto:<?php echo BCV_EMAIL; ?>"><?php echo BCV_EMAIL; ?></a>
          </li>
          <li>
            <i class="fas fa-location-dot" aria-hidden="true"></i>
            <div><?php echo BCV_ADDR_SERVICE; ?></div>
          </li>
          <li>
            <i class="fas fa-building" aria-hidden="true"></i>
            <div><?php echo BCV_ADDR_OFFICE; ?></div>
          </li>
          <li>
            <i class="fas fa-clock" aria-hidden="true"></i>
            <span>24 Hours · 7 Days a Week</span>
          </li>
        </ul>
      </div>

    </div><!-- /.footer-grid -->
  </div><!-- /.container -->

  <div class="footer-bottom">
    <div class="container">
      &copy; <?php echo date('Y'); ?> <?php echo BCV_BRAND; ?>. All rights reserved. &nbsp;·&nbsp;
      <a href="/privacy-policy/">Privacy Policy</a> &nbsp;·&nbsp;
      <a href="/cancellation-policy/">Cancellation Policy</a> &nbsp;·&nbsp;
      <a href="/sitemap.xml">Sitemap</a>
    </div>
  </div>

</footer>

<!-- ═══ SCRIPTS ═══ -->
<!-- Deferred jQuery (existing theme components) -->
<script src="/assets/js/vendor/jquery-3.6.0.min.js" defer></script>
<script src="/assets/js/app.min.js" defer></script>

<!-- Inline: FAQ accordion + form utils (no framework needed) -->
<script>
// ── FAQ Accordion ────────────────────────────────────────
document.querySelectorAll('.faq-question').forEach(function(btn){
  btn.addEventListener('click', function(){
    var expanded = this.getAttribute('aria-expanded') === 'true';
    // Close all
    document.querySelectorAll('.faq-question').forEach(function(b){
      b.setAttribute('aria-expanded','false');
      var ans = document.getElementById(b.getAttribute('aria-controls'));
      if(ans) ans.classList.remove('open');
    });
    // Open this one if was closed
    if(!expanded){
      this.setAttribute('aria-expanded','true');
      var ans = document.getElementById(this.getAttribute('aria-controls'));
      if(ans) ans.classList.add('open');
    }
  });
});

// ── Trip type tabs ────────────────────────────────────────
document.querySelectorAll('.trip-tab').forEach(function(tab){
  tab.addEventListener('click', function(){
    var form = this.closest('form') || document.querySelector('#booking-form');
    var type = this.dataset.type;
    document.querySelectorAll('.trip-tab').forEach(function(t){ t.classList.remove('active'); });
    this.classList.add('active');
    if(form){
      var input = form.querySelector('input[name="trip_type"]');
      if(input) input.value = type;
      var returnRow = form.querySelector('.return-date-row');
      if(returnRow) returnRow.style.display = (type === 'round_trip') ? '' : 'none';
    }
  });
});

// ── Smooth hero load ─────────────────────────────────────
document.querySelectorAll('.hero').forEach(function(h){ h.classList.add('loaded'); });

// ── Analytics helper (stubs until GA4 loads) ─────────────
window.bcvTrack = window.bcvTrack || function(event, position){
  if(window.gtag){
    gtag('event', event, { cta_position: position });
  }
};
</script>

</body>
</html>
