<?php

use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;
use Kurl\Silex\Provider\DoctrineMigrationsProvider;
use Knp\Provider\ConsoleServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use App\RoutesLoader;

$app->register(
    new DoctrineServiceProvider(), 
    ["db.options" => $app["db.options"]
]);

$app->register(
    new DoctrineMigrationsProvider(),
    $app['migrations.config']
);

$app->register(new ConsoleServiceProvider());
$app->register(new ServiceControllerServiceProvider());

$routesLoader = new App\RoutesLoader($app);
$routesLoader->bindRoutesToControllers();

return $app;