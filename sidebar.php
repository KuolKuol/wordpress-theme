      <div class="container">
                  <!-- Sidebar
          ============================================= -->
          <div class="sidebar nobottommargin col_last">
            <div class="sidebar-widgets-wrap">
            

            <!-- is_active_sidebar() Checks if sidebar is active -->
            <?php if ( is_active_sidebar( 'placeholder_sidebar' ) ) { ?>
                <ul id="sidebar">
                    <!-- displays placeholder_sidebar -->
                    <?php dynamic_sidebar('placeholder_sidebar'); ?>
                </ul>
            <?php } ?>

      
            </div>
          </div><!-- .sidebar end -->
      </div>
