<?php

namespace app\core;

class Router
{
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->response = $response;
        $this->request  = $request;
    }
    
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path     = $this->request->getPath();
        $method   = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        
        if (!$callback)
        {
            $this->response->setStatusCode(404);
            return $this->renderView('_404');
        }
        
        if (is_string($callback))
        {
            return $this->renderView($callback);
        }

        if (is_array($callback))
        {
            $callback[0] = new $callback[0]();
        }
        // var_dump($callback);
        return call_user_func($callback, $this->request);
        
    }

    public function renderView($view)
    {
        ob_start();
        require_once Application::$dir . "/views/$view.php";
        return ob_get_clean();
    }

    public function renderLayout()
    {
        ob_start();
        require_once Application::$dir . "/views/layouts/app.php";
        return ob_get_clean();
    }

    public function renderContent($view)
    {
        $contentLayout = $this->renderLayout();
        $contentView   = $this->renderView($view);
        
        return str_replace('{{content}}', (string) $contentView, (string) $contentLayout);
    }
}