<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$base = 'https://bookcabvaranasi.com';
$today = date('Y-m-d');
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo $base; ?>/tours/varanasi-prayagraj-ayodhya-package/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/tours/kashi-darshan-cab-package/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/tours/ayodhya-ram-mandir-taxi-package/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/tours/varanasi-ayodhya-2-day-tour/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/tours/prayagraj-sangam-sightseeing/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
</urlset>
