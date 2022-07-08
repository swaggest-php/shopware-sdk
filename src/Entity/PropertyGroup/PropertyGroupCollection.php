<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroup;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PropertyGroupEntity $entity)
 * @method void set(string $key, PropertyGroupEntity $entity)
 * @method PropertyGroupEntity[] getIterator()
 * @method PropertyGroupEntity[] getElements()
 * @method PropertyGroupEntity|null get(string $key)
 * @method PropertyGroupEntity|null first()
 * @method PropertyGroupEntity|null last()
 */
final class PropertyGroupCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PropertyGroupEntity::class;
    }
}
