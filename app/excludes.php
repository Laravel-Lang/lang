<?php

use LaravelLang\Lang\Processors\Excludes;
use LaravelLang\Lang\Services\Filesystem\Php;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Excludes::make(), Php::make());
