<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(StateMachineTranslationEntity $entity)
 * @method void set(string $key, StateMachineTranslationEntity $entity)
 * @method StateMachineTranslationEntity[] getIterator()
 * @method StateMachineTranslationEntity[] getElements()
 * @method StateMachineTranslationEntity|null get(string $key)
 * @method StateMachineTranslationEntity|null first()
 * @method StateMachineTranslationEntity|null last()
 */
final class StateMachineTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StateMachineTranslationEntity::class;
    }
}
