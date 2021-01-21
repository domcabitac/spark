<?php
/**
 * Front Page
 *
 * Theme Front Page
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
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
<?php get_footer(); ?>
