<?php
require __DIR__ . '/../init_autoloader.php';

use Eva\EvaEngine\Engine;

$engine = new Engine(__DIR__ . '/..');

$engine
    ->loadModules(include __DIR__ . '/../config/modules.' . $engine->getAppName() . '.php')
    ->bootstrap()
    ->run();
