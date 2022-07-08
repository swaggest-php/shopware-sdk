<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Language;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(LanguageEntity $entity)
 * @method void set(string $key, LanguageEntity $entity)
 * @method LanguageEntity[] getIterator()
 * @method LanguageEntity[] getElements()
 * @method LanguageEntity|null get(string $key)
 * @method LanguageEntity|null first()
 * @method LanguageEntity|null last()
 */
final class LanguageCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return LanguageEntity::class;
    }
}
