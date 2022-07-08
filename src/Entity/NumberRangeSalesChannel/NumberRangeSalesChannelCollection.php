<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NumberRangeSalesChannelEntity $entity)
 * @method void set(string $key, NumberRangeSalesChannelEntity $entity)
 * @method NumberRangeSalesChannelEntity[] getIterator()
 * @method NumberRangeSalesChannelEntity[] getElements()
 * @method NumberRangeSalesChannelEntity|null get(string $key)
 * @method NumberRangeSalesChannelEntity|null first()
 * @method NumberRangeSalesChannelEntity|null last()
 */
final class NumberRangeSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeSalesChannelEntity::class;
    }
}
