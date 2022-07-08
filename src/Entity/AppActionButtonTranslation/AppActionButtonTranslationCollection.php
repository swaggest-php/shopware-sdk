<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppActionButtonTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppActionButtonTranslationEntity $entity)
 * @method void set(string $key, AppActionButtonTranslationEntity $entity)
 * @method AppActionButtonTranslationEntity[] getIterator()
 * @method AppActionButtonTranslationEntity[] getElements()
 * @method AppActionButtonTranslationEntity|null get(string $key)
 * @method AppActionButtonTranslationEntity|null first()
 * @method AppActionButtonTranslationEntity|null last()
 */
final class AppActionButtonTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppActionButtonTranslationEntity::class;
    }
}
