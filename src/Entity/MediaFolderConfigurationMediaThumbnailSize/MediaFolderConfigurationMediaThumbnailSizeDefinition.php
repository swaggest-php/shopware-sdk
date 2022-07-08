<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolderConfigurationMediaThumbnailSize;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class MediaFolderConfigurationMediaThumbnailSizeDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'media_folder_configuration_media_thumbnail_size';
    }

    public function getCollectionClass(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeCollection::class;
    }

    public function getEntityClass(): string
    {
        return MediaFolderConfigurationMediaThumbnailSizeEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('mediaFolderConfigurationId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('mediaThumbnailSizeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Association('mediaFolderConfiguration', Association::MANY_TO_ONE, 'media_folder_configuration', 'mediaFolderConfigurationId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('mediaThumbnailSize', Association::MANY_TO_ONE, 'media_thumbnail_size', 'mediaThumbnailSizeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
