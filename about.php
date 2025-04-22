<?php
// Define site title for this page
$site_title = "AB Natural Products";

// Include header
include 'partials/header.php';
?>

<!-- Page Header -->
<div class="page-header">
    <figure class="post-thumbnail">
        <img alt="About Us" src="./images/about/about.jpg">
    </figure>
    <h1 class="title"><span class="line-title">About Us<i class="fa">&#xf111;</i></span></h1>
</div>

<!-- About Section -->
<section id="infoUs" class="section infoUs" style="background-image: url(./images/home/info/info-bg.jpg); background-position: right center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">
                <figure>
                    <img alt="" src="./images/home/info/info-img-1.png" class="animated" data-animate="fadeInRight animation animation-delay-25">
                    <img alt="" src="./images/home/info/info-img-2.png" class="animated" data-animate="fadeInRight animation">
                </figure>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <h1 class="title">Welcome to our <br> <?php echo $site_title; ?></h1>
                <aside>
                    <p>At <?php echo $site_title; ?>, tea is more than just a beverage—it's a tradition, a craft, and a journey of flavor.
                        As each tea leaf unfolds, it releases the purest essence of nature, capturing the richness of its origins. 
                        We believe in tea that tells a story—grown with care, harvested naturally, and blended with passion.</p>
                    <p>Our mission is to bring you the finest flavors, embracing wellness and sustainability in every sip.
                        <?php echo $site_title; ?> is more than a brand; it's a commitment to quality, authenticity, and the art of tea.</p>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section class="section ourMission" style="background-image: url(images/about/ourMission.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <figure>
                    <!-- <img alt="" src="./images/about/ourMission.jpg" class="animated" data-animate="zoomIn animation"> -->
                </figure>
            </div>
            <div class="col-sm-7">
                <aside>
                    <h1 class="title">Our Mission</h1>
                    <div class="content">
                        <h5 class="title">We believe in sharing quality organic products that you can enjoy with confidence.</h5>
                        <p>We strive to nourish your body and respect the environment by certifying each of our products organic and gluten free, using pure ingredients that are ethically sourced from around the world and embracing sustainable, eco-friendly practices, always.</p>
                        <h5 class="title">In all that we do, we aim for goodness.</h5>
                        <p>Whether you are dedicated to a wholesome, organic lifestyle, are dabbling in a gluten free diet or enjoy using the freshest and most expansive variety of spices in your culinary creations, we want you to empower your creativity and wellness with quality organic ingredients and help you feel good about your food choices.</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- Our Promise Section -->
<section class="section ourPromise">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-push-7">
                <figure>
                    <img alt="" src="./images/about/ourPromise.png" class="animated" data-animate="fadeInUp animation">
                </figure>
            </div>
            <div class="col-sm-7 col-sm-pull-5">
                <aside>
                    <h1 class="title">Our Promise</h1>
                    <p>Over time, we saw others trying to cut corners, and we vowed to work harder to make food that you can trust. As GMO's, MSG, fillers, sweeteners and irradiation became increasingly common elsewhere, we deepened our commitment to our customers and to the planet. By 2007, we achieved our 100% Organic Certification, and in the following months we increased our line to include Certified Fair Trade, Kosher, Vegan, and Gluten Free products. In 2012, we developed a line of EcoShakers, a spice container that is 100% recyclable.</p>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section gallery-about">
    <div class="gallery-flickity">
        <?php
        // Define gallery images array
        $gallery_images = array(
            "./images/about/gallery/gallery-1.jpg",
            "./images/about/gallery/gallery-2.jpg",
            "./images/about/gallery/gallery-3.jpg",
            "./images/about/gallery/gallery-4.jpg",
            "./images/about/gallery/gallery-5.jpg",
            "./images/about/gallery/gallery-6.jpg",
            "./images/about/gallery/gallery-7.jpg",
            "./images/about/gallery/gallery-8.jpg",
            "./images/about/gallery/gallery-9.jpg",
            "./images/about/gallery/gallery-10.jpg",
            "./images/about/gallery/gallery-11.jpg",
            "./images/about/gallery/gallery-12.jpg",
            "./images/about/gallery/gallery-13.jpg",
            "./images/about/gallery/gallery-14.jpg"
        );
        
        // Loop through the gallery images
        foreach ($gallery_images as $image): ?>
            <div class="gallery-cell">
                <img alt="" src="<?php echo $image; ?>" class="animated" data-animate="fadeInRight animation">
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Our Methods Section -->
<section class="section ourMethods">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <figure>
                    <img alt="" src="./images/about/ourMethods-1.png" class="animated" data-animate="fadeInLeft animation">
                    <img alt="" src="./images/about/ourMethods-2.png" class="animated" data-animate="fadeInLeft animation animation-delay-25">
                </figure>
            </div>
            <div class="col-sm-7">
                <aside>
                    <h1 class="title">Our Methods</h1>
                    <p>We import 100% organic teas using Fair Trade options whenever available. All imported teas are required to go through a careful selection process before being sold. Most tea companies use synthetic chemicals or radiation for processing. At <?php echo $site_title; ?>, we use natural processes that preserve the authentic flavor and beneficial properties of our teas without adding any chemicals or hazardous materials.</p>
                    <p>Worldwide, we have over 50 passionate employees and counting. In 2023, we opened our first ever <?php echo $site_title; ?> Boutique, located in Galle, Sri Lanka.</p>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include 'partials/footer.php';
?>