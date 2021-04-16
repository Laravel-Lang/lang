<?php

use LaravelLang\Lang\Processors\Statuses\Locales;
use LaravelLang\Lang\Processors\Statuses\Main;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Main::make());
$app->processor(Locales::make());
