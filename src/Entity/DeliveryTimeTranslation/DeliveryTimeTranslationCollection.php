<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeliveryTimeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DeliveryTimeTranslationEntity $entity)
 * @method void set(string $key, DeliveryTimeTranslationEntity $entity)
 * @method DeliveryTimeTranslationEntity[] getIterator()
 * @method DeliveryTimeTranslationEntity[] getElements()
 * @method DeliveryTimeTranslationEntity|null get(string $key)
 * @method DeliveryTimeTranslationEntity|null first()
 * @method DeliveryTimeTranslationEntity|null last()
 */
final class DeliveryTimeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DeliveryTimeTranslationEntity::class;
    }
}
