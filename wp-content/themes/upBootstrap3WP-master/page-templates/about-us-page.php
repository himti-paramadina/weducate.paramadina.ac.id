<?php
/**
 * Template Name: Page - About Us
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
	
				<a href="#" id="contact-us-toggle"></a>
				<div id="contact-us" style="display: none;">
					<h1>Contact Us Content</h1>
				</div>

				<a href="#" id="our-team-toggle"></a>
				<div id="our-team" style="display: none;">
					<h1>Our Team Content</h1>
				</div>

				<a href="#" id="contributors-toggle"></a>
				<div id="contributors" style="display: none;">
					<h1>Contributors Content</h1>
				</div>

			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>