<section class="page-header <?php echo basename( get_page_template() ); ?> <?php if (has_post_thumbnail()): echo'image'; endif;?>"  <?php if (has_post_thumbnail()):?> style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php the_post_thumbnail_url();?>" <?php endif;?> >
<?php if ( has_post_thumbnail() ) {?> <div class="overlay"></div><?php }?>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
    <?php if (has_post_thumbnail()): echo'<div class="overlay"></div>'; endif;?>
</section>