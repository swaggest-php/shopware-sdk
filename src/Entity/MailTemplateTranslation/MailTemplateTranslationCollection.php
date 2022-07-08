<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MailTemplateTranslationEntity $entity)
 * @method void set(string $key, MailTemplateTranslationEntity $entity)
 * @method MailTemplateTranslationEntity[] getIterator()
 * @method MailTemplateTranslationEntity[] getElements()
 * @method MailTemplateTranslationEntity|null get(string $key)
 * @method MailTemplateTranslationEntity|null first()
 * @method MailTemplateTranslationEntity|null last()
 */
final class MailTemplateTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MailTemplateTranslationEntity::class;
    }
}
