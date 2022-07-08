<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ScheduledTask;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ScheduledTaskEntity $entity)
 * @method void set(string $key, ScheduledTaskEntity $entity)
 * @method ScheduledTaskEntity[] getIterator()
 * @method ScheduledTaskEntity[] getElements()
 * @method ScheduledTaskEntity|null get(string $key)
 * @method ScheduledTaskEntity|null first()
 * @method ScheduledTaskEntity|null last()
 */
final class ScheduledTaskCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ScheduledTaskEntity::class;
    }
}
