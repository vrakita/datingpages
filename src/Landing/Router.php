<?php

namespace App\Landing;

class Router {

    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if( ! self::$instance) {
            self::$instance = new \Bramus\Router\Router;
        }

        return self::$instance;
    }

}