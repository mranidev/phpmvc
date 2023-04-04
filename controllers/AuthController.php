<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function register(Request $request)
    {   
        $errors = [];     
        $registerModel = new RegisterModel;
        $data = $request->getBody();
        $registerModel->save($data);
        if ($request->isPost())
        {
            
            
            if ( $registerModel->validate() && $registerModel->register() )
            {
                return "Successful Registration";
            }
            
            // print '<pre>';
            // var_dump($registerModel->errors);
            // print '</pre>';
            
            $this->setLayout('auth');
            return $this->render('register', [
                "model" => $registerModel
            ]);

        }
        $this->setLayout('auth');
        return $this->render('register', [
            "model" => $registerModel
        ]);
    }
}