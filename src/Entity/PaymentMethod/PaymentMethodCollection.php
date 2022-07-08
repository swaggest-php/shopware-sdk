<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PaymentMethod;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PaymentMethodEntity $entity)
 * @method void set(string $key, PaymentMethodEntity $entity)
 * @method PaymentMethodEntity[] getIterator()
 * @method PaymentMethodEntity[] getElements()
 * @method PaymentMethodEntity|null get(string $key)
 * @method PaymentMethodEntity|null first()
 * @method PaymentMethodEntity|null last()
 */
final class PaymentMethodCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PaymentMethodEntity::class;
    }
}
