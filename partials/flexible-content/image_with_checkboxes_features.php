<section class="image-checkboxes <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div
				class="col-12 col-lg-6 col-xl-5 <?php if(get_sub_field( 'image_position' ) == 'right'):?>offset-xl-1<?php endif;?> image">
				<?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div
				class="col-12 col-lg-6 col-xl-5 <?php if(get_sub_field( 'image_position' ) == 'left'):?>offset-xl-1<?php endif;?> text">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>



				<?php if ( have_rows( 'features' ) ) : ?>
				<div class="checkboxes">
					<?php while ( have_rows( 'features' ) ) : the_row(); ?>
					<div class="check-wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path
								d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
						</svg>
						<div class="bullet-text"><?php the_sub_field( 'feature' ); ?></div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
					<div data-aos="fade-up">
				<a href="<?php echo esc_url( $button_link) ; ?>"
					class="btn solid"><?php the_sub_field( 'button_text' ); ?></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
