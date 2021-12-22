<?php

// tests/AppBundle/Entity/UserTest.php
namespace tests\AppBundle\Entity;

use App\Entity\User as EntityUser;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class UserTest extends TestCase
{

    private EntityUser $user;

    protected function setUp(): void
    {
        $this->user = new EntityUser(); // Create User object.

        $this->user->setFirstname("firstname");
        $this->user->setLastname("lastname");
        $this->user->setBirthday(Carbon::now()->subYears(20));
        $this->user->setEmail("test@gmail.com");
        $this->user->setPassword("12345678");
        parent::setUp();
    }

    public function testValidUser()
    {
        $this->assertTrue($this->user->isValid());
    }

    public function testEmptyEmail()
    {
        $this->user->setEmail("");

        $this->assertFalse($this->user->isValid());
    }

    public function testInvalidEmailFormat()
    {
        $this->user->setEmail("testgmail.com");
        $this->assertFalse($this->user->isValid());
    }

    public function testEmptyFirstname()
    {
        $this->user->setFirstname("");
        $this->assertFalse($this->user->isValid());
    }
    public function testEmptyLastname()
    {
        $this->user->setLastname("");
        $this->assertFalse($this->user->isValid());
    }
    public function testEmptyPassword()
    {
        $this->user->setPassword("");
        $this->assertFalse($this->user->isValid());
    }

    public function testShortPassword()
    {
        $this->user->setPassword("1234567");
        $this->assertFalse($this->user->isValid());
    }
    public function testLongPassword()
    {
        //password length 41
        $this->user->setPassword("3lfFGf3OQIaRfmDFfQMJ2RzmmpC7d5B6eGzKJqmnX");
        $this->assertFalse($this->user->isValid());
    }

    public function testAgeTooYoung()
    {
        $this->user->setBirthday(Carbon::now()->subDecade());
        $this->assertFalse($this->user->isValid());
    }
}
