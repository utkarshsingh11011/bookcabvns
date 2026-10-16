<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$base = 'https://bookcabvaranasi.com';
$today = date('Y-m-d');
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo $base; ?>/routes/varanasi-to-ayodhya-cab/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/routes/ayodhya-to-varanasi-cab/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/routes/varanasi-to-prayagraj-taxi/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/routes/prayagraj-to-varanasi-taxi/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/routes/prayagraj-to-ayodhya-cab/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/routes/ayodhya-to-prayagraj-cab/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>
</urlset>
