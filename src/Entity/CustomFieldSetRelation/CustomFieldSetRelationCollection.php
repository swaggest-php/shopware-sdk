<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomFieldSetRelation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomFieldSetRelationEntity $entity)
 * @method void set(string $key, CustomFieldSetRelationEntity $entity)
 * @method CustomFieldSetRelationEntity[] getIterator()
 * @method CustomFieldSetRelationEntity[] getElements()
 * @method CustomFieldSetRelationEntity|null get(string $key)
 * @method CustomFieldSetRelationEntity|null first()
 * @method CustomFieldSetRelationEntity|null last()
 */
final class CustomFieldSetRelationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomFieldSetRelationEntity::class;
    }
}
