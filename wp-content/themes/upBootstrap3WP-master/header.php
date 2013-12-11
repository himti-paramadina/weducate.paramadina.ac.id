<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/weducate.apps.css">

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/engine_slider1/style.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/engine_slider1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	
		<div style="height: 41px; background-color: #444345;">
			<?php
				if (!is_user_logged_in()):
			?>
			<p align="right"><a href="#" data-toggle="modal" data-target="#login-form" class="top-login-link"><span class="glyphicon glyphicon-user"></span> Log In</a></p>
			<?php
				else: 
					$current_user = wp_get_current_user();
			?>
			<p align="right"><a href="#" class="top-login-link"><span class="glyphicon glyphicon-user"></span> Hai <strong><?php echo $current_user->display_name ?></strong>!</a></p>
			<?php
				endif;
			?>
		</div>
		
		<div style="background-color: #09a1da; height: 155px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-default" role="navigation">			
					        <div class="navbar-header">
					            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
								</button>
					            
					            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"  class="navbar-brand"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png"/></a>
					            
					        </div>
							
							<?php 
							$args = array('theme_location' => 'primary', 
										  'container_class' => 'navbar-collapse collapse', 
										  'menu_class' => 'nav navbar-nav',
										  'fallback_cb' => '',
				                          'menu_id' => 'main-menu',
				                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
							wp_nav_menu($args);
							?>
				
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		
	

	<div id="content" class="site-content">
