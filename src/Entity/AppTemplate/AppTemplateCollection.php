<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppTemplate;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(AppTemplateEntity $entity)
 * @method void set(string $key, AppTemplateEntity $entity)
 * @method AppTemplateEntity[] getIterator()
 * @method AppTemplateEntity[] getElements()
 * @method AppTemplateEntity|null get(string $key)
 * @method AppTemplateEntity|null first()
 * @method AppTemplateEntity|null last()
 */
final class AppTemplateCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AppTemplateEntity::class;
    }
}
