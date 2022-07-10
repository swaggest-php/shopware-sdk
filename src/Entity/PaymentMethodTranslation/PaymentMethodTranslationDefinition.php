<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PaymentMethodTranslation;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class PaymentMethodTranslationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'payment_method_translation';
    }

    public function getCollectionClass(): string
    {
        return PaymentMethodTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return PaymentMethodTranslationEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('distinguishableName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('paymentMethodId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new AssociationField('paymentMethod', AssociationField::MANY_TO_ONE, 'payment_method', 'paymentMethodId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
