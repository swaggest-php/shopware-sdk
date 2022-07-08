<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentBaseConfig;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DocumentBaseConfigEntity $entity)
 * @method void set(string $key, DocumentBaseConfigEntity $entity)
 * @method DocumentBaseConfigEntity[] getIterator()
 * @method DocumentBaseConfigEntity[] getElements()
 * @method DocumentBaseConfigEntity|null get(string $key)
 * @method DocumentBaseConfigEntity|null first()
 * @method DocumentBaseConfigEntity|null last()
 */
final class DocumentBaseConfigCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DocumentBaseConfigEntity::class;
    }
}
