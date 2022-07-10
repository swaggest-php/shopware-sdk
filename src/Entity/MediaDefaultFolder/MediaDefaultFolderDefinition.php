<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaDefaultFolder;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class MediaDefaultFolderDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'media_default_folder';
    }

    public function getCollectionClass(): string
    {
        return MediaDefaultFolderCollection::class;
    }

    public function getEntityClass(): string
    {
        return MediaDefaultFolderEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('associationFields', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('entity', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('folder', AssociationField::ONE_TO_ONE, 'media_folder', 'id', 'defaultFolderId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
