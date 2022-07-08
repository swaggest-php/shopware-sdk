<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineStateTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(StateMachineStateTranslationEntity $entity)
 * @method void set(string $key, StateMachineStateTranslationEntity $entity)
 * @method StateMachineStateTranslationEntity[] getIterator()
 * @method StateMachineStateTranslationEntity[] getElements()
 * @method StateMachineStateTranslationEntity|null get(string $key)
 * @method StateMachineStateTranslationEntity|null first()
 * @method StateMachineStateTranslationEntity|null last()
 */
final class StateMachineStateTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StateMachineStateTranslationEntity::class;
    }
}
