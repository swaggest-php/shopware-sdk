<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventAction;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(EventActionEntity $entity)
 * @method void set(string $key, EventActionEntity $entity)
 * @method EventActionEntity[] getIterator()
 * @method EventActionEntity[] getElements()
 * @method EventActionEntity|null get(string $key)
 * @method EventActionEntity|null first()
 * @method EventActionEntity|null last()
 */
final class EventActionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return EventActionEntity::class;
    }
}
