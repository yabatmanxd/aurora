<?php 
add_theme_support( 'woocommerce' );

function get_navigation(){
    $templates = array();
    $templates[0] = 'navigation.php';
    return locate_template($templates);
}

add_action( 'wp_enqueue_scripts', 'load_scripts_and_styles');
function load_scripts_and_styles(){
    wp_enqueue_style( 'bootstrap',get_template_directory_uri(  ).'/assets/css/bootstrap.css');
    wp_enqueue_style( 'style',get_template_directory_uri(  ).'/assets/css/style.css');
    wp_enqueue_style( 'flexslider',get_template_directory_uri(  ).'/assets/css/flexslider.css');

    wp_enqueue_script('bootstrap-3.1.1.min',get_template_directory_uri(  ).'/assets/js/bootstrap-3.1.1.min.js',['jquery']);
    wp_enqueue_script('simpleCart.min',get_template_directory_uri(  ).'/assets/js/simpleCart.min.js',['jquery']);
}

add_filter('woocommerce_enqueue_styles','__return_empty_array');