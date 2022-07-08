<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelTranslationEntity $entity)
 * @method void set(string $key, SalesChannelTranslationEntity $entity)
 * @method SalesChannelTranslationEntity[] getIterator()
 * @method SalesChannelTranslationEntity[] getElements()
 * @method SalesChannelTranslationEntity|null get(string $key)
 * @method SalesChannelTranslationEntity|null first()
 * @method SalesChannelTranslationEntity|null last()
 */
final class SalesChannelTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelTranslationEntity::class;
    }
}
