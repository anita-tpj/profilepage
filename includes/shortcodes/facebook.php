<?php
function tap_facebook_shortcode($atts, $content = "Like us on Facebook"){
  $tap_theme_opts = get_option('tap_opts');
  $atts = shortcode_atts(array(
    'page' => $tap_theme_opts['facebook']
  ), $atts);

  return '<a href = "https://www.facebook.com/' . $atts['page'] . '" class="btn btn-info">
  ' . do_shortcode($content) . '</a>';
}

function tap_icon_shortcode($atts){
  return '<i class="fa fa-' . $atts['iccon'] . '"</i>';
}
