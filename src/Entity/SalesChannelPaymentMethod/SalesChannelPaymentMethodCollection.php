<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelPaymentMethod;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelPaymentMethodEntity $entity)
 * @method void set(string $key, SalesChannelPaymentMethodEntity $entity)
 * @method SalesChannelPaymentMethodEntity[] getIterator()
 * @method SalesChannelPaymentMethodEntity[] getElements()
 * @method SalesChannelPaymentMethodEntity|null get(string $key)
 * @method SalesChannelPaymentMethodEntity|null first()
 * @method SalesChannelPaymentMethodEntity|null last()
 */
final class SalesChannelPaymentMethodCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelPaymentMethodEntity::class;
    }
}
