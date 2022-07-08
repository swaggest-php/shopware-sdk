<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductTagEntity $entity)
 * @method void set(string $key, ProductTagEntity $entity)
 * @method ProductTagEntity[] getIterator()
 * @method ProductTagEntity[] getElements()
 * @method ProductTagEntity|null get(string $key)
 * @method ProductTagEntity|null first()
 * @method ProductTagEntity|null last()
 */
final class ProductTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductTagEntity::class;
    }
}
