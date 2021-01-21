<section class="contact-section">
<?php if ( have_rows( 'contact_form', 'option' ) ) : ?>
	<?php while ( have_rows( 'contact_form', 'option' ) ) : the_row(); ?>
    <div class="container">
        <div class="row justify-content-between">
        <div class="col-12 col-lg-6 col-xl-5 content">
        <h2><?php the_sub_field( 'title' ); ?></h2>
		<p><?php the_sub_field( 'text' ); ?></p>
		<div class="d-flex align-items-center">
        <?php $display_picture = get_sub_field( 'display_picture' ); ?>
        <?php if ( $display_picture ) : ?>
			<img src="<?php echo esc_url( $display_picture['url'] ); ?>" alt="<?php echo esc_attr( $display_picture['alt'] ); ?>" />
		<?php endif; ?>
            <a href="mailto:<?php the_sub_field( 'email' ); ?>" class="email">
            <?php the_sub_field( 'email' ); ?>
            </a>
        </div>
		
		
        </div>
        <div class="col-12 col-lg-6 col-xl-7 form">
        <?php echo do_shortcode(get_sub_field( 'form_shortcode' )); ?>
        </div>
        </div>
    </div>
	<?php endwhile; ?>
<?php endif; ?>
</section>