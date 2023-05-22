<?php

namespace app;

use PHPUnit\Framework\TestCase;
use App\PasswordValidator;

class PasswordValidatorTest extends TestCase
{

    public function testValidPassword()
    {
        $validator = new PasswordValidator("P@ssw0rd");
        $this->assertEquals(true, $validator->validate());
    }
}