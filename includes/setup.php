<?php

function tap_setup_theme(){
  register_nav_menu('primary', __('Primary Menu', 'profilepage'));
  register_nav_menu('secondary', __('Secondary Menu', 'profilepage'));
}
