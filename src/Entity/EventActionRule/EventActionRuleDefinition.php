<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionRule;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class EventActionRuleDefinition extends AbstractEntityDefinition
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

    protected function defineFields(): array
    {
        return [
            (new Field('eventActionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('ruleId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('eventAction', AssociationField::MANY_TO_ONE, 'event_action', 'eventActionId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('rule', AssociationField::MANY_TO_ONE, 'rule', 'ruleId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
