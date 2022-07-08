<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\TaxRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(TaxRuleEntity $entity)
 * @method void set(string $key, TaxRuleEntity $entity)
 * @method TaxRuleEntity[] getIterator()
 * @method TaxRuleEntity[] getElements()
 * @method TaxRuleEntity|null get(string $key)
 * @method TaxRuleEntity|null first()
 * @method TaxRuleEntity|null last()
 */
final class TaxRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TaxRuleEntity::class;
    }
}
