<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelCurrency;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelCurrencyEntity $entity)
 * @method void set(string $key, SalesChannelCurrencyEntity $entity)
 * @method SalesChannelCurrencyEntity[] getIterator()
 * @method SalesChannelCurrencyEntity[] getElements()
 * @method SalesChannelCurrencyEntity|null get(string $key)
 * @method SalesChannelCurrencyEntity|null first()
 * @method SalesChannelCurrencyEntity|null last()
 */
final class SalesChannelCurrencyCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelCurrencyEntity::class;
    }
}
