<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelShippingMethod;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class SalesChannelShippingMethodDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'sales_channel_shipping_method';
    }

    public function getCollectionClass(): string
    {
        return SalesChannelShippingMethodCollection::class;
    }

    public function getEntityClass(): string
    {
        return SalesChannelShippingMethodEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('shippingMethodId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Association('salesChannel', Association::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('shippingMethod', Association::MANY_TO_ONE, 'shipping_method', 'shippingMethodId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
