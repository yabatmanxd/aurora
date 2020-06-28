<?php defined( 'ABSPATH' ) || exit;
global $product;
?>
<div class="col-md-4 product simpleCart_shelfItem text-center">
    <?php do_action('woocommerce_before_shop_loop_item') //Открывает ссылку на продукт ?>

    <?php do_action('woocommerce_before_shop_loop_item_title') //Работа с распродажей и миниатюрой товара?>
    <?php do_action('woocommerce_shop_loop_item_title') // Просто выводит заголовок товара?>
    <?php do_action('woocommerce_after_shop_loop_item_title') // Цена и рейтинг товара. 
    //Закомментировано, т.к. рейтинга нет, а цена объединена в один шаблон с добавлением в корзину?>

    <?php do_action('woocommerce_after_shop_loop_item') //Закрывает ссылку на продукт и подключает добавление в корзину. Очень важный экшн! ?>
    
</div>
