<?php

namespace App\Controllers;

use App\Application;

class BaseController {

    protected $view;
    protected $router;

    public function __construct()
    {

        $this->view = app()->getView();
        $this->router = app()->getRouter();
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