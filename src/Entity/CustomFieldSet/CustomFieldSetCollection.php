<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomFieldSet;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomFieldSetEntity $entity)
 * @method void set(string $key, CustomFieldSetEntity $entity)
 * @method CustomFieldSetEntity[] getIterator()
 * @method CustomFieldSetEntity[] getElements()
 * @method CustomFieldSetEntity|null get(string $key)
 * @method CustomFieldSetEntity|null first()
 * @method CustomFieldSetEntity|null last()
 */
final class CustomFieldSetCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomFieldSetEntity::class;
    }
}
