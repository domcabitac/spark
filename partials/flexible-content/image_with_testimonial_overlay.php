<section class="image-testimonial-overlay" id="<?php the_sub_field( 'id' ); ?>" style="background-image:url(<?php the_sub_field( 'background_image' ); ?>);">

	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-lg-8 col-xl-6 text text-center">
				<h3><?php the_sub_field( 'quote' ); ?></h3>
				<p><?php the_sub_field( 'author' ); ?></p>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link) ; ?>"
					class="btn solid"><?php the_sub_field( 'button_text' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
    </div>
    <div class="overlay"></div>
</section>
