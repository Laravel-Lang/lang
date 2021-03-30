<?php

use LaravelLang\Lang\Processors\Todo\Languages;
use LaravelLang\Lang\Processors\Todo\Main;
use LaravelLang\Lang\Services\Filesystem\Markdown;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->processor(Main::make(), Markdown::make());
$app->processor(Languages::make(), Markdown::make());
