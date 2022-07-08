<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SeoUrlTemplate;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(SeoUrlTemplateEntity $entity)
 * @method void set(string $key, SeoUrlTemplateEntity $entity)
 * @method SeoUrlTemplateEntity[] getIterator()
 * @method SeoUrlTemplateEntity[] getElements()
 * @method SeoUrlTemplateEntity|null get(string $key)
 * @method SeoUrlTemplateEntity|null first()
 * @method SeoUrlTemplateEntity|null last()
 */
final class SeoUrlTemplateCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SeoUrlTemplateEntity::class;
    }
}
