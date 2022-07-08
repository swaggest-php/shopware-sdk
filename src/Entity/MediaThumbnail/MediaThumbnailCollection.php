<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaThumbnail;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaThumbnailEntity $entity)
 * @method void set(string $key, MediaThumbnailEntity $entity)
 * @method MediaThumbnailEntity[] getIterator()
 * @method MediaThumbnailEntity[] getElements()
 * @method MediaThumbnailEntity|null get(string $key)
 * @method MediaThumbnailEntity|null first()
 * @method MediaThumbnailEntity|null last()
 */
final class MediaThumbnailCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaThumbnailEntity::class;
    }
}
