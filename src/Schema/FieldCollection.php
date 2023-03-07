<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema;

use Swaggest\ShopwareSdk\Struct\Collection;

final class FieldCollection extends Collection
{
    public function getExpectedClass(): ?string
    {
        return AbstractField::class;
    }
}
