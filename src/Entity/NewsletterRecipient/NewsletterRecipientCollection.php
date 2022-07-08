<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NewsletterRecipient;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NewsletterRecipientEntity $entity)
 * @method void set(string $key, NewsletterRecipientEntity $entity)
 * @method NewsletterRecipientEntity[] getIterator()
 * @method NewsletterRecipientEntity[] getElements()
 * @method NewsletterRecipientEntity|null get(string $key)
 * @method NewsletterRecipientEntity|null first()
 * @method NewsletterRecipientEntity|null last()
 */
final class NewsletterRecipientCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NewsletterRecipientEntity::class;
    }
}
