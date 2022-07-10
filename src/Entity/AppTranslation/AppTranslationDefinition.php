<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppTranslation;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\Since;

final class AppTranslationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'app_translation';
    }

    public function getCollectionClass(): string
    {
        return AppTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return AppTranslationEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('label', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('privacyPolicyExtensions', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Since('6.4.1.0')),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('appId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new AssociationField('app', AssociationField::MANY_TO_ONE, 'app', 'appId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
