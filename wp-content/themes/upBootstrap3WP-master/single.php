<?php
/**
 * The Template for displaying all single posts.
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
			
					<?php while ( have_posts() ) : the_post(); ?>
			
						<?php get_template_part( 'content', 'single' ); ?>
			
						<?php upbootwp_content_nav( 'nav-below' ); ?>
			
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
						?>
			
					<?php endwhile; // end of the loop. ?>
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-8 -->
			
			<div class="col-md-3">
					<div class="bg-white">
					<div class="toggle-category">

					</div>

					<div class="subscribe-widget">
						<div class="subscribe">
							<input type="text" name="subscribe-text" placeholder="Type your email here" class="input-subscribe">
							<button type="button" class="btn btn-warning btn-subscribe">SUBSCRIBE US</button>
						</div>
					</div>

					<div class="twitter-widget">
						<a class="twitter-timeline" href="https://twitter.com/ITparamadina" data-widget-id="409174727517683712">Tweets by @ITparamadina</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
			</div><!-- .col-md-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>