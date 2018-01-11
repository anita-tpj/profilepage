<?php
  function tap_admin_menu(){
    add_menu_page(
      'Tanita Profile Page Options',
      'Theme Options',
      'edit_theme_options',
      'tap_theme_opts',
      'tap_theme_opts_page'
    );
  }
