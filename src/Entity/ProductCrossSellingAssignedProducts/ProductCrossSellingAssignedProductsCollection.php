<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCrossSellingAssignedProducts;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductCrossSellingAssignedProductsEntity $entity)
 * @method void set(string $key, ProductCrossSellingAssignedProductsEntity $entity)
 * @method ProductCrossSellingAssignedProductsEntity[] getIterator()
 * @method ProductCrossSellingAssignedProductsEntity[] getElements()
 * @method ProductCrossSellingAssignedProductsEntity|null get(string $key)
 * @method ProductCrossSellingAssignedProductsEntity|null first()
 * @method ProductCrossSellingAssignedProductsEntity|null last()
 */
final class ProductCrossSellingAssignedProductsCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductCrossSellingAssignedProductsEntity::class;
    }
}
