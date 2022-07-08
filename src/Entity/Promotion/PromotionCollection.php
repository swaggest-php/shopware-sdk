<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Promotion;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionEntity $entity)
 * @method void set(string $key, PromotionEntity $entity)
 * @method PromotionEntity[] getIterator()
 * @method PromotionEntity[] getElements()
 * @method PromotionEntity|null get(string $key)
 * @method PromotionEntity|null first()
 * @method PromotionEntity|null last()
 */
final class PromotionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionEntity::class;
    }
}
