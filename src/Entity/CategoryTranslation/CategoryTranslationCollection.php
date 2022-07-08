<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CategoryTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CategoryTranslationEntity $entity)
 * @method void set(string $key, CategoryTranslationEntity $entity)
 * @method CategoryTranslationEntity[] getIterator()
 * @method CategoryTranslationEntity[] getElements()
 * @method CategoryTranslationEntity|null get(string $key)
 * @method CategoryTranslationEntity|null first()
 * @method CategoryTranslationEntity|null last()
 */
final class CategoryTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CategoryTranslationEntity::class;
    }
}
