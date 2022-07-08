<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\App;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppEntity $entity)
 * @method void set(string $key, AppEntity $entity)
 * @method AppEntity[] getIterator()
 * @method AppEntity[] getElements()
 * @method AppEntity|null get(string $key)
 * @method AppEntity|null first()
 * @method AppEntity|null last()
 */
final class AppCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppEntity::class;
    }
}
