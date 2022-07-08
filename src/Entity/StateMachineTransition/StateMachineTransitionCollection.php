<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineTransition;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(StateMachineTransitionEntity $entity)
 * @method void set(string $key, StateMachineTransitionEntity $entity)
 * @method StateMachineTransitionEntity[] getIterator()
 * @method StateMachineTransitionEntity[] getElements()
 * @method StateMachineTransitionEntity|null get(string $key)
 * @method StateMachineTransitionEntity|null first()
 * @method StateMachineTransitionEntity|null last()
 */
final class StateMachineTransitionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StateMachineTransitionEntity::class;
    }
}
