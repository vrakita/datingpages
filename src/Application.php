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

    protected ?string $template;

    private function __construct() {}

    public static function getInstance(): Application
    {

        if( ! static::$instance) {
            return static::boot();
        }

        return static::$instance;
    }
    public static function boot() {

        if(static::$instance) {
            return static::$instance;
        }

        static::$instance = new static();

        Dotenv::createImmutable(basePath())->load();

        static::$instance->setLanguage();

        static::$instance->template     = getURLSegment();

        static::$instance->translations = TranslationService::load();

        static::$instance->view         = new Blade(basePath('views'), basePath('cache'));

        static::$instance->router       = static::$instance->registerRoutes();

        static::$instance->router->run();

        return static::$instance;
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
        $this->language = isset($_GET['lang']) && in_array(strtolower($_GET['lang']), TranslationService::LANGUAGES)
            ? strtolower($_GET['lang'])
            : 'en';
    }

    protected function registerRoutes(): Router
    {
        $router = new Router();

        (fn($router) => require basePath('routes.php'))($router);

        return $router;
    }
}