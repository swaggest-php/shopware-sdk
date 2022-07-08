<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppPaymentMethod;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppPaymentMethodEntity $entity)
 * @method void set(string $key, AppPaymentMethodEntity $entity)
 * @method AppPaymentMethodEntity[] getIterator()
 * @method AppPaymentMethodEntity[] getElements()
 * @method AppPaymentMethodEntity|null get(string $key)
 * @method AppPaymentMethodEntity|null first()
 * @method AppPaymentMethodEntity|null last()
 */
final class AppPaymentMethodCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppPaymentMethodEntity::class;
    }
}
