<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportFile;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ImportExportFileEntity $entity)
 * @method void set(string $key, ImportExportFileEntity $entity)
 * @method ImportExportFileEntity[] getIterator()
 * @method ImportExportFileEntity[] getElements()
 * @method ImportExportFileEntity|null get(string $key)
 * @method ImportExportFileEntity|null first()
 * @method ImportExportFileEntity|null last()
 */
final class ImportExportFileCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ImportExportFileEntity::class;
    }
}
