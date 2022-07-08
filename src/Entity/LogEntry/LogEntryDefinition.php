<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LogEntry;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;

final class LogEntryDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'log_entry';
    }

    public function getCollectionClass(): string
    {
        return LogEntryCollection::class;
    }

    public function getEntityClass(): string
    {
        return LogEntryEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('message', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(500.000000)),
            (new Field('level', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('channel', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('context', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(250.000000)),
            (new Field('extra', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(80.000000)),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
