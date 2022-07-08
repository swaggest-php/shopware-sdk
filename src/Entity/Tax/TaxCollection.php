<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Tax;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(TaxEntity $entity)
 * @method void set(string $key, TaxEntity $entity)
 * @method TaxEntity[] getIterator()
 * @method TaxEntity[] getElements()
 * @method TaxEntity|null get(string $key)
 * @method TaxEntity|null first()
 * @method TaxEntity|null last()
 */
final class TaxCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TaxEntity::class;
    }
}
