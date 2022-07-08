<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderDelivery;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderDeliveryEntity $entity)
 * @method void set(string $key, OrderDeliveryEntity $entity)
 * @method OrderDeliveryEntity[] getIterator()
 * @method OrderDeliveryEntity[] getElements()
 * @method OrderDeliveryEntity|null get(string $key)
 * @method OrderDeliveryEntity|null first()
 * @method OrderDeliveryEntity|null last()
 */
final class OrderDeliveryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderDeliveryEntity::class;
    }
}
