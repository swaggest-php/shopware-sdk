<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor;

use Swaggest\ShopwareSdk\Struct\Collection;

/**
 * @internal
 */
final class EntityDefinitionProcessorCollection extends Collection
{
    public function getExpectedClass(): ?string
    {
        return EntityDefinitionProcessorInterface::class;
    }
}
