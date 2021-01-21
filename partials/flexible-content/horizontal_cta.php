<section class="horizontal-cta" id="<?php the_sub_field( 'id' ); ?>">
<div class="container">
    <div class="row justify-content-center align-items-end">
        <div class="col-12 col-lg-5">
            <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
            <h3><?php the_sub_field( 'title' ); ?></h3>
        </div>
        <div class="col-12 col-lg-4 d-flex justify-content-lg-center align-items-center">
<?php $button_link = get_sub_field( 'button_link' ); ?>
<?php if ( $button_link ) : ?>
<a href="<?php echo esc_url( $button_link['url'] ); ?>" target="<?php echo esc_attr( $button_link['target'] ); ?>" class="btn solid white"><?php the_sub_field( 'button_text' ); ?></a>
<?php endif; ?>
        </div>
    </div>
</div>
</section>