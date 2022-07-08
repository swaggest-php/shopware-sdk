<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsPageTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CmsPageTranslationEntity $entity)
 * @method void set(string $key, CmsPageTranslationEntity $entity)
 * @method CmsPageTranslationEntity[] getIterator()
 * @method CmsPageTranslationEntity[] getElements()
 * @method CmsPageTranslationEntity|null get(string $key)
 * @method CmsPageTranslationEntity|null first()
 * @method CmsPageTranslationEntity|null last()
 */
final class CmsPageTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsPageTranslationEntity::class;
    }
}
