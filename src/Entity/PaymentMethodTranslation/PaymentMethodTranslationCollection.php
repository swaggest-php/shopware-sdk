<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PaymentMethodTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(PaymentMethodTranslationEntity $entity)
 * @method void set(string $key, PaymentMethodTranslationEntity $entity)
 * @method PaymentMethodTranslationEntity[] getIterator()
 * @method PaymentMethodTranslationEntity[] getElements()
 * @method PaymentMethodTranslationEntity|null get(string $key)
 * @method PaymentMethodTranslationEntity|null first()
 * @method PaymentMethodTranslationEntity|null last()
 */
final class PaymentMethodTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return PaymentMethodTranslationEntity::class;
    }
}
