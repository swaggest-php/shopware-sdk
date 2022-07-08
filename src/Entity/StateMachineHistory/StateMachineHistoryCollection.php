<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineHistory;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(StateMachineHistoryEntity $entity)
 * @method void set(string $key, StateMachineHistoryEntity $entity)
 * @method StateMachineHistoryEntity[] getIterator()
 * @method StateMachineHistoryEntity[] getElements()
 * @method StateMachineHistoryEntity|null get(string $key)
 * @method StateMachineHistoryEntity|null first()
 * @method StateMachineHistoryEntity|null last()
 */
final class StateMachineHistoryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StateMachineHistoryEntity::class;
    }
}
