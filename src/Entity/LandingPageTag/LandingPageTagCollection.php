<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LandingPageTagEntity $entity)
 * @method void set(string $key, LandingPageTagEntity $entity)
 * @method LandingPageTagEntity[] getIterator()
 * @method LandingPageTagEntity[] getElements()
 * @method LandingPageTagEntity|null get(string $key)
 * @method LandingPageTagEntity|null first()
 * @method LandingPageTagEntity|null last()
 */
final class LandingPageTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LandingPageTagEntity::class;
    }
}
