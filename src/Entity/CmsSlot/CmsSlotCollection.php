<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsSlot;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CmsSlotEntity $entity)
 * @method void set(string $key, CmsSlotEntity $entity)
 * @method CmsSlotEntity[] getIterator()
 * @method CmsSlotEntity[] getElements()
 * @method CmsSlotEntity|null get(string $key)
 * @method CmsSlotEntity|null first()
 * @method CmsSlotEntity|null last()
 */
final class CmsSlotCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsSlotEntity::class;
    }
}
