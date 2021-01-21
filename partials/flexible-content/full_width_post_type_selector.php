<section class="full-width-post-type-selector" id="<?php the_sub_field( 'id' ); ?>">
<div class="container-fluid">
    <div class="row">
    <?php $posts = get_sub_field( 'posts' ); ?>
			<?php if ( $posts ) : ?>
				<?php foreach ( $posts as $post ) : ?>
					<?php setup_postdata ( $post ); ?>
					<a href="<?php the_permalink(); ?>" class="col" style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(<?php the_post_thumbnail_url('large');?>)">
					<?php if (get_field('short_description')):?>
					<div class="title"><?php the_title(); ?></div>
					<div class="description"><?php the_field('short_description'); ?></div>
					<?php else:?>
					<h3><?php the_title(); ?></h3>
					<?php endif;?>
					</a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
       
    </div>
</div>
</section>