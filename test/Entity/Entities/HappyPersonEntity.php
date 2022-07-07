<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Entity\Entities;

use Swaggest\ShopwareSdk\Entity\Entity;

final class HappyPersonEntity extends Entity
{
    protected string $happyLevel;

    protected int $age;

    public function getHappyLevel(): string
    {
        return $this->happyLevel;
    }

    public function setHappyLevel(string $happyLevel): void
    {
        $this->happyLevel = $happyLevel;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}
