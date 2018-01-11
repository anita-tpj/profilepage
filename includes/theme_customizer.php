<?php

function tap_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function tap_customize_register($wp_customize){

   $wp_customize->add_section('tap_color_theme_section', array(
    'title' => __('Color', 'profilepage'),
    'priority' => 30
   ));

  //Text Color
  $wp_customize->add_setting('text_color', array(
      'default' => '#ffffff',
      'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
      'label' => __('Text Color', 'profilepage'),
      'section' => 'tap_color_theme_section',
      'settings' => 'text_color',
      'priority' => 3
  )));

//Headers
  $wp_customize->add_setting('theme_color', array(
    'default' => '#2c2b2a',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color', array(
    'label' => __('Header Color', 'profilepage'),
    'section' => 'tap_color_theme_section',
    'settings' => 'theme_color',
    'priority' => 4
  )));

//Button Background
  $wp_customize->add_setting('button_bg_color', array(
    'default' => '#f87d22',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_color', array(
    'label' => __('Button Color', 'profilepage'),
    'section' => 'tap_color_theme_section',
    'settings' => 'button_bg_color',
    'priority' => 5
  )));

  // Button Borders
  $wp_customize->add_setting('button_border_color', array(
      'default' => '#ffa500',
      'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'border_color', array(
      'label' => __('Button Border Color', 'profilepage'),
      'section' => 'tap_color_theme_section',
      'settings' => 'button_border_color',
      'priority' => 6
  )));

  // Button Text
  $wp_customize->add_setting('button_text_color', array(
      'default' => '#ffffff',
      'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_color', array(
      'label' => __('Button Text Color', 'profilepage'),
      'section' => 'tap_color_theme_section',
      'settings' => 'button_text_color',
      'priority' => 7
  )));

  //Button Hover Background
    $wp_customize->add_setting('button_hover_bg_color', array(
      'default' => '#ffa500',
      'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_hover_color', array(
      'label' => __('Button Hover Color', 'profilepage'),
      'section' => 'tap_color_theme_section',
      'settings' => 'button_hover_bg_color',
      'priority' => 8
    )));

  // Links
  //Link Color
  $wp_customize->add_setting('link_color', array(
      'default' => '#f87d22',
      'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
      'label' => __('Link Color', 'profilepage'),
      'section' => 'tap_color_theme_section',
      'settings' => 'link_color',
      'priority' => 9
  )));

  //Link Hover Color
  $wp_customize->add_setting('link_hover_color', array(
      'default' => '#ffffff',
      'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_hover_color', array(
      'label' => __('Link Hover Color', 'profilepage'),
      'section' => 'tap_color_theme_section',
      'settings' => 'link_hover_color',
      'priority' => 10
  )));



 //Sections
 //About section
 // Welcome Section
	$wp_customize->add_section('welcomepage_section', array(
		'title'	=> __('Welcome Page Section','profilepage'),
		'description'	=> __('Select Pages from the dropdown for welcome page section','profilepage'),
		'priority'	=> null
	));

	$wp_customize->add_setting('welcomepage',array(
			'default'	=> '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));

	$wp_customize->add_control(	'welcomepage',array(
			'type' => 'dropdown-pages',
			'section' => 'welcomepage_section',
	));


	$wp_customize->add_setting('show_welcomepage',array(
			'default' => false,
			'sanitize_callback' => 'tap_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'show_welcomepage', array(
			   'settings' => 'show_welcomepage',
			   'section'   => 'welcomepage_section',
			   'label'     => __('Check To Show This Section','profilepage'),
			   'type'      => 'checkbox'
	 ));//Show Welcome Section

   // Four Page Boxes Portfolio Section
	$wp_customize->add_section('portfolio_section', array(
		'title'	=> __('Portfolio Section','profilepage'),
		'description'	=> __('Select Pages from the dropdown for four column portfolio section','profilepage'),
		'priority'	=> null
	));

	$wp_customize->add_setting('pagebxno1',array(
			'default'	=> '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));

	$wp_customize->add_control(	'pagebxno1',array(
			'type' => 'dropdown-pages',
			'section' => 'portfolio_section',
	));

	$wp_customize->add_setting('pagebxno2',array(
			'default'	=> '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));

	$wp_customize->add_control(	'pagebxno2',array(
			'type' => 'dropdown-pages',
			'section' => 'portfolio_section',
	));

	$wp_customize->add_setting('pagebxno3',array(
			'default'	=> '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));

	$wp_customize->add_control(	'pagebxno3',array(
			'type' => 'dropdown-pages',
			'section' => 'portfolio_section',
	));

	$wp_customize->add_setting('pagebxno4',array(
			'default'	=> '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));

	$wp_customize->add_control(	'pagebxno4',array(
			'type' => 'dropdown-pages',
			'section' => 'portfolio_section',
	));//end four column page boxes

  $wp_customize->add_setting('show_portfolio',array(
			'default' => false,
			'sanitize_callback' => 'tap_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'show_portfolio', array(
			   'settings' => 'show_portfolio',
			   'section'   => 'portfolio_section',
			   'label'     => __('Check To Show This Section','profilepage'),
			   'type'      => 'checkbox'
	 ));//Show Services Section


}
