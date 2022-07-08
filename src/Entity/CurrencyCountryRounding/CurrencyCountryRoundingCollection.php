<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CurrencyCountryRounding;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CurrencyCountryRoundingEntity $entity)
 * @method void set(string $key, CurrencyCountryRoundingEntity $entity)
 * @method CurrencyCountryRoundingEntity[] getIterator()
 * @method CurrencyCountryRoundingEntity[] getElements()
 * @method CurrencyCountryRoundingEntity|null get(string $key)
 * @method CurrencyCountryRoundingEntity|null first()
 * @method CurrencyCountryRoundingEntity|null last()
 */
final class CurrencyCountryRoundingCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CurrencyCountryRoundingEntity::class;
    }
}
