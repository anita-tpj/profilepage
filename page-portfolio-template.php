<?php get_header();
/*
Template name: Portfolio Page
*/
?>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php
          $args = array('post_type' => 'portfolio', 'posts_per_page' => 3);
          $loop = new WP_Query($args);
          if($loop->have_posts()):
            while($loop->have_posts()): $loop->the_post();
            ?>
              <?php get_template_part('partial/content', 'portfolio'); ?>
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

        <div class="col-sm-4 blog-sidebar">
          <?php get_sidebar(); ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
