<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelDomain;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelDomainEntity $entity)
 * @method void set(string $key, SalesChannelDomainEntity $entity)
 * @method SalesChannelDomainEntity[] getIterator()
 * @method SalesChannelDomainEntity[] getElements()
 * @method SalesChannelDomainEntity|null get(string $key)
 * @method SalesChannelDomainEntity|null first()
 * @method SalesChannelDomainEntity|null last()
 */
final class SalesChannelDomainCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelDomainEntity::class;
    }
}
