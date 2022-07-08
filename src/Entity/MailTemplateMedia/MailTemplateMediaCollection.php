<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateMedia;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MailTemplateMediaEntity $entity)
 * @method void set(string $key, MailTemplateMediaEntity $entity)
 * @method MailTemplateMediaEntity[] getIterator()
 * @method MailTemplateMediaEntity[] getElements()
 * @method MailTemplateMediaEntity|null get(string $key)
 * @method MailTemplateMediaEntity|null first()
 * @method MailTemplateMediaEntity|null last()
 */
final class MailTemplateMediaCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MailTemplateMediaEntity::class;
    }
}
