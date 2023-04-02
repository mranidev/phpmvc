<?php

namespace app\core;

class Controller
{
    public function render($view)
    {
        return Application::$app->router->renderContent($view);
    }
}