<?php

//Set Up
add_theme_support('menu');
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'caption' ) );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('link', 'quote', 'aside', 'gallery'));
add_theme_support('custom-logo');
add_theme_support('custom-background');
add_theme_support('custom-header');




//Includes
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');
include(get_template_directory() . '/process/save-options.php');
include(get_template_directory() . '/includes/shortcodes/facebook.php');
include(get_template_directory() . '/includes/theme_customizer.php');
include(get_template_directory() . '/includes/front/head.php');
require_once(get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php');
include(get_template_directory() . '/includes/register-plugins.php');
include(get_template_directory() . '/includes/init.php');
include(get_template_directory() . '/includes/tapp_functions.php');


//Action and Filter Hooks
add_action('wp_enqueue_scripts', 'tap_enqueue_style' );
add_action('after_setup_theme', 'tap_setup_theme');
add_action('widgets_init', 'tap_widgets');
add_action('after_switch_theme', 'tap_activate');
add_action('admin_menu', 'tap_admin_menu');
add_action('admin_init', 'tap_admin_init');
add_action('customize_register', 'tap_customize_register');
add_action('wp_head', 'tap_head');
add_filter('excerpt_length', 'tap_set_excerpt_length');
add_filter( 'excerpt_more', 'tap_new_excerpt_more' );
add_action( 'tgmpa_register', 'tap_register_required_plugins' );
add_filter('the_generator', 'tap_remove_version');
add_action('init', 'portfolio_init');
add_action('init', 'custom_taxonomies_init');

//Shortcodes
add_shortcode('tapfb', 'tap_facebook_shortcode');
add_shortcode('tapi', 'tap_icon_shortcode');
