<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaTagEntity $entity)
 * @method void set(string $key, MediaTagEntity $entity)
 * @method MediaTagEntity[] getIterator()
 * @method MediaTagEntity[] getElements()
 * @method MediaTagEntity|null get(string $key)
 * @method MediaTagEntity|null first()
 * @method MediaTagEntity|null last()
 */
final class MediaTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaTagEntity::class;
    }
}
