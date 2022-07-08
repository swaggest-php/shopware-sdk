<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalutationTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalutationTranslationEntity $entity)
 * @method void set(string $key, SalutationTranslationEntity $entity)
 * @method SalutationTranslationEntity[] getIterator()
 * @method SalutationTranslationEntity[] getElements()
 * @method SalutationTranslationEntity|null get(string $key)
 * @method SalutationTranslationEntity|null first()
 * @method SalutationTranslationEntity|null last()
 */
final class SalutationTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalutationTranslationEntity::class;
    }
}
