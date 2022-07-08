<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductStreamFilter;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductStreamFilterEntity $entity)
 * @method void set(string $key, ProductStreamFilterEntity $entity)
 * @method ProductStreamFilterEntity[] getIterator()
 * @method ProductStreamFilterEntity[] getElements()
 * @method ProductStreamFilterEntity|null get(string $key)
 * @method ProductStreamFilterEntity|null first()
 * @method ProductStreamFilterEntity|null last()
 */
final class ProductStreamFilterCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductStreamFilterEntity::class;
    }
}
