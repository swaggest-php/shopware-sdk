<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerRecovery;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerRecoveryEntity $entity)
 * @method void set(string $key, CustomerRecoveryEntity $entity)
 * @method CustomerRecoveryEntity[] getIterator()
 * @method CustomerRecoveryEntity[] getElements()
 * @method CustomerRecoveryEntity|null get(string $key)
 * @method CustomerRecoveryEntity|null first()
 * @method CustomerRecoveryEntity|null last()
 */
final class CustomerRecoveryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerRecoveryEntity::class;
    }
}
