<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderTagEntity $entity)
 * @method void set(string $key, OrderTagEntity $entity)
 * @method OrderTagEntity[] getIterator()
 * @method OrderTagEntity[] getElements()
 * @method OrderTagEntity|null get(string $key)
 * @method OrderTagEntity|null first()
 * @method OrderTagEntity|null last()
 */
final class OrderTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderTagEntity::class;
    }
}
