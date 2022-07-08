<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelEntity $entity)
 * @method void set(string $key, SalesChannelEntity $entity)
 * @method SalesChannelEntity[] getIterator()
 * @method SalesChannelEntity[] getElements()
 * @method SalesChannelEntity|null get(string $key)
 * @method SalesChannelEntity|null first()
 * @method SalesChannelEntity|null last()
 */
final class SalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelEntity::class;
    }
}
