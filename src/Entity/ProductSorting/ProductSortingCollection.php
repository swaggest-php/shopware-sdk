<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSorting;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductSortingEntity $entity)
 * @method void set(string $key, ProductSortingEntity $entity)
 * @method ProductSortingEntity[] getIterator()
 * @method ProductSortingEntity[] getElements()
 * @method ProductSortingEntity|null get(string $key)
 * @method ProductSortingEntity|null first()
 * @method ProductSortingEntity|null last()
 */
final class ProductSortingCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductSortingEntity::class;
    }
}
