<?php
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
add_action('init', 'register_post_types');
?>