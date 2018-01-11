
  <?php if(has_post_thumbnail()): ?>
    <div class="post-thumb">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></a>
    </div>
  <?php endif; ?>
  <h2><?php the_title(); ?></h2>
