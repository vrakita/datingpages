<?php

require "../bootstrap.php";

$router->get('/{template}', 'App\Controllers\HomeController@index');
$router->set404('App\Controllers\BaseController@pageNotFound');

$router->run();