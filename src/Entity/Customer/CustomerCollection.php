<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Customer;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerEntity $entity)
 * @method void set(string $key, CustomerEntity $entity)
 * @method CustomerEntity[] getIterator()
 * @method CustomerEntity[] getElements()
 * @method CustomerEntity|null get(string $key)
 * @method CustomerEntity|null first()
 * @method CustomerEntity|null last()
 */
final class CustomerCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerEntity::class;
    }
}
