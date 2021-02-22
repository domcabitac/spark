<section class="post-type-offset-slider" id="<?php the_sub_field( 'id' ); ?>" >
	<div class="container small header-desktop">
		<div class="row align-items-center">
			<div class="col-6 col-lg-6 d-flex event-title align-self-center align-items-center">
				<h2>
					<?php the_sub_field( 'title' ); ?>
				</h2>	
				<div class="circle">
					<div class="posts">
					<?php if (get_sub_field('posts')):?>  
						<?php $event_count = count(get_sub_field('posts')); ?>
						<?php echo $event_count ?>
					<?php
						                else :
											echo '0';
						?>
					<?php endif; ?>
					</div>

				</div>
			</div>
			<div class="col-6 col-lg-6 d-flex justify-content-end align-self-center">
			<div class="slider-arrow left">
			<svg id="left">
  <path d="M0.5 9.35772H20.9956L14.2001 2.29941L16.4134 0L27 11L16.4134 22L14.2001 19.7006L20.9956 12.6423H0.5V9.35772Z" fill="white"></path>
</svg>
			</div>
					<div class="slider-arrow right">
					<svg id="right">
  <path d="M0.5 9.35772H20.9956L14.2001 2.29941L16.4134 0L27 11L16.4134 22L14.2001 19.7006L20.9956 12.6423H0.5V9.35772Z" fill="white"></path>
</svg></div>
				</div>
                </div>

		</div>
	</div>
	<?php $posts = get_sub_field( 'posts' ); ?>
	<?php if ( get_sub_field('posts') ) : ?>
	<div class="container header-mobile">
		<div class="row align-items-center">
			<div class="col-12 d-flex event-title align-self-center align-items-center">
				<div class="circle">
				<div class="posts">
					<?php if (get_sub_field('posts')):?>  
						<?php $event_count = count(get_sub_field('posts')); ?>
						<?php echo $event_count ?>
					<?php endif; ?>
					</div>
				</div>
				<h2>
					<?php the_sub_field( 'title' ); ?>
				</h2>
			</div>
	</div>
	<div class="row">
	<div class="col-12 d-flex event-title slick-mobile">
				<?php $i=0; foreach ( $posts as $post ) : ?>
				<?php setup_postdata ( $post ); ?>
				<a href="<?php the_permalink(); ?>" class="post-type-slide" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(<?php the_post_thumbnail_url('large');?>); border-radius: 5px;">
				<div class="topCard">
					<div class="container">
						<div class="row justify-content-start ">
							<div class="col-12">
								<div class="event-date">
								<?php $date = strtotime(get_field('date')); ?>
									<div class="date-num">
										<?php echo date('d', $date); ?>
									</div>
									<div class="date-month">
										<?php echo date('M', $date); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="event-dets-card">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h3 class="title">
									<?php the_title(); ?>
								</h3>
							</div>
						</div>
						<div class="row justify-content-start bottomCard">
							<div class="col-8">
								<div class="location">
									<img class='loc-img' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location.svg';/>
									<?php the_field( 'location' ); ?>
								</div>
							</div>
							<div class="col-4 align-self-center text-right time">
								<?php echo date('g:i a', $date); ?>
							</div>
						</div>
						</div>
					</div>
					<div class="d-flex">
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
				<?php
    $i++;
    if($i == 2) {
         break;
    }
?> 
				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>
			</div>
	</div>

		</div>
	</div>
	<div class="container small">

	<div class="slider slick-desktop">

		<?php foreach ( $posts as $post ) : ?>
		<?php setup_postdata ( $post ); ?>
		<div class="slide">
			<a href="<?php the_permalink(); ?>">
			<div class="post-type-slide"
				style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(<?php the_post_thumbnail_url('large');?>); border-radius: 5px;">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="event-date">
						<?php $date = strtotime(get_field('date')); ?>
							<div class="date-num">
								<?php echo date('d', $date); ?>
							</div>
							<div class="date-month">
								<?php echo date('M', $date); ?>
							</div>
					</div>
					</div>
				</div>

				<div class="event-dets-card">
					<div class="container">
						<div class="row">
							<div class="col-9">
								<h3 class="title">
									<?php the_title(); ?>
								</h3>
								<div class="location">
									<img class='loc-img' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location.svg';/>
									<?php the_field( 'location' ); ?>
								</div>
							</div>
							<div class="col-3 justify-content-end align-self-end time">
								<?php echo date('g:i a', $date); ?>
							</div>
						</div>
					</div>
				</div>

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
			</div>
			</a>
		</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<div class="container small">
				<div class="row justify-content-center align-items-center no-events">
					<div class="col-12 text-center">
						<h4>
							NO UPCOMING EVENTS. <span class='colored'>STAY TUNED!</span>
						</h4>
						<a href='/#contact'class="btn outline">	Get in touch
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.93944 28.9405L24.6947 13.1852L24.8806 22.9814L28.0715 23.0422L27.7792 7.77822L12.5152 7.48589L12.5761 10.6769L22.3722 10.8627L6.61691 26.618L8.93944 28.9405Z" fill="#FF9900"/>
            </svg>
            </a>
					</div>
				</div>

			</div>
		<?php endif; ?>

	</div>
	</div>
	<div class="container small">
		<div class="row">
			<div class="col-12">
				<div class="d-flex align-items-start justify-content-start events-desc">
				<p class="sub" ><?php the_sub_field( 'subtitle' ); ?></p>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link['url'] ); ?>"
					target="<?php echo esc_attr( $button_link['target'] ); ?>"
                    class="arrow-btn" id='aboutUs'><?php the_sub_field( 'button_text' ); ?>
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.85852 18.966L16.1837 8.64085L16.3055 15.0607L18.3967 15.1006L18.2051 5.09739L8.20187 4.90582L8.24177 6.99701L14.6616 7.11878L4.33646 17.444L5.85852 18.966Z" fill="#FF9900"/>
</svg>
</a>
                <?php endif; ?>
			</div >
		</div>
	</div>


</section>