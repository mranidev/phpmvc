<?php

include_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\HomeController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();