<?php
/**
 * 404 Page
 *
 * Theme 404 Page
 *
 * @since   1.0.0
 * @package WP
 */

get_header(); ?>
<section id="not-found-page">
	<div class="container small">
        <div class="row flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <div class="sub">Page Not Found</div>
        </div>
		<div class="row justify-content-center">
			<div class="col-10 text-center">
			<a class='btn solid'href="<?php echo get_home_url(); ?>">Go to Homepage
                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.93944 21.9405L18.6947 6.18521L18.8806 15.9814L22.0715 16.0422L21.7792 0.778222L6.51518 0.485891L6.57606 3.67686L16.3722 3.86268L0.616912 19.618L2.93944 21.9405Z" fill="#FF9900"/>
</svg>

            </a>
                			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
