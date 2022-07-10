<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionTranslation;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;

final class PromotionTranslationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'promotion_translation';
    }

    public function getCollectionClass(): string
    {
        return PromotionTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return PromotionTranslationEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('promotionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new AssociationField('promotion', AssociationField::MANY_TO_ONE, 'promotion', 'promotionId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
