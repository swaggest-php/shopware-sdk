<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LocaleTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LocaleTranslationEntity $entity)
 * @method void set(string $key, LocaleTranslationEntity $entity)
 * @method LocaleTranslationEntity[] getIterator()
 * @method LocaleTranslationEntity[] getElements()
 * @method LocaleTranslationEntity|null get(string $key)
 * @method LocaleTranslationEntity|null first()
 * @method LocaleTranslationEntity|null last()
 */
final class LocaleTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LocaleTranslationEntity::class;
    }
}
