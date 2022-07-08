<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroupRegistrationSalesChannels;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class CustomerGroupRegistrationSalesChannelsDefinition implements EntityDefinitionInterface
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

    public function defineFields(): array
    {
        return [
            (new Field('customerGroupId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Association('customerGroup', Association::MANY_TO_ONE, 'customer_group', 'customerGroupId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('salesChannel', Association::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
        ];
    }
}
