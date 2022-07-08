<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\WebhookEventLog;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(WebhookEventLogEntity $entity)
 * @method void set(string $key, WebhookEventLogEntity $entity)
 * @method WebhookEventLogEntity[] getIterator()
 * @method WebhookEventLogEntity[] getElements()
 * @method WebhookEventLogEntity|null get(string $key)
 * @method WebhookEventLogEntity|null first()
 * @method WebhookEventLogEntity|null last()
 */
final class WebhookEventLogCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return WebhookEventLogEntity::class;
    }
}
