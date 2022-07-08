<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductProperty;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductPropertyEntity $entity)
 * @method void set(string $key, ProductPropertyEntity $entity)
 * @method ProductPropertyEntity[] getIterator()
 * @method ProductPropertyEntity[] getElements()
 * @method ProductPropertyEntity|null get(string $key)
 * @method ProductPropertyEntity|null first()
 * @method ProductPropertyEntity|null last()
 */
final class ProductPropertyCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductPropertyEntity::class;
    }
}
