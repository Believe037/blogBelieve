<?php 
/**
 * Theme Functions.
 * 
 * @package blogBelieve
 */

if ( ! defined( 'BLOGBELIEVE_DIR_PATH' ) ) {
    define( 'BLOGBELIEVE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'BLOGBELIEVE_DIR_URI' ) ) {
    define( 'BLOGBELIEVE_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}


require_once BLOGBELIEVE_DIR_PATH . '/Inc/helpers/autoloader.php';

function blogbelieve_get_theme_instance(){
    \BLOGBELIEVE_THEME\Inc\BLOGBELIEVE_THEME::get_instance();
}

blogbelieve_get_theme_instance();

// enqueue codes
 function blogBelieve_enqueue_scripts(){

 }



 ?>