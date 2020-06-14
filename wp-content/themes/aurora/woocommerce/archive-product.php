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
<div class="other-products">
    <div class="container">
        <h3 class="like text-center">Featured Collection</h3>
        <ul id="flexiselDemo3">
            <li><a href="single.html"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/l1.jpg"
                        class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/l2.jpg"
                        class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">praising pain</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/l3.jpg"
                        class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Neque porro</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/l4.jpg"
                        class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">equal blame</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/l5.jpg"
                        class="img-responsive" alt="" /></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
                </div>
            </li>
        </ul>
        <script type="text/javascript">
        jQuery(window).load(function() {
            jQuery("#flexiselDemo3").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });

        });
        </script>
    </div>
</div>
<?php do_action('woocommerce_after_main_content')?>
<!-- content-section-ends-here -->
<?php get_footer()?>