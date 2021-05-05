<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wp_footer(); ?>
</main>
<footer id='footer' class='d-lg-block'>
	<div class="container small">
		<div class="row align-items-center justify-content-start footerTop">
			<div class="col-12 col-xl-2 col-lg-2 text-center">
			<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">				
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footerLogo.svg" /></a>
			</a>
			</div>
			<div class="col-6 col-xl-1 col-lg-1 col-md-3 d-flex left-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-left-menu' ) ); ?>
			</div>
			<div class="col-6 col-xl-1 col-lg-1 col-md-3 d-flex right-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-right-menu' ) ); ?>
			</div>
			<div class="col-12 col-xl-3 col-lg-3 col-md-6 offset-xl-4 offset-lg-4 form d-flex newsLetter justify-content-end">
				<!-- <?php if ( have_rows( 'footer', 'option' ) ) : ?>
					<?php while ( have_rows( 'footer', 'option' ) ) : the_row(); ?>
					<div class="nlTitle">
							<?php //the_sub_field( 'newsletter_title' ); ?>
						</div>
						<?php //echo do_shortcode(get_sub_field( 'newsletter_form_shortcode' )); ?>
				<div class="nlSub">
					<?php //the_sub_field( 'newsletter_subtitle' ); ?>
				</div> -->
        	</div>
		</div>
		<div class="row justify-content-between endFooter">
			<div class="col-12 col-xl-6 col-lg-6 rightRes">
				SPARK Entertainmnet Bahamas © 2021 All Rights Restricted
			</div>
			<div class="col-12 col-xl-4 col-lg-4 offset-xl-1 offset-lg-1 ferraz">
				<?php $privacy_policy_link = get_sub_field( 'privacy_policy_link' ); ?>
					<?php if ( $privacy_policy_link ) : ?>
						<a href="/privacy-policy"><?php echo esc_html( $privacy_policy_link['title'] ); ?></a>
					<?php endif; ?>
					&#8198;| &#8198; Website created by 
				<a class='fc'href="https://www.ferrazcreative.com">Ferraz Creative</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
				<?php endif; ?>
</footer>


<script>
		AOS.init({
			duration: 1900,
			easing: 'ease',
			once: true,
			mirror: false
		});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();
	});
</script>
</body>
</html>
