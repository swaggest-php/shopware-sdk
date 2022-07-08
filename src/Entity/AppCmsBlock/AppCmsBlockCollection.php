<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppCmsBlock;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppCmsBlockEntity $entity)
 * @method void set(string $key, AppCmsBlockEntity $entity)
 * @method AppCmsBlockEntity[] getIterator()
 * @method AppCmsBlockEntity[] getElements()
 * @method AppCmsBlockEntity|null get(string $key)
 * @method AppCmsBlockEntity|null first()
 * @method AppCmsBlockEntity|null last()
 */
final class AppCmsBlockCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppCmsBlockEntity::class;
    }
}
