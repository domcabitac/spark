<?php
/**
 * Index
 *
 * Theme Index
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<section id="blog-header" style="background-image:url();">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12">
				<div class="content text" data-aos="fade">
					<?php 
					if ( is_home() ) {?>
					<h1>Blog</h1>
					<?php }
					else if (is_category()){?>
						</br><div>Category</div>
						<h1><?php echo single_cat_title();?></h1>
					<?php }
					else{
						echo "</br><div>Results for:</div><h1>";
						the_title();
						echo "</h1>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="blog-posts">
	<div class="container">
		<div class="row flex-column-reverse flex-lg-row justify-content-center">
			<div class="col-12 col-lg-9">
				<div class="row blogs">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

					<div class="col-12 col-md-6 col-xl-5"  data-aos="fade-up">
						<a href="<?php the_permalink();?>" class="post-preview">
							<div class="image">
								<img src="<?php the_post_thumbnail_url('medium');?>" />
							</div>
							<div class="text">
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt();?>
								<span class="btn outline">Read Now</span>
							</div>

						</a>
					</div>

					<?php endwhile; endif;?>
				</div>
				<div class="row justify-content-center">
				<?php the_posts_pagination();?>
				</div>
			</div>
			<div class="col-12 col-lg-3 sidebar" data-aos="fade-left">
				<div class="search">
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<div class="search-wrapper">
							<input type="search" class="search-field" placeholder="Search …" value="" name="s"
								title="Search for:" />
							<div class="search-icon"><svg width="24px" height="24px" version="1.1" viewBox="0 0 100 100"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="m85.207 79.375l-21.664-21.668c3.332-4.375 5.207-10 5.207-16.043 0-15-12.082-27.082-27.082-27.082s-27.086 12.086-27.086 27.086 12.082 27.082 27.082 27.082c6.043 0 11.457-1.875 16.043-5.207l21.668 21.668c0.83203 0.83203 1.875 1.25 2.918 1.25s2.082-0.41797 2.918-1.25c1.6641-1.668 1.6641-4.168-0.003907-5.8359zm-43.539-18.957c-10.418 0-18.75-8.332-18.75-18.75s8.332-18.75 18.75-18.75 18.75 8.332 18.75 18.75c0 10.414-8.3359 18.75-18.75 18.75z" />
								</svg></div>
						</div>
					</form>


				</div>
				<div class="categories-wrap">
					<?php wp_list_categories( array(
        'title_li' => '<div class="sub">' . __( 'Categories', 'textdomain' ) . '</div>'
	) ); ?>

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
