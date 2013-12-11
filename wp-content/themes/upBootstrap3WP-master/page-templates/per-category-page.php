<?php
/**
 * Template Name: Page - List Article Per Category
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>


	<div class="container">
		<div class="row">
			<div class="col-md-9">
				
				
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
			</div><!-- .col-md-9 -->
			<div class="col-md-3">

				<div class="toggle-category" style="padding-bottom: 30px;">
					<div class="title-toggle-category">
						<h3>KATEGORI</h3>
					</div>
					
					<div style="border-bottom: 2px solid; border-color: white; margin: 0 10px 10px 10px;"></div>
					
					<a href="http://localhost/weducate/?page_id=21" class="gadgets-link"></a>
					<a href="http://localhost/weducate/?page_id=24" class="socmed-link"></a>
					<a href="http://localhost/weducate/?page_id=27" class="ite-link"></a>
					<a href="http://localhost/weducate/?page_id=30" class="security-link"></a>
					<a href="http://localhost/weducate/?page_id=33" class="app-link"></a>
					<a href="http://localhost/weducate/?page_id=36" class="opini-link"></a>
				</div>

				<div class="twitter-widget">
					<a class="twitter-timeline" href="https://twitter.com/ITparamadina" data-widget-id="409174727517683712">Tweets by @ITparamadina</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>

				<div class="subscribe-widget" style="margin: 10px 0 0 0;">
					<div class="subscribe">
						<input type="text" name="subscribe-text" placeholder="Type your email here" class="input-subscribe" style="width: 239px;">
						<button type="button" class="btn btn-warning btn-subscribe" style="width: 241px;">SUBSCRIBE US</button>
					</div>
				</div>

			</div><!-- .col-md-3 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>