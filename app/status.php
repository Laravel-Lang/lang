<?php

use LaravelLang\Development\Processors\Statuses\Locales;
use LaravelLang\Development\Processors\Statuses\Main;

require __DIR__ . '/bootstrap/autoload.php';

/** @var \LaravelLang\Development\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Main::make());
$app->processor(Locales::make());
