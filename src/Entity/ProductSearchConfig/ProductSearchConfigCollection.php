<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSearchConfig;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductSearchConfigEntity $entity)
 * @method void set(string $key, ProductSearchConfigEntity $entity)
 * @method ProductSearchConfigEntity[] getIterator()
 * @method ProductSearchConfigEntity[] getElements()
 * @method ProductSearchConfigEntity|null get(string $key)
 * @method ProductSearchConfigEntity|null first()
 * @method ProductSearchConfigEntity|null last()
 */
final class ProductSearchConfigCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductSearchConfigEntity::class;
    }
}
