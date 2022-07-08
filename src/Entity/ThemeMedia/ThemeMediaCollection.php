<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ThemeMedia;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ThemeMediaEntity $entity)
 * @method void set(string $key, ThemeMediaEntity $entity)
 * @method ThemeMediaEntity[] getIterator()
 * @method ThemeMediaEntity[] getElements()
 * @method ThemeMediaEntity|null get(string $key)
 * @method ThemeMediaEntity|null first()
 * @method ThemeMediaEntity|null last()
 */
final class ThemeMediaCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ThemeMediaEntity::class;
    }
}
