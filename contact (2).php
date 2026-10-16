<?php include("header.php") ?>

<style>
.contact-social-icons a {
    font-size: 22px; /* Adjust icon size if needed */
    margin: 0 10px;
    /* This color should match your theme's primary text color */
    color: #0D2C55; 
}
.contact-social-icons a:hover {
    /* This color should match your theme's highlight/hover color (like the yellow) */
    color: #FFC000;
}
</style>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg" data-overlay="title"
        data-opacity="4">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <section class="space">
        <div class="container">
          
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                    <div class="row gy-30 justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon"><i class="fal fa-headset"></i></div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Call Us 24/7</p>
                                        <h5 class="contact-box_link"><a href="tel:+919838409911">+91-9838409911</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon"><i class="fal fa-envelope-open-text"></i></div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Make A Quote</p>
                                        <h5 class="contact-box_link"><a
                                                href="mailto:info@bookcabvaranasi.com">info@bookcabvaranasi.com</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon"><i class="fal fa-map-location-dot"></i></div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Service Station</p>
                                        <h5 class="contact-box_link">S15/ 6 Ghausabad, Varanasi, Uttar Pradesh 221002</h5>
                                        <p class="contact-box_text">Office Address</p>
                                        <h5 class="contact-box_link">B31 PCF PLAZA CANTONMENT Varanasi,Uttar Pradesh 221002</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon"><i class="fal fa-share-alt"></i></div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Follow Us</p>
                                        <div class="contact-social-icons">
                                            <a target="_blank" href="https://www.instagram.com/bookcabvaranasi/" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://www.facebook.com/share/1BRvhF56Uz/" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://wa.me/919648974238" title="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                            <a target="_blank" href="https://share.google/HUkn3hKosvtHUF7Zf" title="Find us on Google Maps"><i class="fas fa-map-location-dot"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
          
          
        </div>
    </section>
    <section class="space bg-smoke position-relative">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">OUR CONTACT FORM</span>
                <h2 class="sec-title">You can connect with uS</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <form action="mail.php" method="POST"
                        class="contact-form ">
                        <div class="row">
                            <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                    id="name" placeholder="Enter Your Name"> <i class="fal fa-user"></i></div>
                            <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                    id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                            <div class="form-group col-12"><input type="text" class="form-control" name="phone"
                                id="number" placeholder="Phone Number"><i class="fal fa-phone"></i></div>
                            <div class="form-group col-12"><textarea name="msg" id="message" cols="30" rows="3"
                                    class="form-control" placeholder="Message"></textarea> <i
                                    class="fal fa-comment"></i></div>
                            <div class="form-btn col-12 mt-10 text-center"><button name="submit" class="as-btn">Send Message
                                    Now</button></div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.31501728285!2d82.98595507511915!3d25.32742467762699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2e1a8b45c855%3A0x2117589218a0e9a0!2sBook%20Cab%20Varanasi!5e0!3m2!1sen!2sin!4v1692881585863!5m2!1sen!2sin" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include("footer.php") ?>