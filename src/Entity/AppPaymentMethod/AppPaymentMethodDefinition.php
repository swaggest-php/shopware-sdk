<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppPaymentMethod;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class AppPaymentMethodDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'app_payment_method';
    }

    public function getCollectionClass(): string
    {
        return AppPaymentMethodCollection::class;
    }

    public function getEntityClass(): string
    {
        return AppPaymentMethodEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('appName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('identifier', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('payUrl', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('finalizeUrl', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('appId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('app', AssociationField::MANY_TO_ONE, 'app', 'appId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('originalMediaId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('originalMedia', AssociationField::MANY_TO_ONE, 'media', 'originalMediaId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('paymentMethodId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('paymentMethod', AssociationField::ONE_TO_ONE, 'payment_method', 'paymentMethodId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
