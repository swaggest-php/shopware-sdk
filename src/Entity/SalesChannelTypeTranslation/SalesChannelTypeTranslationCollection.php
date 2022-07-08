<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelTypeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelTypeTranslationEntity $entity)
 * @method void set(string $key, SalesChannelTypeTranslationEntity $entity)
 * @method SalesChannelTypeTranslationEntity[] getIterator()
 * @method SalesChannelTypeTranslationEntity[] getElements()
 * @method SalesChannelTypeTranslationEntity|null get(string $key)
 * @method SalesChannelTypeTranslationEntity|null first()
 * @method SalesChannelTypeTranslationEntity|null last()
 */
final class SalesChannelTypeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelTypeTranslationEntity::class;
    }
}
