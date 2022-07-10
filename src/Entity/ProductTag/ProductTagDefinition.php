<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductTag;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class ProductTagDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'product_tag';
    }

    public function getCollectionClass(): string
    {
        return ProductTagCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductTagEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('productId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('productVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('tagId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('product', AssociationField::MANY_TO_ONE, 'product', 'productId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('tag', AssociationField::MANY_TO_ONE, 'tag', 'tagId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
