<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
if(is_product_category() || is_product_tag()) :?>
<div class="pricey"><span
        class="item_price"><?php if($price_html = $product->get_price_html()) echo $price_html?></span>
</div>
<?php endif ?>