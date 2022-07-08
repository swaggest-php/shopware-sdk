<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolderConfigurationMediaThumbnailSize;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaFolderConfigurationMediaThumbnailSizeEntity $entity)
 * @method void set(string $key, MediaFolderConfigurationMediaThumbnailSizeEntity $entity)
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity[] getIterator()
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity[] getElements()
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity|null get(string $key)
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity|null first()
 * @method MediaFolderConfigurationMediaThumbnailSizeEntity|null last()
 */
final class MediaFolderConfigurationMediaThumbnailSizeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeEntity::class;
    }
}
