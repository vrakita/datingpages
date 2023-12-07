<?php

namespace App\Controllers;

use App\Landing\Router;

class BaseController {

    protected $view;
    protected $router;

    public function __construct() {

        $this->view = new \Jenssegers\Blade\Blade(basePath() . '/../views', basePath() . '/../cache');
        $this->router = Router::getInstance();

    }

    public function render(string $template, array $params = [])
    {
        echo $this->view->make($template, $params);
    }

    public function pageNotFound()
    {
        echo $this->view->make('404');
    }

}