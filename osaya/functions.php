<?php
function osaya_register_styles()
{
    wp_enqueue_style('osaya-style', get_template_directory_uri() . "/style.css", array(), 'all');
    wp_enqueue_style('osaya-jquery', get_template_directory_uri() . "/assets/llib/bxslider/jquery.bxslider.min.css", 'all');
    wp_enqueue_style('osaya-common', get_template_directory_uri() . "/assets/css/common.css", 'all');
    wp_enqueue_style('osaya-index', get_template_directory_uri() . "/assets/css/index.css", 'all');
    wp_enqueue_style('osaya-blog-detail2', get_template_directory_uri() . "/assets/css/blog-detail2.css", 'all');
    wp_enqueue_style('osaya-blog-detail', get_template_directory_uri() . "/assets/css/blog-detail.css", 'all');
    wp_enqueue_style('osaya-cafeshop', get_template_directory_uri() . "/assets/css/cafe-shop.css", 'all');
    wp_enqueue_style('osaya-product-list', get_template_directory_uri() . "/assets/css/product-list.css", 'all');
}




add_action('wp_enqueue_scripts', 'osaya_register_styles');

//add_action( 'wp_enqueue_scripts' , 'osaya_register_script');

?>

<?php
function osaya_register_script()
{
    wp_enqueue_script('osaya-jquery', get_template_directory_uri() . "/assets/js/jquery-1.11.0.min.js", array(),  true);
    wp_enqueue_script('osaya-jquery2', get_template_directory_uri() . "/assets/jllib/bxslider/jquery.bxslider.min.js",  true);
    wp_enqueue_script('osaya-script', get_template_directory_uri() . "/assets/js/script.js",  true);
}

//add_action( 'wp_enqueue_scripts' , 'osaya_register_script');


?>




<?php

add_theme_support('post-thumbnails');
?>

<?php
if (!function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}
?>





<?php

remove_action('set_comment_cookies', 'wp_set_comment_cookies');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

?>

<?php
function nd_dosth_theme_setup()
{

    // Add <title> tag support
    add_theme_support('title-tag');

    // Add custom-logo support
    add_theme_support('custom-logo');

    // Register Navigation Menus
    register_nav_menus(array(
        'header'   => 'Display this menu in Header',
        'footer'   => 'Display this menu in Footer',
    ));
}
add_action('after_setup_theme', 'nd_dosth_theme_setup');

?>



<?php
function mg_news_pagination_rewrite()
{
    add_rewrite_rule(get_option('category_base') . '/page/?([0-9]{1,})/?$', 'index.php?pagename=' . get_option('category_base') . '&paged=$matches[1]', 'top');
}
add_action('init', 'mg_news_pagination_rewrite');
?>





