<?php
// 1. Force Absolute Path for data - This prevents the "Design Missing" error
include_once($_SERVER['DOCUMENT_ROOT'] . '/blog-data.php');

// 2. Capture the slug correctly from the .htaccess rewrite
$slug = isset($_GET['page']) ? $_GET['page'] : '';

// Fallback for old link structure
if (empty($slug) && isset($_GET['id'])) {
    $slug = $_GET['id'];
}

// 3. Redirect if slug is missing or invalid
if (empty($slug) || !array_key_exists($slug, $posts)) { 
    header("Location: https://bookcabvaranasi.com/blog"); 
    exit(); 
}

$current_post = $posts[$slug];

// 4. Logic for "Similar Questions"
$other_slugs = array_keys($posts);
$other_slugs = array_diff($other_slugs, [$slug]); 
$random_keys = array_rand($other_slugs, 3);
$similar_posts = [];
foreach($random_keys as $key) {
    $similar_posts[] = $posts[$other_slugs[$key]];
    $similar_posts[count($similar_posts)-1]['slug'] = $other_slugs[$key]; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <base href="https://bookcabvaranasi.com/">
    
    <title><?php echo $current_post['title']; ?> | Book Cab Varanasi</title>
    <meta name="description" content="<?php echo isset($current_post['summary']) ? strip_tags($current_post['summary']) : 'Affordable car booking in Varanasi.'; ?>">
    
    <link rel="canonical" href="https://bookcabvaranasi.com/blog/<?php echo $slug; ?>" />
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://bookcabvaranasi.com/"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Travel Guides",
        "item": "https://bookcabvaranasi.com/blog"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "<?php echo $current_post['title']; ?>",
        "item": "https://bookcabvaranasi.com/blog/<?php echo $slug; ?>"
      }]
    }
    </script>
    
    <style>
        :root { --primary: #ff9800; --primary-dark: #e65100; --text: #333; --bg: #fdfbf7; --dark-blue: #0d2c55; }
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: var(--bg); color: var(--text); margin: 0; padding: 0; }
        
        .article-wrapper {
            max-width: 900px; 
            margin: 40px auto; 
            padding: 40px;
            background: white; 
            border-radius: 16px; 
            box-shadow: 0 10px 40px rgba(0,0,0,0.06); 
        }
        
        .breadcrumb-nav { font-size: 14px; color: #888; margin-bottom: 20px; }
        .breadcrumb-nav a { color: var(--primary); text-decoration: none; font-weight: 600; }

        h1 { color: #1a1a1a; font-size: 34px; line-height: 1.3; margin-top: 10px; font-weight: 800; }
        .category-tag { background: #fff3e0; color: var(--primary-dark); padding: 6px 15px; border-radius: 6px; font-size: 13px; text-transform: uppercase; font-weight: 700; border: 1px solid #ffe0b2;}

        .content { line-height: 1.9; font-size: 18px; margin-top: 30px; color: #444; }
        .content h2 { color: var(--dark-blue); margin-top: 40px; font-size: 26px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        
        .price-disclaimer { 
            background: #f1f8ff; 
            border-left: 5px solid #2196f3; 
            padding: 20px; 
            font-size: 15px; 
            margin: 25px 0; 
            border-radius: 8px; 
            color: #2c3e50;
        }
        
        .highlight-box { background: var(--dark-blue); color: white; padding: 35px; margin: 40px 0; border-radius: 12px; text-align: center; }
        .highlight-box h3 { color: var(--primary); font-size: 24px; margin-top: 0; }

        .similar-section { margin-top: 50px; padding-top: 30px; border-top: 2px solid #f0f0f0; }
        .similar-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px; }
        .similar-card { background: #fff; border: 1px solid #eee; padding: 20px; border-radius: 12px; transition: 0.3s; text-decoration: none; color: inherit; display: block; }
        .similar-card:hover { transform: translateY(-5px); border-color: var(--primary); box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        
        .sticky-book { position: fixed; bottom: 25px; right: 25px; background: #25D366; color: white; padding: 15px 30px; border-radius: 50px; text-decoration: none; font-weight: bold; box-shadow: 0 8px 20px rgba(0,0,0,0.2); z-index: 999; display: flex; align-items: center; gap: 10px;}
        
        @media (max-width: 600px) {
            .article-wrapper { margin: 0; border-radius: 0; padding: 25px; }
            h1 { font-size: 26px; }
        }
    </style>
</head>
<body>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div class="article-wrapper">
    <nav class="breadcrumb-nav">
        <a href="/">Home</a> > <a href="blog">Travel Guides</a> > <?php echo htmlspecialchars($current_post['category']); ?>
    </nav>
    
    <span class="category-tag"><?php echo htmlspecialchars($current_post['category']); ?></span>
    
    <h1><?php echo $current_post['title']; ?></h1>

    <div class="price-disclaimer">
        <strong>💰 2026 Price Check:</strong> Airport drops start from ₹900. All fares are subject to availability, peak season (Festivals/Holidays), and current fuel rates.
    </div>
    
    <div class="content">
        <?php echo $current_post['content']; ?>
    </div>

    <div class="highlight-box">
        <h3>🚗 Ready to book your ride?</h3>
        <p>Get an instant, transparent quote for your Varanasi trip today.</p>
        <a href="https://wa.me/919648974238?text=Namaste, I am reading about: <?php echo urlencode($current_post['title']); ?>" style="background: var(--primary); color: #000; padding: 12px 30px; text-decoration: none; border-radius: 50px; display: inline-block; font-weight: 800;">WhatsApp for Rates</a>
    </div>

    <div class="similar-section">
        <h3>Other Travelers Also Asked:</h3>
        <div class="similar-grid">
            <?php foreach($similar_posts as $sim): ?>
            <a href="blog/<?php echo $sim['slug']; ?>" class="similar-card">
                <h4 style="margin:0; font-size: 16px;"><?php echo $sim['title']; ?></h4>
                <span style="color:var(--primary-dark); font-weight:bold; font-size:13px; display:block; margin-top:10px;">Read More →</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<a href="https://wa.me/919648974238" class="sticky-book">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="25" alt="WhatsApp"> Book Now
</a>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>

</body>
</html>