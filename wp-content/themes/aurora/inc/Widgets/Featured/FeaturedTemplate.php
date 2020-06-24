<h3 class="like text-center"><?php echo $title?></h3>
<?php 
$tax_query[] = array(
    'taxonomy' => 'product_visibility',
    'field'    => 'name',
    'terms'    => 'featured',
    'operator' => 'IN', // or 'NOT IN' to exclude feature products
);
$featured_products = new WP_Query([
    'post_type' => 'product',
    'tax_query' => $tax_query,
    'featured' => 'true',
    'orderby' => 'ID',
    'order' => 'DESC'
]);
?>
<?php if($featured_products->have_posts()): ?>
<ul id="flexiselDemo3">
    <?php while($featured_products->have_posts()) : $featured_products->the_post()?>
    <li>
        <a href="<?php the_permalink()?>">
            <?php the_post_thumbnail('woocommerce_thumbnail', ['class' => 'img-responsive'])?>
        </a>
        <div class="product liked-product simpleCart_shelfItem">
            <a class="like_name" href="single.html"><?php echo $title?></a>
            <?php
            global $product;
            $class = implode(
					' ',
					array_filter(
						array(
							'button',
							'product_type_' . $product->get_type(),
							$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
							$product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
						)
					)
				)?>
            <?php if($price_html = $product->get_price_html()){
                echo apply_filters('woocommerce_add_to_cart_link',
                sprintf('<p><a href="%s" data-quantity="%s" data-product_id="%s" data-product-sku="%s" class="item_add %s"><i></i> <span class="item_price">%s</span></a></p>',
                    esc_url($product->add_to_cart_url()),
                    esc_attr(isset($quantity) ? $quantity : 1),
                    esc_attr($product->get_id()),
                    esc_attr($product->get_sku()),
                    esc_attr(isset($class) ? $class : 'button'),
                    $price_html
                ));                
            }?>
        </div>
    </li>
    <?php endwhile?>
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
<?php
else:
echo 'Продуктов нет';
?>
<?php endif?>