<?php
add_action('customize_register','my_customize_register');
function my_customize_register( $wp_customize ) {
  $wp_customize->add_section('profile', array(
    'title' => __( 'Profile Section', 'szs' ),
    'priority' => 160, // Mixed with top-level-section hierarchy.
  ) );

  $wp_customize->add_section('logo', array(
    'title' => __('Logo', 'szs'),
    'priority' => 159
  ));

  $wp_customize->add_setting('profile_image', array(
    'default' => get_bloginfo('template_url') . '/assets/images/logo.smk.jenangan.png',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
    'label' => __('Profile Image'),
    'section' => 'profile',
    'settings' => 'profile_image',
    'priority' => 1
  )));

  $wp_customize->add_setting('profile_title', array(
    'default' => _x('Title', 'szs')
  ));

  $wp_customize->add_control('profile_title', array(
    'label' => _x('Title', 'szs'),
    'section' => 'profile',
    'priority' => 2
  ));

  $wp_customize->add_setting('profile_desc' , array(
    'default' => _x('SMK Negeri 1 Jenangan Ponorogo adalah sebuah sekolah menengah kejuruan yang fokus pada bidang keteknikan. Sekolah ini merupakan sekolah teknik tertua di Ponorogo. Terdapat 7 Program keahlian yang diselenggarakan oleh sekolah ini. Sistem pembelajarannya sendiri menganut sistem Blok.
SMK Negeri 1 Jenangan Ponorogo sebagai SMK Kelompok Teknologi Industri merupakan bagian dari Sistem Pendidikan Nasional dalam hal ini Direktorat Pembinaan Sekolah Menengah Direktorat Jenderal Manajemen Pendidikan Dasar dan Menengah, yang mengemban misi untuk mempersiapkan dan meningkatkan sumber daya manusia tingkat menengah.', 'szs'),
  ) );

  $wp_customize->add_control('profile_desc', array(
    'label' => __('Description', 'szs'),
    'section' => 'profile',
    'type' => 'textarea',
    'priority' => 3
  ));

  //Menu Logo
  $wp_customize->add_setting('menu_icon', array(
    'default' => get_bloginfo('template_url') . '/assets/images/logo.png'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'menu_icon', array(
    'label' => 'Menu Icon',
    'section' => 'logo',
    'settings' => 'menu_icon',
    'priority' => 3
  )));

  //Menu Logo
  $wp_customize->add_setting('menu_icon2', array(
    'default' => get_bloginfo('template_url') . '/assets/images/logo (1).png'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'menu_icon2', array(
    'label' => 'Menu Icon White',
    'section' => 'logo',
    'settings' => 'menu_icon2',
  )));

  $wp_customize->add_setting('logo_title', array(
    'default' => __('SMK Negeri 1 Jenangan', 'szs')
  ));

  $wp_customize->add_control('logo_title', array(
    'label' => __('Logo Title', 'szs'),
    'section' => 'logo',
    'settings' => 'logo_title'
  ));

  $wp_customize->add_setting('logo_desc', array(
    'default' => _x('SMK Negeri 1 Jenangan Ponorogo adalah sebuah sekolah menengah kejuruan yang fokus pada bidang keteknikan.', 'szs')
  ));

  $wp_customize->add_control('logo_desc', array(
    'label' => __('Logo Description', 'szs'),
    'section' => 'logo',
    'type' => 'textarea',
    'settings' => 'logo_desc'
  ));

  $wp_customize->add_section('footer', array(
    'title' => __('Footer', 'szs'),
    'priority' => 161
  ));

  $wp_customize->add_setting('facebook_link', array(
    'default' => __('#')
  ));

  $wp_customize->add_setting('twitter_link', array(
    'default' => __('#')
  ));

  $wp_customize->add_setting('instagram_link', array(
    'default' => __('#')
  ));

  $wp_customize->add_control('facebook_link', array(
    'label' => __('Facebook Link'),
    'section' => 'footer'
  ));
  
  $wp_customize->add_control('twitter_link', array(
    'label' => __('Twitter Link'),
    'section' => 'footer',
    'settings' => 'twitter_link'
  ));

  $wp_customize->add_control('instagram_link', array(
    'label' => __('Instagram Link'),
    'section' => 'footer',
    'settings' => 'instagram_link'
  ));

}