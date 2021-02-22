<?php
/**
* Page
*
* Template Name: Promos
*
* @since   1.0.0
* @package WP
*/
get_header(); ?>
<section class="page-header <?php if (has_post_thumbnail()): echo'image'; endif;?>"  <?php if (has_post_thumbnail()):?> style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php the_post_thumbnail_url();?>" <?php endif;?> >
    <div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
    <?php if ( has_post_thumbnail() ) {?> <div class="overlay"></div><?php }?>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1 data-aos="fade"><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>
<section class='promos'>
    <div class="container">
        <div class="row">
            <?php
                $args = array(  
                    'post_type' => 'videos',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                );

                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <?php $image = get_field('image'); ?>
            <div class="video col-3" data-aos="fade-up">
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
            <?php endwhile;
                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>





<?php get_footer(); ?>