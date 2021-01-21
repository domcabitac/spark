<section class="post-type-offset-slider" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 title">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
			<div class="col-12 col-lg-6 d-flex justify-content-end">
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link['url'] ); ?>"
					target="<?php echo esc_attr( $button_link['target'] ); ?>"
                    class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
                <?php endif; ?>
                </div>

		</div>
	</div>
	
	<?php $posts = get_sub_field( 'posts' ); ?>
	<?php if ( $posts ) : ?>
	<div class="slider">


		<?php foreach ( $posts as $post ) : ?>
		<?php setup_postdata ( $post ); ?>
		<div class="slide">
			<a href="<?php the_permalink(); ?>" class="post-type-slide"
				style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(<?php the_post_thumbnail_url('large');?>)">
				<div class="sub"><?php the_title(); ?></div>
				<h4><?php the_field('short_description'); ?></h4>
				<div class='d-flex'>
				<?php
				$post_tags = get_the_tags();
 
				if ( $post_tags ) {
					foreach( $post_tags as $tag ) {
					echo '<div class="tag">' . $tag->name . '</div>'; 
					}
				}
				?>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="d-flex align-items-center justify-content-center">
					<div class="slider-arrow left">
						<svg width="10px" height="18px" viewBox="0 0 10 18" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<title>Path</title>
							<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Home" transform="translate(-1415.000000, -2138.000000)" fill-rule="nonzero"
									stroke="#D4D4D4">
									<g id="Group-16" transform="translate(195.999900, 2117.300000)">
										<polyline id="Path"
											transform="translate(1224.000000, 29.500000) scale(-1, 1) rotate(-90.000000) translate(-1224.000000, -29.500000) "
											points="1216 25 1224 34 1232 25"></polyline>
									</g>
								</g>
							</g>
						</svg></div>
					<div class="slider-arrow right">
						<svg width="61px" height="62px" viewBox="0 0 61 62" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<title>Group 30</title>
							<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Home" transform="translate(-1461.000000, -2116.000000)" fill-rule="nonzero">
									<g id="Group-16" transform="translate(195.999900, 2117.300000)">
										<g id="Group-30" transform="translate(1266.000000, 0.000000)">
											<circle id="Oval-Copy" stroke="#DCE0E5"
												transform="translate(29.500000, 29.500000) scale(-1, 1) translate(-29.500000, -29.500000) "
												cx="29.5" cy="29.5" r="29.5"></circle>
											<polyline id="Path-Copy" stroke="#1D1E23"
												transform="translate(31.000000, 28.400000) rotate(-90.000000) translate(-31.000000, -28.400000) "
												points="23 23.9 31 32.9 39 23.9"></polyline>
										</g>
									</g>
								</g>
							</g>
						</svg></div>
				</div>

			</div>
		</div>
	</div>

	<?php endif; ?>

</section>
