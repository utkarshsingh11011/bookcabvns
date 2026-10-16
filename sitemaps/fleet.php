<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$base = 'https://bookcabvaranasi.com';
$today = date('Y-m-d');
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo $base; ?>/fleet/sedan-cab-rental/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/fleet/ertiga-cab-rental/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/fleet/innova-crysta-rental/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc><?php echo $base; ?>/fleet/tempo-traveller-rental/</loc>
    <lastmod><?php echo $today; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
</urlset>
