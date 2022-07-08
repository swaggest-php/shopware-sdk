<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerTagEntity $entity)
 * @method void set(string $key, CustomerTagEntity $entity)
 * @method CustomerTagEntity[] getIterator()
 * @method CustomerTagEntity[] getElements()
 * @method CustomerTagEntity|null get(string $key)
 * @method CustomerTagEntity|null first()
 * @method CustomerTagEntity|null last()
 */
final class CustomerTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerTagEntity::class;
    }
}
