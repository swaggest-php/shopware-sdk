<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\VersionCommitData;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(VersionCommitDataEntity $entity)
 * @method void set(string $key, VersionCommitDataEntity $entity)
 * @method VersionCommitDataEntity[] getIterator()
 * @method VersionCommitDataEntity[] getElements()
 * @method VersionCommitDataEntity|null get(string $key)
 * @method VersionCommitDataEntity|null first()
 * @method VersionCommitDataEntity|null last()
 */
final class VersionCommitDataCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return VersionCommitDataEntity::class;
    }
}
