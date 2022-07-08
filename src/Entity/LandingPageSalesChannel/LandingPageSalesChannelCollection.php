<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LandingPageSalesChannelEntity $entity)
 * @method void set(string $key, LandingPageSalesChannelEntity $entity)
 * @method LandingPageSalesChannelEntity[] getIterator()
 * @method LandingPageSalesChannelEntity[] getElements()
 * @method LandingPageSalesChannelEntity|null get(string $key)
 * @method LandingPageSalesChannelEntity|null first()
 * @method LandingPageSalesChannelEntity|null last()
 */
final class LandingPageSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LandingPageSalesChannelEntity::class;
    }
}
