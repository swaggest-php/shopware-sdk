<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductOption;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductOptionEntity $entity)
 * @method void set(string $key, ProductOptionEntity $entity)
 * @method ProductOptionEntity[] getIterator()
 * @method ProductOptionEntity[] getElements()
 * @method ProductOptionEntity|null get(string $key)
 * @method ProductOptionEntity|null first()
 * @method ProductOptionEntity|null last()
 */
final class ProductOptionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductOptionEntity::class;
    }
}
