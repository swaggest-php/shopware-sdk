<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsSection;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CmsSectionEntity $entity)
 * @method void set(string $key, CmsSectionEntity $entity)
 * @method CmsSectionEntity[] getIterator()
 * @method CmsSectionEntity[] getElements()
 * @method CmsSectionEntity|null get(string $key)
 * @method CmsSectionEntity|null first()
 * @method CmsSectionEntity|null last()
 */
final class CmsSectionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsSectionEntity::class;
    }
}
