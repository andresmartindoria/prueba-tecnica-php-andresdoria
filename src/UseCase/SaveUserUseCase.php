<?php

namespace App\UseCase;

use App\Entity\User;
use App\Repository\UserRepositoryInterface;

class SaveUserUseCase
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(string $id, string $name, string $email, string $password): void
    {
        $user = new User($id, $name, $email, $password);
        $this->userRepository->save($user);
    }
}