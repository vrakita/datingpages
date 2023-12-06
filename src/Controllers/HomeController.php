<?php

namespace App\Controllers;

class HomeController extends BaseController {

    const AVAILABLE_TEMPLATES = ['lp1'];

    public function index($template)
    {

        if( ! in_array($template, self::AVAILABLE_TEMPLATES))
            return $this->router->trigger404();

        return $this->render('templates.' . $template, ['template' => $template]);
        
    }

}