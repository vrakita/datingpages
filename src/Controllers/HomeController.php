<?php

namespace App\Controllers;

class HomeController extends BaseController {

    const AVAILABLE_TEMPLATES = [
        'lp1', 'lp2', 'lp3', 'lp4', 'lp5', 'lp6', 'lp7', 'lp8', 'lp9', 'lp10', 'lp11', 'lp12', 'lp13', 'lp14', 'lp15',
        'lp16', 'lp17', 'lp18', 'lp19', 'lp20'
    ];

    public function index($template)
    {

        if( ! in_array($template, self::AVAILABLE_TEMPLATES))
            return $this->router->trigger404();

        return $this->render('templates.' . $template, ['template' => $template]);

    }

}