<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsSlotTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CmsSlotTranslationEntity $entity)
 * @method void set(string $key, CmsSlotTranslationEntity $entity)
 * @method CmsSlotTranslationEntity[] getIterator()
 * @method CmsSlotTranslationEntity[] getElements()
 * @method CmsSlotTranslationEntity|null get(string $key)
 * @method CmsSlotTranslationEntity|null first()
 * @method CmsSlotTranslationEntity|null last()
 */
final class CmsSlotTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsSlotTranslationEntity::class;
    }
}
