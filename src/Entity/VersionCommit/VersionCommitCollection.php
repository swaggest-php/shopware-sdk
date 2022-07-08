<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\VersionCommit;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(VersionCommitEntity $entity)
 * @method void set(string $key, VersionCommitEntity $entity)
 * @method VersionCommitEntity[] getIterator()
 * @method VersionCommitEntity[] getElements()
 * @method VersionCommitEntity|null get(string $key)
 * @method VersionCommitEntity|null first()
 * @method VersionCommitEntity|null last()
 */
final class VersionCommitCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return VersionCommitEntity::class;
    }
}
