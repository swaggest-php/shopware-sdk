<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\RuleCondition;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(RuleConditionEntity $entity)
 * @method void set(string $key, RuleConditionEntity $entity)
 * @method RuleConditionEntity[] getIterator()
 * @method RuleConditionEntity[] getElements()
 * @method RuleConditionEntity|null get(string $key)
 * @method RuleConditionEntity|null first()
 * @method RuleConditionEntity|null last()
 */
final class RuleConditionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return RuleConditionEntity::class;
    }
}
