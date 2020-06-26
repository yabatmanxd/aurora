<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header();
?>
<?php get_navigation()?>

<!-- content-section-starts -->
<div class="container">
    <div class="products-page">
        <?php get_sidebar()?>
        <div class="new-product">
        <?php do_action('woocommerce_before_main_content'); ?>
            <div class="mens-toolbar">                
                <?php do_action( 'woocommerce_before_shop_loop'); ?>            
                <div class="clearfix"></div>
            </div>
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <div class="cbp-vm-options">
                    <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid"
                        title="grid">Grid View</a>
                    <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List
                        View</a>
                </div>
                <div class="pages">
                    <div class="limiter visible-desktop">
                    <form id="ppp-form"></form>
                        <label>Show</label>
                        <select id="ppp-select" name="posts_per_page">
                            <option value="3" <?php if(isset($_GET['posts_per_page']) && $_GET['posts_per_page'] == 3): ?>selected="selected"<?php endif?>>3</option>
                            <option value="6" <?php if(!isset($_GET['posts_per_page']) || $_GET['posts_per_page'] == 6): ?>selected="selected"<?php endif?>>6</option>
                            <option value="10" <?php if(isset($_GET['posts_per_page']) && $_GET['posts_per_page'] == 10): ?>selected="selected"<?php endif?>>10</option>
                        </select> per page
                    </div>
                </div>
                <div class="clearfix"></div>
                <?php if(have_posts()): ?>
                <ul>
                    <?php while(have_posts()): the_post()?>
                    <?php global $product;?>
                    <li>
                        <a class="cbp-vm-image" href="<?php echo get_permalink($product->get_id())?>">
                        <?php do_action('woocommerce_before_shop_loop_item') ?>
                            <div class="simpleCart_shelfItem">
                                <div class="view view-first">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="<?php echo get_the_post_thumbnail_url($product->get_id(), 'aurora-main') ?>"
                                                class="img-responsive" alt="product" />
                                            <div class="mask">
                                                <div class="info">Quick View</div>
                                            </div>
                                            <div class="product_container">
                                                <?php do_action('woocommerce_before_shop_loop_item_title') ?>
                                                <div class="cart-left">
                                                    <?php do_action('woocommerce_shop_loop_item_title')?>
                                                </div>
                                                <?php do_action('woocommerce_after_shop_loop_item_title') ?>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="cbp-vm-details">
                            <?php echo wp_trim_words($product->get_description(), 10)?>
                        </div>
                        <?php do_action('woocommerce_after_shop_loop_item') ?>
                    </li>
                    <?php endwhile ?>
                    <?php do_action('woocommerce_after_shop_loop')?>
                </ul>
                <?php else: echo "В данной категории товары отсутствуют" ?>
                <?php endif ?>
            </div>
            <?php 
			wp_enqueue_script('cbpViewModeSwitch', get_template_directory_uri() . '/assets/js/cbpViewModeSwitch.js');
			wp_enqueue_script('classie', get_template_directory_uri() . '/assets/js/classie.js');
		?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- content-section-ends -->
<?php get_footer()?>