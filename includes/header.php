<?php
/**
 * Shared site header — Book Cab Varanasi
 * Variable expected: $whatsapp_route (string) - pre-fills WA message
 */
if (!defined('BCV_DOMAIN')) { require_once __DIR__ . '/config.php'; }
$wa_href = bcv_whatsapp_link($whatsapp_route ?? '');
?>
<body>

<!-- ═══ MOBILE STICKY CTA (rendered early; shown by CSS on small screens) ═══ -->
<div class="sticky-cta" role="navigation" aria-label="Quick contact">
  <a id="cta-call-sticky"
     class="sticky-cta__btn sticky-cta__call"
     href="tel:+<?php echo BCV_PHONE_RAW; ?>"
     onclick="bcvTrack('click_call','sticky')">
    <i class="fas fa-phone" aria-hidden="true"></i> Call Now
  </a>
  <a id="cta-whatsapp-sticky"
     class="sticky-cta__btn sticky-cta__whatsapp"
     href="<?php echo htmlspecialchars($wa_href); ?>"
     target="_blank" rel="noopener"
     onclick="bcvTrack('click_whatsapp','sticky')">
    <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
  </a>
</div>

<!-- ═══ DESKTOP FLOATING BUTTONS ═══ -->
<a class="float-btn float-btn--wa" href="<?php echo htmlspecialchars($wa_href); ?>"
   target="_blank" rel="noopener" title="Chat on WhatsApp"
   aria-label="Chat with us on WhatsApp"
   onclick="bcvTrack('click_whatsapp','float')">
  <i class="fab fa-whatsapp" aria-hidden="true"></i>
</a>
<a class="float-btn float-btn--maps" href="<?php echo BCV_GMAPS; ?>"
   target="_blank" rel="noopener" title="Find us on Google Maps"
   aria-label="View our location on Google Maps">
  <i class="fas fa-map-location-dot" aria-hidden="true"></i>
</a>

