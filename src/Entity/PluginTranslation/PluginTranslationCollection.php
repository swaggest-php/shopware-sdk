<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PluginTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PluginTranslationEntity $entity)
 * @method void set(string $key, PluginTranslationEntity $entity)
 * @method PluginTranslationEntity[] getIterator()
 * @method PluginTranslationEntity[] getElements()
 * @method PluginTranslationEntity|null get(string $key)
 * @method PluginTranslationEntity|null first()
 * @method PluginTranslationEntity|null last()
 */
final class PluginTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PluginTranslationEntity::class;
    }
}
