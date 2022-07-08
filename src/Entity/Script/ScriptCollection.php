<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Script;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ScriptEntity $entity)
 * @method void set(string $key, ScriptEntity $entity)
 * @method ScriptEntity[] getIterator()
 * @method ScriptEntity[] getElements()
 * @method ScriptEntity|null get(string $key)
 * @method ScriptEntity|null first()
 * @method ScriptEntity|null last()
 */
final class ScriptCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ScriptEntity::class;
    }
}
