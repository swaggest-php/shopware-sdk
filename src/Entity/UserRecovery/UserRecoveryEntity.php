<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\UserRecovery;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class UserRecoveryEntity extends Entity
{
    protected string $hash;

    protected string $userId;

    protected ?UserEntity $user;

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getUser(): ?UserEntity
    {
        return $this->user;
    }

    public function setUser(?UserEntity $user): void
    {
        $this->user = $user;
    }
}
