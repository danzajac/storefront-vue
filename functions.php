<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Helper paths
define('BB_TEMPLATES_PATH', get_stylesheet_directory() . '/inc/templates/');

require_once get_stylesheet_directory() . '/inc/helper-functions.php';
require_once get_stylesheet_directory() . '/inc/wp-enqueue.php';
require_once get_stylesheet_directory() . '/inc/hooks/acf.php';
require_once get_stylesheet_directory() . '/inc/hooks/cart.php';
require_once get_stylesheet_directory() . '/inc/hooks/images.php';
require_once get_stylesheet_directory() . '/inc/hooks/checkout.php';
require_once get_stylesheet_directory() . '/inc/hooks/vue-wraps.php';
require_once get_stylesheet_directory() . '/inc/hooks/my-account.php';
require_once get_stylesheet_directory() . '/inc/hooks/admin-order.php';
require_once get_stylesheet_directory() . '/inc/hooks/single-product.php';
require_once get_stylesheet_directory() . '/inc/ajax/image-upload.php';
