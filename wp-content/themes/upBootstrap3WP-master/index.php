<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */

get_header(); ?>
	<div class="container">

		<div class="slider">
			<div class="row">
				<div class="col-md-9">
					
						<div id="wowslider-container5">
							<div class="ws_images"><ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post1.png" alt="Post1" title="Post1"/>Post 1</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post2.png" alt="Post2" title="Post2" />Post 2</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post3.png" alt="Post3" title="Post3" />image3</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post4.png" alt="Post4" title="Post4" />image 4</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post5.png" alt="Post5" title="Post5" />image 5</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post6.png" />image 6</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/post7.png" />image 7</li>
								</ul>
							</div>
							<div class="ws_thumbs">
								<div>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post1.png" /></a>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post2.png" /></a>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post3.png" /></a>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post4.png" /></a>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post5.png" /></a>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post6.png" /></a>
									<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/post7.png" /></a>
								</div>
							</div>
						</div>
					
				</div>
				<div class="col-md-3">
					<div class="bg-white">
						<div class="subscribe-widget">
							<div class="subscribe">
								<input type="text" name="subscribe-text" placeholder="Type your email here" class="input-subscribe">
								<button type="button" class="btn btn-warning btn-subscribe">SUBSCRIBE US</button>
							</div>
						</div>

						<div class="line-white"></div>

						<div class="newest">
							<div class="newest-title" style="padding-top: 10px;">
								<center><p>Artikel Terbaru</p></center>
							</div>

							<div class="line-white" style="border-top-width: 5px;"></div>

							<div class="sub-newest">															
								<p>13.05 Dampak Social Media</p>
								<p>12.56 Pro Kontra UU ITE</p>
								<p>11.47 Profil Ruby On Rail</p>
								<p>10.45 Mengulas 4G/LTE</p>
								<p>09.55 Serangan Virus</p>
								<p>09.14 Evolusi E-Commerce</p>							
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="line"></div>
		</div>

		<div class="call-to-action">
			<div class="row">
				<div class="col-md-4">
					<div class="category">
						<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-apply.png" /></center></p>
							<center>
								<h3>Daftar</h3>
								<p>
									Bergabung dengan kami untuk berbagi pengetahuan dan pengalaman seputar teknologi informasi untuk kehidupan sehari-hari.
								</p>
								<button type="button" class="btn btn-primary btn-category">REGISTER</button>
							</center>
					</div>
				</div>

				<div class="col-md-4">
				 	<div class="category">
				 		<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-write.png" /></center></p>
							<center>
								<h3>Tulis</h3>
								<p>
									Buatlah tulisan dan pengalaman yang berkaitan dengan perkembangan teknologi untuk berbagi dengan orang banyak.
								</p>
								<!-- <button type="button" class="btn btn-primary btn-category">BUAT TULISAN</button> -->
								<a href="http://localhost/weducate/wp-admin/" class="btn btn-primary btn-category">BUAT TULISAN</a>
							</center>
				 	</div>
				</div>

				<div class="col-md-4">
				 	<div class="category">
				 		<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-discuss.png" /></center></p>
							<center>
								<h3>Diskusi</h3>
								<p>
									Bergabunglah dengan komunitas dari berbagai tempat untuk membahas topik-topik terkini mengenai teknologi informasi.
								</p>
								<a href="http://localhost/weducate/?page_id=8" class="btn btn-primary btn-category">IKUT DISKUSI</a>
							</center>
				 	</div>
				</div>
			</div>
		</div>
	</div><!-- .container -->
<?php get_footer(); ?>