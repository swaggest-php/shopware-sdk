<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Tag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(TagEntity $entity)
 * @method void set(string $key, TagEntity $entity)
 * @method TagEntity[] getIterator()
 * @method TagEntity[] getElements()
 * @method TagEntity|null get(string $key)
 * @method TagEntity|null first()
 * @method TagEntity|null last()
 */
final class TagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TagEntity::class;
    }
}
