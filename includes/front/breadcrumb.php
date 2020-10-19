<?php

/**
* breadcrumb.php
* ============================================================================
* Description:
* This file is to be used for all breadcrumb logic and functionality.
* ----------------------------------------------------------------------------
* @link https://www.codexworld.com/wordpress-how-to-display-breadcrumb-without-plugin/
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/

/**
 * Instructions: Include the code below in a template to output a breadcrumb
 * Example: <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
 */

// Outputs a breadcrumb onto a template
function get_breadcrumb() {

    // Outputs home breadcrumb 
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';

    // Retrievea post categories.
    $category = get_the_category();

    // Checks if page template is category or single 
    if (is_category() || is_single() || is_tag() || is_date()) {

        // Outputs arrows
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";

        // Checks if category array is not empty
        if ( $category[0] ) {
            // Outputs current category of post (NOTE: only outputs one category)
            echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
        }

        // Determines whether the query is for an existing single post
        if (is_single()) {
            // Outputs arrows 
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            // Outputs the title
            the_title();
        }

    } 
}

