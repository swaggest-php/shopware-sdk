<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CountryTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CountryTranslationEntity $entity)
 * @method void set(string $key, CountryTranslationEntity $entity)
 * @method CountryTranslationEntity[] getIterator()
 * @method CountryTranslationEntity[] getElements()
 * @method CountryTranslationEntity|null get(string $key)
 * @method CountryTranslationEntity|null first()
 * @method CountryTranslationEntity|null last()
 */
final class CountryTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CountryTranslationEntity::class;
    }
}
