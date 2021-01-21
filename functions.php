<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package WP
 */

//All external libraries should be enqueued here.

function enqueue_styles_and_scripts() {
		// If it's not the backend, enqueue these files.
		if ( ! is_admin() ) {

		// Styles
		wp_enqueue_style( 'aos_style', get_template_directory_uri() . '/assets/vendor/aos/aos.css',  array(), '1.0', 'all'  );

		wp_enqueue_style( 'lightcase_style', get_template_directory_uri() . '/assets/vendor/lightcase/css/lightcase.css',  array(), '1.0', 'all'  );

		wp_enqueue_style( 'wpgt_style_slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css',  array(), '1.0', 'all'  );

		//Our theme's stylesheet comes last.
		wp_enqueue_style( 'wpgt_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all' );
		
		// Scripts
		wp_enqueue_script( 'aos_js', get_template_directory_uri() . '/assets/vendor/aos/aos.js' );
		
		wp_enqueue_script( 'anime_js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js' );

		wp_enqueue_script( 'lightcase_js', get_template_directory_uri() . '/assets/vendor/lightcase/js/lightcase.js', array('jquery'), '1.0', false  );

		wp_enqueue_script( 'wpgt_slickJs', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', array('jquery'), '1.0', true );

		// Enqueue vendor JS after vendors to call those libraries.
		wp_enqueue_script( 'wpgt_vendorsJs', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), '1.0', true );

		// Enqueue custom JS last.
		wp_enqueue_script( 'wpgt_customJs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0', true );
	}
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts' );

//Removes automatic paragraph tags from content.
remove_filter( 'the_content', 'wpautop' );
remove_filter ('acf_the_content', 'wpautop');

//Adds support for post thumbnails.
add_theme_support( 'post-thumbnails' ); 

//Adds options page to Wordpress.
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

//Puts Yoast at the bottom of page and post editor.
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function register_menus() {
	register_nav_menus(
		array(
		  'header-menu' => __( 'Header Menu' ),
		  'footer-left-menu' => __( 'Footer Left Menu' ),
		  'footer-right-menu' => __( 'Footer Right Menu' ),
		)
	);
}

add_action( 'init', 'register_menus' );

//Removes theme customizor options.
add_action( 'customize_register', 'ja_remove_customizer_options', 30 );

//Change how long you want excerpts to be by word count
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function mb_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'mb_login_url' );

function mb_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertext', 'mb_login_title' );


//Customize how the login page looks like
function custom_login_styles() { 
	?> 
	<style type="text/css"> 
	body.login div#login h1 a {
	background-image: url("<?php echo get_template_directory_uri();?>/assets/img/logo.svg"); 
	filter:brightness(0); 
	background-size:contain;
	width:300px;
	}
	body{
		/*background-image:url("<?php echo get_template_directory_uri();?>/assets/img/home-masthead.jpg") !important; */
		background-size:cover !important;
	}
	body, .login form{
		color:#000 !important;
		border:none !important;
	}
	.login form{
		background-color:rgba(255,255,255,0.5) !important;
		backdrop-filter:blur(20px);
	}
	.login form .input, .login input[type="text"], .login form input[type="checkbox"]{
		background:transparent !important;
		border-radius:0;
		color:#000;
	}
	.login #nav a, .login #backtoblog a{
		color:#000 !important;
	}
	.login #nav a:hover, .login #backtoblog a:hover{
		color:#007cba !important;
	}
	.login .message, .login .success, .login #login_error{
		background-color:rgba(255,255,255,0.5) !important;
		backdrop-filter:blur(20px);
	}
	.wp-core-ui .button-primary{
		
		border-radius:0 !important;
		border:none !important;
		color:#FFF !important;
		transition:250ms all ease ;
	}
	.wp-core-ui .button-primary:hover{
		background-color:#FFF;
		color:#000;
	}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_styles' );

function my_wpcf7_dropdown_form($html) {
	$text = '';
	$html = str_replace('---', '' . $text . '', $html);
	return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_dropdown_form');

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyB36tsVYfM38kGW5MJpX1GTt5W-HI8ZPvM';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyB36tsVYfM38kGW5MJpX1GTt5W-HI8ZPvM');
}
add_action('acf/init', 'my_acf_init');
