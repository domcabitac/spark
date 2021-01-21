<section class="three-cards" id="<?php the_sub_field( 'id' ); ?>">
    <div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-8 col-xl-7 sub-title-text-btn text-center">
			<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
			<h2><?php the_sub_field( 'title' ); ?></h2>
			<p><?php the_sub_field( 'text' ); ?></p>
		</div>
	</div>

	<?php if ( have_rows( 'cards' ) ) : $i = 0;?>
	<div class="row justify-content-center align-items-stretch card-wrapper">
        <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
        <div class="col-12 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-delay="<?php echo $i;?>">
		<div class="card">
		<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
		<h3><?php the_sub_field( 'title' ); ?></h3>
        <p><?php the_sub_field( 'text' ); ?></p>
        <strong><?php the_sub_field( 'bullets_title' ); ?></strong>
		<?php if ( have_rows( 'bullet_points' ) ) : ?>
		<ul>
			<?php while ( have_rows( 'bullet_points' ) ) : the_row(); ?>
			<li><?php the_sub_field( 'bullet' ); ?></li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>

		<?php $button_link = get_sub_field( 'button_link' ); ?>
		<?php if ( $button_link ) : ?>
		<a href="<?php echo esc_url( $button_link) ; ?>" class="btn"><?php the_sub_field( 'button_text' ); ?></a>
        <?php endif; ?>
        </div>
		</div>


		<?php $i = $i + 400; endwhile; ?>
	</div>
	<?php endif; ?>

	<?php if ( have_rows( 'cta' ) ) : ?>
	<div class="row justify-content-center align-items-center cta">
		<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
		<div class="col-12 col-lg-10 d-flex flex-column flex-lg-row  align-items-center justify-content-center">
            <h3><?php the_sub_field( 'text' ); ?></h3>
            <?php $button_link = get_sub_field( 'button_link' ); ?>
		<?php if ( $button_link ) : ?>
			<a href="<?php echo esc_url( $button_link) ; ?>" class="btn solid"><?php the_sub_field( 'button_text' ); ?></a>
		<?php endif; ?>
		</div>
		
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	</div>
</section>
