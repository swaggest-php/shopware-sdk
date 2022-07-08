<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeState;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NumberRangeStateEntity $entity)
 * @method void set(string $key, NumberRangeStateEntity $entity)
 * @method NumberRangeStateEntity[] getIterator()
 * @method NumberRangeStateEntity[] getElements()
 * @method NumberRangeStateEntity|null get(string $key)
 * @method NumberRangeStateEntity|null first()
 * @method NumberRangeStateEntity|null last()
 */
final class NumberRangeStateCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeStateEntity::class;
    }
}
