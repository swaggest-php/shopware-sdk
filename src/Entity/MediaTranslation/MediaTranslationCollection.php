<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaTranslationEntity $entity)
 * @method void set(string $key, MediaTranslationEntity $entity)
 * @method MediaTranslationEntity[] getIterator()
 * @method MediaTranslationEntity[] getElements()
 * @method MediaTranslationEntity|null get(string $key)
 * @method MediaTranslationEntity|null first()
 * @method MediaTranslationEntity|null last()
 */
final class MediaTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaTranslationEntity::class;
    }
}
