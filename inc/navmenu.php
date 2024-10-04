<?php

/**
 * Nav menus
 *
 * @package StarterTheme
 * @version 1.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Register the nav menus
 */
if (!function_exists('starter_theme_register_navmenu')) :

  function starter_theme_register_navmenu() {
    // Register Menus
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('footer-menu', 'Footer menu');
  }
endif;
add_action('after_setup_theme', 'starter_theme_register_navmenu');
