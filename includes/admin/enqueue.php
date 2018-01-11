<?php
function tap_admin_enqueue(){

  if(!isset($_GET['page']) || ($_GET['page'] != 'tap_theme_opts')){
    return;
  }
  wp_register_style('tap_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_register_style('tap_font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_register_script('tap_options', get_template_directory_uri() . '/js/options.js');



  wp_enqueue_style('tap_bootstrap');
  wp_enqueue_style('tap_font-awsome');
  wp_enqueue_media();
  wp_enqueue_script('tap_options');

}
