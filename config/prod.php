<?php

require __DIR__.'/parameters.php';

$app['migrations.config'] = [
    'migrations.directory' => __DIR__ . '/../migrations',
    'migrations.namespace' => 'Migrations'
];