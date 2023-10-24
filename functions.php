<?php 
/**
 * Theme Functions.
 * 
 * @package blogBelieve
 */

if ( ! defined( 'BLOGBELIEVE_DIR_PATH' ) ) {
    define( 'BLOGBELIEVE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}


require_once BLOGBELIEVE_DIR_PATH . '/Inc/helpers/autoloader.php';

function blogbelieve_get_theme_instance(){
    \BLOGBELIEVE_THEME\Inc\BLOGBELIEVE_THEME::get_instance();
}

blogbelieve_get_theme_instance();

// enqueue codes
 function blogBelieve_enqueue_scripts(){

    // Register Styles.
    wp_register_style( 'styles-css', get_stylesheet_uri(),  [], filemtime( get_template_directory() . '/style.css' ), 'all' );

    wp_register_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',  [], false, 'all' );

    // Register Scripts.
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js' ), true );

    wp_register_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [ 'jquery' ], false, true );

    wp_register_script( 'bootstrap-bundle-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', [ 'jquery' ], false, true );



    // Enqueue Styles.
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'bootstrap-css' );

    // Enqueue Scripts
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_script( 'bootstrap-bundle-js' );
 }

 add_action( 'wp_enqueue_scripts', 'blogBelieve_enqueue_scripts' );

 ?>