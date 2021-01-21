<section class="image-gallery" id="<?php the_sub_field( 'id' ); ?>">
<div class="container">
<div class="row">
			<div class="col-12 col-lg-9 title">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
			<div class="col-12 col-lg-3 d-flex justify-content-end">
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link['url'] ); ?>"
					target="<?php echo esc_attr( $button_link['target'] ); ?>"
                    class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
                    <?php endif; ?>
                </div>

        </div>
        <div class="row gallery">
        <?php $gallery_images = get_sub_field( 'gallery' ); ?>
			<?php if ( $gallery_images ) :  ?>
				<?php foreach ( $gallery_images as $gallery_image ): ?>
					<div  class="col-6 col-md-4">
					<a href="<?php echo esc_url( $gallery_image['url'] ); ?>"  
                        data-rel="lightcase:<?php the_sub_field( 'id' ); ?>" data-lc-caption="<?php echo $gallery_image['caption']; ?>">
                        <img src="<?php echo esc_url( $gallery_image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>"/>
					</a>
				</div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
</div>
</section>