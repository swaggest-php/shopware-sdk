<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSearchKeyword;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductSearchKeywordEntity $entity)
 * @method void set(string $key, ProductSearchKeywordEntity $entity)
 * @method ProductSearchKeywordEntity[] getIterator()
 * @method ProductSearchKeywordEntity[] getElements()
 * @method ProductSearchKeywordEntity|null get(string $key)
 * @method ProductSearchKeywordEntity|null first()
 * @method ProductSearchKeywordEntity|null last()
 */
final class ProductSearchKeywordCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductSearchKeywordEntity::class;
    }
}
