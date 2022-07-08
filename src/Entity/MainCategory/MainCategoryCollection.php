<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MainCategory;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MainCategoryEntity $entity)
 * @method void set(string $key, MainCategoryEntity $entity)
 * @method MainCategoryEntity[] getIterator()
 * @method MainCategoryEntity[] getElements()
 * @method MainCategoryEntity|null get(string $key)
 * @method MainCategoryEntity|null first()
 * @method MainCategoryEntity|null last()
 */
final class MainCategoryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MainCategoryEntity::class;
    }
}
