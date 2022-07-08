<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Country;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CountryEntity $entity)
 * @method void set(string $key, CountryEntity $entity)
 * @method CountryEntity[] getIterator()
 * @method CountryEntity[] getElements()
 * @method CountryEntity|null get(string $key)
 * @method CountryEntity|null first()
 * @method CountryEntity|null last()
 */
final class CountryCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CountryEntity::class;
    }
}
