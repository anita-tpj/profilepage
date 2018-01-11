<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 blog-main">
          <section class="error-404 not-found">
            <head class="page-header">
              <h1 class="page-title text-center text-danger">
              <i class="fa fa-frown-o"></i><br />
              <?php _e('404! Page not found!', 'profilepage'); ?>
              </h1>
            </head>
            <div class="page-content">
              <h2><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'profilepage'); ?></h2>
              <?php get_search_form(); ?>
              <?php the_widget('WP_Widget_Recent_Posts'); ?>
              <div class="widget widget_categories">
                <h3><?php _e('Check the most used categories'); ?></h3>
                <ul>
                  <?php
                    wp_list_categories(array(
                      'orderby' => 'count',
                      'order' => 'DESC',
                      'show_count' => 1,
                      'title_li' => '',
                      'number' => 5
                    ));
                  ?>
                </ul>
              </div>
              <?php the_widget('WP_Widget_Archives', 'dropdown=1'); ?>
            </div>
          </section>
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>
