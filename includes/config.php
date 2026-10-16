<?php
/**
 * Book Cab Varanasi — Centralized Business Configuration
 * Update this file when contact details or business info changes.
 */

// --- Business Identity ---
define('BCV_BRAND',        'Book Cab Varanasi');
define('BCV_TAGLINE',      'Trusted Taxi & Tempo Traveller Service in Varanasi');
define('BCV_DOMAIN',       'https://bookcabvaranasi.com');
define('BCV_EMAIL',        'info@bookcabvaranasi.com');

// --- Contact Numbers ---
define('BCV_PHONE_MAIN',   '+91-9838409911');
define('BCV_PHONE_TOURS',  '+91-9648974238');
define('BCV_PHONE_RAW',    '919838409911');      // for tel: links (no dashes)
define('BCV_WA_NUMBER',    '919648974238');      // WhatsApp number (no +)

// --- Addresses ---
define('BCV_ADDR_SERVICE', 'S15/6 Ghausabad, Varanasi, Uttar Pradesh 221002');
define('BCV_ADDR_OFFICE',  'B31 PCF Plaza Cantonment, Varanasi, Uttar Pradesh 221002');
define('BCV_CITY',         'Varanasi');
define('BCV_STATE',        'Uttar Pradesh');
define('BCV_PINCODE',      '221002');
define('BCV_GEO_LAT',      '25.335649');
define('BCV_GEO_LNG',      '82.973915');

// --- Social Media ---
define('BCV_INSTAGRAM',    'https://www.instagram.com/bookcabvaranasi/');
define('BCV_FACEBOOK',     'https://www.facebook.com/share/1BRvhF56Uz/');
define('BCV_WHATSAPP_URL', 'https://wa.me/919648974238');
define('BCV_GMAPS',        'https://share.google/HUkn3hKosvtHUF7Zf');
define('BCV_GMAPS_REVIEW', 'https://g.page/r/CYDWAEFVto6xEAE/review');

// --- Trust Metrics ---
define('BCV_YEARS',         '20+');
define('BCV_CUSTOMERS',     '10,000+');
define('BCV_RATING',        '4.8');
define('BCV_REVIEW_COUNT',  '470');

// --- Database ---
define('BCV_DB_HOST', 'localhost');
define('BCV_DB_USER', 'root');
define('BCV_DB_PASS', '');
define('BCV_DB_NAME', 'bookcabvaranasi');

// --- Helper: WhatsApp pre-filled link ---
function bcv_whatsapp_link(string $routeContext = ''): string {
    $text = $routeContext
        ? 'Hello Book Cab Varanasi, please quote ' . $routeContext . '.'
        : 'Hello Book Cab Varanasi, I would like to book a cab.';
    return BCV_WHATSAPP_URL . '?text=' . rawurlencode($text);
}

// --- Helper: canonical URL for current page ---
function bcv_canonical(): string {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $path = rtrim($path, '/') . '/';        // enforce trailing slash
    if ($path === '//') $path = '/';
    return BCV_DOMAIN . $path;
}

// --- Helper: format phone for display ---
function bcv_tel(string $raw): string {
    return 'tel:+' . preg_replace('/\D/', '', $raw);
}
