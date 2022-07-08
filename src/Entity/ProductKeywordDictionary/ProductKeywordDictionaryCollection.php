<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductKeywordDictionary;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductKeywordDictionaryEntity $entity)
 * @method void set(string $key, ProductKeywordDictionaryEntity $entity)
 * @method ProductKeywordDictionaryEntity[] getIterator()
 * @method ProductKeywordDictionaryEntity[] getElements()
 * @method ProductKeywordDictionaryEntity|null get(string $key)
 * @method ProductKeywordDictionaryEntity|null first()
 * @method ProductKeywordDictionaryEntity|null last()
 */
final class ProductKeywordDictionaryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductKeywordDictionaryEntity::class;
    }
}
