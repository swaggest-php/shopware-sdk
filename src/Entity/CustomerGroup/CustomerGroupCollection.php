<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroup;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerGroupEntity $entity)
 * @method void set(string $key, CustomerGroupEntity $entity)
 * @method CustomerGroupEntity[] getIterator()
 * @method CustomerGroupEntity[] getElements()
 * @method CustomerGroupEntity|null get(string $key)
 * @method CustomerGroupEntity|null first()
 * @method CustomerGroupEntity|null last()
 */
final class CustomerGroupCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerGroupEntity::class;
    }
}
