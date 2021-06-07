<?php
/**
* Page
*
* Template Name: Events
*
* @since   1.0.0
* @package WP
*/
get_header(); ?>

<?php 
    $args = array(  
        'post_type' => 'events',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
    );
    $loop = new WP_Query( $args ); 
?>
<section class='events'>
<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
    <div class="container small">
        <div class="row align-items-center justify-content-start events-header">
            <div class="col-12 my-auto">
                <div class='event-title'>
                    <?php the_field( 'title' ); ?>
                <div class="circle">
                        <div class="posts">
                        <?php     
                        if ($loop->have_posts()): 
                            $i = 0;
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                                $i++;
                            endwhile;
                            echo $i;
                        else :
                            echo '0';
                        endif;
                        wp_reset_postdata(); 

                        ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class='sub'>
                    <?php the_field( 'subtitle' ); ?>
            </p>
            </div>

        </div>
        <div class="row box">
            <?php     
            if ($loop->have_posts()): 
                // while($my_query->have_posts()): $my_query->the_post();
                while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex">
            <a href="<?php the_permalink();?>" class="post-type-slide" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)),url(<?php the_post_thumbnail_url('large');?>);">
                <div class="topCard">
                    <div class="container">
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
                    </div>
                </div>
                <div class="event-dets-card">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2 class="title">
									<?php the_title(); ?>
								</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-8">
                                <div class="location">
									<img class='loc-img' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location.svg';/>
									<?php the_field( 'location' ); ?>
								</div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-4 align-self-center justify-content-end">
                                <div class="time">
								    <?php echo date('g:i a', $date); ?>
                                </div>
                            </div>
                        </div>

							</div>
						</div>
                </a>
            </div>
            <?php 
                
        endwhile;
                wp_reset_postdata(); 
            ?>
            <?php else: ?>
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
        </div>

        </div>
    </div>
        <?php endif ?>
</section>
<section class="image-testimonial-overlay" id="<?php the_sub_field( 'id' ); ?>" >
<!-- <section class="image-testimonial-overlay" id="<?php the_sub_field( 'id' ); ?>" style="background-image: url('data:image/svg+xml,%3Csvg width='1440' height='270' viewBox='0 0 1440 270' fill='none' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Crect width='1440' height='270' fill='%23FF9900'/%3E%3Crect width='1440' height='270' fill='url(%23pattern0)'/%3E%3Crect width='1440' height='270' fill='black' fill-opacity='0.75'/%3E%3Cdefs%3E%3Cpattern id='pattern0' patternContentUnits='objectBoundingBox' width='1' height='1'%3E%3Cuse xlink:href='%23image0' transform='translate(0 -1.27963) scale(0.000347222 0.00185185)'/%3E%3C/pattern%3E');"> -->

<div class="container-fluid testing">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/liveVideo.mp4" type="video/mp4">
  </video>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text text-center GiT">
                        <div class='quote'>Looking to plan your next event?</div>
                        <p><?php the_sub_field( 'author' ); ?></p>
                        <a href='/#contact'class="btn outline">	Get in touch
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.93944 28.9405L24.6947 13.1852L24.8806 22.9814L28.0715 23.0422L27.7792 7.77822L12.5152 7.48589L12.5761 10.6769L22.3722 10.8627L6.61691 26.618L8.93944 28.9405Z" fill="#FF9900"/>
            </svg>
            </a>
        </div>
</div>

</section>
<?php get_footer(); ?>