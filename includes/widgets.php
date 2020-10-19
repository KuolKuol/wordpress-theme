<?php
/**
* widgets.php
* ============================================================================
* Description:
* This file is for all functions relating to the 
* creation customization of widgets.
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/

function placeholder_widgets() {

    /**
    * register_sidebar()
    * ============================================================================
    * Description:
    * Builds the definition for a single sidebar and returns the ID
    * ----------------------------------------------------------------------------
    * @link https://developer.wordpress.org/reference/functions/register_sidebar/
    */

    // Registers Main Sidebar
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'placeholder' ),
        'id'            => 'placeholder_sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'placeholder' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    // Registers Woocommerce Sidebar
    register_sidebar( array(
        'name'          => __( 'Woocommerce Sidebar', 'placeholder' ),
        'id'            => 'woocommerce_sidebar',
        'description'   => __( 'Widgets in this area will be shown on woocommerce archive page.', 'placeholder' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );


}
