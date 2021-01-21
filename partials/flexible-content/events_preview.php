<section class="events-preview" id="<?php the_sub_field( 'id' ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_sub_field( 'title' ); ?>
                <?php the_sub_field( 'subtitle' ); ?>
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
                    'posts_per_page' => 3, 
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
</section>
<?php $link = get_sub_field( 'link' ); ?>
