<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ThemeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ThemeTranslationEntity $entity)
 * @method void set(string $key, ThemeTranslationEntity $entity)
 * @method ThemeTranslationEntity[] getIterator()
 * @method ThemeTranslationEntity[] getElements()
 * @method ThemeTranslationEntity|null get(string $key)
 * @method ThemeTranslationEntity|null first()
 * @method ThemeTranslationEntity|null last()
 */
final class ThemeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ThemeTranslationEntity::class;
    }
}
