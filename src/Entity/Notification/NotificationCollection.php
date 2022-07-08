<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Notification;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(NotificationEntity $entity)
 * @method void set(string $key, NotificationEntity $entity)
 * @method NotificationEntity[] getIterator()
 * @method NotificationEntity[] getElements()
 * @method NotificationEntity|null get(string $key)
 * @method NotificationEntity|null first()
 * @method NotificationEntity|null last()
 */
final class NotificationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NotificationEntity::class;
    }
}
