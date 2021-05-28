<?php

/*
 * DO NOT RUN THIS FILE!
 *
 * It was needed to start the process of changing the
 * project structure from version 9 to version 10.
 */

use LaravelLang\Lang\Processors\Packages;
use LaravelLang\Lang\Processors\Splitters\{CleanUp, Locales, Main, Structure};

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Packages::make());
$app->processor(Structure::make());
$app->processor(Main::make());
$app->processor(Locales::make());
$app->processor(CleanUp::make());
