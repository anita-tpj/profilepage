<?php

function tap_enqueue_style() {


  wp_register_style('tap_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_register_style('tap_font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_register_style('tap_animate', get_template_directory_uri() . '/css/animate.min.css');
  wp_register_style('tap_style', get_template_directory_uri() . '/style.css');
  //wp_register_style('tap_blog', get_template_directory_uri() . '/blog.css');

  wp_enqueue_style('tap_bootstrap');
  wp_enqueue_style('tap_font-awsome');
  wp_enqueue_style('tap_animate');
  wp_enqueue_style('tap_style');
  //wp_enqueue_style('tap_blog');

  //wp_register_script('tap_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), false, true);
  wp_register_script('tap_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
  wp_register_script('tap_classie', get_template_directory_uri() . '/js/classie.js', array(), false, true);
  wp_register_script('tap_cbpanimatedheader', get_template_directory_uri() . '/js/cbpanimatedheader.min.js', array(), false, true);
  wp_register_script('tap_wow', get_template_directory_uri() . '/js/wow.min.js', array(), false, true);
  wp_register_script('tap_scrolling', get_template_directory_uri() . '/js/scrolling.js', array(), false, true);
  wp_register_script('tap_jquery.easing.1.3', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), false, true);
  //wp_register_script('tap_portfolio', get_template_directory_uri() . '/js/portfolio.min.js', array(), false, true);
  wp_register_script('tap_quotesondesign', get_template_directory_uri() . '/js/quotesondesign.min.js', array(), false, true);
  //wp_register_script('tap_validator', get_template_directory_uri() . '/js/validator.min.js', array(), false, true);
  //wp_register_script('tap_form-scripts', get_template_directory_uri() . '/js/form-scripts.min.js', array(), false, true);


  //wp_enqueue_script('tap_jquery');
  wp_enqueue_script('jquery');
  wp_enqueue_script('tap_bootstrap');
  wp_enqueue_script('tap_classie');
  wp_enqueue_script('tap_cbpanimatedheader');
  wp_enqueue_script('tap_wow');
  wp_enqueue_script('tap_scrolling');
  wp_enqueue_script('tap_jquery.easing.1.3');
  //wp_enqueue_script('tap_portfolio');
  wp_enqueue_script('tap_quotesondesign');
  //wp_enqueue_script('tap_validator');
  //wp_enqueue_script('tap_form-scripts');



}






//<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
