<?php

use LaravelLang\Development\Processors\Statuses\Translator;

require __DIR__ . '/bootstrap/autoload.php';

/** @var \LaravelLang\Development\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Translator::make());
