<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\FlowSequence;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(FlowSequenceEntity $entity)
 * @method void set(string $key, FlowSequenceEntity $entity)
 * @method FlowSequenceEntity[] getIterator()
 * @method FlowSequenceEntity[] getElements()
 * @method FlowSequenceEntity|null get(string $key)
 * @method FlowSequenceEntity|null first()
 * @method FlowSequenceEntity|null last()
 */
final class FlowSequenceCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return FlowSequenceEntity::class;
    }
}
