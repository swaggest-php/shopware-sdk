<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaThumbnailSize;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaThumbnailSizeEntity $entity)
 * @method void set(string $key, MediaThumbnailSizeEntity $entity)
 * @method MediaThumbnailSizeEntity[] getIterator()
 * @method MediaThumbnailSizeEntity[] getElements()
 * @method MediaThumbnailSizeEntity|null get(string $key)
 * @method MediaThumbnailSizeEntity|null first()
 * @method MediaThumbnailSizeEntity|null last()
 */
final class MediaThumbnailSizeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaThumbnailSizeEntity::class;
    }
}
