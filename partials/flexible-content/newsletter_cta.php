<section class="newsletter-cta" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 col-xl-6 text-center sub-title-text-btn">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
                <h2><?php the_sub_field( 'title' ); ?></h2>
                <div class="form"><?php echo do_shortcode(get_sub_field( 'form_shortcode' )); ?></div>
				<small><?php the_sub_field( 'under_form' ); ?></small>
			</div>
		</div>
	</div>
</section>
