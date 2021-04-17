<?php

use LaravelLang\Lang\Processors\Json;
use LaravelLang\Lang\Processors\Php;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Json::make());
$app->processor(Php::make());
