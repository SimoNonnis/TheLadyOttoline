<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

if ( !function_exists('zero_setup') ) :

  function zero_setup() {

    // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
    add_theme_support('post-thumbnails');

    add_image_size( '775x600', 775, 600, true );  //Home Page Slider
    add_image_size( '785x340', 785, 340, true );  //Rectangles
    add_image_size( '386x543', 386, 543, true );  //Top Section Tall - like "find us" page
    add_image_size( '386x397', 386, 397, true );  //Top Section Short - like "menus" page
    add_image_size( '386x340', 386, 340, true );  //Squares
    add_image_size( '235x235', 235, 235, true );  //Blog style thumbnail
    


    

    
    // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
    register_nav_menus(
      array(
        'main-nav' => __( 'Main Menu', 'zero' ),   // main nav in header
        'footer-links' => __( 'Footer Links', 'zero' ) // secondary nav in footer
      )
    );

    function zero_main_nav() {
      wp_nav_menu(array(
        'container' => '',                           
        'menu' => __( 'Main Menu', 'zero' ), 
        'menu_class' => '[ main-nav__ul ] u-clean-list',         
        'theme_location' => 'main-nav',                 
      ));
    } 

    
    function zero_footer_links() {
      // first let's get our nav menu using the regular wp_nav_menu() function with special parameters
      $cleanermenu = wp_nav_menu( array(
        'menu' => __( 'Footer Links', 'zero' ), 
        'theme_location' => 'footer-links', 
        'container' => '', // this is usually a div outside the menu ul, we don't need it
        'items_wrap' => '<nav class="[ footer-nav-menu ] u-noTextDecoration">%3$s</nav>', // replacing the ul with nav
        'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
      ));
       
      // Find the closing bracket of each li and the opening of the link, then all instances of "li"
      $find = array('><a','<li');
      // Replace the former with nothing (a.k.a. delete) and the latter with "a"
      $replace = array('','<a');
      
      echo str_replace( $find, $replace, $cleanermenu );
    }

  }//zero_setup

endif;

add_action('after_setup_theme', 'zero_setup');