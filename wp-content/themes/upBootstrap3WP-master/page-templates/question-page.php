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

<div class="col-md-9">

<form action="https://docs.google.com/forms/d/1zPmwAyy8hvcEdgko-edmemt8iTUolw7clKRbZ4NO3u8/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><ol style="padding-left: 0">
	<div class="ss-form-question errorbox-good" style="height: 20px; margin-bottom:15px">
							<div dir="ltr" class="ss-item ss-item-required ss-text" style="width: 100%;">
								<div class="ss-form-entry" style="width: 100%;">
									<div class="col-md-4">
									<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1847665557" style="width: 100%;">
										<div class="ss-q-title">Nama
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
										<div class="ss-q-title">Subyek
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
						

 	<div class="ss-form-question errorbox-good" style="height: 30px; margin-bottom:5px">
		<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text" style="width: 100%;">
			<div class="ss-form-entry" style="width: 100%;">
				<div class="col-md-4">
				<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1116511848" style="width: 100%;">
					<div class="ss-q-title">Pertanyaan
						<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
						<span class="ss-required-asterisk">*</span></div>
							<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
				</label>
			</div>
						<div class="col-md-5" style="padding:0">
							<textarea name="entry.1116511848" rows="8" cols="0" class="ss-q-long" id="entry_1116511848" dir="auto" aria-label="Pertanyaan  " aria-required="true" required=""></textarea>
						</div>
							<div class="error-message"></div>
								<!-- <div class="required-message">This is a required question</div> -->
			</div>
		</div>
	</div>





<input type="hidden" name="draftResponse" value="[,,&quot;2598964159975077580&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fbzx" value="2598964159975077580">

<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">

<input  class="btn btn-primary" type="submit" name="submit" value="Submit" id="ss-submit">
<div class="ss-secondary-text">Never submit passwords through Google Forms.</div></td>
</tr></tbody></table></div></ol></form>
</div>
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
					<a href="<?php bloginfo('url') ?>/kategori-<?php echo $category->slug ?>" class="<?php echo $category->slug ?>-link"></a>
					<?php	
						endforeach;
					?>
		</div>
			
			
	</div><!-- .col-md-3 -->

			
		
	
<?php get_footer(); ?>