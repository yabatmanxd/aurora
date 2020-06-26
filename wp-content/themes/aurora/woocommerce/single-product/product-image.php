<?php

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
    return;
}

global $product;

$columns = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$attachment_ids = $product->get_gallery_image_ids();
?>

<div class="col-md-5 zoom-grid">
    <div class="flexslider">
        <ul class="slides">
            <?php if(count($attachment_ids)>0): ?>
            <?php foreach($attachment_ids as $attachment_id): $image_link = wp_get_attachment_url( $attachment_id ); ?>
            <li data-thumb="<?php echo $image_link ?>">
                <div class="thumb-image"> <img src="<?php echo $image_link ?>" data-imagezoom="true"
                        class="img-responsive" alt="" /> </div>
            </li>
            <?php endforeach ?>
            <?php else: $image_link = get_the_post_thumbnail_url($product->get_id(), 'aurora-main')?>
            <li data-thumb="<?php echo $image_link ?>">
                <div class="thumb-image"> <img src="<?php echo $image_link ?>" data-imagezoom="true"
                        class="img-responsive" alt="" /> </div>
            </li>
            <?php endif ?>
        </ul>
    </div>
</div>