<?php
/**
 * Sticky Mobile Contact Action Bar — Book Cab Varanasi
 * Visible only on mobile screens (< 768px) per bcv-design.css
 */
if (!defined('BCV_DOMAIN')) {
    require_once __DIR__ . '/config.php';
}

$cta_whatsapp = isset($whatsapp_route) && !empty($whatsapp_route)
    ? bcv_whatsapp_url('Hello Book Cab Varanasi, I need to book a taxi for: ' . $whatsapp_route)
    : BCV_WHATSAPP_URL;
?>
<div class="sticky-cta" role="complementary" aria-label="Quick contact actions">
  <a href="tel:+<?php echo BCV_PHONE_RAW; ?>" class="sticky-cta__btn sticky-cta__call" onclick="bcvTrack('click_call','mobile_sticky')">
    <i class="fas fa-phone-alt" aria-hidden="true"></i> Call Now
  </a>
  <a href="<?php echo $cta_whatsapp; ?>" target="_blank" rel="noopener" class="sticky-cta__btn sticky-cta__whatsapp" onclick="bcvTrack('click_whatsapp','mobile_sticky')">
    <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
  </a>
</div>
