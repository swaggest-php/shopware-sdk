<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeadMessage;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DeadMessageEntity $entity)
 * @method void set(string $key, DeadMessageEntity $entity)
 * @method DeadMessageEntity[] getIterator()
 * @method DeadMessageEntity[] getElements()
 * @method DeadMessageEntity|null get(string $key)
 * @method DeadMessageEntity|null first()
 * @method DeadMessageEntity|null last()
 */
final class DeadMessageCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DeadMessageEntity::class;
    }
}
