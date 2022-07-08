<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppActionButton;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppActionButtonEntity $entity)
 * @method void set(string $key, AppActionButtonEntity $entity)
 * @method AppActionButtonEntity[] getIterator()
 * @method AppActionButtonEntity[] getElements()
 * @method AppActionButtonEntity|null get(string $key)
 * @method AppActionButtonEntity|null first()
 * @method AppActionButtonEntity|null last()
 */
final class AppActionButtonCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppActionButtonEntity::class;
    }
}
