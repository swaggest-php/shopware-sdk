<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\Flag;

final class ReversedInherited extends AbstractFlag
{
    public function __construct(private string $propertyName)
    {
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
}
