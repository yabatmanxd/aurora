<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<?php get_navigation()?>
<?php wc_get_template_part('template-parts/single/single-part') ?>
<?php get_footer()?>