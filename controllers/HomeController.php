<?php

namespace app\controllers;

use app\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $vars = 
        [
            "title" => "Welcome to MVC From Scratch",
            "about" => "This is a simple php mvc from scratch for learning purposes",
        ];
        return $this->render('home', $vars);
    }
}