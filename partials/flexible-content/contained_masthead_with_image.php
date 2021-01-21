<section class="contained-masthead" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row flex-column-reverse flex-lg-row  align-items-center align-items-lg-stretch">
			<div class="col-12 col-lg-6 col-xl-5 text sub-title-text-btn">
                <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
                <h1><?php the_sub_field( 'title' ); ?></h1>
				<p><?php the_sub_field( 'text' ); ?></p>
				<div data-aos="fade" >
                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a href="<?php echo esc_url( $button_link) ; ?>" class="btn solid white" ><?php the_sub_field( 'button_text' ); ?></a>
				<?php endif; ?>
				</div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 image">
                <?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>