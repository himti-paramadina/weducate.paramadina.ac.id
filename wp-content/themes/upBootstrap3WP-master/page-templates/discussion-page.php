<?php
/**
 * Template Name: Page - Discussion
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				
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
	
			</div><!-- .col-md-9 -->
			<div class="col-md-3">

				<div class="toggle-category" style="padding-bottom: 30px;">
					<div class="title-toggle-category">
						<h3>KATEGORI</h3>
					</div>
					
					<div style="border-bottom: 2px solid; border-color: white; margin: 0 10px 10px 10px;"></div>
					
					<a href="#" id="gadgets-toggle"></a>
						<div id="gadgets-toggle-content" style="display: none;">
							<a href="#">Fenomena Baru: Gadget Holic</a><br>
							<a href="#">Kian Menjamurnya Mobile Programming</a><br>
							<a href="#">Menilik Konflik Hak Paten</a><br>
							<a href="#">Dampak Gadget Pada Kepribadian</a><br>
							<a href="#">Mengenal Multi-Tasking Gadget</a><br>
							<a href="#">Developer Mobile Twitter yang kian Maju</a>
						</div>

						<a href="#" id="socmed-toggle"></a>
						<div id="socmed-toggle-content" style="display: none;">
							<a href="#">Fenomena Baru: Gadget Holic</a><br>
							<a href="#">Kian Menjamurnya Mobile Programming</a><br>
							<a href="#">Menilik Konflik Hak Paten</a><br>
							<a href="#">Dampak Gadget Pada Kepribadian</a><br>
							<a href="#">Mengenal Multi-Tasking Gadget</a><br>
							<a href="#">Developer Mobile Twitter yang kian Maju</a>
						</div>

						<a href="#" id="ite-toggle"></a>
						<div id="ite-toggle-content" style="display: none;">
							<a href="#">Fenomena Baru: Gadget Holic</a><br>
							<a href="#">Kian Menjamurnya Mobile Programming</a><br>
							<a href="#">Menilik Konflik Hak Paten</a><br>
							<a href="#">Dampak Gadget Pada Kepribadian</a><br>
							<a href="#">Mengenal Multi-Tasking Gadget</a><br>
							<a href="#">Developer Mobile Twitter yang kian Maju</a>
						</div>

						<a href="#" id="security-toggle"></a>
						<div id="security-toggle-content" style="display: none;">
							<a href="#">Fenomena Baru: Gadget Holic</a><br>
							<a href="#">Kian Menjamurnya Mobile Programming</a><br>
							<a href="#">Menilik Konflik Hak Paten</a><br>
							<a href="#">Dampak Gadget Pada Kepribadian</a><br>
							<a href="#">Mengenal Multi-Tasking Gadget</a><br>
							<a href="#">Developer Mobile Twitter yang kian Maju</a>
						</div>

						<a href="#" id="app-toggle"></a>
						<div id="app-toggle-content" style="display: none;">
							<a href="#">Fenomena Baru: Gadget Holic</a><br>
							<a href="#">Kian Menjamurnya Mobile Programming</a><br>
							<a href="#">Menilik Konflik Hak Paten</a><br>
							<a href="#">Dampak Gadget Pada Kepribadian</a><br>
							<a href="#">Mengenal Multi-Tasking Gadget</a><br>
							<a href="#">Developer Mobile Twitter yang kian Maju</a>
						</div>

						<a href="#" id="opini-toggle"></a>
						<div id="opini-toggle-content" style="display: none;">
							<a href="#">Fenomena Baru: Gadget Holic</a><br>
							<a href="#">Kian Menjamurnya Mobile Programming</a><br>
							<a href="#">Menilik Konflik Hak Paten</a><br>
							<a href="#">Dampak Gadget Pada Kepribadian</a><br>
							<a href="#">Mengenal Multi-Tasking Gadget</a><br>
							<a href="#">Developer Mobile Twitter yang kian Maju</a>
						</div>
				</div>

				<div class="twitter-widget">
					<a class="twitter-timeline" href="https://twitter.com/ITparamadina" data-widget-id="409174727517683712">Tweets by @ITparamadina</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>

				<div class="subscribe-widget" style="margin: 10px 0 0 0;">
					<div class="subscribe">
						<input type="text" name="subscribe-text" placeholder="Type your email here" class="input-subscribe" style="width: 231px;">
						<button type="button" class="btn btn-warning btn-subscribe" style="width: 231px;">SUBSCRIBE US</button>
					</div>
				</div>

			</div><!-- .col-md-3 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>