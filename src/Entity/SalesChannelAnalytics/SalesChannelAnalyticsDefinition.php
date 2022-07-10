<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelAnalytics;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class SalesChannelAnalyticsDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'sales_channel_analytics';
    }

    public function getCollectionClass(): string
    {
        return SalesChannelAnalyticsCollection::class;
    }

    public function getEntityClass(): string
    {
        return SalesChannelAnalyticsEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('trackingId', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('trackOrders', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('anonymizeIp', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('salesChannel', AssociationField::ONE_TO_ONE, 'sales_channel', 'id', 'analyticsId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
