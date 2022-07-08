<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\User;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(UserEntity $entity)
 * @method void set(string $key, UserEntity $entity)
 * @method UserEntity[] getIterator()
 * @method UserEntity[] getElements()
 * @method UserEntity|null get(string $key)
 * @method UserEntity|null first()
 * @method UserEntity|null last()
 */
final class UserCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return UserEntity::class;
    }
}
