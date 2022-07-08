<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolder;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaFolderEntity $entity)
 * @method void set(string $key, MediaFolderEntity $entity)
 * @method MediaFolderEntity[] getIterator()
 * @method MediaFolderEntity[] getElements()
 * @method MediaFolderEntity|null get(string $key)
 * @method MediaFolderEntity|null first()
 * @method MediaFolderEntity|null last()
 */
final class MediaFolderCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaFolderEntity::class;
    }
}
