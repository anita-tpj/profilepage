<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <h3><?php _e('Search', 'profilepage')?></h3>
          <?php get_search_form();?>
          <h4><?php _e('Search Reasult for', 'profilepage');?>:
          <span class="text-info"><?php the_search_query(); ?></span></h4>
          <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
          ?>
          <?php get_template_part('partial/content', 'search'); ?>
            <?php endwhile; ?>
          <?php else: ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>


          <nav>
            <ul class="pagination justify-content-center">
              <li class="page-item"><?php previous_posts_link('&laquo;'); ?></li>
              <li class="page-item"><?php next_posts_link('&raquo;'); ?></li>
            </ul>
          </nav>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <?php get_sidebar(); ?>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
