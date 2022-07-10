<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventAction;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;

final class EventActionDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'event_action';
    }

    public function getCollectionClass(): string
    {
        return EventActionCollection::class;
    }

    public function getEntityClass(): string
    {
        return EventActionEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('eventName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('actionName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new Field('config', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('title', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(500.000000)),
            (new AssociationField('rules', AssociationField::MANY_TO_MANY, 'rule', 'id', 'id', null, 'event_action_rule', 'ruleId', 'eventActionId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new SearchRanking(0.250000)),
            (new AssociationField('salesChannels', AssociationField::MANY_TO_MANY, 'sales_channel', 'id', 'id', null, 'event_action_sales_channel', 'salesChannelId', 'eventActionId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new SearchRanking(0.250000)),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
