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
				
				<div class="row">
					<?php
						$the_query = new WP_Query('posts_per_page=20');

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
					
					<?php 
							if ( has_post_thumbnail() ) {
								$img_url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
					?>
								<img src="<?php echo $img_url ?>" class="img-responsive" style="margin-bottom: 20px;" />
					<?php
							} 
					?>

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
						<a href="#" id="<?php echo $category->slug; ?>-toggle"></a>
						<div id="<?php echo $category->slug; ?>-toggle-content" class="toggle-content" style="display: none;">
					<?php
							$query = new WP_Query('posts_per_page=5&category_name=' . $category->slug);

							while ($query->have_posts()):
								$query->the_post();
					?>
							<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
					<?php
							endwhile;

							wp_reset_postdata();
					?>	
						</div>
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