<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\UserConfig;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(UserConfigEntity $entity)
 * @method void set(string $key, UserConfigEntity $entity)
 * @method UserConfigEntity[] getIterator()
 * @method UserConfigEntity[] getElements()
 * @method UserConfigEntity|null get(string $key)
 * @method UserConfigEntity|null first()
 * @method UserConfigEntity|null last()
 */
final class UserConfigCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return UserConfigEntity::class;
    }
}
