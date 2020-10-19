<?php
/**
* Home.php
* ============================================================================
* Description:
* This file display all blog posts.
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?> 

<!-- loads header template -->
<?php get_header(); ?>

<!-- Content -->
<section id="content">

  <!-- container -->
  <div class="container clearfix">

  <!-- row -->
    <div class="row">

      <!-- Post Content -->
      <div class=" postcontent column-50 column-offset-25">

        <!-- Posts -->
        <div class="posts">

          <?php
            // check ud there are posts
            if( have_posts() ) {

              // loop through all posts
              while( have_posts(  ) ) {
                
                // queries the database and gets the current post in te loop and check to see if there are any posts after the current post to stop the loop 
                the_post(  );                       

                // outputs content-excerpt.php template file 
                get_template_part( '/partials/post-content-excerpt' );
              }
            }
          ?>

        </div><!-- #posts end -->
        
        <hr>

        <!--Pagination -->
        <div class="pagination">

            <!--Next Post Link -->
            <div class="float-left"><?php next_posts_link( '&larr; Older' );?></div>
            
            <!-- Previous Post Link -->
            <div class="float-right"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>

        </div>

      </div><!-- .postcontent end -->
      
      <!-- sidebar -->
      <div class="sidebar column">

        <!-- Load sidebar template -->
        <?php get_sidebar(); ?> 

      </div> <!-- .sidebar end -->

    </div><!--- .row end -->

  </div><!-- .container end -->

</section><!-- .content end -->

<?php get_footer(); ?>