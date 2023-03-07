<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema;

use Swaggest\ShopwareSdk\Schema\Flag\AbstractFlag;

trait FlagTrait
{
    private array $flags = [];

    public function addFlags(AbstractFlag ...$flags): self
    {
        foreach ($flags as $flag) {
            $this->flags[$flag::class] = $flag;
        }

        return $this;
    }

    /**
     * @return AbstractFlag[]
     */
    public function getFlags(): array
    {
        return array_values($this->flags);
    }

    public function getFlag(string $class): ?AbstractFlag
    {
        return $this->flags[$class] ?? null;
    }

    public function hasFlag(string $class): bool
    {
        return $this->getFlag($class) !== null;
    }
}
