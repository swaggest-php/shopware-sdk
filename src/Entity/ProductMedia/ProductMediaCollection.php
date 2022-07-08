<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductMedia;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductMediaEntity $entity)
 * @method void set(string $key, ProductMediaEntity $entity)
 * @method ProductMediaEntity[] getIterator()
 * @method ProductMediaEntity[] getElements()
 * @method ProductMediaEntity|null get(string $key)
 * @method ProductMediaEntity|null first()
 * @method ProductMediaEntity|null last()
 */
final class ProductMediaCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductMediaEntity::class;
    }
}
