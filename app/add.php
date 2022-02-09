<?php

use LaravelLang\Development\Processors\AddLocale;

require __DIR__ . '/bootstrap/autoload.php';

/** @var \LaravelLang\Development\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

if ($locale = $argv[1] ?? null) {
    $app->processor(AddLocale::make($argv[1]));

    return;
}

echo 'You must provide a localization code.';
