<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderLineItem;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderLineItemEntity $entity)
 * @method void set(string $key, OrderLineItemEntity $entity)
 * @method OrderLineItemEntity[] getIterator()
 * @method OrderLineItemEntity[] getElements()
 * @method OrderLineItemEntity|null get(string $key)
 * @method OrderLineItemEntity|null first()
 * @method OrderLineItemEntity|null last()
 */
final class OrderLineItemCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderLineItemEntity::class;
    }
}
