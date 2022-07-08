<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionCartRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionCartRuleEntity $entity)
 * @method void set(string $key, PromotionCartRuleEntity $entity)
 * @method PromotionCartRuleEntity[] getIterator()
 * @method PromotionCartRuleEntity[] getElements()
 * @method PromotionCartRuleEntity|null get(string $key)
 * @method PromotionCartRuleEntity|null first()
 * @method PromotionCartRuleEntity|null last()
 */
final class PromotionCartRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionCartRuleEntity::class;
    }
}
