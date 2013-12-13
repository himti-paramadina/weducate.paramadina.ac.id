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
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
			

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

			

				<div class="row">
					<div class="col-md-12">
						<header class="entry-header page-header">
							<h1>Kontribusi Tulisan</h1>
						</header>
				</div>

			<div class="row kontribusi">

				<div class="row">

						<div class="col-md-2">
							<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/images/thumbnail-1.png"/>
						</div>
						<div class="col-md-10">
							<h4 style="font-weight: bold;">Menilik Konflik Hak Paten</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida enim eu metus vestibulum, non iaculis tellus imperdiet. Mauris ante nibh, laoreet vitae varius nec, pulvinar at libero. Curabitur a nulla nulla. Cras a volutpat mauris, at commodo lacus. Nam bibendum pharetra enim, mattis convallis massa condimentum a. Vesti.. </p>
						</div>
				</div>	
				

				<div class="row">
						<div class="col-md-2">
								<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/images/thumbnail-2.png"/>
						</div>
						<div class="col-md-10">
							<h4 style="font-weight: bold;">Pembajakan Software di Mata Hukum</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida enim eu metus vestibulum, non iaculis tellus imperdiet. Mauris ante nibh, laoreet vitae varius nec, pulvinar at libero. Curabitur a nulla nulla. Cras a volutpat mauris, at commodo lacus. Nam bibendum pharetra enim, mattis convallis massa condimentum a. Vesti.. </p>
						</div>

				</div>

				<div class="row">
						<div class="col-md-2">
								<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/images/thumbnail-3.png"/>
						</div>
						<div class="col-md-10">
							<h4 style="font-weight: bold;">Dampak Gadget pada Kepribadian</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida enim eu metus vestibulum, non iaculis tellus imperdiet. Mauris ante nibh, laoreet vitae varius nec, pulvinar at libero. Curabitur a nulla nulla. Cras a volutpat mauris, at commodo lacus. Nam bibendum pharetra enim, mattis convallis massa condimentum a. Vesti.. </p>
						</div>

				</div>

				<div class="row">
						<div class="col-md-2">
								<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/images/thumbnail-4.png"/>
						</div>
						<div class="col-md-10">
							<h4 style="font-weight: bold;">Apa itu Multi-Tasking Gadget</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida enim eu metus vestibulum, non iaculis tellus imperdiet. Mauris ante nibh, laoreet vitae varius nec, pulvinar at libero. Curabitur a nulla nulla. Cras a volutpat mauris, at commodo lacus. Nam bibendum pharetra enim, mattis convallis massa condimentum a. Vesti.. </p>
						</div>

				</div>

				<div class="row">
						<div class="col-md-2">
							<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/images/thumbnail-5.png"/>
						</div>
						<div class="col-md-10">
							<h4 style="font-weight: bold;">Majunya Developer Mobile Apps Twitter</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida enim eu metus vestibulum, non iaculis tellus imperdiet. Mauris ante nibh, laoreet vitae varius nec, pulvinar at libero. Curabitur a nulla nulla. Cras a volutpat mauris, at commodo lacus. Nam bibendum pharetra enim, mattis convallis massa condimentum a. Vesti.. </p>
						</div>

				</div>
			</div>
			
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>