<?php
// Define site title for this page
$site_title = "AB Natural Products";

// Include header
include 'partials/header.php';
?>

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
                <h1 class="title line-title">
                    Welcome to <?php echo $site_title; ?><i class="fa fa-circle">&#xf111;</i>
                </h1>
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

<!-- Services Section -->
<section id="services" class="section services">
    <div class="container">
        <h4>Since 2023</h4>
        <h1 class="title">Why Choose Us</h1>
        <div id="services-item">
            <?php
            // Services data
            $services = [
                [
                    "image" => "images/home/services/Asset-1.png",
                    "title" => "Highest Quality",
                    "link" => "menu.php#HighestQuality",
                    "description" => "We ensure only the finest tea leaves are selected, crafted with care to deliver exceptional flavor and aroma."
                ],
                [
                    "image" => "images/home/services/Asset-2.png",
                    "title" => "Pure Taste",
                    "link" => "menu.php#PureTaste",
                    "description" => "Experience the authentic taste of nature, free from artificial additives and preservatives."
                ],
                [
                    "image" => "images/home/services/Asset-3.png",
                    "title" => "Natural Ingredients",
                    "link" => "menu.php#NaturalIngredients",
                    "description" => "From classic blends to unique flavored teas, we offer a diverse range to suit every tea lover's preference."
                ],
                [
                    "image" => "images/home/services/Asset-4.png",
                    "title" => "Eco Package",
                    "link" => "menu.php#EcoPackage",
                    "description" => "Our packaging is designed with sustainability in mind, reducing environmental impact while preserving freshness."
                ]
            ];
            
            foreach ($services as $service): ?>
                <div class="service">
                    <aside>
                        <div class="service-inner">
                            <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" <?php if($service['title'] == 'Eco Package') echo 'style="width: 125px;height: 125px;"'; ?>>
                            <h3>
                                <a href="<?php echo $service['link']; ?>" title="<?php echo $service['title']; ?>" style="color: green;"><?php echo $service['title']; ?></a>
                            </h3>
                            <p><?php echo $service['description']; ?></p>
                        </div>
                    </aside>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Product Highlight Section -->
<section id="product-highlight" class="section">
    <div class="highlight-top">
        <h4 class="tagline">Best Seller</h4>
        <h2 class="highlight-title">WE BELIEVE IN PERFECTION IN<br>THE ART OF TEA.</h2>
    </div>

    <div class="highlight-content">
        <div class="features-left">
            <div class="feature-item">
                <img src="images/home/services/Group 15.png" alt="Great Quality">
                <p>Great Quality</p>
            </div>
            <div class="feature-item">
                <img src="images/home/services/Group 17.png" alt="Worldwide Shipping">
                <p>Worldwide Shipping</p>
            </div>
            <div class="feature-item">
                <img src="images/home/services/Group 18.png" alt="Best Seller">
                <p>Best Seller</p>
            </div>
        </div>
    
        <div class="product-image">
            <img src="images/home/services/product.png" alt="product">
            <img src="images/home/services/Asset-5.png" alt="">
        </div>
    
        <div class="features-right">
            <div class="feature-item">
                <img src="images/home/services/Group 16.png" alt="Organic Product">
                <p>Organic Product</p>
            </div>
            <div class="feature-item">
                <img src="images/home/services/Group 19.png" alt="Loyal-Tea Rewards">
                <p>Loyal-Tea Rewards</p>
            </div>
            <div class="feature-item">
                <img src="images/home/services/Group 20.png" alt="Eco Package">
                <p>Eco Package</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section id="featured-products" class="section">
    <div class="container">
        <h5 style="color: #b28850;text-align: center;">HOUSE OF TEA</h5>
        <h2 class="title">Featured Teas</h2>
        <div class="row">
            <?php
            // Featured products data
            $featured_products = [
                [
                    "image" => "images/products/tea1.jpg",
                    "title" => "Black Tea",
                    "description" => "Short description of the tea.",
                    // "url" => "product.php?id=1"
                ],
                [
                    "image" => "images/products/tea2.jpg",
                    "title" => "Flower Tea",
                    "description" => "Short description of the tea.",
                    // "url" => "product.php?id=2"
                ],
                [
                    "image" => "images/products/tea3.jpg",
                    "title" => "Cinnamon Tea",
                    "description" => "Short description of the tea.",
                    // "url" => "product.php?id=3"
                ]
            ];
            
            foreach ($featured_products as $product): ?>
                <div class="col-sm-4">
                    <div class="product-item">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                        <h3><?php echo $product['title']; ?></h3>
                        <p><?php echo $product['description']; ?></p>
                        <a href="#" class="btn btn-secondary" onclick="return false;">View Product</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
// Include footer
include 'partials/footer.php';
?>