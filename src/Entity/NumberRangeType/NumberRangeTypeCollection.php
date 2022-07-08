<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeType;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NumberRangeTypeEntity $entity)
 * @method void set(string $key, NumberRangeTypeEntity $entity)
 * @method NumberRangeTypeEntity[] getIterator()
 * @method NumberRangeTypeEntity[] getElements()
 * @method NumberRangeTypeEntity|null get(string $key)
 * @method NumberRangeTypeEntity|null first()
 * @method NumberRangeTypeEntity|null last()
 */
final class NumberRangeTypeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeTypeEntity::class;
    }
}
