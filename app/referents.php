<?php

use LaravelLang\Lang\Processors\Referents;
use LaravelLang\Lang\Services\Filesystem\Markdown;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Referents::make(), Markdown::make());
