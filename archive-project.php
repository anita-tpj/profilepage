<?php get_header(); ?>


    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
          <article class=" blog-post">
            <h1 class="blog-post-title">Projects</h1>
          </article>
          <?php

          $query = new WP_Query(array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'rand'
          ));

          if($query->have_posts()):
            while($query->have_posts()):
              $query->the_post();
              ?>
              <article class="blog-post">
                <?php if(has_post_thumbnail()): ?>
                  <div class="post-thumb">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                  </div>
                <?php endif; ?>
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php the_time('F j, Y'); ?> <?php the_category(','); ?> by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>
                <p><?php the_excerpt(); ?></p>
                <button class="btn btn-warning"><a href="<?php the_permalink(); ?>"><?php _e('View more') ?></a></button>
              </article>
              <?php wp_reset_postdata();?>
            <?php endwhile; ?>
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
