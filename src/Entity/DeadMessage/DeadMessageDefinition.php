<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeadMessage;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class DeadMessageDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'dead_message';
    }

    public function getCollectionClass(): string
    {
        return DeadMessageCollection::class;
    }

    public function getEntityClass(): string
    {
        return DeadMessageEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('originalMessageClass', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('serializedOriginalMessage', 'blob'))->addFlags(new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('handlerClass', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('encrypted', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('errorCount', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('nextExecutionTime', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('exception', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('exceptionMessage', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('exceptionFile', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('exceptionLine', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('scheduledTaskId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('scheduledTask', Association::MANY_TO_ONE, 'scheduled_task', 'scheduledTaskId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
