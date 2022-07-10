<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\User;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Extension;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\SetNullOnDelete;

final class UserDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'user';
    }

    public function getCollectionClass(): string
    {
        return UserCollection::class;
    }

    public function getEntityClass(): string
    {
        return UserEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('localeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('avatarId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('username', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('password', 'password'))->addFlags(new Required()),
            (new Field('firstName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('lastName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('title', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(250.000000)),
            (new Field('email', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('admin', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('lastUpdatedPasswordAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('timeZone', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('locale', AssociationField::MANY_TO_ONE, 'locale', 'localeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('avatarMedia', AssociationField::ONE_TO_ONE, 'media', 'avatarId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('media', AssociationField::ONE_TO_MANY, 'media', 'id', 'userId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('accessKeys', AssociationField::ONE_TO_MANY, 'user_access_key', 'id', 'userId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('configs', AssociationField::ONE_TO_MANY, 'user_config', 'id', 'userId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('stateMachineHistoryEntries', AssociationField::ONE_TO_MANY, 'state_machine_history', 'id', 'userId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('importExportLogEntries', AssociationField::ONE_TO_MANY, 'import_export_log', 'id', 'userId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('aclRoles', AssociationField::MANY_TO_MANY, 'acl_role', 'id', 'id', null, 'acl_user_role', 'aclRoleId', 'userId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('recoveryUser', AssociationField::ONE_TO_ONE, 'user_recovery', 'id', 'userId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('storeToken', 'string'))->addFlags(),
            (new AssociationField('createdOrders', AssociationField::ONE_TO_MANY, 'order', 'id', 'createdById', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('updatedOrders', AssociationField::ONE_TO_MANY, 'order', 'id', 'updatedById', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('createdNotifications', AssociationField::ONE_TO_MANY, 'notification', 'id', 'createdByUserId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Extension()),
        ];
    }
}
