<?php
function tap_head(){
  ?>

  <style type="text/css">
  /*Body*/
  /*Text*/
  body{
    color: <?php echo get_theme_mod('text_color', '#ffffff'); ?>!important;
  }
  /*Headers*/
   .navbar.navbar-inverse,
   .sidebar-module .sidebar-module-header,
   footer{
      background-color: <?php echo get_theme_mod('theme_color', '#2c2b2a'); ?>!important;
   }
   header h1,
   .sidebar-module .sidebar-module-content,
   .blog-post,
   .footer-box{
     background-color: <?php echo get_theme_mod('theme_color', '#2c2b2a'); ?>!important;
   }
   .navbar-inverse .navbar-nav>.active>a,
   .navbar-inverse .navbar-nav>.active>a:focus,
   .navbar-inverse .navbar-nav>.active>a:hover{
     background-color: <?php echo get_theme_mod('theme_color', '#2c2b2a'); ?>!important;
     opacity: 1;
   }

  /*Buttons*/

  /*Button's Background*/
   .btn-warning{
     background-color: <?php echo get_theme_mod('button_bg_color', '#f87d22'); ?>!important;
   }
  /*Button Borders*/
   .btn-warning{
    border-color: <?php echo get_theme_mod('button_border_color', '#ffa500'); ?>!important;
   }
   .btn-warning:hover{
    border-color: <?php echo get_theme_mod('button_border_color', '#000000'); ?>!important;
   }
  /*Button Text*/
   .btn-warning{
    color: <?php echo get_theme_mod('button_text_color', '#ffffff'); ?>!important;
   }
   .btn-warning:hover{
    color: <?php echo get_theme_mod('button_text_color', '#ffffff'); ?>!important;
   }
  /*Button Hover*/
   .btn-warning:hover{
    background-color: <?php echo get_theme_mod('button_hover_bg_color', '#ffa500'); ?>!important;
   }

  /*Links*/
   a{
    color: <?php echo get_theme_mod('link_color', '#f87d22'); ?>!important;
    text-decoration: none;
   }
   a:hover, a:focus{
    color: <?php echo get_theme_mod('link_hover_color', '#ffffff'); ?>!important;
   }

  </style>
  <?php
}
