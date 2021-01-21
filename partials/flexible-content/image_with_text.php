<section class="image-text <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 col-xl-5 image <?php if(get_sub_field( 'image_position' ) == 'right'):?>offset-xl-1<?php endif;?>"><?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-6 col-xl-5 <?php if(get_sub_field( 'image_position' ) == 'left'):?>offset-xl-1<?php endif;?> sub-title-text-btn">
                <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
                <h2><?php the_sub_field( 'title' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
		<?php if ( $button_link ) : ?>
		<a href="<?php echo esc_url( $button_link) ; ?>" class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include "arrow.php";?></a>
        <?php endif; ?>
			</div>
		</div>
	</div>
</section>
