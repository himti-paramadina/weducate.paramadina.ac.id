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
					<div class="category bg-white">

					</div>
				</div>

				<div class="col-md-3">
					<div class="bg-white">
						<div class="subscribe-widget">
							<div class="subscribe">
								<input type="text" name="subscribe-text" class="input-subscribe">
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