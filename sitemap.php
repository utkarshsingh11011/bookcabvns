<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$base = 'https://bookcabvaranasi.com';
$today = date('Y-m-d');
?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <sitemap>
    <loc><?php echo $base; ?>/sitemaps/locations.xml</loc>
    <lastmod><?php echo $today; ?></lastmod>
  </sitemap>
  <sitemap>
    <loc><?php echo $base; ?>/sitemaps/services.xml</loc>
    <lastmod><?php echo $today; ?></lastmod>
  </sitemap>
  <sitemap>
    <loc><?php echo $base; ?>/sitemaps/routes.xml</loc>
    <lastmod><?php echo $today; ?></lastmod>
  </sitemap>
  <sitemap>
    <loc><?php echo $base; ?>/sitemaps/tours.xml</loc>
    <lastmod><?php echo $today; ?></lastmod>
  </sitemap>
  <sitemap>
    <loc><?php echo $base; ?>/sitemaps/fleet.xml</loc>
    <lastmod><?php echo $today; ?></lastmod>
  </sitemap>
  <sitemap>
    <loc><?php echo $base; ?>/sitemaps/guides.xml</loc>
    <lastmod><?php echo $today; ?></lastmod>
  </sitemap>
</sitemapindex>
