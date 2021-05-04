<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-16x16.png"/>
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/site.webmanifest"/>
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/safari-pinned-tab.svg" color="#5bbad5"/>
<?php wp_head(); ?>

<title> <?php wp_title(); ?> </title>
</head>
<body <?php body_class(); ?>>
<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
<nav id="desktop" class="d-none d-lg-block">
	<div class="container small">
		<div class="row justify-content-between align-items-center">
			<div class="col-2">
			<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">				
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" /></a>
			</a>
			</div>
			<div class="col-8 d-flex align-items-end flex-column">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
			<div class="col-1 d-flex inquire justify-content-end">
			<a class="bigpadding" href='/#contact'>
 				<button class="wt-btn_sign"><span class="wt-btn_sign-bound"><span data-width="#FF9900" data-text="<?php the_field( 'menu_button_text', 'option' ); ?>"><?php the_field( 'menu_button_text', 'option' ); ?></span></span></button>
 			 </a>
			</div>
		</div>
	</div>
</nav>
<nav id="mobile" class="d-flex d-lg-none justify-content-between align-items-start">
	<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" /></a>
		<button class="hamburger hamburger--spring" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
	<div id="mobile_menu">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); 
		?>
		<a class="bigpadding" href='/#contact'>
 				<button class="wt-btn_sign"><span class="wt-btn_sign-bound"><span data-width="#FF9900" data-text="Inquire">Inquire</span></span></button>
 			 </a>
	</div>	
</nav>
<main>
