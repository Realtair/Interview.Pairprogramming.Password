<?php

namespace app;

use PHPUnit\Framework\TestCase;
use App\PasswordValidator;

class PasswordValidatorTest extends TestCase {

    public function testValidatePasswordNoNumberOrLowercaseLetter() {
        $validator = new PasswordValidator("ABCD1234");
        $this->assertEquals([
            "Password must include at least one lowercase letter",
            "Password must include at least one special character"
        ], $validator->validate());
    }
    
    public function testValidatePasswordNoNumberOrUppercaseLetter() {
        $validator = new PasswordValidator("abcd1234");
        $this->assertEquals([
            "Password must include at least one uppercase letter",
            "Password must include at least one special character"
        ], $validator->validate());
    }
    
    public function testValidatePasswordNoUppercaseLetter() {
        $validator = new PasswordValidator("abc12345");
        $this->assertEquals([
            "Password must include at least one uppercase letter",
            "Password must include at least one special character"
        ], $validator->validate());
    }
    
    public function testValidatePasswordNoLowercaseLetter() {
        $validator = new PasswordValidator("ABC12345");
        $this->assertEquals([
            "Password must include at least one lowercase letter",
            "Password must include at least one special character"
        ], $validator->validate());
    }
    
    public function testValidatePasswordTooShort() {
        $validator = new PasswordValidator("Abc12");
        $this->assertEquals([
            "Password must be at least 6 characters long",
            "Password must include at least one special character"
        ], $validator->validate());
    }
    
    public function testValidatePasswordNoSpecialCharacter() {
        $validator = new PasswordValidator("Abcdefg1234");
        $this->assertEquals([
            "Password must include at least one special character"
        ], $validator->validate());
    }
}
