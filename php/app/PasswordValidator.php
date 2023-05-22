<?php

namespace App;

class PasswordValidator
{

    private $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function validate()
    {
        return false;
    }
}