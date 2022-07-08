<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Order;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderEntity $entity)
 * @method void set(string $key, OrderEntity $entity)
 * @method OrderEntity[] getIterator()
 * @method OrderEntity[] getElements()
 * @method OrderEntity|null get(string $key)
 * @method OrderEntity|null first()
 * @method OrderEntity|null last()
 */
final class OrderCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderEntity::class;
    }
}
