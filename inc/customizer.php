<?php
  function libro_customize_register($wp_customize){
    // Showcase_two Section
    $wp_customize->add_section('showcase_one', array(
      'title'   => __('Showcase one', 'libro'),
      'description' => sprintf(__('Options for showcase','libro')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('showcase_one_image', array(
      'default'   => get_bloginfo('template_directory').'/images/bg_1.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_one_image', array(
      'label'   => __('Showcase_one Image', 'libro'),
      'section' => 'showcase_one',
      'settings' => 'showcase_one_image',
      'priority'  => 1
    )));
    $wp_customize->add_setting('showcase_one_heading', array(
      'default'   => _x('Libro showcase_one', 'libro'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_one_heading', array(
      'label'   => __('Heading', 'libro'),
      'section' => 'showcase_one',
      'priority'  => 2
    ));
    $wp_customize->add_setting('showcase_one_cat', array(
      'default'   => _x('Fashion', 'libro'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_one_cat', array(
      'label'   => __('Category', 'libro'),
      'section' => 'showcase_one',
      'priority'  => 3
    ));

    // Showcase_one Section
    $wp_customize->add_section('showcase_two', array(
      'title'   => __('Showcase Two', 'libro'),
      'description' => sprintf(__('Options for showcase','libro')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('showcase_two_image', array(
      'default'   => get_bloginfo('template_directory').'/images/bg_1.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_two_image', array(
      'label'   => __('Showcase_two Image', 'libro'),
      'section' => 'showcase_two',
      'settings' => 'showcase_two_image',
      'priority'  => 1
    )));
    $wp_customize->add_setting('showcase_two_heading', array(
      'default'   => _x('Libro showcase_two', 'libro'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_two_heading', array(
      'label'   => __('Heading', 'libro'),
      'section' => 'showcase_two',
      'priority'  => 2
    ));
    $wp_customize->add_setting('showcase_two_cat', array(
      'default'   => _x('Fashion', 'libro'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_two_cat', array(
      'label'   => __('Category', 'libro'),
      'section' => 'showcase_two',
      'priority'  => 3
    ));
  }
  add_action('customize_register', 'libro_customize_register');