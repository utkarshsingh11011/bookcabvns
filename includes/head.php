<?php
/**
 * Shared <head> partial — Book Cab Varanasi
 * Variables expected from including page:
 *   $page_title   (string)  - full <title> tag content
 *   $meta_desc    (string)  - meta description
 *   $canonical    (string)  - canonical URL (use bcv_canonical() or set manually)
 *   $og_title     (string)  - OG title (defaults to $page_title)
 *   $og_desc      (string)  - OG description (defaults to $meta_desc)
 *   $og_image     (string)  - full URL to OG image (optional)
 *   $schema_json  (string)  - JSON-LD markup to inject (optional, pre-encoded)
 *   $breadcrumbs  (array)   - [['name'=>'...','url'=>'...'], ...] for schema
 *   $noindex      (bool)    - set true to noindex this page
 */
if (!defined('BCV_DOMAIN')) { require_once __DIR__ . '/config.php'; }

// Defaults
$og_title  = $og_title  ?? $page_title ?? BCV_BRAND;
$og_desc   = $og_desc   ?? $meta_desc  ?? '';
$og_image  = $og_image  ?? BCV_DOMAIN . '/assets/img/og-default.jpg';
$canonical = $canonical ?? bcv_canonical();
$noindex   = $noindex   ?? false;

// Build breadcrumb schema if provided
$breadcrumb_schema = '';
if (!empty($breadcrumbs)) {
    $items = [];
    foreach ($breadcrumbs as $i => $bc) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $bc['name'],
            'item'     => $bc['url'] ?? ''
        ];
    }
    $breadcrumb_schema = json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

// Base business schema (homepage only passes this via $schema_json)
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<!-- Primary SEO -->
<title><?php echo htmlspecialchars($page_title ?? BCV_BRAND, ENT_QUOTES); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_desc ?? '', ENT_QUOTES); ?>">
<?php if ($noindex): ?>
<meta name="robots" content="noindex,follow">
<?php else: ?>
<meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large">
<?php endif; ?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">

<!-- Open Graph -->
<meta property="og:type"        content="website">
<meta property="og:url"         content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>">
<meta property="og:title"       content="<?php echo htmlspecialchars($og_title, ENT_QUOTES); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($og_desc, ENT_QUOTES); ?>">
<meta property="og:image"       content="<?php echo htmlspecialchars($og_image, ENT_QUOTES); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height"content="630">
<meta property="og:locale"      content="en_IN">
<meta property="og:site_name"   content="<?php echo BCV_BRAND; ?>">

<!-- Twitter Card -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?php echo htmlspecialchars($og_title, ENT_QUOTES); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($og_desc, ENT_QUOTES); ?>">
<meta name="twitter:image"       content="<?php echo htmlspecialchars($og_image, ENT_QUOTES); ?>">

<!-- Favicons -->
<link rel="icon"              type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
<link rel="icon"              type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
<link rel="shortcut icon"     href="/assets/img/favicons/favicon.ico">
<link rel="apple-touch-icon"  sizes="180x180"  href="/assets/img/favicons/apple-icon-180x180.png">
<meta name="theme-color"      content="#0D2C55">

<!-- Fonts: Plus Jakarta Sans + Inter via Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap">

<!-- FontAwesome 6 (CDN for guaranteed 100% reliable icon rendering) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- Modern Design System -->
<link rel="stylesheet" href="/assets/css/bcv-design.css">

<!-- Structured Data: BreadcrumbList -->
<?php if ($breadcrumb_schema): ?>
<script type="application/ld+json"><?php echo $breadcrumb_schema; ?></script>
<?php endif; ?>

<!-- Page-specific Structured Data -->
<?php if (!empty($schema_json)): ?>
<script type="application/ld+json"><?php echo $schema_json; ?></script>
<?php endif; ?>

<!-- Consent-aware GA4 placeholder (fires after cookie consent) -->
<?php include __DIR__ . '/analytics.php'; ?>
</head>
