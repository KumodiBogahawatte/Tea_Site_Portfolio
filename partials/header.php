<?php
// header.php - Include this at the beginning of each page
// Define site variables if not already defined
if (!isset($site_title)) {
    $site_title = "AB Natural Products";
}

// Set current page for navigation highlighting
$current_page = basename($_SERVER['PHP_SELF']);

// Navigation items with dynamic active state
$navigation_items = [
    ["url" => "index.php", "title" => "Home", "active" => ($current_page == "index.php")],
    ["url" => "about.php", "title" => "About", "active" => ($current_page == "about.php")],
    ["url" => "menu.php", "title" => "Products", "active" => ($current_page == "menu.php")],
    ["url" => "contact.php", "title" => "Contact", "active" => ($current_page == "contact.php")]
];

// Function to generate navigation
function generateNavigation($items) {
    $html = '';
    foreach ($items as $item) {
        $active_class = $item['active'] ? 'active' : '';
        $html .= '<li class="' . $active_class . '"><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
    }
    return $html;
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $site_title; ?></title>
<meta name="description" content="Pure Ceylon Tea, Handpicked with Care">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link type="text/css" rel="stylesheet" href="../../css.css?family=Playfair+Display:400,700">
<link href='../../css-1.css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="./assets/css/animate.css">
<link rel="stylesheet" href="./assets/css/hover.css">
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/nivo-slider.css">
<link rel="stylesheet" href="./assets/css/flickity.min.css">
<link rel="stylesheet" href="./assets/css/main.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<link rel="stylesheet" href="./assets/css/color/default.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<script src="./assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="loadpage <?php echo pathinfo($current_page, PATHINFO_FILENAME); ?> style-v1">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="wrap">
        <!-- Header -->
        <header id="header" class="header">
            <div class="header-inner">
                <div class="container">
                    <!-- Top Header -->
                    <div class="header-top">
                        <div class="row">
                            <div class="col-sm-4 header-left col-xs-6">
                                <!-- Left header space -->
                            </div>
                            <div class="col-sm-4 header-right col-sm-push-4 col-xs-6">
                                <!-- Right header space -->
                            </div>
                            
                            <!-- Logo -->
                            <div id="logo" class="col-sm-4 logo col-sm-pull-4">
                                <a href="index.php"><img alt="<?php echo $site_title; ?>" src="./assets/imgs/logo.png" style="width: 100px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Menu -->
                <nav id="primary-navigation" class="navbar" role="navigation">
                    <div class="navbar-inner">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span>
                            </button>
                            <h3 class="navbar-brand">Menu</h3>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <?php echo generateNavigation($navigation_items); ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            
            <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
            <!-- Banner (only on homepage) -->
            <div id="banner">
                <div class="slider-wrapper">
                    <div class="nivoSlider">
                        <img src="./images/home/slider/slider-1.jpg" alt="" title="#nivoCaption-1"> 
                        <img src="./images/home/slider/slider-2.jpg" alt="" title="#nivoCaption-2"> 
                        <img src="./images/home/slider/slider-3.jpg" alt="" title="">
                    </div>
                    <div id="nivoCaption-1" class="nivo-html-caption">
                        <div class="nivo-caption-img-1 animated animation-delay-50" data-animate="fadeInUp">
                            <img alt="" src="./images/home/slider/img-1.png">
                        </div>
                        <div class="nivo-caption-img-2 animated" data-animate="fadeInUp">
                            <img alt="" src="./images/home/slider/img-2.png">
                        </div>
                        <div class="nivo-caption-content">
                            <h1 class="line-title title animated animation-delay-75" data-animate="fadeInUp">
                                Quality tea production<i class="fa">&#xf111;</i>
                            </h1>
                            <p class="desc animated animation-delay-100" data-animate="fadeInUp">Tea craftsmanship is an art of flavor and purity, rooted in tradition and sustainability. &amp; respectful</p>
                        </div>
                    </div>
                    <div id="nivoCaption-2" class="nivo-html-caption">
                        <div class="nivo-caption-img-1 animated" data-animate="fadeInUp">
                            <img alt="" src="./images/home/slider/img-3.png">
                        </div>
                        <div class="nivo-caption-img-2 animated animation-delay-50" data-animate="fadeInUp">
                            <img alt="" src="./images/home/slider/img-4.png">
                        </div>
                        <div class="nivo-caption-content">
                            <h1 class="line-title title animated animation-delay-75" data-animate="fadeInUp">
                                Brewed to Perfection<i class="fa">&#xf111;</i>
                            </h1>
                            <p class="desc animated animation-delay-100" data-animate="fadeInUp">Grown traditionally, harvested naturally, and blended with care—every sip tells a story.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </header>

        <div id="main-content" class="main-content">