<?php

namespace App;

use Nette\Bootstrap\Configurator;

final class Bootstrap
{
    public static function boot(): Configurator
    {
        $configurator = new Configurator;
        $rootDir = dirname(__DIR__);
        $configurator->setDebugMode((bool) getenv("DEBUG"));
        $configurator->enableTracy($rootDir . '/logs');
        $configurator->setTempDirectory($rootDir . '/temp');

        $configurator->addConfig($rootDir . '/config/config.neon');

        $configurator->addDynamicParameters([
            'env' => getenv(),
        ]);

        return $configurator;
    }
}