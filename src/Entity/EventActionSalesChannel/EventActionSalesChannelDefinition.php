<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionSalesChannel;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class EventActionSalesChannelDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'event_action_sales_channel';
    }

    public function getCollectionClass(): string
    {
        return EventActionSalesChannelCollection::class;
    }

    public function getEntityClass(): string
    {
        return EventActionSalesChannelEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('eventActionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('eventAction', AssociationField::MANY_TO_ONE, 'event_action', 'eventActionId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('salesChannel', AssociationField::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
