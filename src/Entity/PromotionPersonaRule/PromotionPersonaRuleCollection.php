<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionPersonaRule;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionPersonaRuleEntity $entity)
 * @method void set(string $key, PromotionPersonaRuleEntity $entity)
 * @method PromotionPersonaRuleEntity[] getIterator()
 * @method PromotionPersonaRuleEntity[] getElements()
 * @method PromotionPersonaRuleEntity|null get(string $key)
 * @method PromotionPersonaRuleEntity|null first()
 * @method PromotionPersonaRuleEntity|null last()
 */
final class PromotionPersonaRuleCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionPersonaRuleEntity::class;
    }
}
