<?php

use App\Core\Application;


include '../vendor/autoload.php';

// use Jhordans\MicroFramePhp\Core\Application;


$app = new Application();

$app->router->get('/', function () {
    return 'ola mundo';
});

$app->router->get('/contact', function () {
    return "Contact";
});

$app->run();
