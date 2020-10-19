<?php
/**
* Single.php
* ============================================================================
* Description:
* Template for individial posts 
* ----------------------------------------------------------------------------
* @link https://wphierarchy.com/
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?> 

<!-- loads header template -->
<?php get_header(); ?>

<!-- Content -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="row">

                <!-- Post Content -->
                <div class="postcontent column-50 column-offset-25">

                    <!-- outputs breadcrumb -->
                    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
                
                    <!-- check if there are posts -->
                    <?php if ( have_posts() ): ?>
                        
                        <?php 

                            // tests whether current WordPress query has results to loop over.
                            while ( have_posts() ) {

                            // Iterates the post index in the loop.
                            the_post();
                            
                            // variales to be used throughout template
                            global $post;
                            $author_ID          =   $post->post_author;
                            $author_URL         =   get_author_posts_url( $author_ID );

                            }
                        ?>

                        <!-- Single Post -->
                        <div class="post-<?php the_ID(); ?>" <?php post_class( 'single-post nobottommargin' ); ?>>

                            <!-- Entry Clearfix -->
                            <div class="entry clearfix">

                                <!-- Entry Title -->
                                <div class="entry-title">
                                    <h2><?php the_title(); ?></h2>
                                </div>

                                <div class="post-content-meta">
                                    <?php get_template_part( '/partials/post-content-meta' ); ?>
                                </div>

                                <!-- Entry Image -->
                                <div class="entry-image">
                                    <?php if( has_post_thumbnail() ): ?>

                                        <div class="entry-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'full' ); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Entry Content --->
                                <div class="entry-content notopmargin">
                                    <?php 
                                        the_content(); 
                                        

                                        // default settings for wp_link_pages() function
                                        $defaults = array(
                                            'before'           => '<p class="text-center">' . __( 'Pages:', 'placeholder' ),
                                            'after'            => '</p>',
                                        );

                                        // Displays page links for paginated posts
                                        wp_link_pages( $defaults );

                                    ?>

                                    <!-- Tag Cloud -->
                                    <div class="tagcloud clearfix bottommargin">
                                        <?php the_tags( '', ' ' ); ?>
                                    </div>

                                    <div class="clear"></div>
                                
                                </div><!-- entry-content end -->

                            </div><!-- .entry end -->

                            <!-- Post Navigation -->
                            <hr>
                            <div class="post-navigation clearfix ">
                                
                                <div class="float-left">
                                    <!-- Displays the previous post link that is adjacent to the current post. -->
                                    <?php previous_post_link('<strong>%link</strong>', 'Previous Post'); ?>
                                </div>
                                
                                <div class="float-right">
                                    <!-- Displays the next post link that is adjacent to the current post. -->
                                    <?php next_post_link('<strong>%link</strong>', 'Next Post'); ?>
                                </div>

                            </div><!-- .post-navigation end -->
                            <hr>


                            <!-- Post Author Info -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>
                                        <span>Posted by</span>
                                        <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
                                    </strong>
                                </div>
                                <div class="card-body">
                                    <div class="author-image">
                                        <?php echo get_avatar( $author_ID, 90, '', false, [ 'class' => 'img-circle' ] ); ?>
                                    </div>
                                    <?php echo nl2br( get_the_author_meta( 'description' ) ); ?>
                                </div>
                            </div><!-- Post Single - Author End -->

                            <!-- Related Posts -->
                            <hr>
                            <h4>Related Posts:</h4>

                            <div class="related-posts clearfix">

                                <?php 

                                $categories             =   get_the_category();
                                
                                $rp_query               =   new WP_Query([
                                    'posts_per_page'    =>  2,
                                    'post__not_in'      =>  [ $post->ID ],
                                    'cat'               =>  !empty($categories) ?  $categories[0]->term_id : null
                                ]);

                                if( $rp_query->have_posts() ){

                                    while( $rp_query->have_posts() ){
                                        $rp_query->the_post();

                                ?>

                                        <div class="mpost clearfix">

                                            <?php if( has_post_thumbnail() ):?>
                                                <div class="entry-image">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                                    </a>
                                                </div>
                                            <?php endif;?>
                                            
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <ul class="entry-meta clearfix">
                                                    <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                                                    <li><i class="icon-comments"></i> <?php comments_number( '0' ); ?></li>
                                                </ul>
                                                <div class="entry-content">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }

                                    wp_reset_postdata();
                                }

                                ?>

                            </div> <!-- end related-posts -->
                            
                            <!-- Comments Template -->
                            
                            <?php 
                                // Related Posts 
                                if( comments_open() || get_comments_number() ){
                                    comments_template(); 
                                }
                            ?>                            

                        </div><!-- .single-post -->

                    <?php endif; ?>

                </div><!-- .postcontent nobottommargin clearfix -->
                

                <!-- sidebar -->
                <div class="sidebar column">
                    <?php get_sidebar(); ?>
                </div>

            </div><!-- row -->

        </div><!-- container clearfix -->

    </div><!-- content-wrap -->

</section><!-- #content end -->

<?php get_footer(); ?>