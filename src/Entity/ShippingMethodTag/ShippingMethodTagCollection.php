<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ShippingMethodTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ShippingMethodTagEntity $entity)
 * @method void set(string $key, ShippingMethodTagEntity $entity)
 * @method ShippingMethodTagEntity[] getIterator()
 * @method ShippingMethodTagEntity[] getElements()
 * @method ShippingMethodTagEntity|null get(string $key)
 * @method ShippingMethodTagEntity|null first()
 * @method ShippingMethodTagEntity|null last()
 */
final class ShippingMethodTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ShippingMethodTagEntity::class;
    }
}
