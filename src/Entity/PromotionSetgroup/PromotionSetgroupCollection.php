<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSetgroup;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionSetgroupEntity $entity)
 * @method void set(string $key, PromotionSetgroupEntity $entity)
 * @method PromotionSetgroupEntity[] getIterator()
 * @method PromotionSetgroupEntity[] getElements()
 * @method PromotionSetgroupEntity|null get(string $key)
 * @method PromotionSetgroupEntity|null first()
 * @method PromotionSetgroupEntity|null last()
 */
final class PromotionSetgroupCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionSetgroupEntity::class;
    }
}
