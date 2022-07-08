<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionRule;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class EventActionRuleDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'event_action_rule';
    }

    public function getCollectionClass(): string
    {
        return EventActionRuleCollection::class;
    }

    public function getEntityClass(): string
    {
        return EventActionRuleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('eventActionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('ruleId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Association('eventAction', Association::MANY_TO_ONE, 'event_action', 'eventActionId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('rule', Association::MANY_TO_ONE, 'rule', 'ruleId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
