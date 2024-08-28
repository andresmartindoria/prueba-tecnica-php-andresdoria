<?php

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase
{
    public function testUserCanBeCreated(): void
    {
        $user = new User('1', 'Andres Martin', 'andresmartindorira@gmail.com', 'password123');

        $this->assertEquals('1', $user->getId());
        $this->assertEquals('Andres Martin', $user->getName());
        $this->assertEquals('andresmartindorira@gmail.com', $user->getEmail());
        $this->assertTrue(password_verify('password123', $user->getPassword()));
    }

    public function testUserNameCanBeUpdated(): void
    {
        $user = new User('1', 'Andres Martin', 'andresmartindorira@gmail.com', 'password123');
        $user->setName('Andres Martin');

        $this->assertEquals('Andres Martin', $user->getName());
    }
}