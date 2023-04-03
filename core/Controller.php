<?php

namespace app\core;

class Controller
{
    public function render($view, $vars = [])
    {
        return Application::$app->router->renderContent($view, $vars);
    }
}