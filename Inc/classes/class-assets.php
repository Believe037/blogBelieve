<?php
/**
 * Enqueue theme assets.
 * 
 * @package blogBelieve
 */


 namespace BLOGBELIEVE_THEME\Inc;


 use BLOGBELIEVE_THEME\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct() {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * actions
         */

        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles'] );

        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts'] );
    }

    public function register_styles() {
        // Register Styles.
        wp_register_style( 'styles-css', get_stylesheet_uri(),  [], filemtime( BLOGBELIEVE_DIR_PATH . '/style.css' ), 'all' );

        wp_register_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',  [], false, 'all' );

        // Enqueue Styles.
        wp_enqueue_style( 'style-css' );
        wp_enqueue_style( 'bootstrap-css' );

    }

    public function register_scripts() {

        // Register Scripts.
        wp_register_script( 'main-js', BLOGBELIEVE_DIR_URI . '/assets/main.js', [], filemtime( BLOGBELIEVE_DIR_PATH . '/assets/main.js' ), true );

        wp_register_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [ 'jquery' ], false, true );

        wp_register_script( 'bootstrap-bundle-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', [ 'jquery' ], false, true );


        // Enqueue Scripts
        wp_enqueue_script( 'main-js' );
        wp_enqueue_script( 'bootstrap-js' );
        wp_enqueue_script( 'bootstrap-bundle-js' );
    }
 }