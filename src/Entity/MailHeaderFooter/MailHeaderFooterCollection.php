<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailHeaderFooter;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(MailHeaderFooterEntity $entity)
 * @method void set(string $key, MailHeaderFooterEntity $entity)
 * @method MailHeaderFooterEntity[] getIterator()
 * @method MailHeaderFooterEntity[] getElements()
 * @method MailHeaderFooterEntity|null get(string $key)
 * @method MailHeaderFooterEntity|null first()
 * @method MailHeaderFooterEntity|null last()
 */
final class MailHeaderFooterCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MailHeaderFooterEntity::class;
    }
}
