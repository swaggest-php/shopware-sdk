<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroupRegistrationSalesChannels;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class CustomerGroupRegistrationSalesChannelsDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'customer_group_registration_sales_channels';
    }

    public function getCollectionClass(): string
    {
        return CustomerGroupRegistrationSalesChannelsCollection::class;
    }

    public function getEntityClass(): string
    {
        return CustomerGroupRegistrationSalesChannelsEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('customerGroupId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('customerGroup', AssociationField::MANY_TO_ONE, 'customer_group', 'customerGroupId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('salesChannel', AssociationField::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
        ];
    }
}
