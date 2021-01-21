<?php
/**
 * Page
 *
 * Theme Page
 *
 * @since   1.0.0
 * @package WP
 */

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
//  get_template_part( 'partials/page-header' );
 ?>

<?php
// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if ( have_rows( 'page_content', $id ) ) :

    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'page_content', $id ) ) : the_row();

        get_template_part( 'partials/flexible-content/' . get_row_layout() );

    endwhile;

elseif ( get_the_content() ) :

    // no layouts found

endif;
?>
<?php endwhile; endif;?>
<?php get_footer(); ?>
