<?php
include_once 'inc/register_theme_settings.php';
include_once 'inc/register_post_types.php';
include_once 'inc/HeaderMenuWalker.php';
include_once 'inc/enqueue.php';
include_once 'inc/widgets.php';

add_theme_support('woocommerce');

function get_navigation()
{
    $templates = array();
    $templates[0] = 'navigation.php';
    return locate_template($templates, true);
}

add_filter('woocommerce_enqueue_styles', '__return_empty_array');

register_nav_menus([
    'header_menu' => 'Верхнее меню',
    'footer_menu' => 'Нижнее меню',
]);
add_image_size('aurora-main', 277, 396, false);

function woocommerce_template_loop_product_thumbnail()
{
    echo woocommerce_get_product_thumbnail('aurora-main');
    echo '</a>'; //Закрываю ссылку продукта
    echo '<div class="mask"><a href="'.get_the_permalink().'">Quick View</a></div>';
}

function woocommerce_template_loop_product_title() {
    echo '<a class="product_name" href="single.html">'.get_the_title().'</a>';
}

function sale_flash()
{
    return '<div class="offer ontop"><p>40%</p><small>Sale</small></div>';
}

add_filter('woocommerce_sale_flash', 'sale_flash');