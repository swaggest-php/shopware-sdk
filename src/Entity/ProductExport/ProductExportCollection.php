<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductExport;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductExportEntity $entity)
 * @method void set(string $key, ProductExportEntity $entity)
 * @method ProductExportEntity[] getIterator()
 * @method ProductExportEntity[] getElements()
 * @method ProductExportEntity|null get(string $key)
 * @method ProductExportEntity|null first()
 * @method ProductExportEntity|null last()
 */
final class ProductExportCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductExportEntity::class;
    }
}
