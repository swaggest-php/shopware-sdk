<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductFeatureSet;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductFeatureSetEntity $entity)
 * @method void set(string $key, ProductFeatureSetEntity $entity)
 * @method ProductFeatureSetEntity[] getIterator()
 * @method ProductFeatureSetEntity[] getElements()
 * @method ProductFeatureSetEntity|null get(string $key)
 * @method ProductFeatureSetEntity|null first()
 * @method ProductFeatureSetEntity|null last()
 */
final class ProductFeatureSetCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductFeatureSetEntity::class;
    }
}
