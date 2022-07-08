<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SystemConfig;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SystemConfigEntity $entity)
 * @method void set(string $key, SystemConfigEntity $entity)
 * @method SystemConfigEntity[] getIterator()
 * @method SystemConfigEntity[] getElements()
 * @method SystemConfigEntity|null get(string $key)
 * @method SystemConfigEntity|null first()
 * @method SystemConfigEntity|null last()
 */
final class SystemConfigCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SystemConfigEntity::class;
    }
}
