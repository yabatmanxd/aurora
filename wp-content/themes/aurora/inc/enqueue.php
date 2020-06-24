<?php
add_action('wp_enqueue_scripts', 'load_scripts_and_styles',9);
function load_scripts_and_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');

    if(is_product_category()){
        wp_enqueue_script('posts-per-page-form', get_template_directory_uri() . '/assets/js/posts-per-page-form.js', ['jquery'],false,true);
        wp_enqueue_style('component', get_template_directory_uri() . '/assets/css/component.css');
    }


    wp_enqueue_script('bootstrap-3.1.1.min', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', ['jquery']);
    wp_enqueue_script('simpleCart.min', get_template_directory_uri() . '/assets/js/simpleCart.min.js', ['jquery']);
    wp_enqueue_script('responsiveslides.min', get_template_directory_uri() . '/assets/js/responsiveslides.min.js', ['jquery']);
    wp_enqueue_script('jquery.flexisel', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', ['jquery']);
    wp_enqueue_script('wc-add-to-cart', get_template_directory_uri() . '/assets/js/add-to-cart.js', ['jquery'],WC_VERSION,true);
}

?>