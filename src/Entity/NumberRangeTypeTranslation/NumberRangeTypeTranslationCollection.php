<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeTypeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NumberRangeTypeTranslationEntity $entity)
 * @method void set(string $key, NumberRangeTypeTranslationEntity $entity)
 * @method NumberRangeTypeTranslationEntity[] getIterator()
 * @method NumberRangeTypeTranslationEntity[] getElements()
 * @method NumberRangeTypeTranslationEntity|null get(string $key)
 * @method NumberRangeTypeTranslationEntity|null first()
 * @method NumberRangeTypeTranslationEntity|null last()
 */
final class NumberRangeTypeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeTypeTranslationEntity::class;
    }
}
