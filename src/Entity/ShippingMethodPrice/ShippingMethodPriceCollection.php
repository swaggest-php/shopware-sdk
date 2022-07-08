<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ShippingMethodPrice;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ShippingMethodPriceEntity $entity)
 * @method void set(string $key, ShippingMethodPriceEntity $entity)
 * @method ShippingMethodPriceEntity[] getIterator()
 * @method ShippingMethodPriceEntity[] getElements()
 * @method ShippingMethodPriceEntity|null get(string $key)
 * @method ShippingMethodPriceEntity|null first()
 * @method ShippingMethodPriceEntity|null last()
 */
final class ShippingMethodPriceCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ShippingMethodPriceEntity::class;
    }
}
