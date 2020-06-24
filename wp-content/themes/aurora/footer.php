<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>Поск товаров</h6>
            <div class="sub-left-right">
                <form>
                    <input name="s" type="text" value="Поиск" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Введите запрос';}" />
                    <input type="submit" value="НАЙТИ" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <?php dynamic_sidebar('sidebar_footer')?>                        
        </div>
        <div class="cards text-center">
            <img src="<?php echo get_template_directory_uri(  ).'/assets/'?>images/cards.jpg" alt="" />
        </div>
        <div class="copyright text-center">
            <p>© 2015 Eshop. All Rights Reserved | Design by <a href="http://w3layouts.com"> W3layouts</a></p>
        </div>
    </div>
</div>
<?php wp_footer(  );?>
</body>
</html>