<?php
/**
 * Post
 *
 * Theme Single Post
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<section id="post-header">
    <div class="background"  style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
	<div class="container">
		<div class="row">
			<div class="col-12 content-wrapper">
            <div class="content" data-aos="fade-right">
        <a href="<?php echo get_site_url();?>">Back to All Blogs</a>

        <?php
  $perma_cat = get_post_meta($post->ID , '_category_permalink', true);
  if ( $perma_cat != null ) {
    $cat_id = $perma_cat['category'];
    $category = get_category($cat_id);
  } else {
    $categories = get_the_category();
    $category = $categories[0];
  }
  $category_link = get_category_link($category);
  $category_name = $category->name;  
?> <a href="<?php echo $category_link ?>" class="sub line category"><?php echo $category_name ?></a>
		<h1><?php the_title(); ?></h1>
        <p><?php the_excerpt();?></p>
	</div>
            </div>
		</div>
	</div>
	
</section>
<section id="post">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-sm-10 col-lg-9 col-xl-8">
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>
