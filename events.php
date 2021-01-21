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
<section class="page-header <?php if (has_post_thumbnail()): echo'image'; endif;?>"  <?php if (has_post_thumbnail()):?> style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php the_post_thumbnail_url();?>" <?php endif;?> >
<?php if ( has_post_thumbnail() ) {?> <div class="overlay"></div><?php }?>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>
<section class='events'>
    <div class="container">
        <div class="row">
            <?php
                $args = array(  
                    'post_type' => 'events',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                );

                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class="col-3">
                <a href="<?php the_permalink();?>" class="event-preview">
                <div class="image">
                    <img src="<?php the_post_thumbnail_url("medium");?>" />
                </div>
                <div class="text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt();?>
                    <?php the_field( 'description' ); ?>
                    <?php the_field( 'date' ); ?>
                    <span class="btn outline">Read Now</span>
                </div>
                </a>
            </div>
            <?php endwhile;
                wp_reset_postdata(); 
            ?>
        </div>
    </div>
    <?php 
$location = get_field('location');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>
</section>




<?php get_footer(); ?>