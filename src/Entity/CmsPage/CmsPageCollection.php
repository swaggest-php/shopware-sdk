<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsPage;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CmsPageEntity $entity)
 * @method void set(string $key, CmsPageEntity $entity)
 * @method CmsPageEntity[] getIterator()
 * @method CmsPageEntity[] getElements()
 * @method CmsPageEntity|null get(string $key)
 * @method CmsPageEntity|null first()
 * @method CmsPageEntity|null last()
 */
final class CmsPageCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsPageEntity::class;
    }
}
