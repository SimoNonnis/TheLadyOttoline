<?php
/**
 * require different files - to increase readability!!!
 * Comment the Function the you don't need
 */
require_once locate_template('/functions/zero_setup.php');          //Enable support for Post Thumbnails
require_once locate_template('/functions/head_cleanup.php');        //head cleanup (remove rsd, uri links, junk css, ect)
require_once locate_template('/functions/more_cleanup.php');        //more cleanup (remove rsd, uri links, junk css, ect)
require_once locate_template('/functions/enqueue_css.php');         //CSS
require_once locate_template('/functions/enqueue_scripts.php');     //JS
require_once locate_template('/functions/helpers.php');             //Helpers Functions

require_once locate_template('/functions/admin_menu_custom.php');   //Clean Up Dashboard



$current_user = wp_get_current_user();
//Hide Admin pages from Sophie
if($current_user->user_login == 's3r3n0magical101'){ //Hide Everything from Sophie!!!
    add_action( 'admin_menu', 'remove_menus' );
}
function remove_menus(){
    $current_user = wp_get_current_user();
    if($current_user->user_login == 's3r3n0magical101'){ 
      remove_menu_page( 'user-edit.php' );              //Edit Users
      remove_menu_page( 'plugins.php' );                //Plugins
      remove_menu_page( 'admin.php?page=WP-Optimize' );    //WPO plugin
      remove_menu_page( 'edit.php?post_type=acf-field-group' );    //ACF Pro settings
      remove_menu_page( 'edit-comments.php' );          //Comments
      remove_menu_page( 'themes.php' );                 //Appearance
      remove_menu_page( 'users.php' );                  //Users
    }
}