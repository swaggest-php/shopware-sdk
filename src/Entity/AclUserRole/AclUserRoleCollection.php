<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AclUserRole;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AclUserRoleEntity $entity)
 * @method void set(string $key, AclUserRoleEntity $entity)
 * @method AclUserRoleEntity[] getIterator()
 * @method AclUserRoleEntity[] getElements()
 * @method AclUserRoleEntity|null get(string $key)
 * @method AclUserRoleEntity|null first()
 * @method AclUserRoleEntity|null last()
 */
final class AclUserRoleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AclUserRoleEntity::class;
    }
}
