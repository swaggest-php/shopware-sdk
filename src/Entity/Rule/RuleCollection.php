<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Rule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(RuleEntity $entity)
 * @method void set(string $key, RuleEntity $entity)
 * @method RuleEntity[] getIterator()
 * @method RuleEntity[] getElements()
 * @method RuleEntity|null get(string $key)
 * @method RuleEntity|null first()
 * @method RuleEntity|null last()
 */
final class RuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return RuleEntity::class;
    }
}
