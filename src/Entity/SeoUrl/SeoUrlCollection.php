<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SeoUrl;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SeoUrlEntity $entity)
 * @method void set(string $key, SeoUrlEntity $entity)
 * @method SeoUrlEntity[] getIterator()
 * @method SeoUrlEntity[] getElements()
 * @method SeoUrlEntity|null get(string $key)
 * @method SeoUrlEntity|null first()
 * @method SeoUrlEntity|null last()
 */
final class SeoUrlCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SeoUrlEntity::class;
    }
}
