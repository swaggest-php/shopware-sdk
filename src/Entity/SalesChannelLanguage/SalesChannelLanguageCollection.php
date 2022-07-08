<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelLanguage;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SalesChannelLanguageEntity $entity)
 * @method void set(string $key, SalesChannelLanguageEntity $entity)
 * @method SalesChannelLanguageEntity[] getIterator()
 * @method SalesChannelLanguageEntity[] getElements()
 * @method SalesChannelLanguageEntity|null get(string $key)
 * @method SalesChannelLanguageEntity|null first()
 * @method SalesChannelLanguageEntity|null last()
 */
final class SalesChannelLanguageCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SalesChannelLanguageEntity::class;
    }
}
