<?php

include '../vendor/autoload.php';
include '../src/Functions/functions.php';

use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->router->get('/about', 'about');

$app->run();
