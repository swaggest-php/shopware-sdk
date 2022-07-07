<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Entity\Entities;

use Swaggest\ShopwareSdk\Entity\Entity;

final class ElephantEntity extends Entity
{
    protected float $earSize;

    protected string $name;

    public function getEarSize(): float
    {
        return $this->earSize;
    }

    public function setEarSize(float $earSize): void
    {
        $this->earSize = $earSize;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
