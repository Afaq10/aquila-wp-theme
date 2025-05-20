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
        Menus::get_instance();

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

        //add support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        //add support for customize selective refresh
        add_theme_support( 'customize-selective-refresh-widgets' );

        //add support for automatic feed links
        add_theme_support( 'automatic-feed-links' );
        
        //add support for HTML5
        add_theme_support( 'html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'script',
            'style',
        ] );

        //add support for editor styles
        add_editor_style();

        //add support for block styles
        add_theme_support( 'wp-block-styles' );

        //add support for align wide
        add_theme_support( 'align-wide' );

        //Global Variable Content Width to Set the Content Width of Your Theme
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 1240; // Set the default content width to 1240 pixels
        }
    }

}