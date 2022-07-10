<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineState;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;

final class StateMachineStateDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'state_machine_state';
    }

    public function getCollectionClass(): string
    {
        return StateMachineStateCollection::class;
    }

    public function getEntityClass(): string
    {
        return StateMachineStateEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('technicalName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(250.000000)),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(500.000000), new Translatable()),
            (new Field('stateMachineId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('stateMachine', AssociationField::MANY_TO_ONE, 'state_machine', 'stateMachineId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('fromStateMachineTransitions', AssociationField::ONE_TO_MANY, 'state_machine_transition', 'id', 'fromStateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('toStateMachineTransitions', AssociationField::ONE_TO_MANY, 'state_machine_transition', 'id', 'toStateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'state_machine_state_translation', 'id', 'stateMachineStateId', 'stateMachineStateId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Required()),
            (new AssociationField('orderTransactions', AssociationField::ONE_TO_MANY, 'order_transaction', 'id', 'stateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('orderDeliveries', AssociationField::ONE_TO_MANY, 'order_delivery', 'id', 'stateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('orders', AssociationField::ONE_TO_MANY, 'order', 'id', 'stateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new AssociationField('toStateMachineHistoryEntries', AssociationField::ONE_TO_MANY, 'state_machine_history', 'id', 'toStateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('fromStateMachineHistoryEntries', AssociationField::ONE_TO_MANY, 'state_machine_history', 'id', 'fromStateId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
