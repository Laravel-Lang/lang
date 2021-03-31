<?php

use LaravelLang\Lang\Application;

$app = Application::make(
    realpath(__DIR__ . '/../../')
);

return $app;
