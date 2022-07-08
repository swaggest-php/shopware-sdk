<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelAnalytics;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelAnalyticsEntity $entity)
 * @method void set(string $key, SalesChannelAnalyticsEntity $entity)
 * @method SalesChannelAnalyticsEntity[] getIterator()
 * @method SalesChannelAnalyticsEntity[] getElements()
 * @method SalesChannelAnalyticsEntity|null get(string $key)
 * @method SalesChannelAnalyticsEntity|null first()
 * @method SalesChannelAnalyticsEntity|null last()
 */
final class SalesChannelAnalyticsCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelAnalyticsEntity::class;
    }
}
