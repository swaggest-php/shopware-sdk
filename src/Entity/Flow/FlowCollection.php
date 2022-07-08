<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Flow;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(FlowEntity $entity)
 * @method void set(string $key, FlowEntity $entity)
 * @method FlowEntity[] getIterator()
 * @method FlowEntity[] getElements()
 * @method FlowEntity|null get(string $key)
 * @method FlowEntity|null first()
 * @method FlowEntity|null last()
 */
final class FlowCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return FlowEntity::class;
    }
}
