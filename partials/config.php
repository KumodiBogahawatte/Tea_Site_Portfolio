<?php
/**
 * Configuration file for AB Natural Products website
 * Central place to store site-wide settings and configurations
 */

// Site information
define('SITE_TITLE', 'AB Natural Products');
define('SITE_DESCRIPTION', 'Pure Ceylon Tea, Handpicked with Care');
define('SITE_EMAIL', 'abnaturalproducts@gmail.com');
define('SITE_PHONE', '+94 77 500 8031');
define('SITE_ADDRESS', '18/25, Dewasurendra Place, Galle, Sri Lanka');
define('COMPANY_FOUNDED', '2023');

// Database configuration (uncomment and update when connecting to a database)
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'abnaturaldb');
// define('DB_USER', 'username');
// define('DB_PASS', 'password');

// Email settings (for contact form)
define('CONTACT_EMAIL', 'contact@abnaturalproducts.com');

// Social media URLs
$social_media = [
    'facebook' => '#',
    'twitter' => '#',
    'instagram' => '#',
    'pinterest' => '#'
];

// Navigation menu items
$nav_items = [
    ["url" => "index.php", "title" => "Home"],
    ["url" => "about.php", "title" => "About"],
    ["url" => "menu.php", "title" => "Products"],
    ["url" => "contact.php", "title" => "Contact"]
];

/**
 * Helper function to convert URL to active state
 */
function is_current_page($url) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($url === $current_page);
}

/**
 * Get page title based on current page
 */
function get_page_title() {
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    $titles = [
        'index' => SITE_TITLE . ' - Home',
        'about' => SITE_TITLE . ' - About Us',
        'menu' => SITE_TITLE . ' - Our Products',
        'contact' => SITE_TITLE . ' - Contact Us',
        'product' => SITE_TITLE . ' - Product Details'
    ];
    
    return isset($titles[$current_page]) ? $titles[$current_page] : SITE_TITLE;
}

/**
 * Sanitize user input
 */
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}