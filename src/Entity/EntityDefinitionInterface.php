<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity;

interface EntityDefinitionInterface
{
    public function getEntityName(): string;

    public function getCollectionClass(): string;

    public function getEntityClass(): string;

    public function defineFields(): array;
}
