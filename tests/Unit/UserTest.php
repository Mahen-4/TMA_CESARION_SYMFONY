<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetId()
    {
        $user = new User();
        $this->assertNull($user->getId());
    }

    public function testSetAndGetFullName()
    {
        $user = new User();
        $this->assertNull($user->getFullName());

        $user->setFullName('John Doe');
        $this->assertEquals('John Doe', $user->getFullName());
    }

    public function testGetUserIdentifier()
    {
        $user = new User();
        $user->setUsername('johndoe');
        $this->assertEquals('johndoe', $user->getUserIdentifier());
    }

    public function testGetUsername()
    {
        $user = new User();
        $user->setUsername('johndoe');
        $this->assertEquals('johndoe', $user->getUsername());
    }

    public function testSetAndGetEmail()
    {
        $user = new User();
        $this->assertNull($user->getEmail());

        $user->setEmail('john@example.com');
        $this->assertEquals('john@example.com', $user->getEmail());
    }

    public function testSetAndGetPassword()
    {
        $user = new User();
        $this->assertNull($user->getPassword());

        $user->setPassword('secret');
        $this->assertEquals('secret', $user->getPassword());
    }

    public function testGetRoles()
    {
        $user = new User();
        $this->assertEquals(['ROLE_USER'], $user->getRoles());

        $user->setRoles(['ROLE_ADMIN']);
        $this->assertEquals(['ROLE_ADMIN'], $user->getRoles());

        $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
        $this->assertEquals(['ROLE_ADMIN', 'ROLE_USER'], $user->getRoles());
    }

    public function testGetSalt()
    {
        $user = new User();
        $this->assertNull($user->getSalt());
    }

    public function testEraseCredentials()
    {
        $user = new User();
        $user->eraseCredentials();
        $this->assertNull($user->getPassword());
    }
}
