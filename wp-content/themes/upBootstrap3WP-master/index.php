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
							<div class="ws_images">
								<ul>
							<?php
								$the_query = new WP_Query( 'post_type=post&posts_per_page=6&orderby=date&order=DESC' );

								// The Loop
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>	
									<li>
									<?php
									if ( has_post_thumbnail() ) {
										?><a href="<?php echo the_permalink()?>">
										<?php
										the_post_thumbnail('full','title=');										
										?>
										</a>
										<a href="<?php echo the_permalink()?>"  style="color:white;">
										<?php
										echo get_the_title();
										?>
										</a>
										<?php
									}
									
									?>
								     
									</li>
								<?php	
									
								}
								wp_reset_postdata();
							?>
								
								</ul>
							</div>
							<div class="ws_thumbs">
								<div>
							<?php	
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>	
									<a href="#" title="">
									<?php 
										if ( has_post_thumbnail() ) {
											$img_url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
									?>
									<img src="<?php echo $img_url ?>" width="128" height="48"/>
									<?php
										} 
									?>
									</a>
								<?php	
									
								}

								/* Restore original Post Data 
								 * NB: Because we are using new WP_Query we aren't stomping on the 
								 * original $wp_query and it does not need to be reset.
								*/
								wp_reset_postdata();
							?>
									
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
								
									<p>&nbsp;</p>						
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Artikel Terbaru</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
				$count = 0;
				while ( $the_query->have_posts() ):
					$count++;
					$the_query->the_post();
			?>	
				<div class="col-md-4 content-text" style="margin: 0 0 30px 0;">
					<div style="height: 40px; display: block; margin: 0 0 10px 0;">
			<?php
					$post_categories = get_the_category();

					foreach ($post_categories as $post_category):
			?>
						
						<div style="float: left;"><img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/img/icon-<?php echo $post_category->slug; ?>.png"/></div>
						<a href="<?php bloginfo('url') ?>/kategori-<?php echo $post_category->slug ?>" style="float: left; display: block; margin: 0 10px 0 10px; line-height: 40px; font-family: 'Open Sans'; color: black;"><?php echo $post_category->name; ?></a>
						
			<?php
					endforeach;
			?>
					</div>
			
					<a href="<?php echo the_permalink()?>"><h3 style="padding: 0; margin: 0;"><?php echo get_the_title(); ?></h3></a>
				</div>
			<?php		
					if ($count % 3 == 0) {
						echo '</div><div class="row">';
					}
				endwhile;
				wp_reset_postdata();
			?>
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