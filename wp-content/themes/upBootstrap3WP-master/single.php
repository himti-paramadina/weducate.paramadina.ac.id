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
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="page-header content-text">
					<div style="width: 100%; height: 40px; display: block; clear: both;">
					<?php
						$post_categories = get_the_category();

						foreach ($post_categories as $post_category):
					?>
						<div style="float: left;">
							<img src="<?php echo get_template_directory_uri() ?>/img/icon-<?php echo $post_category->slug ?>.png" width="40" height="40"/>
						</div>
						<h3 style="font-family: 'Open Sans', arial; float: left; line-height: 40px; margin: 0 12px 0 12px; padding: 0;"><?php echo $post_category->name; ?></h3>
					<?php
						endforeach;
					?>
					</div>
					<h1 style="margin-top: 10px;"><?php echo get_the_title(); ?></h1>
					<p>Diposkan pada <?php the_date('F j, Y', '<strong>', '</strong>', true); ?> oleh <strong><?php the_author(); ?></strong></p>

					<!-- AddThis Button BEGIN -->
				    <div class="addthis_toolbox addthis_default_style ">
				    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				    <a class="addthis_button_tweet"></a>
				    <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"></a>
				    <a class="addthis_counter addthis_pill_style"></a>
				    </div>
				    <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52a8ee573066b15b"></script>
				    <!-- AddThis Button END -->
				</div>
		
				<div class="content-text">
					<?php 
						if ( has_post_thumbnail() ) {
							$img_url = wp_get_attachment_url( get_post_thumbnail_id($query->ID) );
					?>
					<img src="<?php echo $img_url ?>" class="img-responsive" style="margin-bottom: 20px;" />
					<?php
						} 
					?>

					<?php the_content(); ?>
				</div>

				<div class="page-header">
					<h1>Diskusikan Tulisan Ini</h1>
				</div>

					<?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();
                    ?>

				<?php endwhile; // end of the loop. ?>
			</div>	
			
			<div class="col-md-3">
				<div class="bg-white">
					<div class="toggle-category">
						<div class="title-toggle-category">
							<h3>KATEGORI</h3>
						</div>
						<div style="border-bottom: 2px solid; border-color: white;"></div>

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

					<div class="subscribe-widget" style="margin: 10px 0 0 0;">
						<div class="subscribe">
							<input type="text" name="subscribe-text" placeholder="Type your email here" class="input-subscribe" style="width: 231px;">
							<button type="button" class="btn btn-warning btn-subscribe" style="width: 231px;">SUBSCRIBE US</button>
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