<?php
/**
 * Template Name: Page - Register
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
		
		<div class="container">
<?php while (have_posts()) : the_post(); ?>

<br>
			<div class="row">
				<p align="center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/register-1.png"/><img src="<?php echo get_template_directory_uri(); ?>/img/register-2.png"/><img src="<?php echo get_template_directory_uri(); ?>/img/register-3.png"/>
				</p>
			</div>

			<div class="row" style="display: none;">
				
				<div  class="col-md-4" style="padding: 0;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/register-1.png" style="float: right;" />
				</div>

				<div  class="col-md-4" style="padding: 0;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/register-2.png"/>
				</div>

				<div  class="col-md-4"  style="padding: 0;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/register-3.png" style="float: left;;" />
				</div>
			</div>
	
			<div class="col-md-12">
				<a style="padding-bottom:10px"; href="#" id="register-toggle"></a>

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
	
			</div><!-- .col-md-12 -->

			
			<div class="col-md-12">
				<form action="https://docs.google.com/forms/d/1TQSbdefV1BjC5OQibH4WdGibs333dqqPYXiyBIWIdKQ/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
				
				<div class="row">
					<!-- First Column -->

					<div class="col-md-6" style="border-right:solid 1px black">
						
						<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text"  style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">

									<!-- <div class="row"> -->
										<div class="col-md-4">
											<label aria-hidden class="ss-q-item-label aria-todo" for="entry_266664850" style="width: 100%;">
												<div class="ss-q-title">Nama Lengkap
													<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
													<span class="ss-required-asterisk">*</span>
												</div>
												<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
											</label>
										</div>
										<div class="col-md-6" style="padding-right:-20px; padding-left:0">
											<input type="text" name="entry.1847665557" value="" class="ss-q-short" id="entry_266664850" dir="auto" aria-label="Nama Lengkap  " aria-required="true" required="" title="" style="width: 100%;">
										</div>
									<!-- </div> -->
									<div class="error-message"></div>
								</div>
							</div>
						</div>

						<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1847665557" style="width: 100%;">
										<div class="ss-q-title">Email
											<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
											<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr">
										</div>
									</label>
								</div>
									<input type="text" name="entry.1847665557" value="" class="ss-q-short" id="entry_1847665557" dir="auto" aria-label="Email Gravatar  " aria-required="true" required="" title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>
						 <div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1847665557" style="width: 100%;">
										<div class="ss-q-title">Username
											<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
											<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr">
										</div>
									</label>
								</div>
									<input type="text" name="entry.1847665557" value="" class="ss-q-short" id="entry_1847665557" dir="auto" aria-label="Email Gravatar  " aria-required="true" required="" title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>

						<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1847665557" style="width: 100%;">
										<div class="ss-q-title">Password
											<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
											<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr">
										</div>
									</label>
								</div>
									<input type="text" name="entry.1847665557" value="" class="ss-q-short" id="entry_1847665557" dir="auto" aria-label="Email Gravatar  " aria-required="true" required="" title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>

						<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1847665557" style="width: 100%;">
										<div class="ss-q-title">Confirm Password
											<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
											<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr">
										</div>
									</label>
								</div>
									<input type="text" name="entry.1847665557" value="" class="ss-q-short" id="entry_1847665557" dir="auto" aria-label="Email Gravatar  " aria-required="true" required="" title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Second Column -->
					<div class="col-md-6">
					 	<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1847665557" style="width: 100%;">
										<div class="ss-q-title">Email Gravatar
											<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
											<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr">
										</div>
									</label>
								</div>
									<input type="text" name="entry.1847665557" value="" class="ss-q-short" id="entry_1847665557" dir="auto" aria-label="Email Gravatar  " aria-required="true" required="" title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>

					 	<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item  ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1898136705" style="width: 100%;">
										<div class="ss-q-title">Instansi</div>
											<div class="ss-q-help ss-secondary-text" dir="ltr">
											</div>
									</label>
								</div>
									<input type="text" name="entry.1898136705" value="" class="ss-q-short" id="entry_1898136705" dir="auto" aria-label="Instansi  " title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>

					 	<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item  ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1014019433" style="width: 100%;">
										<div class="ss-q-title">Pekerjaan</div>
											<div class="ss-q-help ss-secondary-text" dir="ltr">
											</div>
									</label>
								</div>
									<input type="text" name="entry.1014019433" value="" class="ss-q-short" id="entry_1014019433" dir="auto" aria-label="Pekerjaan  " title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>

						<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item  ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_822494548" style="width: 100%;">
										<div class="ss-q-title">Keterangan</div>
											<div class="ss-q-help ss-secondary-text" dir="ltr">
											</div>
									</label>	
								</div>
									<input type="text" name="entry.822494548" value="" class="ss-q-short" id="entry_822494548" dir="auto" aria-label="Keterangan  " title="">
									<div class="error-message"></div>
								</div>
							</div>
						</div>
					<input type="hidden" name="draftResponse" value="[,,&quot;705599413548525239&quot;]
					">
					<input type="hidden" name="pageHistory" value="0">

					<input type="hidden" name="fbzx" value="705599413548525239">

					<div class="ss-item ss-navigate">
						<table id="navigation-table">
							<tbody>
								<tr>
									<td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
										<input type="submit" name="submit" value="Submit" id="ss-submit">
										<div class="ss-secondary-text">Never submit passwords through Google Forms.</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					

					</div>
				
				
				</div>
				</form>

				


			</div>
		</div>
			
		
	
<?php get_footer(); ?>