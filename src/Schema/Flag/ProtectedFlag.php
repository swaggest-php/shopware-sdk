<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\Flag;

abstract class ProtectedFlag extends AbstractFlag
{
    public const ADMIN_API = 0;

    public const SALES_CHANNEL_API = 1;

    public const SYSTEM = 2;

    public function __construct(private array $scopes)
    {
    }

    final public function getScopes(): array
    {
        return $this->scopes;
    }
}
