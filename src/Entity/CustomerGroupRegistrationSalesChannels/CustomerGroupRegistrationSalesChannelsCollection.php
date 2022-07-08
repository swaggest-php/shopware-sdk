<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroupRegistrationSalesChannels;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerGroupRegistrationSalesChannelsEntity $entity)
 * @method void set(string $key, CustomerGroupRegistrationSalesChannelsEntity $entity)
 * @method CustomerGroupRegistrationSalesChannelsEntity[] getIterator()
 * @method CustomerGroupRegistrationSalesChannelsEntity[] getElements()
 * @method CustomerGroupRegistrationSalesChannelsEntity|null get(string $key)
 * @method CustomerGroupRegistrationSalesChannelsEntity|null first()
 * @method CustomerGroupRegistrationSalesChannelsEntity|null last()
 */
final class CustomerGroupRegistrationSalesChannelsCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerGroupRegistrationSalesChannelsEntity::class;
    }
}
