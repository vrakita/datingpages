<?php

namespace App\Controllers;

class HomeController extends BaseController {

    const AVAILABLE_TEMPLATES = ['lp1'];

    public function index($template)
    {

        if( ! in_array($template, self::AVAILABLE_TEMPLATES))
            return $this->router->trigger404();

        $dir = getBaseURL() . "/assets/$template/";

        return $this->render('templates.' . $template, ['dir' => $dir]);
        
    }

}