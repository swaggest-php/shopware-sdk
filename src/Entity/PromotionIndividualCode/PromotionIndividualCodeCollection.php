<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionIndividualCode;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionIndividualCodeEntity $entity)
 * @method void set(string $key, PromotionIndividualCodeEntity $entity)
 * @method PromotionIndividualCodeEntity[] getIterator()
 * @method PromotionIndividualCodeEntity[] getElements()
 * @method PromotionIndividualCodeEntity|null get(string $key)
 * @method PromotionIndividualCodeEntity|null first()
 * @method PromotionIndividualCodeEntity|null last()
 */
final class PromotionIndividualCodeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionIndividualCodeEntity::class;
    }
}
