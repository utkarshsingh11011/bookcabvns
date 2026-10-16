<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$base = 'https://bookcabvaranasi.com';
$today = date('Y-m-d');
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo $base; ?>/services/varanasi-local-8hr-80km/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/services/varanasi-airport-taxi/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/services/varanasi-railway-station-taxi/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/services/kashi-vishwanath-darshan-cab/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/services/outstation-taxi-varanasi/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
</urlset>
