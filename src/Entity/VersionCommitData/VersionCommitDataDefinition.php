<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\VersionCommitData;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class VersionCommitDataDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'version_commit_data';
    }

    public function getCollectionClass(): string
    {
        return VersionCommitDataCollection::class;
    }

    public function getEntityClass(): string
    {
        return VersionCommitDataEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('versionCommitId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('commit', AssociationField::MANY_TO_ONE, 'version_commit', 'versionCommitId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('userId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('integrationId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('autoIncrement', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([])),
            (new Field('entityName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('entityId', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('action', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(80.000000)),
            (new Field('payload', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(80.000000)),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
