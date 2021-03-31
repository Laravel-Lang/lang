<?php

use LaravelLang\Lang\Processors\Json;
use LaravelLang\Lang\Processors\Php;
use LaravelLang\Lang\Services\Filesystem\Json as JsonFilesystem;
use LaravelLang\Lang\Services\Filesystem\Php as PhpFilesystem;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Json::make(), JsonFilesystem::make());
$app->processor(Php::make(), PhpFilesystem::make());
