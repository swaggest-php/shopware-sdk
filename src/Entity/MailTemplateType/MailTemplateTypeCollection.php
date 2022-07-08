<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateType;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MailTemplateTypeEntity $entity)
 * @method void set(string $key, MailTemplateTypeEntity $entity)
 * @method MailTemplateTypeEntity[] getIterator()
 * @method MailTemplateTypeEntity[] getElements()
 * @method MailTemplateTypeEntity|null get(string $key)
 * @method MailTemplateTypeEntity|null first()
 * @method MailTemplateTypeEntity|null last()
 */
final class MailTemplateTypeCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MailTemplateTypeEntity::class;
    }
}
