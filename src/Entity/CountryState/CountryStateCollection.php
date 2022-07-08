<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CountryState;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CountryStateEntity $entity)
 * @method void set(string $key, CountryStateEntity $entity)
 * @method CountryStateEntity[] getIterator()
 * @method CountryStateEntity[] getElements()
 * @method CountryStateEntity|null get(string $key)
 * @method CountryStateEntity|null first()
 * @method CountryStateEntity|null last()
 */
final class CountryStateCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CountryStateEntity::class;
    }
}
