<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AclRole;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AclRoleEntity $entity)
 * @method void set(string $key, AclRoleEntity $entity)
 * @method AclRoleEntity[] getIterator()
 * @method AclRoleEntity[] getElements()
 * @method AclRoleEntity|null get(string $key)
 * @method AclRoleEntity|null first()
 * @method AclRoleEntity|null last()
 */
final class AclRoleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AclRoleEntity::class;
    }
}
