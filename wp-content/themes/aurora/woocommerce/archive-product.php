<?php get_header()?>
<?php get_navigation()?>
<?php get_template_part('template-parts/home/banner')?>
<!-- content-section-starts-here -->
<?php do_action('woocommerce_before_main_content')?>
<?php dynamic_sidebar('sidebar_contacts')?>
<?php
global $products_query;
$products_query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 9
]);
?>
<?php if($products_query->have_posts()):?>
<?php woocommerce_product_loop_start()?>
<?php while($products_query->have_posts()) : $products_query->the_post()?>
<?php get_template_part('template-parts/home/recent-products')?>
<?php endwhile;?>
<?php woocommerce_product_loop_end();?>
<?php endif;?>
<?php get_sidebar('featured')?>
<?php do_action('woocommerce_after_main_content')?>
<!-- content-section-ends-here -->
<?php get_footer()?>