<section class="progress-bar-with-text" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-lg-10 col-xl-9 text-center sub-title-text-btn">
				<div class="sub normal" data-aos="fade"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
				<div class="progress progress-striped">
					<div role="progressbar progress-striped" style="width: <?php the_sub_field( 'percentage' ); ?>%;"
						class="progress-bar"><span><?php the_sub_field( 'progress_bar_text' ); ?></span></div>
                </div>
                <p><?php the_sub_field( 'under_progress_bar' ); ?></p>
			</div>
        </div>
        <div class="row booking-row">
        <div class="col-12 booking-wrapper"><?php the_sub_field( 'embed' ); ?></div>
		</div>
		<div class="row justify-content-center action-row">
        <?php if ( have_rows( 'action_items' ) ) : ?>
				<?php while ( have_rows( 'action_items' ) ) : the_row(); ?>
				<div class="col-12 col-lg-8 d-flex align-items-center action-item">
					<div class="image">
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) : ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php endif; ?>
					</div>
					<div class="text">
						<div class="sub">
						<?php the_sub_field( 'subtitle' ); ?>
						</div>
						<h3>
						<?php the_sub_field( 'text' ); ?>
						</h3>
					</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
            <div class="sub"><?php the_sub_field( 'under_text' ); ?></div>
            </div>
        </div>
        
        <?php if ( have_rows( 'testimonial' ) ) : ?>
                <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
                <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-6">
				<div class="form-testimonial d-flex align-items-center">

					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) : ?>
					<div class="image">
						<img src="<?php echo esc_url( $image['url'] ); ?>"
							alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					</div>
					<?php endif; ?>
					<div class="text">
						<p><?php the_sub_field( 'quote' ); ?></p>
						<div class="d-flex align-items-center">
							<div class="author"><?php the_sub_field( 'author' ); ?></div>
							<div><?php $link = get_sub_field( 'link' ); ?>
								<?php if ( $link ) : ?>
								<a href="<?php echo esc_url( $link['url'] ); ?>"
									target="<?php echo esc_attr( $link['target'] ); ?>" class="arrow-btn">View Website <?php include 'arrow.php'; ?></a>
								<?php endif; ?></div>
						</div>
					</div>
				</div>
			</div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
    </div>
    <div id="top-ocean"></div>
</section>