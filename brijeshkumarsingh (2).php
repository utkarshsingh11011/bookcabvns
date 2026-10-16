<?php
// Include your main website header from the root folder
include 'header.php'; 
?>

<style>
    /* Scoped styling for the portfolio section */
    .portfolio-wrapper {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
        color: #333;
    }
    .portfolio-header {
        text-align: center;
        margin-bottom: 50px;
    }
    .portfolio-header h1 {
        color: #2c3e50;
        font-size: 3em;
        margin-bottom: 10px;
    }
    .portfolio-header h2 {
        color: #e67e22;
        font-size: 1.5em;
        font-weight: 400;
        margin-top: 0;
    }
    .portfolio-content {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        align-items: flex-start; /* Aligns content to the top instead of centering vertically */
    }
    .portfolio-image {
        flex: 1 1 400px;
        text-align: center;
        display: flex;
        justify-content: center;
    }
    /* Specific CSS for your 1170x1442 image */
    .portfolio-image img {
        width: 100%;
        max-width: 450px; /* Prevents the vertical image from becoming too tall on large screens */
        height: auto;
        aspect-ratio: 1170 / 1442; /* Locks in your exact photo dimensions */
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        border: 5px solid #fff;
    }
    .portfolio-text {
        flex: 2 1 600px;
        line-height: 1.8;
        font-size: 1.15em;
        color: #444;
    }
    .portfolio-text h3 {
        color: #2c3e50;
        font-size: 1.8em;
        margin-top: 0;
        border-bottom: 2px solid #ecf0f1;
        padding-bottom: 10px;
    }
    .portfolio-text p {
        margin-bottom: 20px;
        text-align: justify;
    }
    .highlight-stats {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 40px;
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        border-left: 5px solid #3498db;
    }
    .stat-box {
        flex: 1 1 120px;
        text-align: center;
    }
    .stat-box span {
        display: block;
        font-size: 2.2em;
        font-weight: bold;
        color: #2c3e50;
    }
    .stat-box label {
        font-size: 0.9em;
        color: #7f8c8d;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }
    
    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .portfolio-content {
            flex-direction: column;
            padding: 20px;
        }
        .portfolio-image img {
            max-width: 100%; /* Allows it to fill the mobile screen width nicely */
        }
        .highlight-stats {
            flex-direction: column;
        }
    }
</style>

<div class="portfolio-wrapper">
    <div class="portfolio-header">
        <h1>Brijesh Kumar Singh</h1>
        <h2>Co-Founder & Leading Tourism Expert in Varanasi</h2>
    </div>

    <div class="portfolio-content">
        <div class="portfolio-image">
            <img src="brijesh-kumar-singh-varanasi.jpg" alt="Brijesh Kumar Singh - Co-Founder of BOOK CAB Varanasi">
        </div>

        <div class="portfolio-text">
            <h3>A Legacy of Excellence in Varanasi Tourism</h3>
            <p>
                <strong>Brijesh Kumar Singh</strong> is a highly respected and profound figure in the travel and tourism industry of Varanasi. With a remarkable journey spanning over two decades, he has dedicated his life to transforming the way people experience the spiritual and cultural capital of India. As the Co-Founder of <strong>BOOK CAB Varanasi</strong>, his visionary leadership has cemented the company's reputation as one of the most trusted and premium travel agencies in Uttar Pradesh.
            </p>
            <p>
                Starting his operational journey long before the digital era, and officially establishing his broader vision in 2006, Brijesh Kumar Singh has always prioritized one thing: impeccable service. Today, he successfully oversees operations involving a premium fleet of <strong>more than 30 commercial vehicles</strong>. From comfortable sedans and Toyota Innova Crystas to spacious Force Urbanias and Tempo Travellers, his meticulous fleet management ensures safety, luxury, and reliability for every guest.
            </p>
            <p>
                His deep-rooted expertise goes beyond just transportation. Over the years, he has built an extensive network of strategic partnerships all over Varanasi, encompassing top-tier hotels, local guides, and regional tourism boards. This widespread connectivity allows BOOK CAB Varanasi to provide unparalleled, seamless travel experiences that competitors simply cannot match.
            </p>
            <p>
                Having proudly served over <strong>100,000 customers</strong> in the last 20 years, Brijesh Kumar Singh’s name has become synonymous with the best travel services in Varanasi. Whether managing complex logistics for large tour groups or ensuring the perfect itinerary for a family pilgrimage, his commitment to guest satisfaction continues to lead the industry forward.
            </p>
            
            <div class="highlight-stats">
                <div class="stat-box">
                    <span>20+</span>
                    <label>Years Legacy</label>
                </div>
                <div class="stat-box">
                    <span>100K+</span>
                    <label>Happy Customers</label>
                </div>
                <div class="stat-box">
                    <span>30+</span>
                    <label>Premium Vehicles</label>
                </div>
                <div class="stat-box">
                    <span>#1</span>
                    <label>Service in Varanasi</label>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include your main website footer from the root folder
include 'footer.php'; 
?>