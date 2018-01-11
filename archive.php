<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php if(have_posts()):?>
            <header class="page-header">
            <?php the_archive_title('<h1 class="page-title">', '</h1>');
                  the_archive_description('<div class="taxonomy-description">','</div>');
            ?>
            </header>
            <?php while(have_posts()): the_post();?>
              <?php get_template_part('partial/content', get_post_format()); ?>
            <?php endwhile; ?>
          <?php else: ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>
          <nav>
            <?php the_post_navigation(); ?>
          </nav>
        </div><!-- /.blog-main -->

        <div class="col-sm-4 blog-sidebar">
          <?php get_sidebar(); ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
