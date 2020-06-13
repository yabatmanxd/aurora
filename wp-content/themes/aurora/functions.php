<?php
add_theme_support('woocommerce');

function get_navigation()
{
    $templates = array();
    $templates[0] = 'navigation.php';
    return locate_template($templates, true);
}

add_action('wp_enqueue_scripts', 'load_scripts_and_styles');
function load_scripts_and_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');

    //wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-3.1.1.min', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', ['jquery']);
    wp_enqueue_script('simpleCart.min', get_template_directory_uri() . '/assets/js/simpleCart.min.js', ['jquery']);
    wp_enqueue_script('responsiveslides.min', get_template_directory_uri() . '/assets/js/responsiveslides.min.js', ['jquery']);
    wp_enqueue_script('jquery.flexisel', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', ['jquery']);
}

add_filter('woocommerce_enqueue_styles', '__return_empty_array');

add_action('admin_menu', 'register_theme_settings');
function register_theme_settings()
{
    add_settings_field('phone', 'Номер телефона', 'text_option_callback', 'discussion', 'default', [
        'option_name' => 'phone',
    ]);
    register_setting('discussion', 'phone');

    add_settings_field('slider_btn_url', 'Ссылка кнопки слайдера', 'text_option_callback', 'general', 'default', [
        'option_name' => 'slider_btn_url',
    ]);
    register_setting('general', 'slider_btn_url');

    add_settings_field('slider_btn_title', 'Заголовок кнопки слайдера', 'text_option_callback', 'general', 'default', [
        'option_name' => 'slider_btn_title',
    ]);
    register_setting('general', 'slider_btn_title');
}
function text_option_callback($val)
{ //коллбек для настроек в виде текста
    ?>
	<input type="text" name="<?php echo $val['option_name'] ?>" value="<?php esc_attr(get_option($val['option_name']))?>">
<?php }

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('slide', array(
        'labels' => array(
            'name' => 'Слайды', // Основное название типа записи
            'singular_name' => 'Слайд', // отдельное название записи типа Slide
            'add_new' => 'Добавить новый',
            'add_new_item' => 'Добавить новый слайд',
            'edit_item' => 'Редактировать слайд',
            'new_item' => 'Новый слайд',
            'view_item' => 'Посмотреть слайд',
            'search_items' => 'Найти слайд',
            'not_found' => 'Слайдов не найдено',
            'not_found_in_trash' => 'В корзине слайдов не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Слайды',

        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 25,
        'supports' => array('title', 'editor'),
    ));
}

register_nav_menus([
    'header_menu' => 'Верхнее меню',
    'footer_menu' => 'Нижнее меню',
]);

include_once "inc/HeaderMenuWalker.php";