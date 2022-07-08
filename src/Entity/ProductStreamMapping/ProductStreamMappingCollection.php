<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductStreamMapping;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductStreamMappingEntity $entity)
 * @method void set(string $key, ProductStreamMappingEntity $entity)
 * @method ProductStreamMappingEntity[] getIterator()
 * @method ProductStreamMappingEntity[] getElements()
 * @method ProductStreamMappingEntity|null get(string $key)
 * @method ProductStreamMappingEntity|null first()
 * @method ProductStreamMappingEntity|null last()
 */
final class ProductStreamMappingCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductStreamMappingEntity::class;
    }
}
