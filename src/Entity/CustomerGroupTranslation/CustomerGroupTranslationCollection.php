<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroupTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerGroupTranslationEntity $entity)
 * @method void set(string $key, CustomerGroupTranslationEntity $entity)
 * @method CustomerGroupTranslationEntity[] getIterator()
 * @method CustomerGroupTranslationEntity[] getElements()
 * @method CustomerGroupTranslationEntity|null get(string $key)
 * @method CustomerGroupTranslationEntity|null first()
 * @method CustomerGroupTranslationEntity|null last()
 */
final class CustomerGroupTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerGroupTranslationEntity::class;
    }
}
