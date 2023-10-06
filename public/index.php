<?php

include '../vendor/autoload.php';
include '../src/Functions/functions.php';

use App\Core\Application;

$app = new Application();

$app->router->get('/home', 'home');

$app->router->get('/contact', 'contact');

$app->router->get('/user', function () {
    return 'ola user';
});

$app->run();
