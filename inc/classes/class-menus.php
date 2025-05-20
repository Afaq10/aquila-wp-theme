<?php
/**
 * Register Menus
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

 class Menus {
    use Singleton;

       //constructor function
       protected function __construct() {
        //Load classes
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        
        /**
         * Actions
         */
        add_action( 'init', [$this, 'register_menus']);
    }

    public function register_menus() {
        // Register Menus
        register_nav_menus( [
            'aquila-header-menu' => esc_html__( 'Header Menu', 'aquila' ),
            'aquila-footer-menu' => esc_html__( 'Footer Menu', 'aquila' ),
        ] );
    }

 }