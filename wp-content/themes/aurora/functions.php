<?php
add_theme_support('woocommerce');

include_once 'inc/register_theme_settings.php';
include_once 'inc/register_post_types.php';
include_once 'inc/HeaderMenuWalker.php';
include_once 'inc/enqueue.php';
include_once 'inc/Widgets/widgets.php';

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
    //echo woocommerce_get_product_thumbnail('aurora-main');
    echo woocommerce_get_product_thumbnail('aurora-main');
    echo '</a>'; //Закрываю ссылку продукта
//    echo '<div class="mask"><a href="' . get_the_permalink() . '">Quick View</a></div>';
}

function woocommerce_template_loop_product_title()
{
    if (is_shop()) {
        echo '<a class="product_name" href="'.get_the_permalink().'">' . wp_trim_words(get_the_title(), 5) . '</a>';
    } elseif (is_product_category() || is_product_tag()) {
        echo '<p class="title">'.wp_trim_words(get_the_title(), 5).'</p>';
    }

}

function sale_flash()
{
    return '<div class="offer ontop"><p>40%</p><small>Sale</small></div>';
}


add_filter('woocommerce_sale_flash', 'sale_flash');

add_filter('widget_nav_menu_args', 'customize_menu', '', 4);

function customize_menu($nav_menu_args, $nav_menu, $args, $instance)
{
    if ($args['id'] == 'sidebar_left') {
        $nav_menu_args['menu_class'] = 'product-list';
    } else {
        $nav_menu_args['container'] = false;
        $nav_menu_args['menu_class'] = 'f_nav';
        $nav_menu_args['link_before'] = '<li>';
        $nav_menu_args['link_after'] = '</li>';
    }

    return $nav_menu_args;
}

add_filter('dynamic_sidebar_params', 'customize_dynamic_sidebar');

function customize_dynamic_sidebar($params)
{
    if ($params[0]['id'] == 'sidebar_left' && $params[0]['widget_id'] == 'nav_menu-' . $params[1]['number']) { //Проверяем, что это левый сайдбар и его первый виджет (номер = 1)
        $params[0]['before_title'] = '<h2>';
        $params[0]['after_title'] = '</h2>';
        $params[0]['before_widget'] = '<div class="product-listy">';
        $params[0]['after_widget'] = '</div>';
    }
    return $params;

}

add_action('wp_head', 'change_actions');
function change_actions()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10); //Выводит "вы положили в корзину..." Не нужно
    remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

    if (is_shop()) {
        remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
        remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
        //add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
        remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
    } elseif (is_product_category() || is_product_tag()) {

        remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10); //Обертка не нужна
        add_action('woocommerce_before_shop_loop', 'woocommerce_pagination', 100);
        remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
        remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
        remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
        remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
        remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
        remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    }
}



add_filter('woocommerce_breadcrumb_defaults', 'breadcrumbs_options');

function breadcrumbs_options($args)
{
    $args['wrap_before'] = '<div class="new-product-top"><ul class="product-top-list">';
    $args['wrap_after'] = '</ul>';
    $args['before'] = '<li>';
    $args['after'] = '</li>';
    $args['delimeter'] = '&nbsp;<span>&gt;</span>';
    return $args;
}

// add_filter('woocommerce_catalog_orderby', 'orderby_options');

// function orderby_options($args)
// {
//     return $args;
// }

add_filter('loop_shop_per_page', 'set_pagination', 30);

function set_pagination($arg)
{
    if(isset($_GET['posts_per_page']) && $_GET['posts_per_page'] > 0){
        $num = $_GET['posts_per_page'];
    } else{
        $num = 6;
    }
    return $num;
}
