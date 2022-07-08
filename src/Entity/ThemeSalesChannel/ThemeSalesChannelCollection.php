<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ThemeSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ThemeSalesChannelEntity $entity)
 * @method void set(string $key, ThemeSalesChannelEntity $entity)
 * @method ThemeSalesChannelEntity[] getIterator()
 * @method ThemeSalesChannelEntity[] getElements()
 * @method ThemeSalesChannelEntity|null get(string $key)
 * @method ThemeSalesChannelEntity|null first()
 * @method ThemeSalesChannelEntity|null last()
 */
final class ThemeSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ThemeSalesChannelEntity::class;
    }
}
