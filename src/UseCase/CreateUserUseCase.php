<?php

namespace App\UseCase;

use App\DTO\UserRequestDTO;
use App\Entity\User;
use App\Repository\UserRepositoryInterface;
use Ramsey\Uuid\Uuid; 

class CreateUserUseCase
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(UserRequestDTO $request): void
    {
        $id = Uuid::uuid4()->toString(); // Genera un ID único
        $user = new User('1', $request->getName(), $request->getEmail(), $request->getPassword());
        $this->userRepository->save($user);
    }
}
