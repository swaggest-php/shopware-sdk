<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderDeliveryPosition;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderDeliveryPositionEntity $entity)
 * @method void set(string $key, OrderDeliveryPositionEntity $entity)
 * @method OrderDeliveryPositionEntity[] getIterator()
 * @method OrderDeliveryPositionEntity[] getElements()
 * @method OrderDeliveryPositionEntity|null get(string $key)
 * @method OrderDeliveryPositionEntity|null first()
 * @method OrderDeliveryPositionEntity|null last()
 */
final class OrderDeliveryPositionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderDeliveryPositionEntity::class;
    }
}
