<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportProfileTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ImportExportProfileTranslationEntity $entity)
 * @method void set(string $key, ImportExportProfileTranslationEntity $entity)
 * @method ImportExportProfileTranslationEntity[] getIterator()
 * @method ImportExportProfileTranslationEntity[] getElements()
 * @method ImportExportProfileTranslationEntity|null get(string $key)
 * @method ImportExportProfileTranslationEntity|null first()
 * @method ImportExportProfileTranslationEntity|null last()
 */
final class ImportExportProfileTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ImportExportProfileTranslationEntity::class;
    }
}
