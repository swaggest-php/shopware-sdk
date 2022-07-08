<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroupOptionTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PropertyGroupOptionTranslationEntity $entity)
 * @method void set(string $key, PropertyGroupOptionTranslationEntity $entity)
 * @method PropertyGroupOptionTranslationEntity[] getIterator()
 * @method PropertyGroupOptionTranslationEntity[] getElements()
 * @method PropertyGroupOptionTranslationEntity|null get(string $key)
 * @method PropertyGroupOptionTranslationEntity|null first()
 * @method PropertyGroupOptionTranslationEntity|null last()
 */
final class PropertyGroupOptionTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PropertyGroupOptionTranslationEntity::class;
    }
}
