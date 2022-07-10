<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolderConfiguration;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class MediaFolderConfigurationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'media_folder_configuration';
    }

    public function getCollectionClass(): string
    {
        return MediaFolderConfigurationCollection::class;
    }

    public function getEntityClass(): string
    {
        return MediaFolderConfigurationEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('createThumbnails', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('keepAspectRatio', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('thumbnailQuality', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('private', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('noAssociation', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('mediaFolders', AssociationField::ONE_TO_MANY, 'media_folder', 'id', 'configurationId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('mediaThumbnailSizes', AssociationField::MANY_TO_MANY, 'media_thumbnail_size', 'id', 'id', null, 'media_folder_configuration_media_thumbnail_size', 'mediaThumbnailSizeId', 'mediaFolderConfigurationId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('mediaThumbnailSizesRo', 'blob'))->addFlags(new Computed()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
