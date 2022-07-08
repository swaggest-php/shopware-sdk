<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSetgroupRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionSetgroupRuleEntity $entity)
 * @method void set(string $key, PromotionSetgroupRuleEntity $entity)
 * @method PromotionSetgroupRuleEntity[] getIterator()
 * @method PromotionSetgroupRuleEntity[] getElements()
 * @method PromotionSetgroupRuleEntity|null get(string $key)
 * @method PromotionSetgroupRuleEntity|null first()
 * @method PromotionSetgroupRuleEntity|null last()
 */
final class PromotionSetgroupRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionSetgroupRuleEntity::class;
    }
}
