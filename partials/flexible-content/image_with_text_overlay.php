<section class="image-text-overlay <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container small">
		<div class="row top justify-content-end image <?php if(get_sub_field( 'image_position' ) == 'right'):?><?php endif;?>"><?php $image = get_sub_field( 'image' ); ?>
			<div id="parrallax-2">
			<?php if ( $image ) : ?>
					<img class='parrallax-2 side-image' data-aos="fade-right"      data-aos-offset="-1000"
     data-aos-easing="ease-in-sine"src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>	
			</div>

			<div class="col-lg-4 pull-xl-2 pull-lg-2 pull-md-2 col-sm-12 col-12 align-self-end title-text" >
				<div class="img-sub">
					<?php the_sub_field( 'subtitle' ); ?>
				</div>
					<h2>
						<?php the_sub_field( 'title' ); ?>
					</h2>
			</div>
		</div>
		<div class="row justify-content-between bottom">
			<div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
				<p class='main_text'><?php the_sub_field( 'main_text' ); ?></p>
				
			</div>
			<div class="col-12 col-xl-8 col-lg-8 col-md-8 col-sm-12">
				<p class='text'>
					<?php the_sub_field( 'text' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>
