<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
date_default_timezone_set('Asia/Shanghai');
$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});
$app['debug'] = true;
$app->run();