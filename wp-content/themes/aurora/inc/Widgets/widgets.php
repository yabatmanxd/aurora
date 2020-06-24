<?php
include_once 'Featured/FeaturedWidget.php';
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets(){

	register_sidebar( array(
		'name'          => "Сайдбар под баннером",
		'id'            => "sidebar_contacts",
		'description'   => 'Follow us, shipping, phone number',
		'before_widget' => '',
		'after_widget'  => ""		
	) );

	register_sidebar( array(
		'name'          => "Сайдбар избранных товаров",
		'id'            => "sidebar_featured",
		'description'   => 'Избранная коллекция товаров',
		'before_widget' => '',
		'after_widget'  => ""		
	) );

	register_sidebar( array(
		'name'          => "Футер",
		'id'            => "sidebar_footer",
		'description'   => 'Меню в футере',
		'before_widget' => '<div class="col-md-3 span1_of_4">',
		'after_widget'  => "</div>",
		'before_title'	=> '<h4>',		
		'after_title'	=> '</h4>',		
	) );

	register_sidebar( array(
		'name'          => "Левый сайдбар",
		'id'            => "sidebar_left",
		'description'   => 'Левый сайдбар',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'	=> '',		
		'after_title'	=> '',		
	) );

	register_widget('FeaturedWidget');
}
?>