<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductTranslationEntity $entity)
 * @method void set(string $key, ProductTranslationEntity $entity)
 * @method ProductTranslationEntity[] getIterator()
 * @method ProductTranslationEntity[] getElements()
 * @method ProductTranslationEntity|null get(string $key)
 * @method ProductTranslationEntity|null first()
 * @method ProductTranslationEntity|null last()
 */
final class ProductTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductTranslationEntity::class;
    }
}
