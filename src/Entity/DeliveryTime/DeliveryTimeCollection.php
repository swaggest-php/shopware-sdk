<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeliveryTime;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DeliveryTimeEntity $entity)
 * @method void set(string $key, DeliveryTimeEntity $entity)
 * @method DeliveryTimeEntity[] getIterator()
 * @method DeliveryTimeEntity[] getElements()
 * @method DeliveryTimeEntity|null get(string $key)
 * @method DeliveryTimeEntity|null first()
 * @method DeliveryTimeEntity|null last()
 */
final class DeliveryTimeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DeliveryTimeEntity::class;
    }
}
