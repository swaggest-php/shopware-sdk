<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPage;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LandingPageEntity $entity)
 * @method void set(string $key, LandingPageEntity $entity)
 * @method LandingPageEntity[] getIterator()
 * @method LandingPageEntity[] getElements()
 * @method LandingPageEntity|null get(string $key)
 * @method LandingPageEntity|null first()
 * @method LandingPageEntity|null last()
 */
final class LandingPageCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LandingPageEntity::class;
    }
}
