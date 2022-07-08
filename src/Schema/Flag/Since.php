<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\Flag;

final class Since extends AbstractFlag
{
    public function __construct(private string $version)
    {
    }

    public function getVersion(): string
    {
        return $this->version;
    }
}
