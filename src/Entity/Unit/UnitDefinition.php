<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Unit;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;
use Swaggest\ShopwareSdk\Schema\Flag\ReversedInherited;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;

final class UnitDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'unit';
    }

    public function getCollectionClass(): string
    {
        return UnitCollection::class;
    }

    public function getEntityClass(): string
    {
        return UnitEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('shortCode', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(80.000000), new Translatable()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(500.000000), new Translatable()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new AssociationField('products', AssociationField::ONE_TO_MANY, 'product', 'id', 'unitId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete(), new ReversedInherited('unit')),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'unit_translation', 'id', 'unitId', 'unitId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Required()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
