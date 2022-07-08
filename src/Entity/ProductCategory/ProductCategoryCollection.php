<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCategory;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductCategoryEntity $entity)
 * @method void set(string $key, ProductCategoryEntity $entity)
 * @method ProductCategoryEntity[] getIterator()
 * @method ProductCategoryEntity[] getElements()
 * @method ProductCategoryEntity|null get(string $key)
 * @method ProductCategoryEntity|null first()
 * @method ProductCategoryEntity|null last()
 */
final class ProductCategoryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductCategoryEntity::class;
    }
}
