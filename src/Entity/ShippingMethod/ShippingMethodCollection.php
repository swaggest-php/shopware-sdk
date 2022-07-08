<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ShippingMethod;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ShippingMethodEntity $entity)
 * @method void set(string $key, ShippingMethodEntity $entity)
 * @method ShippingMethodEntity[] getIterator()
 * @method ShippingMethodEntity[] getElements()
 * @method ShippingMethodEntity|null get(string $key)
 * @method ShippingMethodEntity|null first()
 * @method ShippingMethodEntity|null last()
 */
final class ShippingMethodCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ShippingMethodEntity::class;
    }
}
