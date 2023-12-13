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

    function translate(string $key, $params = [])
    {

        $application = \App\Application::getInstance();

        return array_reduce(
            [$application->getLanguage(), ...explode('.', $key)],
            fn($acc, $item) => substitute($acc[$item], $params) ?? null,
            $application->getTranslations()
        ) ?? $key;

    }

}

function substitute($string, $params)
{
    return array_reduce(array_keys($params), function ($string, $i) use($params) {
        return strpos($string, '{' . $i . '}') !== false
            ? str_replace('{' . $i . '}', $params[$i], $string)
            : $string;
    }, $string);
}

if( ! function_exists('asset')) {

    function asset(string $path)
    {

        $path = $path[0] === "/" ? $path : ("/" . $path);

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . '://';

        return $protocol . $_SERVER['SERVER_NAME'] . "/assets/" . \App\Application::getInstance()->getTemplate() . $path;

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