<?php

namespace App\Controllers;

class HomeController extends BaseController {


    public function index($template)
    {
        switch($template) {
            case "lp1":
                return $this->render('templates.' . $template);
            default:
                return $this->router->trigger404();

        }
    }

}