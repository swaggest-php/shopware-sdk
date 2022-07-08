<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCategoryTree;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductCategoryTreeEntity $entity)
 * @method void set(string $key, ProductCategoryTreeEntity $entity)
 * @method ProductCategoryTreeEntity[] getIterator()
 * @method ProductCategoryTreeEntity[] getElements()
 * @method ProductCategoryTreeEntity|null get(string $key)
 * @method ProductCategoryTreeEntity|null first()
 * @method ProductCategoryTreeEntity|null last()
 */
final class ProductCategoryTreeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductCategoryTreeEntity::class;
    }
}
