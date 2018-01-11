<div class="blog-post">
  <?php if(has_post_thumbnail()): ?>
    <div class="post-thumb">
      <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
    </div>
  <?php endif; ?>
  <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta"><?php the_time('F j, Y'); ?> <?php the_category(','); ?> by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>



  <p><?php the_excerpt(); ?></p>
</div>
