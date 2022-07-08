<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentType;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DocumentTypeEntity $entity)
 * @method void set(string $key, DocumentTypeEntity $entity)
 * @method DocumentTypeEntity[] getIterator()
 * @method DocumentTypeEntity[] getElements()
 * @method DocumentTypeEntity|null get(string $key)
 * @method DocumentTypeEntity|null first()
 * @method DocumentTypeEntity|null last()
 */
final class DocumentTypeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DocumentTypeEntity::class;
    }
}
