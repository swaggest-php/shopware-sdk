<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\UserAccessKey;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(UserAccessKeyEntity $entity)
 * @method void set(string $key, UserAccessKeyEntity $entity)
 * @method UserAccessKeyEntity[] getIterator()
 * @method UserAccessKeyEntity[] getElements()
 * @method UserAccessKeyEntity|null get(string $key)
 * @method UserAccessKeyEntity|null first()
 * @method UserAccessKeyEntity|null last()
 */
final class UserAccessKeyCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return UserAccessKeyEntity::class;
    }
}
