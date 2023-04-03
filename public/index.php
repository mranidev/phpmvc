<?php

include_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;
use app\controllers\HomeController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/contact', [HomeController::class, 'contact']);
$app->router->post('/contact', [HomeController::class, 'contact']);


$app->run();