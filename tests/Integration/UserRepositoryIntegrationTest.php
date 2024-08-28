<?php

namespace Tests\Integration;

use App\Entity\User;
use App\Repository\UserRepository;
use App\UseCase\CreateUserUseCase;
use App\DTO\UserRequestDTO;
use PHPUnit\Framework\TestCase;

class UserRepositoryIntegrationTest extends TestCase
{
    public function testUserCanBeCreatedAndFoundById()
    {
        $userRepository = new UserRepository();
        $createUserUseCase = new CreateUserUseCase($userRepository);

        // Simula la solicitud de creación de un usuario
        $dto = new UserRequestDTO('1', 'Andres Martin', 'andresmartindoria@gmail.com', 'password123');
        $createUserUseCase->execute($dto);

        // Intenta buscar el usuario por su ID
        $savedUser = $userRepository->findById($dto->getId());

        $this->assertNotNull($savedUser); // Verifica que el usuario no sea null
        $this->assertEquals('Andres Martin', $savedUser->getName());
    }
}
