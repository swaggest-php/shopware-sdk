<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CountryStateTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CountryStateTranslationEntity $entity)
 * @method void set(string $key, CountryStateTranslationEntity $entity)
 * @method CountryStateTranslationEntity[] getIterator()
 * @method CountryStateTranslationEntity[] getElements()
 * @method CountryStateTranslationEntity|null get(string $key)
 * @method CountryStateTranslationEntity|null first()
 * @method CountryStateTranslationEntity|null last()
 */
final class CountryStateTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CountryStateTranslationEntity::class;
    }
}
