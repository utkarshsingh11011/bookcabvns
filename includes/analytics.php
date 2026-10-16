<?php
/**
 * Analytics & cookie consent — Book Cab Varanasi
 * GA4 fires only after user accepts cookies.
 * Replace G-XXXXXXXXXX with the actual GA4 measurement ID.
 */
?>
<!-- Cookie Consent Banner -->
<style>
#bcv-cookie-bar{position:fixed;bottom:0;left:0;right:0;z-index:9999;background:rgba(13,44,85,0.97);color:#fff;padding:1rem 1.5rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:.75rem;font-size:.85rem;backdrop-filter:blur(6px)}
#bcv-cookie-bar a{color:#FFC000;text-decoration:underline}
#bcv-cookie-bar.hidden{display:none}
.bcv-cookie-btn{padding:.5rem 1.25rem;border-radius:8px;border:none;font-weight:700;cursor:pointer;font-size:.85rem}
.bcv-cookie-accept{background:#E8730A;color:#fff}
.bcv-cookie-decline{background:rgba(255,255,255,0.15);color:#fff}
@media(max-width:600px){#bcv-cookie-bar{padding-bottom:calc(60px + env(safe-area-inset-bottom,0px))}}
</style>

<div id="bcv-cookie-bar" role="dialog" aria-label="Cookie consent" aria-live="polite">
  <span>We use cookies to improve your experience. See our <a href="/privacy-policy/">Privacy Policy</a>.</span>
  <div style="display:flex;gap:.5rem">
    <button class="bcv-cookie-btn bcv-cookie-accept" id="bcv-accept-cookies">Accept &amp; Continue</button>
    <button class="bcv-cookie-btn bcv-cookie-decline" id="bcv-decline-cookies">Decline</button>
  </div>
</div>

<script>
// ── Cookie helpers ───────────────────────────────────────
function bcvSetCookie(name, val, days){
  var d = new Date(); d.setTime(d.getTime() + days*24*60*60*1000);
  document.cookie = name + '=' + val + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
}
function bcvGetCookie(name){
  var c = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
  return c ? c[2] : null;
}

// ── GA4 loader (only after consent) ─────────────────────
function loadGA4(){
  var s = document.createElement('script');
  s.async = true;
  s.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX'; // ← Replace GA4 ID
  document.head.appendChild(s);
  window.dataLayer = window.dataLayer || [];
  window.gtag = function(){ dataLayer.push(arguments); };
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXXXX', { // ← Replace GA4 ID
    anonymize_ip: true,
    send_page_view: true
  });
  // Override stub
  window.bcvTrack = function(event, position, extra){
    gtag('event', event, Object.assign({ cta_position: position }, extra||{}));
  };
}

// ── Consent banner logic ─────────────────────────────────
(function(){
  var bar     = document.getElementById('bcv-cookie-bar');
  var consent = bcvGetCookie('bcv_consent');

  if(consent === 'yes'){ if(bar) bar.classList.add('hidden'); loadGA4(); return; }
  if(consent === 'no') { if(bar) bar.classList.add('hidden'); return; }

  // Show banner
  var acceptBtn  = document.getElementById('bcv-accept-cookies');
  var declineBtn = document.getElementById('bcv-decline-cookies');

  if(acceptBtn) acceptBtn.addEventListener('click', function(){
    bcvSetCookie('bcv_consent', 'yes', 365);
    if(bar) bar.classList.add('hidden');
    loadGA4();
  });
  if(declineBtn) declineBtn.addEventListener('click', function(){
    bcvSetCookie('bcv_consent', 'no', 30);
    if(bar) bar.classList.add('hidden');
  });
})();

// ── bcvTrack stub (before GA4 loads) ────────────────────
window.bcvTrack = window.bcvTrack || function(){};
</script>
