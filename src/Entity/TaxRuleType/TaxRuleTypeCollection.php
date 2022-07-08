<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\TaxRuleType;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(TaxRuleTypeEntity $entity)
 * @method void set(string $key, TaxRuleTypeEntity $entity)
 * @method TaxRuleTypeEntity[] getIterator()
 * @method TaxRuleTypeEntity[] getElements()
 * @method TaxRuleTypeEntity|null get(string $key)
 * @method TaxRuleTypeEntity|null first()
 * @method TaxRuleTypeEntity|null last()
 */
final class TaxRuleTypeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TaxRuleTypeEntity::class;
    }
}
