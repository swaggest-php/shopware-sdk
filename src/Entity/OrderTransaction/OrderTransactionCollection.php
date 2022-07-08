<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderTransaction;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(OrderTransactionEntity $entity)
 * @method void set(string $key, OrderTransactionEntity $entity)
 * @method OrderTransactionEntity[] getIterator()
 * @method OrderTransactionEntity[] getElements()
 * @method OrderTransactionEntity|null get(string $key)
 * @method OrderTransactionEntity|null first()
 * @method OrderTransactionEntity|null last()
 */
final class OrderTransactionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return OrderTransactionEntity::class;
    }
}
