<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCrossSelling;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductCrossSellingEntity $entity)
 * @method void set(string $key, ProductCrossSellingEntity $entity)
 * @method ProductCrossSellingEntity[] getIterator()
 * @method ProductCrossSellingEntity[] getElements()
 * @method ProductCrossSellingEntity|null get(string $key)
 * @method ProductCrossSellingEntity|null first()
 * @method ProductCrossSellingEntity|null last()
 */
final class ProductCrossSellingCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductCrossSellingEntity::class;
    }
}
