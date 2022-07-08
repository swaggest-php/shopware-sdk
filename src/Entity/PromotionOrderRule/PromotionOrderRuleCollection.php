<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionOrderRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionOrderRuleEntity $entity)
 * @method void set(string $key, PromotionOrderRuleEntity $entity)
 * @method PromotionOrderRuleEntity[] getIterator()
 * @method PromotionOrderRuleEntity[] getElements()
 * @method PromotionOrderRuleEntity|null get(string $key)
 * @method PromotionOrderRuleEntity|null first()
 * @method PromotionOrderRuleEntity|null last()
 */
final class PromotionOrderRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionOrderRuleEntity::class;
    }
}
