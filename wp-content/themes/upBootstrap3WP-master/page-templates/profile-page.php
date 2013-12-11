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

			<div class="col-md-12">
				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
			</div>

			<div class="col-md-12 userdata">

				<p style="width: 100%; display: block; height: 1px; clear: both;"></p>

				<div class="col-md-9 biodata">
				<table style="margin: 20px 10px;" class="data">
					<tr>
						<td style="width: 100px;">Nama</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td>Ardie Ramadhana</td>
					</tr>
					<tr>
						<td style="width: 100px;">Email</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td>ardie.ramadhana@gmail.com</td>
					</tr>
					<tr>
						<td style="width: 100px;">Pekerjaan</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td>Programmer</td>
					</tr>
					<tr>
						<td style="width: 100px;">Instansi</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td>PT Mediatrac Sistem Komunikasi</td>
					</tr>
					<tr>
						<td style="width: 100px;">Alamat</td>
						<td style="padding: 0px 5px 0px 20px">:</td>
						<td>Jalan Mampang Prapatan II No. 30 RT04 RW07</td>
					</tr>
				</table>
				</div>

				<div class="col-md-3 foto">
					<p style="text-align: center; margin-top: 10px; "><img src="<?php echo get_template_directory_uri();?>/img/images/profil-icon.png"/></p>
						<p><center>Nama</p>
						<p><center>As Founder</p>
						<p style="margin-bottom: 10px">
						<img src="<?php echo get_template_directory_uri();?>/img/images/profil-fb.png"/>
						<img src="<?php echo get_template_directory_uri();?>/img//images/profil-tw.png"/>
						<img src="<?php echo get_template_directory_uri();?>/img//images/profil-g+.png"/>
						<img src="<?php echo get_template_directory_uri();?>/img//images/profil-email.png"/>
						</p>
					
				</div>	

				<p style="width: 100%; display: block; height: 1px; clear: both;"></p>

			</div>	

			<div class="col-md-12">
				<header class="entry-header page-header">
					<h1>Kontribusi Tulisanku</h1>
				</header>
				<div class="col-md-3">

				</div>
				<div class="col-md-9">
				
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>