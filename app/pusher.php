<?php

use LaravelLang\Lang\Processors\Git;

require __DIR__ . '/../vendor/autoload.php';

/** @var \LaravelLang\Lang\Application $app */
$app = require_once __DIR__ . '/bootstrap/app.php';

$app->processor(Git::make());
