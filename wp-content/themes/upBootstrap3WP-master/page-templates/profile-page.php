<?php
/**
 * Template Name: Page - Profile
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
				
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="row biodata">
					<div class="col-md-9 biodata">

					</div>
					<div class="col-md-3 foto">
					
					</div>

				
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
	
			

		

			<div class="col-md-12">
				<header class="entry-header page-header">
				<h1>Kontribusi Tulisanku</h1>
				</header>
				<div class="col-md-3">

				</div>
				<div class="col-md-9">
			
				</div>
			</div>

			</div><!-- .col-md-12 -->

		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>