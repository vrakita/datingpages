<?php

namespace App;

use App\Translations\TranslationService;
use Bramus\Router\Router;
use Jenssegers\Blade\Blade;

class Application
{

    private static $instance;

    protected string $language;

    protected Router $router;

    protected array $translations;

    protected Blade $view;

    private function __construct() {}

    public static function getInstance()
    {

        if( ! static::$instance) {
            static::$instance = new self;
        }

        return static::$instance;
    }
    public static function run() {

        $instance               = static::getInstance();

        $instance->translations = TranslationService::load();

        $instance->router       = new Router;

        $instance->view         = new Blade(basePath() . '/../views', basePath() . '/../cache');

        $instance->language     = isset($_GET['lang']) && in_array($_GET['lang'], ['de', 'if', 'fr']) ? $_GET['lang'] : 'en';

        $instance->router->get('/{template}', 'App\Controllers\HomeController@index');
        $instance->router->set404('App\Controllers\BaseController@pageNotFound');

        $instance->router->run();

        return $instance;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getTranslations(): array
    {
        return $this->translations;
    }

    public function getRouter(): Router
    {
        return $this->router;
    }

    public function getView(): Blade
    {
        return $this->view;
    }
}