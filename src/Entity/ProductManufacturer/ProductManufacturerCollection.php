<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductManufacturer;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductManufacturerEntity $entity)
 * @method void set(string $key, ProductManufacturerEntity $entity)
 * @method ProductManufacturerEntity[] getIterator()
 * @method ProductManufacturerEntity[] getElements()
 * @method ProductManufacturerEntity|null get(string $key)
 * @method ProductManufacturerEntity|null first()
 * @method ProductManufacturerEntity|null last()
 */
final class ProductManufacturerCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductManufacturerEntity::class;
    }
}
