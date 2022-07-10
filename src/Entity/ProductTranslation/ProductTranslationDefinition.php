<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductTranslation;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\AllowHtml;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class ProductTranslationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'product_translation';
    }

    public function getCollectionClass(): string
    {
        return ProductTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductTranslationEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('metaDescription', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('keywords', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new AllowHtml()),
            (new Field('metaTitle', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('packUnit', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('packUnitPlural', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('customSearchKeywords', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('slotConfig', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('productId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new AssociationField('product', AssociationField::MANY_TO_ONE, 'product', 'productId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('productVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
        ];
    }
}
