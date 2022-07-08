<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionSalesChannelEntity $entity)
 * @method void set(string $key, PromotionSalesChannelEntity $entity)
 * @method PromotionSalesChannelEntity[] getIterator()
 * @method PromotionSalesChannelEntity[] getElements()
 * @method PromotionSalesChannelEntity|null get(string $key)
 * @method PromotionSalesChannelEntity|null first()
 * @method PromotionSalesChannelEntity|null last()
 */
final class PromotionSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionSalesChannelEntity::class;
    }
}
