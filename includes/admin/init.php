<?php
  function tap_admin_init(){
    include('enqueue.php');
    add_action('admin_enqueue_scripts', 'tap_admin_enqueue');
    add_action('admin_post_tap_save_options', 'tap_save_options');
  }
