<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCrossSellingTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductCrossSellingTranslationEntity $entity)
 * @method void set(string $key, ProductCrossSellingTranslationEntity $entity)
 * @method ProductCrossSellingTranslationEntity[] getIterator()
 * @method ProductCrossSellingTranslationEntity[] getElements()
 * @method ProductCrossSellingTranslationEntity|null get(string $key)
 * @method ProductCrossSellingTranslationEntity|null first()
 * @method ProductCrossSellingTranslationEntity|null last()
 */
final class ProductCrossSellingTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductCrossSellingTranslationEntity::class;
    }
}
