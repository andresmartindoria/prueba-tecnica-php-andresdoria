<?php

namespace Tests\UseCase;

use App\DTO\UserRequestDTO;
use App\Entity\User;
use App\Repository\UserRepositoryInterface;
use App\UseCase\CreateUserUseCase;
use PHPUnit\Framework\TestCase;

class CreateUserUseCaseTest extends TestCase
{
    public function testExecuteCreatesUserSuccessfully()
    {
        $userRepository = $this->createMock(UserRepositoryInterface::class);
        $userRepository->expects($this->once())
                       ->method('save')
                       ->with($this->isInstanceOf(User::class));

        $dto = new UserRequestDTO('1', 'Andres Martin', 'andresmartindoria@gmail.com', 'password123');
        $useCase = new CreateUserUseCase($userRepository);

        $useCase->execute($dto);
    }
}
