<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelCountry;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelCountryEntity $entity)
 * @method void set(string $key, SalesChannelCountryEntity $entity)
 * @method SalesChannelCountryEntity[] getIterator()
 * @method SalesChannelCountryEntity[] getElements()
 * @method SalesChannelCountryEntity|null get(string $key)
 * @method SalesChannelCountryEntity|null first()
 * @method SalesChannelCountryEntity|null last()
 */
final class SalesChannelCountryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelCountryEntity::class;
    }
}
