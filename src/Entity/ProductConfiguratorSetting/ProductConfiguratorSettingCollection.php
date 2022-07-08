<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductConfiguratorSetting;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductConfiguratorSettingEntity $entity)
 * @method void set(string $key, ProductConfiguratorSettingEntity $entity)
 * @method ProductConfiguratorSettingEntity[] getIterator()
 * @method ProductConfiguratorSettingEntity[] getElements()
 * @method ProductConfiguratorSettingEntity|null get(string $key)
 * @method ProductConfiguratorSettingEntity|null first()
 * @method ProductConfiguratorSettingEntity|null last()
 */
final class ProductConfiguratorSettingCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorSettingEntity::class;
    }
}
