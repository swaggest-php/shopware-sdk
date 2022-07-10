<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Tax;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;
use Swaggest\ShopwareSdk\Schema\Flag\ReversedInherited;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\Since;

final class TaxDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'tax';
    }

    public function getCollectionClass(): string
    {
        return TaxCollection::class;
    }

    public function getEntityClass(): string
    {
        return TaxEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('taxRate', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('position', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new Since('6.4.0.0')),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('products', AssociationField::ONE_TO_MANY, 'product', 'id', 'taxId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete(), new ReversedInherited('tax')),
            (new AssociationField('rules', AssociationField::ONE_TO_MANY, 'tax_rule', 'id', 'taxId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('shippingMethods', AssociationField::ONE_TO_MANY, 'shipping_method', 'id', 'taxId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
