<section class="horizontal-scrolling-images sub-title-text-btn" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 col-xl-7 text-center">
				<div class="sub normal"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
		</div>
	</div>
	<?php $gallery_images = get_sub_field( 'gallery' ); ?>
	<?php if ( $gallery_images ) :  ?>
	<div class="block">
		<div class="animation">
			<?php foreach ( $gallery_images as $gallery_image ): ?>
			<div>
				<img src="<?php echo esc_url( $gallery_image ['sizes']['large'] ); ?>"
					alt="<?php echo esc_attr( $gallery_image ['alt'] ); ?>" />
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 col-xl-7 text-center">
				<p><?php the_sub_field( 'text' ); ?></p>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link) ; ?>"
					class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
