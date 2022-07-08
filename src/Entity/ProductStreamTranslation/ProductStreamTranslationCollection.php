<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductStreamTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductStreamTranslationEntity $entity)
 * @method void set(string $key, ProductStreamTranslationEntity $entity)
 * @method ProductStreamTranslationEntity[] getIterator()
 * @method ProductStreamTranslationEntity[] getElements()
 * @method ProductStreamTranslationEntity|null get(string $key)
 * @method ProductStreamTranslationEntity|null first()
 * @method ProductStreamTranslationEntity|null last()
 */
final class ProductStreamTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductStreamTranslationEntity::class;
    }
}
