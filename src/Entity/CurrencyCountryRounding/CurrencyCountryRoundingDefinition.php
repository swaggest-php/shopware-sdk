<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CurrencyCountryRounding;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;

final class CurrencyCountryRoundingDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'currency_country_rounding';
    }

    public function getCollectionClass(): string
    {
        return CurrencyCountryRoundingCollection::class;
    }

    public function getEntityClass(): string
    {
        return CurrencyCountryRoundingEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('currencyId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('countryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('itemRounding', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('totalRounding', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('currency', AssociationField::MANY_TO_ONE, 'currency', 'currencyId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('country', AssociationField::MANY_TO_ONE, 'country', 'countryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(0.250000)),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
