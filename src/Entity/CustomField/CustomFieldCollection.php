<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomField;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomFieldEntity $entity)
 * @method void set(string $key, CustomFieldEntity $entity)
 * @method CustomFieldEntity[] getIterator()
 * @method CustomFieldEntity[] getElements()
 * @method CustomFieldEntity|null get(string $key)
 * @method CustomFieldEntity|null first()
 * @method CustomFieldEntity|null last()
 */
final class CustomFieldCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomFieldEntity::class;
    }
}
