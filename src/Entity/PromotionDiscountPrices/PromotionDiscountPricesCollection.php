<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscountPrices;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionDiscountPricesEntity $entity)
 * @method void set(string $key, PromotionDiscountPricesEntity $entity)
 * @method PromotionDiscountPricesEntity[] getIterator()
 * @method PromotionDiscountPricesEntity[] getElements()
 * @method PromotionDiscountPricesEntity|null get(string $key)
 * @method PromotionDiscountPricesEntity|null first()
 * @method PromotionDiscountPricesEntity|null last()
 */
final class PromotionDiscountPricesCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionDiscountPricesEntity::class;
    }
}
