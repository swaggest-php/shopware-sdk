<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MessageQueueStats;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;

;

final class MessageQueueStatsEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected int $size;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}
