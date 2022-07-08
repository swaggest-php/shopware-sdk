<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity;

trait EntityIdTrait
{
    protected string $id;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}
