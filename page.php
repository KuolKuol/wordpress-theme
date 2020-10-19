<?php
/**
* page.php
* ============================================================================
* Description:
* Template for displaying individial pages.
* Example: About page, contact page, etc...
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?> 

<?php get_header(); ?>

<!-- Page Heading -->
<section class="page-heading">

    <!-- Container -->
    <div class="container">

        <!-- Post Title -->
        <h1><?php single_post_title(); ?></h1>

        <!-- Post Sub-Title -->
        <span class="subtitle">

            <?php 
            /**
            * the_subtitle():
            * - Displays the pages sub-title  
            * - download wp subitle plugin to access the_subtite() function
            */
            if( function_exists( 'the_subtitle' ) ){
                the_subtitle(); 
            }
            ?>

        </span><!-- .subtitle end -->

    </div><!-- .post-title end -->

</section><!-- #page-title end -->

<!-- Content -->
<section id="content">

    <!-- Container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- Post Content -->
            <div class="postcontent column">

                <?php

                // Loop through posts array
                while( have_posts() ){

                    // Iterate the post index in the loop.
                    the_post();

                    global $post;
                    $author_ID          =   $post->post_author;
                    $author_URL         =   get_author_posts_url( $author_ID );

                ?>  

                    <!-- Single Post -->
                    <div class="single-post">

                        <!-- Entry Content -->
                        <div class="entry-content">

                            <?php 
                                // Display the post content.
                                the_content(); 

                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Pages:', 'placeholder' ),
                                    'after'            => '</p>',
                                );

                                wp_link_pages( $defaults );
                            
                            ?>

                        </div><!-- Entry Content end -->

                    </div><!-- .entry end -->

                <?php } ?><!-- while loop end -->

            </div><!-- .postcontent end -->
            
            <!-- sidebar -->
            <div class="column-50 column-offset-25">

                <!-- loads sidebar template. -->
                <?php get_sidebar(); ?>

            </div><!-- sidebar end -->
            
        </div><!-- row -->

    </div><!-- container -->

</section><!-- #content end -->

<?php get_footer(); ?>