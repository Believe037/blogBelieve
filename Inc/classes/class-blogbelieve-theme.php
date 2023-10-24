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
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters.
    }
 }