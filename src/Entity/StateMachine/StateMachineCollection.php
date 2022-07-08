<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachine;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(StateMachineEntity $entity)
 * @method void set(string $key, StateMachineEntity $entity)
 * @method StateMachineEntity[] getIterator()
 * @method StateMachineEntity[] getElements()
 * @method StateMachineEntity|null get(string $key)
 * @method StateMachineEntity|null first()
 * @method StateMachineEntity|null last()
 */
final class StateMachineCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StateMachineEntity::class;
    }
}
