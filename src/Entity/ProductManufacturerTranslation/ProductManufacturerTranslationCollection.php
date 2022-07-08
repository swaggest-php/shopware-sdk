<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductManufacturerTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductManufacturerTranslationEntity $entity)
 * @method void set(string $key, ProductManufacturerTranslationEntity $entity)
 * @method ProductManufacturerTranslationEntity[] getIterator()
 * @method ProductManufacturerTranslationEntity[] getElements()
 * @method ProductManufacturerTranslationEntity|null get(string $key)
 * @method ProductManufacturerTranslationEntity|null first()
 * @method ProductManufacturerTranslationEntity|null last()
 */
final class ProductManufacturerTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductManufacturerTranslationEntity::class;
    }
}
