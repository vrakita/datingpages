<?php

if( ! function_exists('getCurrentURL')) {

    function getCurrentURL(): string
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . '://';
        $host = $_SERVER['HTTP_HOST'];
        $port = $_SERVER['SERVER_PORT'];
//        $baseUrl = $protocol.$host;
        $baseUrl = $host;

        $currentPath = strtok($_SERVER['REQUEST_URI'], '?');

        if ($currentPath == '/') {
            $currentPath = '';
        }

        return $baseUrl . $currentPath;
    }
}

if( ! function_exists('translate')) {

    function translate(string $key)
    {

        $application = \App\Application::getInstance();

        return array_reduce(
            [$application->getLanguage(), ...explode('.', $key)],
            fn($acc, $item) => $acc[$item] ?? null,
            $application->getTranslations()
        ) ?? $key;

    }

}

if( ! function_exists('asset')) {

    function asset(string $path)
    {

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . '://';

        return $protocol . $_SERVER['SERVER_NAME'] . "/assets/" . $path;

    }

}

if( ! function_exists('basePath')) {

    function basePath()
    {
        return dirname(__DIR__);
    }

}

if( ! function_exists('getURLSegment')) {

    function getURLSegment($segment = 1): ?string
    {
        $parts = explode('/', getCurrentURL());

        if(count($parts) < $segment - 1) {
            return null;
        }

        return $parts[$segment] ?? null;
    }

}