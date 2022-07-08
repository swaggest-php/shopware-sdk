<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppTranslationEntity $entity)
 * @method void set(string $key, AppTranslationEntity $entity)
 * @method AppTranslationEntity[] getIterator()
 * @method AppTranslationEntity[] getElements()
 * @method AppTranslationEntity|null get(string $key)
 * @method AppTranslationEntity|null first()
 * @method AppTranslationEntity|null last()
 */
final class AppTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppTranslationEntity::class;
    }
}
