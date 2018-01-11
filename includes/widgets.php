<?php

function tap_widgets(){
  register_sidebar(array(
    'name'  => __('Right Sidebar', 'profilepage'),
    'id'  => ('tap_rside'),
    'description' => 'Standard Right sidebar', 'profilepage',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
  	'after_widget'  => '</div></div>',
  	'before_title'  => '<h4 class="sidebar-module-header">',
  	'after_title'   => '</h4><div class="sidebar-module-content">'

  ));

  register_sidebar(array(
    'name'  => __('Left Sidebar', 'profilepage'),
    'id'  => ('tap_lside'),
    'description' => 'Standard Left sidebar', 'profilepage',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h4 class="sidebar-module-header">',
    'after_title'   => '</h4><div class="sidebar-module-content">'

  ));

  register_sidebar(array(
    'name' =>__('Footer Box 1', 'profilepage'),
    'id' => ('tap_footbox1'),
    'description'=> 'Footer widget for Contact Form on Home Page',
    'class'=>'',
    'before_widget'=> '<div id="%1$s" class = "col-md-4 %2$s"><div class="footer-box">',
    'after_widget' => '</div></div>',
    'before_title' =>'<header><h2>',
    'after_title' =>'</header></h2>'


  ));

  register_sidebar(array(
    'name' =>__('Footer Box 2', 'profilepage'),
    'id' => ('tap_footbox2'),
    'description'=> 'Footer widget for Image on Home Page',
    'class'=>'',
    'before_widget'=> '<div id="%1$s" class = "col-md-4 %2$s"><div class="footer-box">',
    'after_widget' => '</div></div>',
    'before_title' =>'<header><h2>',
    'after_title' =>'</header></h2>'


  ));

  register_sidebar(array(
    'name' =>__('Footer Box 3', 'profilepage'),
    'id' => ('tap_footbox3'),
    'description'=> 'Footer widget for Social Links on Home Page',
    'class'=>'',
    'before_widget'=> '<div id="%1$s" class = "col-md-4 %2$s"><div class="footer-box">',
    'after_widget' => '</div></div>',
    'before_title' =>'<header><h2>',
    'after_title' =>'</header></h2>'


  ));

}
