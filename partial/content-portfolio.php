
<div class="blog-post">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if(has_post_thumbnail()): ?>
    <div class="post-thumb">
      <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
    </div>
  <?php endif; ?>
  <h2 class="blog-post-title"><?php the_title(); ?></h2>
  <p class="blog-post-meta">
    <?php the_time('F j, Y'); ?> ||
    <?php echo tap_get_terms($post->ID, 'type');?>
    by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
    <?php if(current_user_can('manage_options')):
      echo '|| ';
      edit_post_link();
    endif;?>
  </p>
  <?php if(is_single()):?>
  <p><?php the_content(); ?></p>
   <?php wp_link_pages(array(
       'before' => '<p class="text-center">' . __( 'Pages:' ),
       'after'  => '</p>'));
   ?>
   <p>
     <?php echo __('Softwares: ', 'profilepage'); ?>
     <?php echo tap_get_terms($post->ID, 'software'); ?>
 </p>
   <nav>
     <ul class="pagination justify-content-center">
       <li class="page-item"><?php next_post_link('%link', '&laquo; %title'); ?></li>
       <li class="page-item"><?php previous_post_link('%link', '%title &raquo; '); ?></li>
     </ul>
   </nav>
   <?php comments_template(); ?>
  <?php else: ?>
  <p><?php the_excerpt(); ?></p>
  <button class="btn btn-warning"><a href="<?php the_permalink(); ?>"><?php _e('View more') ?></a></button>
  <?php endif ?>
  </article>
</div>
