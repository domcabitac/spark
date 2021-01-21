<section class="masthead-video-background" id="<?php the_sub_field( 'id' ); ?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <video playsinline autoplay muted loop id="myVideo">
                    <source src="<?php the_sub_field( 'video' ); ?>">
                </video>
                <div class="masthead-text">
                    <?php the_sub_field( 'title' ); ?>
                    <?php the_sub_field( 'subtitle' ); ?>
                    <?php the_sub_field( 'description' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
