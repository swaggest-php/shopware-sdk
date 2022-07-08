<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Version;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(VersionEntity $entity)
 * @method void set(string $key, VersionEntity $entity)
 * @method VersionEntity[] getIterator()
 * @method VersionEntity[] getElements()
 * @method VersionEntity|null get(string $key)
 * @method VersionEntity|null first()
 * @method VersionEntity|null last()
 */
final class VersionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return VersionEntity::class;
    }
}
