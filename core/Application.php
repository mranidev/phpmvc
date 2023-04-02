<?php

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static string $dir;
    public static Application $app;
    
    public function __construct($dir)
    {
        self::$dir = $dir;
        $this->response = new Response;
        self::$app = $this;
        $this->request = new Request;
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        print $this->router->resolve();
    }
}