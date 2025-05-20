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

        //add support for custom logo
        add_theme_support( 'custom-logo', [
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => [ 'site-title', 'site-description' ],
        ] );

        //add support for custom background
        add_theme_support( 'custom-background', [
            'default-color' => '#ffffff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ] );
    }

}