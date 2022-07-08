<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderAddress;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderAddressEntity $entity)
 * @method void set(string $key, OrderAddressEntity $entity)
 * @method OrderAddressEntity[] getIterator()
 * @method OrderAddressEntity[] getElements()
 * @method OrderAddressEntity|null get(string $key)
 * @method OrderAddressEntity|null first()
 * @method OrderAddressEntity|null last()
 */
final class OrderAddressCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderAddressEntity::class;
    }
}
