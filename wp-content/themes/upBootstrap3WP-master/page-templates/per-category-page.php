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
					<?php
						$current_page = get_post(get_the_ID());
						$category_slug = substr($current_page->post_name, 9, strlen($current_page->post_name));
					?>
					<div style="width: 100%; height: 50px; display: block; clear: both;">
						<div style="float: left;">
							<img src="<?php echo get_template_directory_uri() ?>/img/icon-<?php echo $category_slug ?>.png" width="50" height="50"/>
						</div>
						<h1 style="line-height: 50px; float: left; margin: 0 0 0 12px; padding: 0; font-family: 'Open Sans', arial; font-size: 3.2em;"><?php the_title(); ?></h1>
					</div>
					
				</header><!-- .entry-header -->
				
				<?php
					$query = new WP_Query('posts_per_page=10&category_name=' . substr($current_page->post_name, 9, strlen($current_page->post_name)));

					while ($query->have_posts()):
						$query->the_post();
				?>	
				<div class="row">
					<div class="col-md-12">
						<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<?php 
							if ( has_post_thumbnail() ) {
								$img_url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
						?>
						<img src="<?php echo $img_url ?>" class="img-responsive" />
						<?php
							} 
						?>
					</div>
					<div class="col-md-9">
						<div class="content-text">
						<?php 							
							the_excerpt(); 
						?>
						</div>
					</div>
				</div>
				<?php
					endwhile;
				?>
	
			</div><!-- .col-md-9 -->
			<div class="col-md-3">

				<div class="toggle-category" style="padding-bottom: 30px;">
					<div class="title-toggle-category">
						<h3>KATEGORI</h3>
					</div>
					
					<div style="border-bottom: 2px solid; border-color: white; margin: 0 10px 10px 10px;"></div>
					
					<?php 
						$categories = get_categories(array(
							'type' => 'post',
							'hide_empty' => 0
						));

						foreach ($categories as $category):
					?>
					<a href="<?php bloginfo('url') ?>/kategori-<?php echo $category->slug ?>" class="<?php echo $category->slug ?>-link"></a>
					<?php	
						endforeach;
					?>
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
