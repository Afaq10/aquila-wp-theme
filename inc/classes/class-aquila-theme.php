<?php

/**
 * Bootstraps the Theme.
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    //constructor function
    protected function __construct() {
        //Load classes

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        
        /**
         * Actions
         */
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
        //add support for title tag
        add_theme_support( 'title-tag' );
    }

}