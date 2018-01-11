<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">

          <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
              ?>
              <?php get_template_part('partial/content', 'portfolio'); ?>
            <?php endwhile; ?>
          <?php else: ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-4 blog-sidebar">
          <?php get_sidebar(); ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
