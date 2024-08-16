<?php

use App\Bootstrap;

require __DIR__ . '/../vendor/autoload.php';

$configurator = Bootstrap::boot();
$container = $configurator->createContainer();
$application = $container->getByType(Nette\Application\Application::class);
/** @noinspection PhpUnhandledExceptionInspection */
$application->run();