<?php
/**
 * Template Name: Page - Register
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	
			<div class="col-md-12">
				
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
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
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
			</div><!-- .col-md-12 -->

			<img src="Register 1.gif"  width="42" height="42">
			<img src="Register 2.gif"  width="42" height="42">
			<img src="Register 3.gif"  width="42" height="42">



			<div class="col-md-6">
				<form action="https://docs.google.com/forms/d/1KtK2Yk5MgF1gbskA-RiFO9tLG9A2spZYi6rVggIl5mk/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><ol style="padding-left: 0">
					<div class="ss-form-question errorbox-good">
						<div dir="ltr" class="ss-item ss-item-required ss-text">
							<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1623121656">
								<div class="ss-q-title">Nama Lengkap
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
									<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
									<input type="text" name="entry.1623121656" value="" class="ss-q-short" id="entry_1623121656" dir="auto" aria-label="Nama Lengkap  " aria-required="true" required="" title="">
										<div class="error-message"></div>
											<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item ss-item-required ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1109025639">
							<div class="ss-q-title">Email
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
									<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
									<input type="text" name="entry.1109025639" value="" class="ss-q-short" id="entry_1109025639" dir="auto" aria-label="Email  " aria-required="true" required="" title="">
										<div class="error-message"></div>
											<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item ss-item-required ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_725346728">
							<div class="ss-q-title">Username
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
									<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
										<input type="text" name="entry.725346728" value="" class="ss-q-short" id="entry_725346728" dir="auto" aria-label="Username  " aria-required="true" required="" title="">
											<div class="error-message"></div>
												<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item ss-item-required ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_810771302">
							<div class="ss-q-title">Password
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
									<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
										<input type="text" name="entry.810771302" value="" class="ss-q-short" id="entry_810771302" dir="auto" aria-label="Password  " aria-required="true" required="" title="">
											<div class="error-message"></div>
												<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item ss-item-required ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_492588676">
							<div class="ss-q-title">Confirm Password
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
									<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
										<input type="text" name="entry.492588676" value="" class="ss-q-short" id="entry_492588676" dir="auto" aria-label="Confirm Password  " aria-required="true" required="" title="">
											<div class="error-message"></div>
												<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">					
					<div dir="ltr" class="ss-item ss-item-required ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_2024306336">
							<div class="ss-q-title">Email Gravatar
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
									<span class="ss-required-asterisk">*</span></div>
										<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
											<input type="text" name="entry.2024306336" value="" class="ss-q-short" id="entry_2024306336" dir="auto" aria-label="Email Gravatar  " aria-required="true" required="" title="">
												<div class="error-message"></div>
													<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item  ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1848098669">
							<div class="ss-q-title">Instansi</div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<input type="text" name="entry.1848098669" value="" class="ss-q-short" id="entry_1848098669" dir="auto" aria-label="Instansi  " title="">
									<div class="error-message"></div>
										<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div>

				 <div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item  ss-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1560077897">
							<div class="ss-q-title">Pekerjaan</div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
									<input type="text" name="entry.1560077897" value="" class="ss-q-short" id="entry_1560077897" dir="auto" aria-label="Pekerjaan  " title="">
										<div class="error-message"></div>
											<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div> 

				<div class="ss-form-question errorbox-good">
					<div dir="ltr" class="ss-item  ss-paragraph-text">
						<div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1690226814">
							<div class="ss-q-title">Keterangan</div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
									<textarea name="entry.1690226814" rows="8" cols="0" class="ss-q-long" id="entry_1690226814" dir="auto" aria-label="Keterangan  "></textarea>
										<div class="error-message"></div>
											<div class="required-message">This is a required question</div>
									</div>
								</div>
							</div>

							<input type="hidden" name="draftResponse" value="[]">
							<input type="hidden" name="pageHistory" value="0">
							<input type="hidden" name="fbzx" value="-7433468971859651896">

				<div class="ss-item ss-navigate">
					<table id="navigation-table">
						<tbody>
							<tr>
								<td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
									<input type="submit" name="submit" value="Submit" id="ss-submit">
										<div class="ss-secondary-text">Never submit passwords through Google Forms.</div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</ol>
					</form>
		
	
<?php get_footer(); ?>