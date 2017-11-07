<?php

use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;
use Kurl\Silex\Provider\DoctrineMigrationsProvider;
use Knp\Provider\ConsoleServiceProvider;

$app->register(
    new DoctrineServiceProvider(), 
    ["db.options" => $app["db.options"]
]);

$app->register(
    new DoctrineMigrationsProvider(),
    $app['migrations.config']
);

$app->register(new ConsoleServiceProvider());

return $app;