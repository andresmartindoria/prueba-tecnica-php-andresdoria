<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository implements UserRepositoryInterface
{
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }

    public function update(User $user): void
    {
        if (!isset($this->users[$user->getId()])) {
            throw new \Exception('User not found');
        }

        $this->users[$user->getId()] = $user;
    }

    public function delete(string $id): void
    {
        if (!isset($this->users[$id])) {
            throw new \Exception('User not found');
        }

        unset($this->users[$id]);
    }

    public function findById(string $id): ?User
    {
        return $this->users[$id] ?? null;
    }
}
