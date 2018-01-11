<?php

function tap_activate(){

  if(version_compare(get_bloginfo('version'), '4.2', '<')):
    wp_die(__('You must have a minimum version of 4.2 to use this theme.'));
endif;
}

$theme_opts = get_option('tap_opts');
  if(!$theme_opts){
    $opts = array(
      'facebook' => '',
      'twitter'=> '',
      'linkedin' => '',
      'codepen' => '',
      'github' => '',
      'freecodecamp' => '',
      'logo_type' => 1,
      'logo_img' => '',
      'footer' => ''
    );
    add_option('tap_opts', $opts);
}
