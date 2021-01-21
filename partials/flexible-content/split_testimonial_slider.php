<section class="split-testimonial-slider" id="<?php the_sub_field( 'id' ); ?>">
<?php if ( have_rows( 'slides' ) ) : ?>
<?php while ( have_rows( 'slides' ) ) : the_row(); ?>
<div class="slide" style="background-image:linear-gradient(rgba(255,255,255,0.8), rgba(255,255,255,0.8)),url(<?php the_sub_field( 'background_image' ); ?>);">
    <div class="image">
    <?php $foreground_image = get_sub_field( 'foreground_image' ); ?>
	<?php if ( $foreground_image ) : ?>
	<img src="<?php echo esc_url( $foreground_image['url'] ); ?>"
		alt="<?php echo esc_attr( $foreground_image['alt'] ); ?>" />
    <?php endif; ?>
    </div>

    <div class="content text-center">
    <?php $stars = get_sub_field( 'stars' ); ?>
    <div class="stars">
    <?php
    for ($x = 1; $x <= $stars; $x++) {
    echo "<img src='" . get_stylesheet_directory_uri() ."/assets/img/star.svg'/>";
    }
    ?>
    </div>
    <h3><?php the_sub_field( 'quote' ); ?></h3>
	<div class="sub"><?php the_sub_field( 'author' ); ?></div>
	
	<?php $button_link = get_sub_field( 'button_link' ); ?>
	<?php if ( $button_link ) : ?>
	<a href="<?php echo esc_url( $button_link) ; ?>" class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
    </div>

	<?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</section>
