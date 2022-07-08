<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderCustomer;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderCustomerEntity $entity)
 * @method void set(string $key, OrderCustomerEntity $entity)
 * @method OrderCustomerEntity[] getIterator()
 * @method OrderCustomerEntity[] getElements()
 * @method OrderCustomerEntity|null get(string $key)
 * @method OrderCustomerEntity|null first()
 * @method OrderCustomerEntity|null last()
 */
final class OrderCustomerCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderCustomerEntity::class;
    }
}
