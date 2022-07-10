<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MessageQueueStats;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class MessageQueueStatsDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'message_queue_stats';
    }

    public function getCollectionClass(): string
    {
        return MessageQueueStatsCollection::class;
    }

    public function getEntityClass(): string
    {
        return MessageQueueStatsEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('size', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
