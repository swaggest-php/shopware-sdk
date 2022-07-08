<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelShippingMethod;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelShippingMethodEntity $entity)
 * @method void set(string $key, SalesChannelShippingMethodEntity $entity)
 * @method SalesChannelShippingMethodEntity[] getIterator()
 * @method SalesChannelShippingMethodEntity[] getElements()
 * @method SalesChannelShippingMethodEntity|null get(string $key)
 * @method SalesChannelShippingMethodEntity|null first()
 * @method SalesChannelShippingMethodEntity|null last()
 */
final class SalesChannelShippingMethodCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelShippingMethodEntity::class;
    }
}
