<?php

include_once __DIR__ . "/vendor/autoload.php";

use app\core\Application;
use app\controllers\HomeController;

$app = new Application;

$app->router->get('/', [HomeController::class, 'index']);

$app->run();