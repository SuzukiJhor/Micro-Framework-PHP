<?php

include '../vendor/autoload.php';
include '../src/Functions/functions.php';
include '../src/Views/contact.php';

use App\Core\Application;


$app = new Application();

$app->router->get('/', function () {
    return 'ola mundo';
});

$app->router->get('/contact', 'contact');

$app->router->get('/user', function () {
    return 'ola user';
});

$app->run();
