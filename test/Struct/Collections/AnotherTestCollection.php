<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct\Collections;

use Swaggest\ShopwareSdk\Struct\Collection;
use Swaggest\ShopwareSdk\Test\Entity\Entities\HappyPersonEntity;

final class AnotherTestCollection extends Collection
{
    public function getExpectedClass(): ?string
    {
        return HappyPersonEntity::class;
    }
}
