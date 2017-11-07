<?php

$app['db.options'] = [
  "driver" => "pdo_mysql",
  "user" => "mledwon",
  "password" => "",
  "dbname" => "pilka",
  "host" => "localhost"
];

$app['migrations.config'] = [
    'migrations.directory' => __DIR__ . '/../migrations',
    'migrations.namespace' => 'Migrations'
];