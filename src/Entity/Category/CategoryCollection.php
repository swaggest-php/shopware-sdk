<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Category;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CategoryEntity $entity)
 * @method void set(string $key, CategoryEntity $entity)
 * @method CategoryEntity[] getIterator()
 * @method CategoryEntity[] getElements()
 * @method CategoryEntity|null get(string $key)
 * @method CategoryEntity|null first()
 * @method CategoryEntity|null last()
 */
final class CategoryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CategoryEntity::class;
    }
}
