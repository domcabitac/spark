<section class="image-text <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container small">
	<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-lg-6 col-xl-6 d-flex image <?php if(get_sub_field( 'image_position' ) == 'right'):?><?php endif;?>"
			><?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" data-aos="fade-up"/>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-6 col-xl-6 d-flex <?php if(get_sub_field( 'image_position' ) == 'left'):?><?php endif;?> sub-title-text-btn">
				<div class="text_area">
					<div class="text-left">
						<h3 class="subtitle"><?php the_sub_field( 'subtitle' ); ?></h3>
						<h2><?php the_sub_field( 'title' ); ?></h2>
					</div>
					<div class="text-right">
						<p><?php the_sub_field( 'text' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
