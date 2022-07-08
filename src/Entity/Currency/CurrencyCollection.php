<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Currency;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CurrencyEntity $entity)
 * @method void set(string $key, CurrencyEntity $entity)
 * @method CurrencyEntity[] getIterator()
 * @method CurrencyEntity[] getElements()
 * @method CurrencyEntity|null get(string $key)
 * @method CurrencyEntity|null first()
 * @method CurrencyEntity|null last()
 */
final class CurrencyCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CurrencyEntity::class;
    }
}
