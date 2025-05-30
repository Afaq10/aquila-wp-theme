<?php
/**
 * Theme Funtions.
 * 
 * @package Aquila
 */

use AQUILA_THEME\Inc\AQUILA_THEME;

if ( ! defined( 'AQUILA_DIR_PATH' ) ) {
    define( 'AQUILA_DIR_PATH', untrailingslashit(get_template_directory(  ) ) );
}

if ( ! defined( 'AQUILA_DIR_URI' ) ) {
    define( 'AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri(  ) ) );
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance(){
   \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_enqueue_scripts() {
    /**wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );*/

    

    
}

?>