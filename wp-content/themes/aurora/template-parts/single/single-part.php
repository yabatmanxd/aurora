<div class="container">
		<div class="products-page">
			<?php get_sidebar() ?>			
			<?php while(have_posts()) : the_post() ?>
			<?php global $product;?>
			<div class="new-product">
				<?php do_action('woocommerce_before_single_product_summary') ?>
				
				<div class="col-md-7 dress-info">
						<?php do_action( 'woocommerce_single_product_summary' ); ?>
						<span>$459.00</span>
						<div class="clearfix"></div>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard dummy text ever</p>
					</div>
					<div class="span span1">
						<p class="left">FABRIC ORIGIN</p>
						<p class="right">Japan</p>
						<div class="clearfix"></div>
					</div>
					<div class="span span2">
						<p class="left">MADE IN</p>
						<p class="right">China</p>
						<div class="clearfix"></div>
					</div>
					<div class="span span3">
						<p class="left">COLOR</p>
						<p class="right">White</p>
						<div class="clearfix"></div>
					</div>
					<div class="span span4">
						<p class="left">SIZE</p>
						<p class="right"><span class="selection-box"><select class="domains valid" name="domains">
									<option>M</option>
									<option>L</option>
									<option>XL</option>
									<option>FS</option>
									<option>S</option>
								</select></span></p>
						<div class="clearfix"></div>
					</div>
					<div class="purchase">
						<a href="#">Purchase Now</a>
						<div class="social-icons">
							<ul>
								<li><a class="facebook1" href="#"></a></li>
								<li><a class="twitter1" href="#"></a></li>
								<li><a class="googleplus1" href="#"></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php
					wp_enqueue_script('imagezoom', get_template_directory_uri() . '/assets/js/imagezoom.js');
					wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
					?>					
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function () {
							$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
							});
						});
					</script>
				</div>
				<div class="clearfix"></div>
				<div class="reviews-tabs">
					<!-- Main component for a primary marketing message or call to action -->
					<ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
						<li class="test-class active"><a class="deco-none misc-class" href="#how-to"> More
								Information</a></li>
						<li class="test-class"><a href="#features">Specifications</a></li>
						<li class="test-class"><a class="deco-none" href="#source">Reviews (7)</a></li>
					</ul>

					<div class="tab-content responsive hidden-xs hidden-sm">
						<div class="tab-pane active" id="how-to">
							<p class="tab-text">Maecenas mauris velit, consequat sit amet feugiat rit, elit vitaeert
								scelerisque elementum, turpis nisl accumsan ipsum Lorem Ipsum is simply dummy text of
								the printing and typesetting industry. and scrambled it to make a type specimen book. It
								has survived Auction your website on Flippa and you'll get the best price from serious
								buyers, dedicated support and a much better deal than you'll find with any website
								broker. Sell your site today I need a twitter bootstrap 3.0 theme for the full-calendar
								plugin. it would be great if the theme includes the add event; remove event, show event
								details. this must be RESPONSIVE and works on mobile devices. Also, I've seen so many
								bootstrap themes that comes up with the fullcalendar plugin. However these . </p>
						</div>
						<div class="tab-pane" id="features">
							<p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh
								urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed
								sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a
								facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.This
								tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum
								nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit.
								Vestibulum nibh urna, Vestibulum nibh urna,it.</p>
							<p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
								variations of passages of Lorem Ipsum available,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="tab-pane" id="source">
							<div class="response">
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>MARCH 21, 2015</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>MARCH 26, 2054</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>MAY 25, 2015</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>FEB 13, 2015</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>JAN 28, 2015</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>APR 18, 2015</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/icon1.png" alt="" />
										</a>
										<h5><a href="#">Username</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
											variations of passages of Lorem Ipsum available,
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>DEC 25, 2014</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile?>
			<div class="clearfix"></div>
		</div>
	</div>