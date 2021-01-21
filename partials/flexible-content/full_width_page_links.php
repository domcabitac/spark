<section class="full-width-page-links" id="<?php the_sub_field( 'id' ); ?>">
<div class="container-fluid">
    <div class="row">
    <?php if ( have_rows( 'links' ) ) : ?>
                <?php while ( have_rows( 'links' ) ) : the_row(); ?>
                <?php $link = get_sub_field( 'link' ); ?>
                <?php $background_image = get_sub_field( 'background_image' ); ?>
					<a href="<?php echo esc_url( $link['url'] ); ?>" class="col" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(<?php echo esc_url( $background_image['url'] ); ?>">
					<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
					<h3><?php the_sub_field('title'); ?></h3>
					</a>
                    <?php endwhile; ?>
                    <!-- test-->
    <?php endif; ?>
    </div>
</div>
</section>