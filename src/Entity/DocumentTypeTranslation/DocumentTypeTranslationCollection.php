<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentTypeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DocumentTypeTranslationEntity $entity)
 * @method void set(string $key, DocumentTypeTranslationEntity $entity)
 * @method DocumentTypeTranslationEntity[] getIterator()
 * @method DocumentTypeTranslationEntity[] getElements()
 * @method DocumentTypeTranslationEntity|null get(string $key)
 * @method DocumentTypeTranslationEntity|null first()
 * @method DocumentTypeTranslationEntity|null last()
 */
final class DocumentTypeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DocumentTypeTranslationEntity::class;
    }
}
