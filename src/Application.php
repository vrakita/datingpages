<?php

namespace App;

use App\Translations\TranslationService;
use Bramus\Router\Router;
use Jenssegers\Blade\Blade;
use Dotenv\Dotenv;

class Application
{

    private static $instance;

    protected string $language;

    protected Router $router;

    protected array $translations;

    protected Blade $view;

    protected string $template;

    private function __construct() {}

    public static function getInstance(): Application
    {

        if( ! static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }
    public static function run() {

        $instance               = static::getInstance();

        Dotenv::createImmutable(basePath())->load();

        $instance->setLanguage();

        $instance->template     = getURLSegment();

        $instance->translations = TranslationService::load();

        $instance->router       = new Router;

        $instance->router->get('/{template}', 'App\Controllers\HomeController@index');
        $instance->router->set404('App\Controllers\BaseController@pageNotFound');

        $instance->view         = new Blade(basePath() . '/views', basePath() . '/cache');

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

    public function getTemplate(): string
    {
        return $this->template;
    }

    protected function setLanguage()
    {
        $this->language = isset($_GET['lang']) && in_array(strtolower($_GET['lang']), ['de', 'it', 'fr']) ? strtolower($_GET['lang']) : 'en';
    }
}