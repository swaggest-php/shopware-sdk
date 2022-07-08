<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ShippingMethodTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ShippingMethodTranslationEntity $entity)
 * @method void set(string $key, ShippingMethodTranslationEntity $entity)
 * @method ShippingMethodTranslationEntity[] getIterator()
 * @method ShippingMethodTranslationEntity[] getElements()
 * @method ShippingMethodTranslationEntity|null get(string $key)
 * @method ShippingMethodTranslationEntity|null first()
 * @method ShippingMethodTranslationEntity|null last()
 */
final class ShippingMethodTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ShippingMethodTranslationEntity::class;
    }
}
