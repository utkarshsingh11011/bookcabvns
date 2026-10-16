<?php 
include 'blog-data.php'; 
include 'header.php'; 

// 1. Get current page info - updated to check for 'page' from .htaccess rewrite
$post_id = isset($_GET['id']) ? $_GET['id'] : (isset($_GET['page']) ? $_GET['page'] : null);
$current_post = ($post_id && isset($posts[$post_id])) ? $posts[$post_id] : null;

// 2. Search Logic
$search_query = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
$filtered_posts = $posts;

if ($search_query !== '') {
    $filtered_posts = array_filter($posts, function($p) use ($search_query) {
        return strpos(strtolower($p['title']), $search_query) !== false || 
               strpos(strtolower($p['summary']), $search_query) !== false;
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $current_post ? $current_post['title'] : "Cab Service in Varanasi | 60+ Expert Travel Answers"; ?></title>
    <meta name="description" content="<?php echo $current_post ? strip_tags($current_post['summary']) : "Expert answers to 60+ questions about Varanasi taxi services, airport fares, and pilgrimage tours."; ?>">
    
    <link rel="canonical" href="https://bookcabvaranasi.com/<?php echo $current_post ? 'blog/' . $post_id : 'blog'; ?>" />

    <?php if (!$current_post): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Varanasi Travel Guide & Taxi Fares 2026",
      "description": "A comprehensive directory of expert answers regarding transport in Kashi.",
      "url": "https://bookcabvaranasi.com/blog"
    }
    </script>
    <?php endif; ?>

    <style>
        :root { --primary-color: #ff9800; --dark-blue: #0D2C55; --bg-light: #fdfbf7; }
        body { font-family: 'Segoe UI', Roboto, sans-serif; background-color: var(--bg-light); color: #333; line-height: 1.6; margin:0; }
        .blog-wrapper { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        .blog-header { text-align: center; margin-bottom: 50px; }
        .blog-header h1 { font-size: 2.8rem; color: var(--dark-blue); margin-bottom: 10px; font-weight: 800; }
        .blog-header h1 span { color: var(--primary-color); }
        .search-area { max-width: 600px; margin: 0 auto 50px; position: relative; }
        .search-input { width: 100%; padding: 18px 30px; border: 2px solid #eee; border-radius: 50px; font-size: 1.1rem; transition: 0.3s; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        .search-input:focus { border-color: var(--primary-color); outline: none; box-shadow: 0 10px 30px rgba(255,152,0,0.15); }
        .grid-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 35px; }
        .card { background: #fff; border-radius: 20px; padding: 35px; box-shadow: 0 10px 40px rgba(0,0,0,0.04); transition: 0.4s; border: 1px solid #f0f0f0; display: flex; flex-direction: column; position: relative; overflow: hidden; }
        .card::before { content: ''; position: absolute; top:0; left:0; width: 100%; height: 5px; background: var(--primary-color); }
        .card:hover { transform: translateY(-12px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); border-color: var(--primary-color); }
        .card .category { font-size: 0.8rem; font-weight: 800; color: var(--primary-color); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 15px; }
        .card h3 { font-size: 1.4rem; margin-bottom: 15px; color: var(--dark-blue); line-height: 1.4; font-weight: 700; }
        .card h3 a { text-decoration: none; color: inherit; }
        .card p { font-size: 1rem; color: #666; flex-grow: 1; margin-bottom: 25px; line-height: 1.7; }
        .btn-read { background: var(--dark-blue); color: #fff; padding: 12px 25px; border-radius: 8px; text-decoration: none; font-weight: bold; text-align: center; transition: 0.3s; }
        .btn-read:hover { background: var(--primary-color); color: #fff; }
        .article-container { background: #fff; padding: 60px; border-radius: 25px; box-shadow: 0 15px 60px rgba(0,0,0,0.05); }
        .back-link { display: inline-flex; align-items: center; margin-bottom: 30px; color: var(--dark-blue); text-decoration: none; font-weight: 700; font-size: 1.1rem; gap: 8px; }
        .cta-box { background: linear-gradient(135deg, var(--dark-blue) 0%, #1a4a8e 100%); color: #fff; padding: 50px; border-radius: 20px; text-align: center; margin-top: 60px; }
        .cta-box h2 { color: #fff !important; font-size: 2.2rem; }
        .cta-box .btn-call { display: inline-block; background: var(--primary-color); color: #fff; padding: 18px 45px; border-radius: 50px; text-decoration: none; font-size: 1.3rem; font-weight: 800; margin-top: 25px; }

        @media (max-width: 768px) {
            .article-container { padding: 40px 25px; }
            .blog-header h1 { font-size: 2.2rem; }
            .grid-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="blog-wrapper">

    <?php if ($current_post): ?>
        <a href="blog" class="back-link">← Back to Travel Directory</a>
        
        <article class="article-container">
            <div style="color: var(--primary-color); font-weight: bold; text-transform: uppercase; margin-bottom: 10px;">
                <?php echo htmlspecialchars($current_post['category']); ?>
            </div>
            <h1><?php echo $current_post['title']; ?></h1>
            
            <div class="article-content">
                <?php echo $current_post['content']; ?>
            </div>

            <div class="cta-box">
                <h2>Need a Reliable Cab Service in Varanasi?</h2>
                <p>We provide the best taxi in Varanasi for local sightseeing and outstation trips.</p>
                <a href="https://wa.me/919648974238?text=I want to book a cab for: <?php echo urlencode($current_post['title']); ?>" class="btn-call">Book Your Cab Now</a>
            </div>
        </article>

    <?php else: ?>
        <div class="blog-header">
            <h1>Kashi <span>Travel Directory</span></h1>
            <p>Your one-stop guide for 2026 Varanasi Taxi Fares & Pilgrimage Logistics.</p>
        </div>

        <div class="search-area">
            <form action="blog" method="GET">
                <input type="text" name="search" class="search-input" placeholder="Search topics..." value="<?php echo htmlspecialchars($search_query); ?>">
            </form>
        </div>

        <div class="grid-container">
            <?php if (!empty($filtered_posts)): ?>
                <?php foreach ($filtered_posts as $slug => $post): ?>
                    <div class="card">
                        <div class="category"><?php echo htmlspecialchars($post['category']); ?></div>
                        
                        <h3><a href="blog/<?php echo $slug; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
                        
                        <p><?php echo htmlspecialchars($post['summary']); ?></p>
                        
                        <a href="blog/<?php echo $slug; ?>" class="btn-read">View Full Details →</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="text-align:center; grid-column: 1 / -1; padding: 50px; background: #fff; border-radius: 20px;">
                    <h3>No matching travel guides found.</h3>
                    <a href="blog" style="color: var(--primary-color); font-weight:bold;">View All Guides</a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

</div>

</body>
</html>

<?php include 'footer.php'; ?>