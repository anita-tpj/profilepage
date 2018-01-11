<?php
function tap_theme_opts_page(){
  $theme_opts     = get_option('tap_opts');
?>
<div class="wrap">
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title"><?php _e('Tanita Profile Page Theme Settings'); ?></h3>
      </div>
      <div class="panel-body">
        <?php if(isset($_GET['status']) && $_GET['status'] == 1): ?>
          <div class="alert alert-success">
            <?php _e('Successfully Updated!'); ?>
          </div>
        <?php endif; ?>
        <form method="post" action="admin-post.php">
          <input type="hidden" name="action" value="tap_save_options"/>
          <?php wp_nonce_field('tap_options_verify'); ?>
          <h4><?php _e('Social Icons', 'profilepage')?></h4>
          <div class="form-group">
            <label class="control-label" for="inputfacebook"><?php _e('Input Facebook Profile/Page Link', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_inputfacebook" id="inputfacebook" aria-describedby="inputfacebook" value = "<?php echo($theme_opts['facebook']); ?>">
            </div>
            <span id="inputfacebook" class="sr-only">(facebook)</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="inputtwitter"><?php _e('Input Twitter Link', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_inputtwitter" id="inputtwitter" aria-describedby="inputtwitter" value = "<?php echo($theme_opts['twitter']); ?>">
            </div>
            <span id="inputtwitter" class="sr-only">(twitter)</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="inputlinkedin"><?php _e('Input Linkedin Link', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_inputlinkedin" id="inputlinkedin" aria-describedby="inputlinkedin" value = "<?php echo($theme_opts['linkedin']); ?>">
            </div>
            <span id="inputlinkedin" class="sr-only">(linkedin)</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="inputgithub"><?php _e('Input GitHub Link', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-github" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_inputgithub" id="inputgithub" aria-describedby="inputgithub" value = "<?php echo($theme_opts['github']); ?>">
            </div>
            <span id="inputcodepen" class="sr-only">(github)</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="inputcodepen"><?php _e('Input CodePen link', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-codepen" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_inputcodepen" id="inputcodepen" aria-describedby="inputcodepen" value = "<?php echo($theme_opts['codepen']); ?>">
            </div>
            <span id="inputcodepen" class="sr-only">(codepen)</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="inputfreecodecamp"><?php _e('Input FreeCodeCamp link', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-free-code-camp" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_inputfreecodecamp" id="inputfreecodecamp" aria-describedby="inputfreecodecamp" value = "<?php echo($theme_opts['freecodecamp']); ?>">
            </div>
            <span id="inputfreecodecamp" class="sr-only">(freecodecamp)</span>
          </div>

          <h4><?php _e('Logo', 'profilepage')?></h4>

          <div class="form-group">
            <label class="control-label" for="logotype"><?php _e('Choose Logo Type:', 'profilepage')?></label>
            <select class="form-control" name="tap_logotype" id="logotype">
              <option value="1"><?php _e('Site Name', 'profilepage')?></option>
              <option value="2" <?php echo($theme_opts['logo_type']) == 2 ? 'SELECTED' : ''; ?>><?php _e('Image', 'profilepage')?></option>
            </select>
          </div>

          <div class="form-group">
            <label class="control-label" for="uploadlogoimg"><?php _e('Upload Logo Image', 'profilepage')?></label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="tap_uploadlogoimg" id="uploadlogoimg" aria-describedby="uploadlogoimg" value = "<?php echo($theme_opts['logo_img']); ?>">
              <span class="input-group-btn"><input class="btn btn-default" type="submit" id="tap_uploadlogoimgbtn" value="Upload"></span>
            </div>
            <span id="uploadlogoimg" class="sr-only">(uploadlogoimg)</span>
          </div>

          <h4><?php _e('Footer', 'profilepage')?></h4>

          <div class="form-group">
            <label class="control-label" for="footer"><?php _e('Input Footer Text (HTML Allowed)', 'profilepage')?></label>
            <div class="input-group">
              <textarea class="form-control" name="tap_inputfooter" id="inputfooter" aria-describedby="inputfooter" rows="3" cols="100"><?php echo stripslashes_deep($theme_opts['footer']); ?></textarea>
            </div>
            <span id="inputfooter" class="sr-only">(footer)</span>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-default"><?php _e('Save and Update'); ?></button>
          </div>

        </form>
      </div>
  </div>
</div>

<?php
}
