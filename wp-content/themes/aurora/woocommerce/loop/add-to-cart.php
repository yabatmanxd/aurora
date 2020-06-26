<?php defined('ABSPATH') || exit;?>
<?php
global $product;
if (is_shop()) {
    if ($price_html = $product->get_price_html()) {
        echo apply_filters('woocommerce_add_to_cart_link',
            sprintf('<p><a href="%s" data-quantity="%s" data-product_id="%s" data-product-sku="%s" class="item_add %s"><i></i> <span class="item_price">%s</span></a></p>',
                esc_url($product->add_to_cart_url()),
                esc_attr(isset($quantity) ? $quantity : 1),
                esc_attr($product->get_id()),
                esc_attr($product->get_sku()),
                esc_attr(isset($class) ? $class : 'button'),
                $price_html
            ));
    }
} elseif (is_product_category() || is_product_tag()) {
    echo apply_filters('woocommerce_add_to_cart_link',
        sprintf('<a href="%s" data-quantity="%s" data-product_id="%s" data-product-sku="%s" class="cbp-vm-icon cbp-vm-add item_add %s">Добавить в корзину</a>',
            esc_url($product->add_to_cart_url()),
            esc_attr(isset($quantity) ? $quantity : 1),
            esc_attr($product->get_id()),
            esc_attr($product->get_sku()),
            esc_attr(isset($class) ? $class : 'button'),
        ));
}
