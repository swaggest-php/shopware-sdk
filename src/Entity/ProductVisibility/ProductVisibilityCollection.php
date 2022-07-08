<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductVisibility;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductVisibilityEntity $entity)
 * @method void set(string $key, ProductVisibilityEntity $entity)
 * @method ProductVisibilityEntity[] getIterator()
 * @method ProductVisibilityEntity[] getElements()
 * @method ProductVisibilityEntity|null get(string $key)
 * @method ProductVisibilityEntity|null first()
 * @method ProductVisibilityEntity|null last()
 */
final class ProductVisibilityCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductVisibilityEntity::class;
    }
}
