<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportLog;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class ImportExportLogDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'import_export_log';
    }

    public function getCollectionClass(): string
    {
        return ImportExportLogCollection::class;
    }

    public function getEntityClass(): string
    {
        return ImportExportLogEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('activity', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('state', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('records', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('userId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('profileId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('fileId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('invalidRecordsLogId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('username', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('profileName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('config', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('result', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('user', AssociationField::MANY_TO_ONE, 'user', 'userId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('profile', AssociationField::MANY_TO_ONE, 'import_export_profile', 'profileId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('file', AssociationField::ONE_TO_ONE, 'import_export_file', 'fileId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('invalidRecordsLog', AssociationField::ONE_TO_ONE, 'import_export_log', 'invalidRecordsLogId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('failedImportLog', AssociationField::ONE_TO_ONE, 'import_export_log', 'id', 'invalidRecordsLogId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
