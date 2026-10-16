<?php
// Set the content type to XML for Search Engines
header("Content-Type: application/xml; charset=utf-8");

// Load your blog database
include_once($_SERVER['DOCUMENT_ROOT'] . '/blog-data.php');

/** * CRITICAL FIX: Base URL must match your .htaccess "Non-WWW" rule
 * This prevents the "Duplicate without user-selected canonical" error
 */
$base_url = "https://bookcabvaranasi.com/"; 
$current_date = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

/**
 * 1. CORE BUSINESS PAGES
 * Added .php extensions to ensure Google finds the actual files
 */
$core_pages = [
    '' => '1.0',              // Home
    'taxi.php' => '0.9',      // Taxi Rental
    'airport.php' => '0.9',   // Airport Rental
    'tour.php' => '0.9',      // Tour Plan
    'contact.php' => '0.8',   // Contact
    'about.php' => '0.8',     // About Us
    'blog.php' => '0.9'       // Travel Guide
];

foreach ($core_pages as $path => $priority) {
    echo '<url>';
    echo '<loc>' . $base_url . $path . '</loc>';
    echo '<lastmod>' . $current_date . '</lastmod>';
    echo '<changefreq>weekly</changefreq>';
    echo '<priority>' . $priority . '</priority>';
    echo '</url>';
}

/**
 * 2. DYNAMIC BLOG POSTS
 * Clean /blog/ structure for Varanasi, Ayodhya, and Prayagraj events
 */
foreach ($posts as $slug => $post) {
    echo '<url>';
    echo '<loc>' . $base_url . 'blog/' . htmlspecialchars($slug) . '</loc>';
    echo '<lastmod>' . $current_date . '</lastmod>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>0.7</priority>';
    echo '</url>';
}

echo '</urlset>';
?>