<?php
/**
 * Template Name: Page - Category
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				
				<div class="entry-content">
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
				</div><!-- .entry-content -->
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

				<div class="row">

					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-gadgets.png" /></center></p>
							<center>
								<h3>Gadget</h3>
								<p>
									Lorem ipsum dolor sit amet consectetuer a dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
								</p>
								<button type="button" class="btn btn-primary btn-category">BACA</button>
							</center>
						</div>						
					</div>



					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-socmed.png" /></center></p>
							<center>
								<h3>Social Media</h3>
								<p>
									Lorem ipsum dolor sit amet consectetuer a dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
								</p>
								<button type="button" class="btn btn-primary btn-category">BACA</button>
							</center>
						</div>
					</div>



					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-UU_ITE.png" /></center></p>
							<center>
							<h3>UU ITE</h3>
								<p>
									Lorem ipsum dolor sit amet consectetuer a dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
								</p>
								<button type="button" class="btn btn-primary btn-category">BACA</button>
							</center>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="line"></div>
				</div>

				<div class="row">

					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-security.png" /></center></p>
							<center>
							<h3>Security</h3>
								<p>
									Lorem ipsum dolor sit amet consectetuer a dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
								</p>
								<button type="button" class="btn btn-primary btn-category">BACA</button>
							</center>

						</div>
					</div>

					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-app.png" /></center></p>
							<center>
							<h3>Apps & OS</h3>
								<p>
									Lorem ipsum dolor sit amet consectetuer a dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
								</p>
								<button type="button" class="btn btn-primary btn-category">BACA</button>
							</center>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-opini.png" /></center></p>
							<center>
							<h3>Opini</h3>
								<p>
									Lorem ipsum dolor sit amet consectetuer a dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
								</p>
								<button type="button" class="btn btn-primary btn-category">BACA</button>
							</center>
						</div>
					</div>	

				</div>				
				

	
	
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>