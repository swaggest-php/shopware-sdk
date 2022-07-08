<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\IntegrationRole;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(IntegrationRoleEntity $entity)
 * @method void set(string $key, IntegrationRoleEntity $entity)
 * @method IntegrationRoleEntity[] getIterator()
 * @method IntegrationRoleEntity[] getElements()
 * @method IntegrationRoleEntity|null get(string $key)
 * @method IntegrationRoleEntity|null first()
 * @method IntegrationRoleEntity|null last()
 */
final class IntegrationRoleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return IntegrationRoleEntity::class;
    }
}
