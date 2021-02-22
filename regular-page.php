<?php
/**
* Page
*
* Template Name: Regular Page
*
* @since   1.0.0
* @package WP
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<section id="regular_page">
	<div class="container small">
        <div class="row justify-content-center">
        <h1><?php the_title(); ?></h1>
        </div>
		<div class="row justify-content-center">
			<div class="col-12 regular-text">
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>