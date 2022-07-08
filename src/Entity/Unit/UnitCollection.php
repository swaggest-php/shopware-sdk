<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Unit;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(UnitEntity $entity)
 * @method void set(string $key, UnitEntity $entity)
 * @method UnitEntity[] getIterator()
 * @method UnitEntity[] getElements()
 * @method UnitEntity|null get(string $key)
 * @method UnitEntity|null first()
 * @method UnitEntity|null last()
 */
final class UnitCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return UnitEntity::class;
    }
}
