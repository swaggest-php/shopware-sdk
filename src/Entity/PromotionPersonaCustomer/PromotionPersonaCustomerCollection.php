<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionPersonaCustomer;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PromotionPersonaCustomerEntity $entity)
 * @method void set(string $key, PromotionPersonaCustomerEntity $entity)
 * @method PromotionPersonaCustomerEntity[] getIterator()
 * @method PromotionPersonaCustomerEntity[] getElements()
 * @method PromotionPersonaCustomerEntity|null get(string $key)
 * @method PromotionPersonaCustomerEntity|null first()
 * @method PromotionPersonaCustomerEntity|null last()
 */
final class PromotionPersonaCustomerCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PromotionPersonaCustomerEntity::class;
    }
}
