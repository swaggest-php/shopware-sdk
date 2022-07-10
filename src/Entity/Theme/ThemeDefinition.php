<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Theme;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;

final class ThemeDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'theme';
    }

    public function getCollectionClass(): string
    {
        return ThemeCollection::class;
    }

    public function getEntityClass(): string
    {
        return ThemeEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('technicalName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('author', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('description', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new Field('labels', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new Field('helpTexts', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new Field('previewMediaId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('parentThemeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('baseConfig', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('configValues', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'theme_translation', 'id', 'themeId', 'themeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Required()),
            (new AssociationField('salesChannels', AssociationField::MANY_TO_MANY, 'sales_channel', 'id', 'id', null, 'theme_sales_channel', 'salesChannelId', 'themeId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('media', AssociationField::MANY_TO_MANY, 'media', 'id', 'id', null, 'theme_media', 'mediaId', 'themeId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('previewMedia', AssociationField::MANY_TO_ONE, 'media', 'previewMediaId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('childThemes', AssociationField::ONE_TO_MANY, 'theme', 'id', 'parentThemeId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
