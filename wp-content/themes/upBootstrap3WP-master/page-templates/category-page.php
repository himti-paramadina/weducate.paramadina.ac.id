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
						$categories = get_categories(array(
							'type' => 'post',
							'hide_empty' => 0
						));

						$count = 0;
						foreach ($categories as $category):
							if ($category->slug != "uncategorized"):
								$count++;
					?>
					<div class="col-md-4">
						<div class="category">
							<p><center><img src="<?php echo get_template_directory_uri();?>/img/icon-<?php echo $category->slug; ?>.png" /></center></p>
							<center>
								<h3><?php echo $category->name; ?></h3>
								<p><?php echo $category->description; ?></p>
								<a href="<?php echo bloginfo('url') . '/kategori-' . $category->slug?>" class="btn btn-primary btn-category">BACA</a>								
							</center>
						</div>						
					</div>
					<?php
							endif;

							if ($count % 3 == 0):
					?>
				</div>
				<div class="row">
					<div class="line"></div>
				</div>
				<div class="row">
					<?php
							endif;
						endforeach;
					?>
				</div>

			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>