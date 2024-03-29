<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Plugin;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PluginEntity $entity)
 * @method void set(string $key, PluginEntity $entity)
 * @method PluginEntity[] getIterator()
 * @method PluginEntity[] getElements()
 * @method PluginEntity|null get(string $key)
 * @method PluginEntity|null first()
 * @method PluginEntity|null last()
 */
final class PluginCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PluginEntity::class;
    }
}
