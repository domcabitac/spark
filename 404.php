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
	<div class="container">
        <div class="row flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <div class="sub">Page Not Found</div>
        </div>
		<div class="row justify-content-center">
			<div class="col-10 text-center">
				Try returning to the <a href="<?php echo get_home_url(); ?>">homepage</a> to find what you're looking for.
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
