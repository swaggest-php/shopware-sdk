<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema;

final class Field
{
    use FlagTrait;

    public function __construct(
        private string $name,
        private string $type,
        private array $flags = [],
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
