<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ThemeMedia;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class ThemeMediaDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'theme_media';
    }

    public function getCollectionClass(): string
    {
        return ThemeMediaCollection::class;
    }

    public function getEntityClass(): string
    {
        return ThemeMediaEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('themeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('mediaId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('theme', AssociationField::MANY_TO_ONE, 'theme', 'themeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('media', AssociationField::MANY_TO_ONE, 'media', 'mediaId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
