<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelType;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelTypeEntity $entity)
 * @method void set(string $key, SalesChannelTypeEntity $entity)
 * @method SalesChannelTypeEntity[] getIterator()
 * @method SalesChannelTypeEntity[] getElements()
 * @method SalesChannelTypeEntity|null get(string $key)
 * @method SalesChannelTypeEntity|null first()
 * @method SalesChannelTypeEntity|null last()
 */
final class SalesChannelTypeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelTypeEntity::class;
    }
}
