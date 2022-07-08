<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsBlock;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CmsBlockEntity $entity)
 * @method void set(string $key, CmsBlockEntity $entity)
 * @method CmsBlockEntity[] getIterator()
 * @method CmsBlockEntity[] getElements()
 * @method CmsBlockEntity|null get(string $key)
 * @method CmsBlockEntity|null first()
 * @method CmsBlockEntity|null last()
 */
final class CmsBlockCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsBlockEntity::class;
    }
}
