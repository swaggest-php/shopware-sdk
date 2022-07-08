<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CategoryTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CategoryTagEntity $entity)
 * @method void set(string $key, CategoryTagEntity $entity)
 * @method CategoryTagEntity[] getIterator()
 * @method CategoryTagEntity[] getElements()
 * @method CategoryTagEntity|null get(string $key)
 * @method CategoryTagEntity|null first()
 * @method CategoryTagEntity|null last()
 */
final class CategoryTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CategoryTagEntity::class;
    }
}
