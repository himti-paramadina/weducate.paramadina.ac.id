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

		<div class="row">
			<div class="col-md-9">
				<div class="category">
				</div>
			</div>

			<div class="col-md-3 maps">
				<div class="maps-title">
					<div style="float:left; margin-right:10px;"><img src="<?php echo get_template_directory_uri();?>/img/maps-logo.png"/>
					</div>
					<div style="float:left;">
						<p>Phone +6221 00 0011</p>
						<p>Info@weducate.com</p>
						<p>Jl. Gatot Subroto Kav. 97</p>
					</div>
					
				

				
				</div>
				<div style="padding-bottom: 10px;">
					<iframe width="263" height="255" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;aq=0&amp;oq=Universitas+Paramadina&amp;sll=37.0625,-95.677068&amp;sspn=42.495706,79.013672&amp;ie=UTF8&amp;hq=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;t=m&amp;ll=-6.241106,106.832975&amp;spn=0.003626,0.002811&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;aq=0&amp;oq=Universitas+Paramadina&amp;sll=37.0625,-95.677068&amp;sspn=42.495706,79.013672&amp;ie=UTF8&amp;hq=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;t=m&amp;ll=-6.241106,106.832975&amp;spn=0.003626,0.002811&amp;z=17&amp;iwloc=A" style="color:#0000FF;text-align:left">
				</div>
			</div>
		</div>



				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
				<a style="padding-bottom:10px"; href="#" id="contact-us-toggle"></a>
				<div id="contact-us" style="display: none;">
					
					<div class="row">
						<div class="col-md-6">
							<div class="category">
							</div>
						</div>
					
						<div class="col-md-6">
						<div class="category">
			
						</div>
					</div>
					</div>	
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