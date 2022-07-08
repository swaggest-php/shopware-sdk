<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MessageQueueStats;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MessageQueueStatsEntity $entity)
 * @method void set(string $key, MessageQueueStatsEntity $entity)
 * @method MessageQueueStatsEntity[] getIterator()
 * @method MessageQueueStatsEntity[] getElements()
 * @method MessageQueueStatsEntity|null get(string $key)
 * @method MessageQueueStatsEntity|null first()
 * @method MessageQueueStatsEntity|null last()
 */
final class MessageQueueStatsCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MessageQueueStatsEntity::class;
    }
}
