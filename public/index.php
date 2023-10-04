<?php 
include '../vendor/autoload.php';

use App\Core\Application;

include '../src/Core/Application.php';

$app = new Application();
var_dump($app);


// $app->router->get('/', fn() => return "ola mundo";);

// $app->router->get('/contact', fn() => return "Contact";);

// $app->run();

// var_dump('ola');