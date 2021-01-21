<section class="testimonial-list" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
            <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
		<h2><?php the_sub_field( 'title' ); ?></h2>
            </div>
		</div>
		
		<?php if ( have_rows( 'list' ) ) : ?>
		<?php while ( have_rows( 'list' ) ) : the_row(); ?>
		<div class="row justify-content-center testimonial-row">
			<div class="col-12 col-lg-4">
				<?php $stars = get_sub_field( 'stars' ); ?>
				<div class="stars">
					<?php
    for ($x = 1; $x <= $stars; $x++) {
    echo "<img src='" . get_stylesheet_directory_uri() ."/assets/img/star.svg'/>";
    }
    ?>
                </div>
                <h3><?php the_sub_field( 'short_quote' ); ?></h3>
				<div class="author"><?php the_sub_field( 'author' ); ?></div>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link['url'] ); ?>"
					target="<?php echo esc_attr( $button_link['target'] ); ?>" class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
                <?php else:?>
                    <?php the_sub_field( 'button_text' ); ?>
				<?php endif; ?>
				
			</div>
			<div class="col-12 col-lg-6">
				<?php the_sub_field( 'long_quote' ); ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
