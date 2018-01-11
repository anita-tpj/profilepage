<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <article>
          <?php
          if(have_posts()):
            while(have_posts()): the_post();
            ?>
              <?php get_template_part('partial/content', get_post_format()); ?>
            <?php endwhile; ?>
          <?php else: ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>
        </article>
        <nav>
          <ul class="pagination justify-content-center">
            <li class="page-item"><?php previous_posts_link('&laquo;'); ?></li>
            <li class="page-item"><?php next_posts_link('&raquo;'); ?></li>
          </ul>
        </nav>


        </div><!-- /.blog-main -->

        <aside class="col-sm-4 blog-sidebar">
          <?php get_sidebar(); ?>
        </aside><!--blog-sidebar -->

      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
