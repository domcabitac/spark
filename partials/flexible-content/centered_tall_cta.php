<section class="centered-tall-cta" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
				</div>
				<div class="text">
				<p><?php the_sub_field( 'text' ); ?></p>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link) ; ?>"
					class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
