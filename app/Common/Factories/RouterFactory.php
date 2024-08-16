<?php

namespace App\Common\Factories;

use Nette\StaticClass;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
    use StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;
        $router->addRoute('<presenter>/<action>[/<id>]', 'Front:Home:default');
        return $router;
    }
}
