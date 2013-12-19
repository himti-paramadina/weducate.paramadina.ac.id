<?php
/**
 * Template Name: Page - Question
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
		
		<div class="container">
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
	
			</div>

<div class="col-md-12">

<form action="https://docs.google.com/forms/d/1zPmwAyy8hvcEdgko-edmemt8iTUolw7clKRbZ4NO3u8/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><ol style="padding-left: 0">
	<div class="ss-form-question errorbox-good" style="height: 30px; margin-bottom:5px">
		<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
			<div class="ss-form-entry" style="width: 100%;">

				<div class="row">
					<div class="col-md-4">
				<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1272625585" style="width: 100%;">
					<div class="ss-q-title">Nama
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						<span class="ss-required-asterisk">*</span>
					</div>
						<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
				</label>
				</div>
				<div class="col-md-6">
				<input type="text" name="entry.1272625585" value="" class="ss-q-short" id="entry_1272625585" dir="auto" aria-label="Nama  " aria-required="true" required="" title="">
				</div>
					</div>
					<div class="error-message"></div>
						<div class="required-message">This is a required question</div>
				
				</div>
			</div>
		</div>

	<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
			<div class="ss-form-entry" style="width: 100%;">

				<div class="row">
					<div class="col-md-4">
				<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1272625585" style="width: 100%;">
					<div class="ss-q-title">Email
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						<span class="ss-required-asterisk">*</span>
					</div>
						<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
				</label>
				</div>
				<div class="col-md-6">
				<input type="text" name="entry.1272625585" value="" class="ss-q-short" id="entry_1272625585" dir="auto" aria-label="Nama  " aria-required="true" required="" title="">
				</div>
					</div>
					<div class="error-message"></div>
						<div class="required-message">This is a required question</div>
				
				</div>
			</div>

	<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
		<div class="ss-form-entry" style="width: 100%;">
				<div class="row">
					<div class="col-md-4">
						<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1272625585" style="width: 100%;">
							<div class="ss-q-title">Subyek
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
								<span class="ss-required-asterisk">*</span>
							</div>
						<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
				</label>
				</div>
				<div class="col-md-6">
				<input type="text" name="entry.1272625585" value="" class="ss-q-short" id="entry_1272625585" dir="auto" aria-label="Nama  " aria-required="true" required="" title="">
				</div>
					</div>
					<div class="error-message"></div>
						<div class="required-message">This is a required question</div>
	</div>
	</div>

 	<div class="ss-form-question errorbox-good" style="height: 30px; margin-bottom:5px">
		<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text" style="width: 100%;">
			<div class="ss-form-entry" style="width: 100%;">
				<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1116511848" style="width: 100%;">
					<div class="ss-q-title">Pertanyaan
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						<span class="ss-required-asterisk">*</span></div>
							<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
				</label>
					<textarea name="entry.1116511848" rows="8" cols="0" class="ss-q-long" id="entry_1116511848" dir="auto" aria-label="Pertanyaan  " aria-required="true" required=""></textarea>
						<div class="error-message"></div>
							<div class="required-message">This is a required question</div>
					</div>
				</div>
			</div>
<input type="hidden" name="draftResponse" value="[,,&quot;2598964159975077580&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fbzx" value="2598964159975077580">

<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
<input type="submit" name="submit" value="Submit" id="ss-submit">
<div class="ss-secondary-text">Never submit passwords through Google Forms.</div></td>
</tr></tbody></table></div></ol></form>
</div>
			
		
	
<?php get_footer(); ?>