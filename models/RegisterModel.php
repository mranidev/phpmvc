<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '' ;
    public string $password = '';
    public string $confirmPassword = '';

    public function register()
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'first_name'      => [SELF::RULE_REQUIRED],
            'last_name'       => [SELF::RULE_REQUIRED],
            'email'           => [SELF::RULE_REQUIRED, SELF::RULE_EMAIL],
            'password'        => [SELF::RULE_REQUIRED, [SELF::RULE_MIN, 'min' => 8], [SELF::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [SELF::RULE_REQUIRED, [SELF::RULE_MATCH, 'match' => 'password']],       
        ];
    }

}