<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSortingTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductSortingTranslationEntity $entity)
 * @method void set(string $key, ProductSortingTranslationEntity $entity)
 * @method ProductSortingTranslationEntity[] getIterator()
 * @method ProductSortingTranslationEntity[] getElements()
 * @method ProductSortingTranslationEntity|null get(string $key)
 * @method ProductSortingTranslationEntity|null first()
 * @method ProductSortingTranslationEntity|null last()
 */
final class ProductSortingTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductSortingTranslationEntity::class;
    }
}
