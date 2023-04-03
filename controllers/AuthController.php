<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->setLayout('auth');
        
        if ($request->isPost())
        {
            
            $data = $request->getBody();
            $registerModel = new RegisterModel;
            $registerModel->save($data);
            
            if ( $registerModel->validate() && $registerModel->register() )
            {
                return "Successful Registration";
            }
            return "Processing Form";
        }
        return $this->render('register');
    }
}