<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Webhook;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(WebhookEntity $entity)
 * @method void set(string $key, WebhookEntity $entity)
 * @method WebhookEntity[] getIterator()
 * @method WebhookEntity[] getElements()
 * @method WebhookEntity|null get(string $key)
 * @method WebhookEntity|null first()
 * @method WebhookEntity|null last()
 */
final class WebhookCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return WebhookEntity::class;
    }
}
