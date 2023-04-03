<?php

namespace app\controllers;

use app\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $vars = 
        [
            "title" => "Welcome to MVC From Scratch"
        ];
        return $this->render('home', $vars);
    }
}