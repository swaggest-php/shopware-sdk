<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRange;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NumberRangeEntity $entity)
 * @method void set(string $key, NumberRangeEntity $entity)
 * @method NumberRangeEntity[] getIterator()
 * @method NumberRangeEntity[] getElements()
 * @method NumberRangeEntity|null get(string $key)
 * @method NumberRangeEntity|null first()
 * @method NumberRangeEntity|null last()
 */
final class NumberRangeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeEntity::class;
    }
}
