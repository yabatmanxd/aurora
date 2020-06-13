<?php
$slides = new WP_Query([
    'post_type' => 'slide'
]);
?>
<?php if ($slides->have_posts()):?>
<div class="banner">
    <div class="container">
        <div class="banner-bottom">
            <div class="banner-bottom-left">
                <h2>B<br>U<br>Y</h2>
            </div>
            <div class="banner-bottom-right">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <?php while ($slides->have_posts()): $slides->the_post()?>
                        <li>
                            <div class="banner-info">
                                <h3><?php the_title()?></h3>
                                <p><?php the_content()?></p>
                            </div>
                        </li>
                        <?php endwhile?>                        
                    </ul>
                </div>
                <!--banner-->
                <script>
                // You can also use "$(window).load(function() {"
                // Slideshow 4
                jQuery("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
                </script>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="shop">
            <a href="<?php echo get_option('slider_btn_url') ?>"><?php echo get_option('slider_btn_title') ?></a>
        </div>
    </div>
</div>
<?php endif;?>