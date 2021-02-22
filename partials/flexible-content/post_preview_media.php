<section class="post-preview-media" id="<?php the_sub_field( 'id' ); ?>">
<div class="container">
	<div class="row">
	<?php $posts = get_sub_field( 'posts' ); ?>
			<?php if ( $posts ) : ?>
				<?php foreach ( $posts as $post ) : ?>
					<?php setup_postdata ( $post ); ?>
					<div class="video col-4">
					<?php $image = get_field('image'); ?>
			<a class="vid-wrapper" style="background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('<?php echo $image['sizes']['large']; ?>');" href="https://www.youtube.com/embed/<?php the_field('video_id');?>"
				data-rel="lightcase:videos">
						<div class="content">
						<svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Home" transform="translate(-937.000000, -1155.000000)">
										<g id="Group-11" transform="translate(937.000000, 1155.000000)">
											<circle id="Oval" stroke="#FFFFFF" stroke-width="4" cx="42" cy="42" r="40"></circle>
											<polygon id="Triangle" fill="#FFB500" transform="translate(45.000000, 42.000000) rotate(-270.000000) translate(-45.000000, -42.000000) " points="45 25 64 59 26 59"></polygon>
										</g>
									</g>
								</g>
							</svg>
						<h6><?php the_title();?></h6>
						</div>
			</a>
		</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

</div>	
</div>
</section>