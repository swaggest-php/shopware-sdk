<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LandingPageTranslationEntity $entity)
 * @method void set(string $key, LandingPageTranslationEntity $entity)
 * @method LandingPageTranslationEntity[] getIterator()
 * @method LandingPageTranslationEntity[] getElements()
 * @method LandingPageTranslationEntity|null get(string $key)
 * @method LandingPageTranslationEntity|null first()
 * @method LandingPageTranslationEntity|null last()
 */
final class LandingPageTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LandingPageTranslationEntity::class;
    }
}
