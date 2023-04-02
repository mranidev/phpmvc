<?php

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    
    public function __construct()
    {
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