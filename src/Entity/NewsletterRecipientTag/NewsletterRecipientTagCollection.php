<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NewsletterRecipientTag;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NewsletterRecipientTagEntity $entity)
 * @method void set(string $key, NewsletterRecipientTagEntity $entity)
 * @method NewsletterRecipientTagEntity[] getIterator()
 * @method NewsletterRecipientTagEntity[] getElements()
 * @method NewsletterRecipientTagEntity|null get(string $key)
 * @method NewsletterRecipientTagEntity|null first()
 * @method NewsletterRecipientTagEntity|null last()
 */
final class NewsletterRecipientTagCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NewsletterRecipientTagEntity::class;
    }
}
