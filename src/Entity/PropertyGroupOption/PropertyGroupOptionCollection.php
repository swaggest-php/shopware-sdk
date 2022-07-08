<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroupOption;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PropertyGroupOptionEntity $entity)
 * @method void set(string $key, PropertyGroupOptionEntity $entity)
 * @method PropertyGroupOptionEntity[] getIterator()
 * @method PropertyGroupOptionEntity[] getElements()
 * @method PropertyGroupOptionEntity|null get(string $key)
 * @method PropertyGroupOptionEntity|null first()
 * @method PropertyGroupOptionEntity|null last()
 */
final class PropertyGroupOptionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PropertyGroupOptionEntity::class;
    }
}
