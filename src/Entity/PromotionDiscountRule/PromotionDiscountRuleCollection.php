<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscountRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionDiscountRuleEntity $entity)
 * @method void set(string $key, PromotionDiscountRuleEntity $entity)
 * @method PromotionDiscountRuleEntity[] getIterator()
 * @method PromotionDiscountRuleEntity[] getElements()
 * @method PromotionDiscountRuleEntity|null get(string $key)
 * @method PromotionDiscountRuleEntity|null first()
 * @method PromotionDiscountRuleEntity|null last()
 */
final class PromotionDiscountRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionDiscountRuleEntity::class;
    }
}
