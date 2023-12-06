<?php

if( ! function_exists('getBaseURL')) {

    function getBaseURL(): string
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . '://';
        $host = $_SERVER['HTTP_HOST'];
        $port = $_SERVER['SERVER_PORT'];
        $baseUrl = $protocol.$host;

        $currentPath = strtok($_SERVER['REQUEST_URI'], '?');

        if ($currentPath == '/') {
            $currentPath = '';
        }

        return $baseUrl . $currentPath;
    }
}

if( ! function_exists('translate')) {

    function translate(string $language, string $key)
    {

        $dictonary = [];

        return array_reduce(
            [$language, ...explode('.', $key)],
            fn($acc, $item) => $acc[$item] ?? null,
            $dictonary
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