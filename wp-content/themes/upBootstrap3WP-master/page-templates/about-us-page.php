<?php
/**
 * Template Name: Page - About Us
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

		<div class="row">
			<div class="col-md-9">
				<div class="category">
				</div>
			</div>

			<div class="col-md-3 maps">
				<div class="maps-title">
					<div style="float:left; margin-right:10px;"><img src="<?php echo get_template_directory_uri();?>/img/maps-logo.png"/>
					</div>
					<div style="float:left;">
						<p>Phone +6221 00 0011</p>
						<p>Info@weducate.com</p>
						<p>Jl. Gatot Subroto Kav. 97</p>
					</div>
					
				

				
				</div>
				<div style="padding-bottom: 10px;">
					<iframe width="263" height="255" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;aq=0&amp;oq=Universitas+Paramadina&amp;sll=37.0625,-95.677068&amp;sspn=42.495706,79.013672&amp;ie=UTF8&amp;hq=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;t=m&amp;ll=-6.241106,106.832975&amp;spn=0.003626,0.002811&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;aq=0&amp;oq=Universitas+Paramadina&amp;sll=37.0625,-95.677068&amp;sspn=42.495706,79.013672&amp;ie=UTF8&amp;hq=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;t=m&amp;ll=-6.241106,106.832975&amp;spn=0.003626,0.002811&amp;z=17&amp;iwloc=A" style="color:#0000FF;text-align:left">
				</div>
			</div>
		</div>



				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
				<a style="padding-bottom:10px"; href="#" id="contact-us-toggle"></a>
				<div id="contact-us" style="display: none;">
					
					<div class="row">
						<div class="col-md-6">
							<div class="contact-us-title">

							</div>

							<div class="contact-us-form">

							</div>
						</div>
					
						<div class="col-md-6">
							<div class="contact-us-form">
								<form action="https://docs.google.com/forms/d/12H1cNVND3uewYdvgn3ynnBdzztzAdj23T8vRHPXoJl4/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><ol style="padding-left: 0">
								<div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1589006728"><div class="ss-q-title">Nama
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<input type="text" name="entry.1589006728" value="" class="ss-q-short" id="entry_1589006728" dir="auto" aria-label="Nama  " aria-required="true" required="" title="">
								<div class="error-message"></div>
								<div class="required-message">This is a required question</div>

								</div></div></div> <div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_95797113"><div class="ss-q-title">Email
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<input type="email" name="entry.95797113" value="" class="ss-q-short" id="entry_95797113" dir="auto" aria-label="Email  Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">
								<div class="error-message">Must be a valid email address</div>
								<div class="required-message">This is a required question</div>

								</div></div></div> <div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item  ss-text"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_344064089"><div class="ss-q-title">Telepon
								</div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<input type="text" name="entry.344064089" value="" class="ss-q-short" id="entry_344064089" dir="auto" aria-label="Telepon  " title="">
								<div class="error-message"></div>
								<div class="required-message">This is a required question</div>

								</div></div></div> <div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_815946917"><div class="ss-q-title">Institusi
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<input type="text" name="entry.815946917" value="" class="ss-q-short" id="entry_815946917" dir="auto" aria-label="Institusi  " aria-required="true" required="" title="">
								<div class="error-message"></div>
								<div class="required-message">This is a required question</div>

								</div></div></div> <div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item ss-item-required ss-select"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_341812938"><div class="ss-q-title">Tipe Pertanyaan
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<select name="entry.341812938" id="entry_341812938" aria-label="Tipe Pertanyaan  " aria-required="true" required=""><option value=""></option>
								<option value="Kontribusi">Kontribusi</option> <option value="Lokasi">Lokasi</option> <option value="Lain-lain">Lain-lain</option></select>
								<div class="required-message">This is a required question</div>
								</div></div></div> <div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1945101671"><div class="ss-q-title">Subyek
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<input type="text" name="entry.1945101671" value="" class="ss-q-short" id="entry_1945101671" dir="auto" aria-label="Subyek  " aria-required="true" required="" title="">
								<div class="error-message"></div>
								<div class="required-message">This is a required question</div>

								</div></div></div> <div class="ss-form-question errorbox-good">
								<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry"><label aria-hidden class="ss-q-item-label aria-todo" for="entry_1037057138"><div class="ss-q-title">Pertanyaan
								<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span></div>
								<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
								<textarea name="entry.1037057138" rows="8" cols="0" class="ss-q-long" id="entry_1037057138" dir="auto" aria-label="Pertanyaan  " aria-required="true" required=""></textarea>
								<div class="error-message"></div>
								<div class="required-message">This is a required question</div>

								</div></div></div>
								<input type="hidden" name="draftResponse" value="[]
								">
								<input type="hidden" name="pageHistory" value="0">

								<input type="hidden" name="fbzx" value="-1852155930214459541">

								<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
								<input type="submit" name="submit" value="Submit" id="ss-submit">
								<div class="ss-secondary-text">Never submit passwords through Google Forms.</div></td>
								</tr></tbody></table></div></ol></form>
							</div>
					</div>
					</div>	
				</div>


				<a href="#" id="our-team-toggle"></a>
				<div id="our-team" style="display: none;">
					<h1>Our Team Content</h1>
				</div>

				<a href="#" id="contributors-toggle"></a>
				<div id="contributors" style="display: none;">
					<h1>Contributors Content</h1>
				</div>

			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>