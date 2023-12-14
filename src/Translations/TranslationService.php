<?php

namespace App\Translations;

class TranslationService
{
    const LANGUAGES = ['en', 'de', 'it', 'fr'];
    public static function load(): array
    {
        return json_decode(file_get_contents(basePath() . '/resources/translations.json'), true);
    }
}