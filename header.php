<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <title>My Document</title> -->
    <?php wp_head(); ?>
 
</head>
<body <?php body_class(); ?>>
   <?php 
   if ( function_exists( 'wp_body_open' ) ) {
      wp_body_open();
   } else {
      do_action( 'wp_body_open' );
   }
   ?>
   <div class="all-content">
      <header class="header-container full-width">
         <div class="nav-menu container-global-wide">   
            <?php the_custom_logo(); ?>
            <?php wp_nav_menu(array(
               'theme_location' => 'header-menu'
            )); ?>
            <div class="burger-menu-container">
               <div class="burger-menu"></div>
            </div>
            <div class="burger-menu-overlay hidden">
               <?php wp_nav_menu(array(
                  'theme_location' => 'header-menu'
               )); ?>
            </div>
         </div>
      </header>
      <main class="main-container">