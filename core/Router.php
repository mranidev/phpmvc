<?php

namespace app\core;

class Router
{
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        
        if (!$callback)
        {
            return 'Not Found';
        }
        return $this->renderContent($callback);
    }

    public function renderView($view)
    {
        ob_start();
        require_once __DIR__ . "/../views/home.php";
        return ob_get_clean();
    }

    public function renderLayout()
    {
        ob_start();
        require_once __DIR__ . "/../views/layouts/app.php";
        return ob_get_clean();
    }

    public function renderContent($view)
    {
        $contentLayout = $this->renderLayout();
        $contentView = $this->renderView($view);
        
        return str_replace('{{content}}', (string) $contentView, (string) $contentLayout);
    }
}