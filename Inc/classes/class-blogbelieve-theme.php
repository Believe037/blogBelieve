<?php
/**
 * Bootstraps the Theme.
 * 
 * @package blogBelieve
 */


 namespace BLOGBELIEVE_THEME\Inc;

 use BLOGBELIEVE_THEME\Inc\Traits\Singleton;

 class BLOGBELIEVE_THEME {
    use Singleton;

    protected function __construct() {

        // load class.

        Assets::get_instance();

        $this->setup_hooks();

    }

    protected function setup_hooks() {
        /**
         * actions
         */

        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
        add_theme_support( 'title-tag' );

        add_theme_support( 'custom-logo', [
            'header-text' => [ 'site-title', 'site-description' ],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true
        ]);
    }
 }