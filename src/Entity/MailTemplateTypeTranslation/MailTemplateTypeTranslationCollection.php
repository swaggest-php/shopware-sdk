<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateTypeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MailTemplateTypeTranslationEntity $entity)
 * @method void set(string $key, MailTemplateTypeTranslationEntity $entity)
 * @method MailTemplateTypeTranslationEntity[] getIterator()
 * @method MailTemplateTypeTranslationEntity[] getElements()
 * @method MailTemplateTypeTranslationEntity|null get(string $key)
 * @method MailTemplateTypeTranslationEntity|null first()
 * @method MailTemplateTypeTranslationEntity|null last()
 */
final class MailTemplateTypeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MailTemplateTypeTranslationEntity::class;
    }
}
