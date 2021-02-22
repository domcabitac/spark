<section class="features" id="<?php the_sub_field( 'id' ); ?>">
<div class="container small">
    <div class="row justify-content-between">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-center">
            <div class="feature-text">
                <h2 class="fTitle">
                    <?php the_sub_field( 'feature-title' ); ?>
                </h2>
                <p class="fSubtitle">
                    <?php the_sub_field( 'subtitle' ); ?>
                </p>
                <div class="viewAll">
                    <a class='arrow-btn'href="<?php echo get_site_url()?>/services/"> <?php the_sub_field( 'view_all_button' ); ?><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.85852 18.966L16.1837 8.64085L16.3055 15.0607L18.3967 15.1006L18.2051 5.09739L8.20187 4.90582L8.24177 6.99701L14.6616 7.11878L4.33646 17.444L5.85852 18.966Z" fill="#FF9900"/>
</svg></a>
                    
                        <?php if ( $view_all_text ) : ?>
                            <a href="<?php echo get_site_url()?>/services/"><?php echo esc_html( $view_all_text ); ?></a>
                    <?php endif; ?>
                    

                </div>
            </div>
                <?php
                    if( have_rows('features') ):
                        $i = 0;
                        while ( have_rows('features') ) : the_row(); ?>
                            <?php $i++; ?>
                            <?php if (($i % 2)): ?>
                                <div class="feature-cards"  data-aos="fade-up">
                                <?php if ( get_sub_field( 'image' ) ) : ?>
                                <img class="fImage" src="<?php the_sub_field( 'image' ); ?>" />
                            <?php endif ?>
                                <div class="content">
                                    <h3><?php the_sub_field( 'title' ); ?></h3>
                                    <a href='<?php echo get_site_url()?>/services/'class="btn solid">Learn More                                 <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.93944 28.9405L24.6947 13.1852L24.8806 22.9814L28.0715 23.0422L27.7792 7.77822L12.5152 7.48589L12.5761 10.6769L22.3722 10.8627L6.61691 26.618L8.93944 28.9405Z" fill="#FF9900"/>
</svg>
</a>
                                </div>

                                </div>

                            <?php endif ?>

                        <?php endwhile;
                    else :
                    endif;
                ?>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-center">
                <?php
                if( have_rows('features') ):
                    $i = 0;
                    while ( have_rows('features') ) : the_row(); ?>
                        <?php $i++; ?>
                        <?php if (!($i % 2)): ?>
                            <div class="feature-cards"  data-aos="fade-up">
                            <?php if ( get_sub_field( 'image' ) ) : ?>
                                <img class="fImage" src="<?php the_sub_field( 'image' ); ?>" />
                            <?php endif ?>
                            <div class="content">
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <a href='<?php echo get_site_url()?>/services/'class="btn solid">Learn More 
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.93944 28.9405L24.6947 13.1852L24.8806 22.9814L28.0715 23.0422L27.7792 7.77822L12.5152 7.48589L12.5761 10.6769L22.3722 10.8627L6.61691 26.618L8.93944 28.9405Z" fill="#FF9900"/>
</svg>

                                
                                </a>
                            </div>
                            </div>

                        <?php endif ?>

                    <?php endwhile;
                else :
                endif;
            ?>

        </div>
    </div>
</div>



</section>