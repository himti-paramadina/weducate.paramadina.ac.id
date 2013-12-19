<?php
/**
 * Template Name: Page - Profile
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

	<div class="container">
		<div class="row">

				<header class="entry-header page-header">
					<h1 class="entry-title">Profil Kontributor</h1>
				</header><!-- .entry-header -->
			

			<div class="col-md-12 userdata">

				<p style="width: 100%; display: block; height: 1px; clear: both;"></p>

				<div class="col-md-9 biodata">
				<!– This sets the $curauth variable –>
				<?php
				if(isset($_GET['author_name'])) :
				$curauth = get_userdatabylogin($author_name);
				else :
				$curauth = get_userdata(intval($author));
				endif;
				?>
				
				<table style="margin: 20px 10px;" class="data">
					<tr>
						<td style="width: 100px;">Nama</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td><?php echo $curauth->display_name; ?></td>
					</tr>
					<tr>
						<td style="width: 100px;">Email</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td><?php echo $curauth->user_email; ?></td>
					</tr>
					<tr>
						<td style="width: 100px;">Website</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td><?php echo $curauth->user_url; ?></td>
					</tr>
					<tr>
						<td style="width: 100px;">Description</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td><?php echo $curauth->description; ?></td>
					</tr>
				</table>
				</div>

				<div class="col-md-3 foto">
					<p style="text-align: center; margin-top: 10px; ">
					<a href="#" class="team-avatar" style="background-image: url(http://www.gravatar.com/avatar/<?php echo md5($curauth->user_email) ?>);"></a> 
					</p>
						<p><center><?php echo $curauth->display_name; ?></p>
						<p><center></p>
						<p style="margin-bottom: 10px">
						<img src="<?php echo get_template_directory_uri();?>/img/images/profil-fb.png"/>
						<img src="<?php echo get_template_directory_uri();?>/img//images/profil-tw.png"/>
						<img src="<?php echo get_template_directory_uri();?>/img//images/profil-g+.png"/>
						<img src="<?php echo get_template_directory_uri();?>/img//images/profil-email.png"/>
						</p>
					
				</div>	

				<p style="width: 100%; display: block; height: 1px; clear: both;"></p>

			</div>	

			

				<div class="row">
					<div class="col-md-12">
						<header class="entry-header page-header">
							<h1>Kontribusi Tulisan</h1>
						</header>
				</div>

			<div class="row kontribusi">
				<!– The Loop –>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">

						<div class="col-md-2">
							<?php 
								if ( has_post_thumbnail() ) {
									$img_url = wp_get_attachment_url( get_post_thumbnail_id() );
							?>
							<img src="<?php echo $img_url ?>" class="img-responsive" />
							<?php
								} 
							?>							
						</div>
						<div class="col-md-10">
							<h4 style="font-weight: bold;">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<?php the_title(); ?></a>,
							<?php the_time('d M Y'); ?> in <?php the_category('&');?>
							</h4>
							<p>
								<?php 							
								the_excerpt(); 
								?>
							</p>
						</div>
				</div>	
				<?php endwhile; else: ?>
				<p><?php _e('No posts by this author.'); ?></p>
				<?php endif; ?>
				<!– End Loop –>
			</div>
			
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>