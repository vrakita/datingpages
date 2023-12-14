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

        return array_reduce(
            [app()->getLanguage(), ...explode('.', $key)],
            fn($acc, $item) => isset($acc[$item]) ? substitute($acc[$item], $params) : null,
            app()->getTranslations()
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

        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http') . '://';

        return $protocol . $_SERVER['SERVER_NAME'] . "/assets/" . app()->getTemplate() . $path;

    }

}

if( ! function_exists('basePath')) {

    function basePath(string $path = '')
    {
        $root = dirname(__DIR__);

        if($path && $path[0] !== '/') {
            $path = '/' . $path;
        }

        return $path ? $root . $path : $root;
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

if( ! function_exists('app')) {

    function app(): \App\Application
    {
        return \App\Application::getInstance();
    }

}
