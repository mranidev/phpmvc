<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register()
    {
        return true;
    }

}