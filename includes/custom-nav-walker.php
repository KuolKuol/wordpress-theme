<?php
/**
* custom-nav-walker.php
* ============================================================================
* Description:
* This file contains all classes and functions that extenting
* the Walker_Nav_Menu class. A nav walker loops through every item in an array. 
* It doesn't matter how deep an array is, a walker 
* will loop through every value regardless
* ----------------------------------------------------------------------------
* @link https://codex.wordpress.org/Class_Reference/Walker
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/

// Extends nav walker class
class Placeholder_Custom_Nav_Walker extends Walker_Nav_Menu {

    //Starts the list before the elements are added.
    public function start_lvl( &$output, $depth = 0, $args = []  ) {
        
        // Used to prepend additional content (passed by reference).
        $output .= '<ul class="special-class">';

    }

    //Starts the element output.
    public function start_el( &$output, $item ,$depth = 0, $args = [], $id = 0  ) {
        
        // Used to prepend  additional content (passed by reference).
        $output .= '<li class="special-class-item">';

        // text before the link markup
        $output .= $args->before;

        // 
        $output .= '<a href="'.$item->url.'">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        //

        // text after the link markup
        $output .= $args->after;

        // Used to append additional content (passed by reference).
        $output .= '</li">';

    }

    
    // ends the element output
    public function end_el( &$output, $item ,$depth = 0, $args = [], $id = 0  ) {
    
        // Used to append additional content (passed by reference).
        $output .= '</li">';

    }
    
    // Ends the list of after the elements are added.
    public function end_lvl( &$output, $depth = 0, $args = []  ) {
        
        // Used to append additional content (passed by reference).
        $output .= '</ul>';

    }

    
}