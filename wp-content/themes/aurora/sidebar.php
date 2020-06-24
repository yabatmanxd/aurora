<div class="products">
    <?php dynamic_sidebar('sidebar_left')?>
    <!-- <div class="latest-bis">
        <img src="images/l4.jpg" class="img-responsive" alt="" />
        <div class="offer">
            <p>40%</p>
            <small>Top Offer</small>
        </div>
    </div> -->
    <?php    
    $tags = get_terms([
        'taxonomy' => 'product_tag',
        'hide_empty' => false,
    ]);
    ?>
    <?php if(is_array($tags) && count($tags) >0) :?>
    <div class="tags">
        <h4 class="tag_head">Облако тегов</h4>
        <ul class="tags_links">
            <?php foreach($tags as $tag):?>
            <li><a href="<?php echo get_term_link($tag)?>"><?php echo $tag->name?></a></li>
            <?php endforeach?>
        </ul>
    </div>
    <?php endif?>

</div>