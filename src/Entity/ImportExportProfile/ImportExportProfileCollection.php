<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportProfile;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ImportExportProfileEntity $entity)
 * @method void set(string $key, ImportExportProfileEntity $entity)
 * @method ImportExportProfileEntity[] getIterator()
 * @method ImportExportProfileEntity[] getElements()
 * @method ImportExportProfileEntity|null get(string $key)
 * @method ImportExportProfileEntity|null first()
 * @method ImportExportProfileEntity|null last()
 */
final class ImportExportProfileCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ImportExportProfileEntity::class;
    }
}
