<section class="newsletter-cta" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container small">
		<div class="row justify-content-start" style='text-align: left;'>
			<div class="col-12">
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
	</div>
		<div class="row justify-content-start" style='text-align: left;'>
			<div class="col-12">
				<p class="sub"><?php the_sub_field( 'subtitle' ); ?></p>
			</div>
		</div>
		<div class="row justify-content-start">
			<div class="col-12 text-left sub-title-text-btn">
				<div class="form"><?php echo do_shortcode(get_sub_field( 'form_shortcode' )); ?></div>
				<small><?php the_sub_field( 'under_form' ); ?></small>
			</div>
		</div>
	</div>
</section>
