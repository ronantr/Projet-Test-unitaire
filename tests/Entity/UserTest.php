<?php

// tests/AppBundle/Entity/UserTest.php
namespace tests\AppBundle\Entity;

use App\Entity\User as EntityUser;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testUserCreate()
    {
        $user = new EntityUser(); // Create User object.

        $user->setFirstname("firstname");
        $user->setLastname("lastname");
        $user->setBirthday("1997-10-10");
        $user->setEmail("test@gmail.com");
        $user->setPassword("12345678");
        $this->assertTrue($user->isValid());
    }
}
