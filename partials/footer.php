<?php
// footer.php - Include this at the end of each page
// Get current year for copyright
$current_year = date("Y");
if (!isset($site_title)) {
    $site_title = "AB Natural Products";
}
?>
        </div><!-- End of #main-content -->

        <!-- Footer -->
        <footer id="footer" style="background-color: white;">
            <div class="footer-container">
                <div class="footer-about">
                    <h3>About Us</h3>
                    <p>Delivering premium tea products since 2023. Sip nature, taste purity.</p>
                    <p><i class="fa fa-envelope"></i> abnaturalproducts@gmail.com</p>
                    <p><i class="fa fa-phone"></i> +94 77 500 8031</p>
                    <p><i class="fa fa-map-marker"></i> 18/25, Dewasurendra Place, Galle, Sri Lanka</p>
                </div>
            
                <div class="footer-logo">
                    <div class="logo-container">
                        <img src="assets/imgs/logo.png" alt="AB Natural Logo" />
                    </div>
                    <div class="tagline">
                        <p>Pure Ceylon Tea</p>
                        <p>Handpicked with Care</p>
                    </div>
                    <div class="certification">
                        <span>Certified Organic</span>
                        <span>•</span>
                        <span>Fair Trade</span>
                    </div>
                </div>
            
                <div class="footer-social">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo $current_year; ?> <?php echo $site_title; ?>. All rights reserved.</p>
            </div>
        </footer>
    </div><!-- End of #wrap -->

    <!-- JavaScript files -->
    <script src="./assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="./assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/vendor/flickity.pkgd.min.js"></script>
    <script src="./assets/js/vendor/jquery.waypoints.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <script src="./assets/js/vendor/jquery.nivo.slider.pack.js"></script>
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>