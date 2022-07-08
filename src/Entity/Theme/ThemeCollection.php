<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Theme;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ThemeEntity $entity)
 * @method void set(string $key, ThemeEntity $entity)
 * @method ThemeEntity[] getIterator()
 * @method ThemeEntity[] getElements()
 * @method ThemeEntity|null get(string $key)
 * @method ThemeEntity|null first()
 * @method ThemeEntity|null last()
 */
final class ThemeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ThemeEntity::class;
    }
}
