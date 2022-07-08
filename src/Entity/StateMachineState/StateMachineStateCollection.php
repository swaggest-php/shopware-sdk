<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineState;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(StateMachineStateEntity $entity)
 * @method void set(string $key, StateMachineStateEntity $entity)
 * @method StateMachineStateEntity[] getIterator()
 * @method StateMachineStateEntity[] getElements()
 * @method StateMachineStateEntity|null get(string $key)
 * @method StateMachineStateEntity|null first()
 * @method StateMachineStateEntity|null last()
 */
final class StateMachineStateCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StateMachineStateEntity::class;
    }
}
