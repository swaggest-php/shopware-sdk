<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NumberRangeTranslationEntity $entity)
 * @method void set(string $key, NumberRangeTranslationEntity $entity)
 * @method NumberRangeTranslationEntity[] getIterator()
 * @method NumberRangeTranslationEntity[] getElements()
 * @method NumberRangeTranslationEntity|null get(string $key)
 * @method NumberRangeTranslationEntity|null first()
 * @method NumberRangeTranslationEntity|null last()
 */
final class NumberRangeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeTranslationEntity::class;
    }
}
