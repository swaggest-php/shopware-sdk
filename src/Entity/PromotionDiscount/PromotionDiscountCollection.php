<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscount;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionDiscountEntity $entity)
 * @method void set(string $key, PromotionDiscountEntity $entity)
 * @method PromotionDiscountEntity[] getIterator()
 * @method PromotionDiscountEntity[] getElements()
 * @method PromotionDiscountEntity|null get(string $key)
 * @method PromotionDiscountEntity|null first()
 * @method PromotionDiscountEntity|null last()
 */
final class PromotionDiscountCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionDiscountEntity::class;
    }
}
