<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSearchConfigField;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductSearchConfigFieldEntity $entity)
 * @method void set(string $key, ProductSearchConfigFieldEntity $entity)
 * @method ProductSearchConfigFieldEntity[] getIterator()
 * @method ProductSearchConfigFieldEntity[] getElements()
 * @method ProductSearchConfigFieldEntity|null get(string $key)
 * @method ProductSearchConfigFieldEntity|null first()
 * @method ProductSearchConfigFieldEntity|null last()
 */
final class ProductSearchConfigFieldCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductSearchConfigFieldEntity::class;
    }
}
