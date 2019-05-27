<html>
  <head>
    <title>SMKN 1 Jenangan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>
      <nav class="navb d-flex justify-content-between top">
        <a href="<?php echo site_url() ?>" class="navb-brand">
          <div class="logo-1">
            <img src="<?php echo get_theme_mod('menu_icon2', get_template_directory_uri(). '/assets/images/logo (1).png') ?>">
          </div>
          <div class="logo-2">
            <img src="<?php echo get_theme_mod('menu_icon', get_template_directory_uri(). '/assets/images/logo.png') ?>">
          </div>
        </a>
        
        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'menu_class' => 'navbar-menu',
            'container_id' => 'navbarNav'
          )
        );?>
                    
        <button class="nav-toggler" id="closeNav"><i class="fa fa-times"></i></button>
        <button class="nav-toggler" id="openNav"><i class="fa fa-bars"></i>
        </button>

      </nav>
    