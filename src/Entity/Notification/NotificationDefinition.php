<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Notification;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class NotificationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'notification';
    }

    public function getCollectionClass(): string
    {
        return NotificationCollection::class;
    }

    public function getEntityClass(): string
    {
        return NotificationEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('status', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('message', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('adminOnly', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('requiredPrivileges', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdByIntegrationId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdByUserId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('createdByIntegration', AssociationField::MANY_TO_ONE, 'integration', 'createdByIntegrationId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('createdByUser', AssociationField::MANY_TO_ONE, 'user', 'createdByUserId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
