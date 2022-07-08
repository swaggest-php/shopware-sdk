<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\UnitTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(UnitTranslationEntity $entity)
 * @method void set(string $key, UnitTranslationEntity $entity)
 * @method UnitTranslationEntity[] getIterator()
 * @method UnitTranslationEntity[] getElements()
 * @method UnitTranslationEntity|null get(string $key)
 * @method UnitTranslationEntity|null first()
 * @method UnitTranslationEntity|null last()
 */
final class UnitTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return UnitTranslationEntity::class;
    }
}
