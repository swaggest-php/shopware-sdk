<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Document;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DocumentEntity $entity)
 * @method void set(string $key, DocumentEntity $entity)
 * @method DocumentEntity[] getIterator()
 * @method DocumentEntity[] getElements()
 * @method DocumentEntity|null get(string $key)
 * @method DocumentEntity|null first()
 * @method DocumentEntity|null last()
 */
final class DocumentCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DocumentEntity::class;
    }
}
