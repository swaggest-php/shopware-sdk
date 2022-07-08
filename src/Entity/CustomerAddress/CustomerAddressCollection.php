<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerAddress;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerAddressEntity $entity)
 * @method void set(string $key, CustomerAddressEntity $entity)
 * @method CustomerAddressEntity[] getIterator()
 * @method CustomerAddressEntity[] getElements()
 * @method CustomerAddressEntity|null get(string $key)
 * @method CustomerAddressEntity|null first()
 * @method CustomerAddressEntity|null last()
 */
final class CustomerAddressCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerAddressEntity::class;
    }
}
