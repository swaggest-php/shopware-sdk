<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCustomFieldSet;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductCustomFieldSetEntity $entity)
 * @method void set(string $key, ProductCustomFieldSetEntity $entity)
 * @method ProductCustomFieldSetEntity[] getIterator()
 * @method ProductCustomFieldSetEntity[] getElements()
 * @method ProductCustomFieldSetEntity|null get(string $key)
 * @method ProductCustomFieldSetEntity|null first()
 * @method ProductCustomFieldSetEntity|null last()
 */
final class ProductCustomFieldSetCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductCustomFieldSetEntity::class;
    }
}
