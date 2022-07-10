<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelCountry;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class SalesChannelCountryDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'sales_channel_country';
    }

    public function getCollectionClass(): string
    {
        return SalesChannelCountryCollection::class;
    }

    public function getEntityClass(): string
    {
        return SalesChannelCountryEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('countryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('salesChannel', AssociationField::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('country', AssociationField::MANY_TO_ONE, 'country', 'countryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
