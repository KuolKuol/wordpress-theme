<?php
/**
* post-conteent-excerpt.php
* ============================================================================
* Description:
* Template to be included in post loop. Outputs posts content.
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?>

<div class="entry">

    <!-- entry-image -->
    <div class="entry-image">
        <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>">
                <!-- // Original image resolution (unmodified) -->
                <!-- https://codex.wordpress.org/Post_Thumbnails -->
                <?php the_post_thumbnail( 'large', ['class' => 'image_thumbnail'] );?>
            </a>
            <br>
        <?php endif; ?>
    </div>
    

    <!-- title -->
    <div class="entry-title">
        <h2>
            <a href="<?php the_permalink(); ?>">
                <!-- echos the title of the post -->
                <?php the_title(); ?>
            </a>
        </h2>
    </div>
    
    <div class="post-content-meta">
        <?php get_template_part( '/partials/post-content-meta' ); ?>
    </div>
    
    <div class="entry-content">
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="">Read More</a>
        
    </div>
    <br>
    
</div> <!-- entry -->
