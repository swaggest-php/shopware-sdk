<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Snippet;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SnippetEntity $entity)
 * @method void set(string $key, SnippetEntity $entity)
 * @method SnippetEntity[] getIterator()
 * @method SnippetEntity[] getElements()
 * @method SnippetEntity|null get(string $key)
 * @method SnippetEntity|null first()
 * @method SnippetEntity|null last()
 */
final class SnippetCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SnippetEntity::class;
    }
}
