<?php

namespace App;

class PasswordValidator {

    private $password;

    public function __construct($password) {
        $this->password = $password;
    }

    /**
     * This function takes a string password and validates it against a set of validation rules.
     *
     * Validation rule messages:
     *  - Password must be at least 6 characters long
     *  - Password must include at least one number
     *  - Password must include at least one uppercase letter
     *  - Password must include at least one lowercase letter
     *  - Password must include at least one special character
     *
     * @return array An array of error messages for any validation rule that the password does not meet.
     */
    public function validate() {
        $errors = [];
        
        return $errors;
    }
}
