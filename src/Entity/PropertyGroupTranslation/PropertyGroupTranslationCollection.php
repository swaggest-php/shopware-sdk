<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroupTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PropertyGroupTranslationEntity $entity)
 * @method void set(string $key, PropertyGroupTranslationEntity $entity)
 * @method PropertyGroupTranslationEntity[] getIterator()
 * @method PropertyGroupTranslationEntity[] getElements()
 * @method PropertyGroupTranslationEntity|null get(string $key)
 * @method PropertyGroupTranslationEntity|null first()
 * @method PropertyGroupTranslationEntity|null last()
 */
final class PropertyGroupTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PropertyGroupTranslationEntity::class;
    }
}
