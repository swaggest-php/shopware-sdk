<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CurrencyTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CurrencyTranslationEntity $entity)
 * @method void set(string $key, CurrencyTranslationEntity $entity)
 * @method CurrencyTranslationEntity[] getIterator()
 * @method CurrencyTranslationEntity[] getElements()
 * @method CurrencyTranslationEntity|null get(string $key)
 * @method CurrencyTranslationEntity|null first()
 * @method CurrencyTranslationEntity|null last()
 */
final class CurrencyTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CurrencyTranslationEntity::class;
    }
}
