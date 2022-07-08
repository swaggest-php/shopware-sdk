<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Salutation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalutationEntity $entity)
 * @method void set(string $key, SalutationEntity $entity)
 * @method SalutationEntity[] getIterator()
 * @method SalutationEntity[] getElements()
 * @method SalutationEntity|null get(string $key)
 * @method SalutationEntity|null first()
 * @method SalutationEntity|null last()
 */
final class SalutationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalutationEntity::class;
    }
}
