<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(EventActionRuleEntity $entity)
 * @method void set(string $key, EventActionRuleEntity $entity)
 * @method EventActionRuleEntity[] getIterator()
 * @method EventActionRuleEntity[] getElements()
 * @method EventActionRuleEntity|null get(string $key)
 * @method EventActionRuleEntity|null first()
 * @method EventActionRuleEntity|null last()
 */
final class EventActionRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return EventActionRuleEntity::class;
    }
}
