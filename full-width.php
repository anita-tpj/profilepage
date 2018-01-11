<?php
/*
  *Template Name: Full Width Page
*/
get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 blog-main">

          <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
              ?>
              <?php get_template_part('partial/content', 'page'); ?>
            <?php endwhile; ?>
          <?php else: ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>

        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
