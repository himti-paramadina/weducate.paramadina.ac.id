<?php
/**
 * Template Name: Page - About Us
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

		<div class="row">
			<div class="col-md-9 content-text">
				<p class="about"><strong>Weducate</strong> merupakan <em>Social Project</em> untuk berbagi pengetahuan yang berkaitan dengan pemanfaatan teknologi informasi di masyarakat. <strong>Weducate</strong> dibuat oleh seluruh mahasiswa yang mengambil mata kuliah Komputer dalam Masyarakat pada tahun ajaran 2013/2014. Harapan kami adalah masyarakat memperoleh tambahan pengetahuan dan mendapatkan pemahaman yang baik mengenai berbagai hal, terutama perihal hukum dan etika, saat berinteraksi dengan memanfaatkan perangkat teknologi informasi.</p>

				<p><strong>Weducate</strong> membuka peluang bagi siapapun dan dimanapun yang ingin memberikan tulisannya untuk dinikmati oleh masyarakat Indonesia. Tentu pengetahuan yang disampaikan akan membuka cakrawala pembaca mengenai perkembangan teknologi dan dampaknya dalam masyarakat yang saat ini sedang terjadi. </p>

				<p class="about">Ada 6 topik utama dalam situs ini, yaitu <strong><em>Perangkat, Media Sosial, Hukum dan Etika, Keamanan, serta Sistem Operasi dan Aplikasi</em></strong>. Setiap artikel merupakan pengalaman pribadi dari masing-masing kontributor dan memiliki kompetensi yang memadai. Sebelum dipublikasikan, setiap artikel dicermati oleh editor untuk memastikan tulisan dan bahasanya mudah dicerna.</p>

				<p class="about">Selanjutnya, Himpunan Mahasiswa Teknik Informatika Paramadina akan membantu dalam pengelolaan <strong>Weducate</strong>. Dengan demikian, diharapkan situs ini dapat terus dipelihara dan dikembangkan serta bermanfaat bagi masyarakat.</p>

				<p>Semoga <strong>Weducate</strong> dapat menjadi salah satu media yang berperan aktif dalam meningkatkan pengetahuan masyarakat di bidang teknologi informasi.</p>
			</div>

			<div class="col-md-3 maps">
				<div class="maps-title">
					<div style="float:left; margin-right:10px;"><img src="<?php echo get_template_directory_uri();?>/img/map.png"/>
					</div>
					<div style="float:left;">
						<p style="color: #fff;">Phone +6221 00 0011</p>
						<p style="color: #fff;">info@weducate.com</p>
						<p style="color: #fff;">Jl. Gatot Subroto Kav. 97</p>
					</div>			
				</div>

				<div style="padding-bottom: 10px;">
					<iframe width="263" height="255" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;aq=0&amp;oq=Universitas+Paramadina&amp;sll=37.0625,-95.677068&amp;sspn=42.495706,79.013672&amp;ie=UTF8&amp;hq=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;t=m&amp;ll=-6.241106,106.832975&amp;spn=0.003626,0.002811&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br />
					<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;aq=0&amp;oq=Universitas+Paramadina&amp;sll=37.0625,-95.677068&amp;sspn=42.495706,79.013672&amp;ie=UTF8&amp;hq=Universitas+Paramadina,+Mampang+Prapatan,+DKI+Jakarta,+Indonesia&amp;t=m&amp;ll=-6.241106,106.832975&amp;spn=0.003626,0.002811&amp;z=17&amp;iwloc=A" style="color:#0000FF;text-align:left"></a>
				</div>
			</div>
		</div>

		<div class="row" style="padding: 30px 0 30px 0;">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-4 team-profile">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dev-team/advisor-n-lecturer.png"/>
						<a href="#" id="advisor">Advisor & Lecturer</a>
					</div>
					<div class="col-md-4 team-profile">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dev-team/head-development.png"/>
						<a href="#" id="head-dev">Head of Development</a>
					</div>
					<div class="col-md-4 team-profile">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dev-team/content-mng-team.png"/>
						<a href="#" id="content-mng">Content Management</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 team-profile">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dev-team/front-end-dev.png"/>
						<a href="#" id="front-end">Front End Developer</a>
					</div>
					<div class="col-md-4 team-profile">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dev-team/ui-designer.png"/>
						<a href="#" id="ui-designer">UI Designer</a>
					</div>
					<div class="col-md-4 team-profile">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dev-team/back-end-dev.png"/>
						<a href="#" id="back-end">Back End Developer</a>
					</div>
				</div>
			</div>
		</div>

	
				<a style="padding-bottom:10px"; href="#" id="contact-us-toggle"></a>
				<div id="contact-us" style="display: none;">
					
					<div class="row" style="padding-top: 20px; margin: 8px;" >
						<div class="col-md-6">
							<div class="contact-us-title">
								<p style="color: #ffffff;">Silahkan isi data diri Anda beserta pertanyaan / saran / kritik Anda disini</p>
							</div>

							<div class="contact-us-form">
								<form action="https://docs.google.com/forms/d/12H1cNVND3uewYdvgn3ynnBdzztzAdj23T8vRHPXoJl4/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
									<ol style="padding-left: 0">
										<table>
										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item ss-item-required ss-text">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1589006728">
														<tr>
															<td>
																<div class="ss-q-title">Nama
																	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
																	<span class="ss-required-asterisk">*</span>
																</div>		
															</td>
															<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
													</label>
															<td>:</td>
															<td>
																<input type="text" class="width-form" name="entry.1589006728" value="" class="ss-q-short" id="entry_1589006728" dir="auto" aria-label="Nama  " aria-required="true" required="" title="">
															</td>
														</tr>
													<div class="error-message"></div>
												</div>
											</div>
										</div> 

										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item ss-item-required ss-text">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_95797113">
													<tr>
														<td>
															<div class=	"ss-q-title">Email
																<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
																<span class="ss-required-asterisk">*</span>
															</div>
														</td>
														<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
													</label>
														<td>:</td>
														<td>
															<input type="email" name="entry.95797113" value="" class="ss-q-short" id="entry_95797113" dir="auto" aria-label="Email  Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">
														</td>
													</tr>		
												</div>
											</div>
										</div> 

										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item  ss-text">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_344064089">
													<tr>
														<td>
															<div class="ss-q-title">Telepon</div>
														</td>
														<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
															</label>
														<td>:</td>
														<td>
															<input type="text" name="entry.344064089" value="" class="ss-q-short" id="entry_344064089" dir="auto" aria-label="Telepon  " title="">
														</td>
													</tr>		
													<div class="error-message"></div>
												</div>
											</div>
										</div>

										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item ss-item-required ss-text">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_815946917">
													<tr>
														<td>
															<div class="ss-q-title">Institusi
																<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
																<span class="ss-required-asterisk">*</span>
															</div>	
														</td>
														<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
														</label>
														<td>:</td>
														<td>
															<input type="text" name="entry.815946917" value="" class="ss-q-short" id="entry_815946917" 	dir="auto" aria-label="Institusi  " aria-required="true" required="" title="">
														</td>
													</tr>
													<div class="error-message"></div>
												</div>
											</div>
										</div>
										</table>
							</div>
						</div>
					
						<div class="col-md-6">
							<div class="contact-us-form">
										<table>
										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item ss-item-required ss-select">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_341812938">
													<tr>
														<td>
															<div class="ss-q-title">Tipe Pertanyaan
																<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
																<span class="ss-required-asterisk">*</span>
															</div>
														</td>
														<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
														</label>
														<td>:</td>
														<td>
															<select name="entry.341812938" id="entry_341812938" aria-label="Tipe Pertanyaan  " aria-	required="true" required="">
																<option value=""></option>
																<option value="Kontribusi">Kontribusi</option> 
																<option value="Lokasi">Lokasi</option>
																<option value="Lain-lain">Lain-lain</option>
															</select>
														</td>
													</tr>
										
												</div>
											</div>
										</div> 

										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item ss-item-required ss-text">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1945101671">
													<tr>
														<td>
															<div class="ss-q-title">Subyek
																<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
																<span class="ss-required-asterisk">*</span>
															</div>
														</td>
														<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
														</label>
														<td>:</td>
														<td>
															<input type="text" name="entry.1945101671" value="" class="ss-q-short" id="		entry_1945101671" dir="auto" aria-label="Subyek  " aria-required="true" required="" title="">
														</td>
													</tr>
						
													<div class="error-message"></div>
												</div>
											</div>
										</div> 

										<div class="ss-form-question errorbox-good">
											<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text">
												<div class="ss-form-entry">
													<label aria-hidden class="ss-q-item-label aria-todo" for="entry_1037057138">
													<tr>
														<td>
															<div class="ss-q-title">Pertanyaan
																<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
																<span class="ss-required-asterisk">*</span>
															</div>
														</td>
														<div class="ss-q-help ss-secondary-text" dir="ltr"></div>
														</label>
														<td>:</td>
														<td>
															<textarea name="entry.1037057138" rows="8" cols="0" class="ss-q-long" id="entry_1037057138" dir="auto" aria-label="Pertanyaan  " aria-required="true" required=""></textarea>
														</td>
													</tr>
													
													<div class="error-message"></div>
												</div>
											</div>
										</div>

										<input type="hidden" name="draftResponse" value="[]">
										<input type="hidden" name="pageHistory" value="0">

										<input type="hidden" name="fbzx" value="-1852155930214459541">

										<div class="ss-item ss-navigate">
											<table id="navigation-table">
												<tbody>
													<tr>
														<td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
															<button type="button" class="btn-submit">SUBMIT</button>
														</td>	
													</tr>
												</tbody>
											</table>
										</div>
									</ol>
								</form>
								</table>
							</div>
						</div>
					</div>	
				</div>


				<a href="#" id="our-team-toggle"></a>
				<div id="our-team">
					<div class="row">
						<?php 
							$user_query = new WP_User_Query(array('role' => 'Administrator'));
						?>

						<?php 
							$count = 0;

							foreach ($user_query->results as $user):
								$count++;

								if ($user->display_name == "weducate"):
									// Skip!
								else:
						?>
						<script type="text/javascript">
							gravatarAccounts.push("<?php echo md5($user->user_email) ?>");
						</script>
						<div class="col-md-2" style="margin-top: 20px;">
							<a href="<?php echo get_author_posts_url($user->id); ?>" class="team-avatar" style="background-image: url(http://www.gravatar.com/avatar/<?php echo md5($user->user_email) ?>);"></a>

							<p align="center"><?php echo $user->display_name; ?></p>
							<p align="center">As Founder</p>
							<p align="center" id="<?php echo md5($user->user_email) ?>-accounts">
								<a href="mailto:<?php echo $user->user_email ?>"><img src="<?php echo get_template_directory_uri();?>/img/email-icon.png"/></a>
							</p>
						</div>	

								<?php
									if ($count % 6 == 0) echo "</div><div class=\"row\">";
								endif;
							endforeach; 
						?>

					</div>
					<div style="height: 20px; display: block; clear: both; width: 100%;"></div>
				</div>

				<a href="#" id="contributors-toggle"></a>
				<div id="contributors" style="display: none;">
					<div class="row">
						<?php 
							$user_query = new WP_User_Query(array('role' => 'Administrator'));
						?>

						<?php 
							$count = 0;
							foreach ($user_query->results as $user):
								$count++;

								if ($user->display_name == "weducate"):
									// Skip!
								else:
						?>
						<div class="col-md-2" style="margin-top: 20px;">
							<a href="<?php echo get_author_posts_url($user->id); ?>" class="team-avatar" style="background-image: url(http://www.gravatar.com/avatar/<?php echo md5($user->user_email) ?>);"></a>

							<p align="center"><?php echo $user->display_name; ?></p>
							<p align="center">As Founder</p>
							<p align="center">

							<?php
								
								/* Get Gravatar Profile */

								/*
								$str = file_get_contents('http://www.gravatar.com/' . md5($user->user_email) . '.php');
								$profile = unserialize($str);

								if (is_array($profile) && isset( $profile['entry'])):
									if (count($profile['entry'][0]['accounts']) > 0):
										foreach ($profile['entry'][0]['accounts'] as $account):
											if ($account['domain'] == "facebook.com"):
							?>
								<a target="_blank" href="<?php echo $account['url'] ?>"><img src="<?php echo get_template_directory_uri();?>/img/fb-icon.png"/></a>
							<?php
											endif;

											if ($account['domain'] == "twitter.com"):
							?>
								<a target="_blank" href="<?php echo $account['url'] ?>"><img src="<?php echo get_template_directory_uri();?>/img/twitter-icon.png"/></a>
							<?php
								 			endif;
					 		?>

					 		<?php
					 						if ($account['domain'] == "google.com"):
					 		?>
								<a target="_blank" href="<?php echo $account['url'] ?>"><img src="<?php echo get_template_directory_uri();?>/img/gmail-icon.png"/></a>
							<?php
											endif;
										endforeach;
									endif;

								endif;
								*/
								?>

								<a href="mailto:<?php echo $user->user_email ?>"><img src="<?php echo get_template_directory_uri();?>/img/email-icon.png"/></a>

							</p>
						</div>	

								<?php
									if ($count % 6 == 0) echo "</div><div class=\"row\">";
							
								endif;


							endforeach; 

						
						?>

					</div>
				</div>

			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->

	<script type="text/javascript">

	</script>

<?php get_footer(); ?>