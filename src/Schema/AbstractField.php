<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema;

/**
 * @internal
 */
abstract class AbstractField
{
    use FlagTrait;

    public function __construct(protected string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
