<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductStream;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductStreamEntity $entity)
 * @method void set(string $key, ProductStreamEntity $entity)
 * @method ProductStreamEntity[] getIterator()
 * @method ProductStreamEntity[] getElements()
 * @method ProductStreamEntity|null get(string $key)
 * @method ProductStreamEntity|null first()
 * @method ProductStreamEntity|null last()
 */
final class ProductStreamCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductStreamEntity::class;
    }
}
