<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppCmsBlockTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppCmsBlockTranslationEntity $entity)
 * @method void set(string $key, AppCmsBlockTranslationEntity $entity)
 * @method AppCmsBlockTranslationEntity[] getIterator()
 * @method AppCmsBlockTranslationEntity[] getElements()
 * @method AppCmsBlockTranslationEntity|null get(string $key)
 * @method AppCmsBlockTranslationEntity|null first()
 * @method AppCmsBlockTranslationEntity|null last()
 */
final class AppCmsBlockTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppCmsBlockTranslationEntity::class;
    }
}
