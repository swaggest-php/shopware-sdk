<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportLog;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ImportExportLogEntity $entity)
 * @method void set(string $key, ImportExportLogEntity $entity)
 * @method ImportExportLogEntity[] getIterator()
 * @method ImportExportLogEntity[] getElements()
 * @method ImportExportLogEntity|null get(string $key)
 * @method ImportExportLogEntity|null first()
 * @method ImportExportLogEntity|null last()
 */
final class ImportExportLogCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ImportExportLogEntity::class;
    }
}
