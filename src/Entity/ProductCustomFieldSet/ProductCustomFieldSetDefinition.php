<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCustomFieldSet;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class ProductCustomFieldSetDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'product_custom_field_set';
    }

    public function getCollectionClass(): string
    {
        return ProductCustomFieldSetCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductCustomFieldSetEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('productId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('customFieldSetId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('productVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('product', AssociationField::MANY_TO_ONE, 'product', 'productId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('customFieldSet', AssociationField::MANY_TO_ONE, 'custom_field_set', 'customFieldSetId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
