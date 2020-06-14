<?php
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets(){

	register_sidebar( array(
		'name'          => "Сайдбар под баннером",
		'id'            => "sidebar_contacts",
		'description'   => 'Follow us, shipping, phone number',
		'before_widget' => '',
		'after_widget'  => ""		
	) );
}
?>