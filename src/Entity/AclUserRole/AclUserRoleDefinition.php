<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AclUserRole;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class AclUserRoleDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'acl_user_role';
    }

    public function getCollectionClass(): string
    {
        return AclUserRoleCollection::class;
    }

    public function getEntityClass(): string
    {
        return AclUserRoleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('userId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('aclRoleId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('user', AssociationField::MANY_TO_ONE, 'user', 'userId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('aclRole', AssociationField::MANY_TO_ONE, 'acl_role', 'aclRoleId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
