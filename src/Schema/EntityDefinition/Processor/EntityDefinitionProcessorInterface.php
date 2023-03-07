<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;

/**
 * @internal
 */
interface EntityDefinitionProcessorInterface
{
    /**
     * Some fields in the entity schema are marked as required, but they aren't necessarily required by the DAL.
     * In such cases, trying to set non-nullable properties by the entity hydrator would fail with type errors.
     * To alleviate this, entity definition processors can manipulate fields and their flags. They can for example
     * "unmark" some fields as required to make up for inconsistencies in the entity schema.
     */
    public function process(AbstractEntityDefinition $entityDefinition): void;
}
