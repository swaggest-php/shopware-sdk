<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Media;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MediaEntity $entity)
 * @method void set(string $key, MediaEntity $entity)
 * @method MediaEntity[] getIterator()
 * @method MediaEntity[] getElements()
 * @method MediaEntity|null get(string $key)
 * @method MediaEntity|null first()
 * @method MediaEntity|null last()
 */
final class MediaCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MediaEntity::class;
    }
}
