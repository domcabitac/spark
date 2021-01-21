<section class="static-logo-list" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
			
        </div>
        <div class="row">
				<?php if ( have_rows( 'logo_list' ) ) : ?>
				<?php while ( have_rows( 'logo_list' ) ) : the_row(); ?>
				<?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
				<div class="col-6 col-md-4 col-lg-3 logo-container">
					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) : ?>
					<a href="<?php echo esc_url( $link['url'] ); ?>"
						target="<?php echo esc_attr( $link['target'] ); ?>"><?php endif; ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>"
							alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<?php if ( $link ) : ?></a><?php endif; ?>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
	</div>

</section>
