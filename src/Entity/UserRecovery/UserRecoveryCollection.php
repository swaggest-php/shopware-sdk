<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\UserRecovery;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(UserRecoveryEntity $entity)
 * @method void set(string $key, UserRecoveryEntity $entity)
 * @method UserRecoveryEntity[] getIterator()
 * @method UserRecoveryEntity[] getElements()
 * @method UserRecoveryEntity|null get(string $key)
 * @method UserRecoveryEntity|null first()
 * @method UserRecoveryEntity|null last()
 */
final class UserRecoveryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return UserRecoveryEntity::class;
    }
}
