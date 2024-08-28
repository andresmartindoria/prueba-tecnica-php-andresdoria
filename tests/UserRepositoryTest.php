<?php

use PHPUnit\Framework\TestCase;
use App\Entity\User;
use App\Repository\UserRepository;

class UserRepositoryTest extends TestCase
{
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->userRepository = new UserRepository();
    }

    public function testUserCanBeSaved(): void
    {
        $user = new User('1', 'Andres Martin', 'andresmartindorira@gmail.com', 'password123');
        $this->userRepository->save($user);

        $this->assertEquals($user, $this->userRepository->findById('1'));
    }

    public function testUserCanBeDeleted(): void
    {
        $user = new User('1', 'Andres Martin', 'andresmartindorira@gmail.com', 'password123');
        $this->userRepository->save($user);
        $this->userRepository->delete('1');

        $this->assertNull($this->userRepository->findById('1'));
    }
}