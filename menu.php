<?php
// Define site title for this page
$site_title = "AB Natural Products";

// Include header
include 'partials/header.php';
?>

<!-- Page Header -->
<div class="page-header">
    <figure class="post-thumbnail">
        <img alt="Products" src="./images/menus/menus.jpg">
    </figure>
    <h1 class="title"><span class="line-title">Products<i class="fa">&#xf111;</i></span></h1>
</div>

<div class="page-content">
    <div id="menus" class="menus">
        <section id="products" class="section">
            <div class="container">
                <div class="row">
                    <?php
                    // Product data
                    $products = [
                        [
                            "image" => "images/products/tea1.jpg",
                            "title" => "Black Tea",
                            "description" => "Short description of the tea.",
                            "url" => "product.php?id=1"
                        ],
                        [
                            "image" => "images/products/tea2.jpg",
                            "title" => "Flower Tea",
                            "description" => "Short description of the tea.",
                            "url" => "product.php?id=2"
                        ],
                        [
                            "image" => "images/products/tea3.jpg",
                            "title" => "Cinnamon Tea",
                            "description" => "Short description of the tea.",
                            "url" => "product.php?id=3"
                        ]
                    ];
                    
                    // Loop through products
                    foreach ($products as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-item">
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                                <h3><?php echo $product['title']; ?></h3>
                                <p><?php echo $product['description']; ?></p>
                                <a href="<?php echo $product['url']; ?>" class="btn btn-secondary">View Product</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
// Include footer
include 'partials/footer.php';
?>