<!-- ═══ SITE HEADER ═══ -->
<header class="site-header" id="site-header" role="banner">

  <!-- Top Bar -->
  <div class="header-topbar">
    <div class="container">
      <div class="header-topbar__inner">
        <div style="display:flex;gap:1.5rem;flex-wrap:wrap">
          <span class="header-topbar__item">
            <i class="fas fa-phone" aria-hidden="true"></i>
            <a href="tel:+<?php echo BCV_PHONE_RAW; ?>"><?php echo BCV_PHONE_MAIN; ?></a>
          </span>
          <span class="header-topbar__item">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <a href="mailto:<?php echo BCV_EMAIL; ?>"><?php echo BCV_EMAIL; ?></a>
          </span>
        </div>
        <div style="display:flex;gap:0.75rem;align-items:center">
          <span class="stars" aria-label="Rated 4.8 out of 5 stars">★★★★★</span>
          <span style="font-size:0.8rem">4.8 · <?php echo BCV_REVIEW_COUNT; ?> reviews</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Nav -->
  <div class="header-main">
    <div class="container">
      <div class="header-main__inner">

        <!-- Logo -->
        <a class="site-logo" href="/" aria-label="Book Cab Varanasi — Home">
          <img src="/assets/img/logo.png"
               alt="Book Cab Varanasi logo"
               width="200" height="52"
               fetchpriority="high">
        </a>

        <!-- Desktop Navigation -->
        <nav class="site-nav" aria-label="Primary navigation">

          <div class="site-nav__item">
            <a class="site-nav__link" href="/">Home</a>
          </div>

          <!-- Locations dropdown -->
          <div class="site-nav__item">
            <a class="site-nav__link" href="/locations/varanasi/" aria-haspopup="true" aria-expanded="false">
              Locations <span class="site-nav__caret" aria-hidden="true">▾</span>
            </a>
            <div class="site-nav__dropdown" role="menu">
              <a href="/locations/varanasi/" role="menuitem">📍 Varanasi</a>
              <a href="/locations/ayodhya/" role="menuitem">📍 Ayodhya</a>
              <a href="/locations/prayagraj/" role="menuitem">📍 Prayagraj</a>
            </div>
          </div>

          <!-- Services dropdown -->
          <div class="site-nav__item">
            <a class="site-nav__link" href="/services/outstation-taxi-varanasi/" aria-haspopup="true">
              Services <span class="site-nav__caret" aria-hidden="true">▾</span>
            </a>
            <div class="site-nav__dropdown" role="menu">
              <a href="/services/varanasi-airport-taxi/" role="menuitem">✈️ Airport Taxi</a>
              <a href="/services/varanasi-local-8hr-80km/" role="menuitem">🚕 Local Packages</a>
              <a href="/services/varanasi-railway-station-taxi/" role="menuitem">🚉 Railway Station</a>
              <a href="/services/kashi-vishwanath-darshan-cab/" role="menuitem">🛕 Kashi Darshan Cab</a>
              <a href="/services/outstation-taxi-varanasi/" role="menuitem">🛣️ Outstation Taxi</a>
            </div>
          </div>

          <!-- Routes dropdown -->
          <div class="site-nav__item">
            <a class="site-nav__link" href="/routes/varanasi-to-ayodhya-cab/" aria-haspopup="true">
              Routes <span class="site-nav__caret" aria-hidden="true">▾</span>
            </a>
            <div class="site-nav__dropdown" role="menu">
              <a href="/routes/varanasi-to-ayodhya-cab/" role="menuitem">Varanasi → Ayodhya</a>
              <a href="/routes/varanasi-to-prayagraj-taxi/" role="menuitem">Varanasi → Prayagraj</a>
              <a href="/routes/ayodhya-to-varanasi-cab/" role="menuitem">Ayodhya → Varanasi</a>
              <a href="/routes/prayagraj-to-varanasi-taxi/" role="menuitem">Prayagraj → Varanasi</a>
              <a href="/routes/prayagraj-to-ayodhya-cab/" role="menuitem">Prayagraj → Ayodhya</a>
              <a href="/routes/ayodhya-to-prayagraj-cab/" role="menuitem">Ayodhya → Prayagraj</a>
            </div>
          </div>

          <!-- Tours dropdown -->
          <div class="site-nav__item">
            <a class="site-nav__link" href="/tours/varanasi-prayagraj-ayodhya-package/" aria-haspopup="true">
              Tours <span class="site-nav__caret" aria-hidden="true">▾</span>
            </a>
            <div class="site-nav__dropdown" role="menu">
              <a href="/tours/kashi-darshan-cab-package/" role="menuitem">🛕 Kashi Darshan Package</a>
              <a href="/tours/ayodhya-ram-mandir-taxi-package/" role="menuitem">🕌 Ayodhya Ram Mandir</a>
              <a href="/tours/prayagraj-sangam-sightseeing/" role="menuitem">🌊 Prayagraj Sangam</a>
              <a href="/tours/varanasi-prayagraj-ayodhya-package/" role="menuitem">✨ 3-City Pilgrimage</a>
              <a href="/tours/varanasi-ayodhya-2-day-tour/" role="menuitem">🌙 2-Day Varanasi–Ayodhya</a>
            </div>
          </div>

          <!-- Fleet -->
          <div class="site-nav__item">
            <a class="site-nav__link" href="/fleet/sedan-cab-rental/" aria-haspopup="true">
              Fleet <span class="site-nav__caret" aria-hidden="true">▾</span>
            </a>
            <div class="site-nav__dropdown" role="menu">
              <a href="/fleet/sedan-cab-rental/" role="menuitem">🚗 Sedan (Swift Dzire)</a>
              <a href="/fleet/ertiga-cab-rental/" role="menuitem">🚙 Ertiga / SUV</a>
              <a href="/fleet/innova-crysta-rental/" role="menuitem">🏎️ Innova Crysta</a>
              <a href="/fleet/tempo-traveller-rental/" role="menuitem">🚌 Tempo Traveller</a>
            </div>
          </div>

          <div class="site-nav__item">
            <a class="site-nav__link" href="/blog">Travel Guide</a>
          </div>

          <div class="site-nav__item">
            <a class="site-nav__link btn btn-primary btn-sm" href="#booking-form"
               onclick="bcvTrack('booking_form_start','header_cta')">
              Book Now
            </a>
          </div>

        </nav>

        <!-- Mobile menu toggle -->
        <button class="menu-toggle" id="menu-toggle" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-drawer">
          <span></span><span></span><span></span>
        </button>

      </div><!-- /.header-main__inner -->
    </div><!-- /.container -->
  </div><!-- /.header-main -->

