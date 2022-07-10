<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\IntegrationRole;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class IntegrationRoleDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'integration_role';
    }

    public function getCollectionClass(): string
    {
        return IntegrationRoleCollection::class;
    }

    public function getEntityClass(): string
    {
        return IntegrationRoleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('integrationId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('aclRoleId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('integration', AssociationField::MANY_TO_ONE, 'integration', 'integrationId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('role', AssociationField::MANY_TO_ONE, 'acl_role', 'aclRoleId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
