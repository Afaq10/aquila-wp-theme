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
        $this->set_hooks();
    }

    protected function set_hooks() {
        //Load actions and filters
    }

}