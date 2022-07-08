<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LogEntry;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LogEntryEntity $entity)
 * @method void set(string $key, LogEntryEntity $entity)
 * @method LogEntryEntity[] getIterator()
 * @method LogEntryEntity[] getElements()
 * @method LogEntryEntity|null get(string $key)
 * @method LogEntryEntity|null first()
 * @method LogEntryEntity|null last()
 */
final class LogEntryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LogEntryEntity::class;
    }
}
