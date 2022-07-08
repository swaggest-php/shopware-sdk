<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(EventActionSalesChannelEntity $entity)
 * @method void set(string $key, EventActionSalesChannelEntity $entity)
 * @method EventActionSalesChannelEntity[] getIterator()
 * @method EventActionSalesChannelEntity[] getElements()
 * @method EventActionSalesChannelEntity|null get(string $key)
 * @method EventActionSalesChannelEntity|null first()
 * @method EventActionSalesChannelEntity|null last()
 */
final class EventActionSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return EventActionSalesChannelEntity::class;
    }
}
