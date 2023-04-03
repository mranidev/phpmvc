<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $name;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register()
    {
        return true;
    }

}