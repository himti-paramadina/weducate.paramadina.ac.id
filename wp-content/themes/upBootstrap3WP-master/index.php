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
					
						<div id="wowslider-container1">
							<div class="ws_images"><ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/hydrangeas.jpg" alt="Hydrangeas" title="Hydrangeas" id="wows1_0"/></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/jellyfish.jpg" alt="Jellyfish" title="Jellyfish" id="wows1_1"/>image 2</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/koala.jpg" alt="Koala" title="Koala" id="wows1_2"/>image3</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/lighthouse.jpg" alt="Lighthouse" title="Lighthouse" id="wows1_3"/>image 4</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/penguins.jpg" alt="Penguins" title="Penguins" id="wows1_4"/>image 5</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/tulips.jpg" alt="Tulips" title="Tulips" id="wows1_5"/></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/chrysanthemum.jpg" alt="Chrysanthemum" title="Chrysanthemum" id="wows1_6"/></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/slider/images/desert.jpg" alt="Desert" title="Desert" id="wows1_7"/></li>
								</ul>
							</div>
							<div class="ws_thumbs">
								<div>
									<a href="#" title="Hydrangeas"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/hydrangeas.jpg" alt="" /></a>
									<a href="#" title="Jellyfish"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/jellyfish.jpg" alt="" /></a>
									<a href="#" title="Koala"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/koala.jpg" alt="" /></a>
									<a href="#" title="Lighthouse"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/lighthouse.jpg" alt="" /></a>
									<a href="#" title="Penguins"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/penguins.jpg" alt="" /></a>
									<a href="#" title="Tulips"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/tulips.jpg" alt="" /></a>
									<a href="#" title="Chrysanthemum"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/chrysanthemum.jpg" alt="" /></a>
									<a href="#" title="Desert"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/tooltips/desert.jpg" alt="" /></a>
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
								<button type="button" class="btn btn-primary btn-category">BUAT TULISAN</button>
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
								<button type="button" class="btn btn-primary btn-category">IKUT DISKUSI</button>
							</center>
				 	</div>
				</div>
			</div>
		</div>
	</div><!-- .container -->
<?php get_footer(); ?>