</header>

<!-- ═══ MOBILE DRAWER ═══ -->
<div class="mobile-drawer" id="mobile-drawer" role="dialog" aria-modal="true" aria-label="Navigation menu">
  <div class="mobile-drawer__panel">
    <button class="mobile-drawer__close" id="drawer-close" aria-label="Close navigation menu">✕</button>

    <a class="site-logo" href="/" style="margin-top:1rem;display:block">
      <img src="/assets/img/logo.png" alt="Book Cab Varanasi" width="160" height="42">
    </a>

    <nav class="mobile-nav" aria-label="Mobile navigation">
      <a href="/">Home</a>
      <a href="/locations/varanasi/">📍 Varanasi</a>
      <a href="/locations/ayodhya/">📍 Ayodhya</a>
      <a href="/locations/prayagraj/">📍 Prayagraj</a>
      <a href="/services/varanasi-airport-taxi/">✈️ Airport Taxi</a>
      <a href="/services/varanasi-local-8hr-80km/">🚕 Local Packages</a>
      <a href="/services/outstation-taxi-varanasi/">🛣️ Outstation Taxi</a>
      <a href="/routes/varanasi-to-ayodhya-cab/">Varanasi → Ayodhya</a>
      <a href="/routes/varanasi-to-prayagraj-taxi/">Varanasi → Prayagraj</a>
      <a href="/tours/kashi-darshan-cab-package/">🛕 Kashi Darshan</a>
      <a href="/tours/ayodhya-ram-mandir-taxi-package/">🕌 Ayodhya Tour</a>
      <a href="/fleet/tempo-traveller-rental/">🚌 Tempo Traveller</a>
      <a href="/blog">Travel Guide</a>
      <a href="/contact">Contact Us</a>

      <div class="mobile-nav__ctas">
        <a class="btn btn-call btn-full" href="tel:+<?php echo BCV_PHONE_RAW; ?>"
           onclick="bcvTrack('click_call','mobile_drawer')">
          <i class="fas fa-phone" aria-hidden="true"></i> Call <?php echo BCV_PHONE_MAIN; ?>
        </a>
        <a class="btn btn-whatsapp btn-full" href="<?php echo htmlspecialchars($wa_href); ?>"
           target="_blank" rel="noopener"
           onclick="bcvTrack('click_whatsapp','mobile_drawer')">
          <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
        </a>
      </div>
    </nav>

  </div>
</div>

<!-- ═══ HEADER JS (minimal, inline) ═══ -->
<script>
(function(){
  var toggle   = document.getElementById('menu-toggle');
  var drawer   = document.getElementById('mobile-drawer');
  var closeBtn = document.getElementById('drawer-close');
  function openDrawer(){
    drawer.classList.add('open');
    toggle.classList.add('active');
    toggle.setAttribute('aria-expanded','true');
    document.body.style.overflow='hidden';
    closeBtn.focus();
  }
  function closeDrawer(){
    drawer.classList.remove('open');
    toggle.classList.remove('active');
    toggle.setAttribute('aria-expanded','false');
    document.body.style.overflow='';
    toggle.focus();
  }
  if(toggle) toggle.addEventListener('click', openDrawer);
  if(closeBtn) closeBtn.addEventListener('click', closeDrawer);
  if(drawer) drawer.addEventListener('click', function(e){ if(e.target===drawer) closeDrawer(); });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeDrawer(); });
})();
</script>
