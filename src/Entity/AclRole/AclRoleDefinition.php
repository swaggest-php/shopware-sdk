<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AclRole;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;

final class AclRoleDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'acl_role';
    }

    public function getCollectionClass(): string
    {
        return AclRoleCollection::class;
    }

    public function getEntityClass(): string
    {
        return AclRoleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('privileges', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('deletedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('users', AssociationField::MANY_TO_MANY, 'user', 'id', 'id', null, 'acl_user_role', 'userId', 'aclRoleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('app', AssociationField::ONE_TO_ONE, 'app', 'id', 'aclRoleId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('integrations', AssociationField::MANY_TO_MANY, 'integration', 'id', 'id', null, 'integration_role', 'integrationId', 'aclRoleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
