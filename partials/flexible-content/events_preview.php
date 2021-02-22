<section class="events-preview" id="<?php the_sub_field( 'id' ); ?>" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Events_background.svg');  background-repeat: no-repeat; background-size: cover;
">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="events-title">
                    <div class="e-title">
                        <?php the_sub_field( 'title' ); ?>
                    </div>
                    <div class="e-subtitle">
                        <?php the_sub_field( 'subtitle' ); ?>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
            <?php
                $args = array(  
                    'post_type' => 'events',
                    'post_status' => 'publish',
                    'posts_per_page' => 2, 
                );

                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="background-image:url('<?php the_post_thumbnail_url("large");?>' );  background-repeat: no-repeat; background-size: cover">
                <a href="<?php the_permalink();?>" class="event-preview">
                <div class="text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt();?>
                    <?php the_field( 'location' ); ?>
                    <span class="btn outline">Read Now</span>
                </div>
                </a>
            </div>
            <?php endwhile;
                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<?php $link = get_sub_field( 'link' ); ?>
