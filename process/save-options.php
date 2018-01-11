<?php
  function tap_save_options(){
    if(!current_user_can('edit_theme_options')){
      wp_die(__('You are not allowed to be on this page!'));
    }

    check_admin_referer('tap_options_verify');

    $opts = get_option('tap_opts');

    $opts['facebook']     = sanitize_text_field($_POST['tap_inputfacebook']);
    $opts['twitter']      = sanitize_text_field($_POST['tap_inputtwitter']);
    $opts['linkedin']     = sanitize_text_field($_POST['tap_inputlinkedin']);
    $opts['codepen']      = sanitize_text_field($_POST['tap_inputcodepen']);
    $opts['github']       = sanitize_text_field($_POST['tap_inputgithub']);
    $opts['freecodecamp'] = sanitize_text_field($_POST['tap_inputfreecodecamp']);
    $opts['logo_type']    = absint($_POST['tap_logotype']);
    $opts['logo_img']     = esc_url_raw($_POST['tap_uploadlogoimg']);
    $opts['footer']       = $_POST['tap_inputfooter'];

    update_option('tap_opts', $opts);
    wp_redirect(admin_url('admin.php?page=tap_theme_opts&status=1'));
  }
