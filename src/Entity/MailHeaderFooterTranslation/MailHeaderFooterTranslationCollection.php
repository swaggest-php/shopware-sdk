<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailHeaderFooterTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MailHeaderFooterTranslationEntity $entity)
 * @method void set(string $key, MailHeaderFooterTranslationEntity $entity)
 * @method MailHeaderFooterTranslationEntity[] getIterator()
 * @method MailHeaderFooterTranslationEntity[] getElements()
 * @method MailHeaderFooterTranslationEntity|null get(string $key)
 * @method MailHeaderFooterTranslationEntity|null first()
 * @method MailHeaderFooterTranslationEntity|null last()
 */
final class MailHeaderFooterTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MailHeaderFooterTranslationEntity::class;
    }
}
