<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Integration;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\Deprecated;
use Swaggest\ShopwareSdk\Schema\Flag\Extension;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;

final class IntegrationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'integration';
    }

    public function getCollectionClass(): string
    {
        return IntegrationCollection::class;
    }

    public function getEntityClass(): string
    {
        return IntegrationEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('label', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('accessKey', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('secretAccessKey', 'password'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('writeAccess', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Deprecated('v3', 'v4', null)),
            (new Field('lastUsageAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('admin', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('deletedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('app', AssociationField::ONE_TO_ONE, 'app', 'id', 'integrationId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('aclRoles', AssociationField::MANY_TO_MANY, 'acl_role', 'id', 'id', null, 'integration_role', 'aclRoleId', 'integrationId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('createdNotifications', AssociationField::ONE_TO_MANY, 'notification', 'id', 'createdByIntegrationId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Extension()),
        ];
    }
}
