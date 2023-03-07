<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema;

/**
 * @internal
 */
final class Field extends AbstractField
{
    public function __construct(
        string $name,
        private string $type
    ) {
        parent::__construct($name);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
