<div class="comment-wrap">
  <?php
    foreach($comments as $comment): ?>

      <h4><a href='<?php comment_author_url(); ?>'><?php comment_author(); ?></a> - <small><?php comment_date(); ?></small></h4>
      <div class="comment-body">
        <?php comment_text(); ?>
      </div> <!-- comment-body -->
   <?php endforeach; ?>

</div><!-- comment-wrap -->


<?php if(comments_open()): ?>
  <h4>Leave a Comment</h4>

  <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentsform">
 <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' />

     <div class="form-group">
      <label for="aouthor">Name / Alias (required)</label>
      <input type="text" class="form-control" name ="author" id="author" placeholder="John Doe">
    </div>

  <div class="form-group">
    <label for="email">Email address (required, not showen)</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="url">Website (optional)</label>
    <input type="url" class="form-control" name="url" id="url" placeholder="http://example.com">
  </div>

  <div class="form-group">
    <label for="comments">Comment</label>
    <textarea class="form-control" name = "comment" id="comments" rows="7" cols='60'></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-default">Add Comment</button>
  </div>
</form>



<?php else:
  _e('Comments are closed', 'profilepage');

endif;
?>
