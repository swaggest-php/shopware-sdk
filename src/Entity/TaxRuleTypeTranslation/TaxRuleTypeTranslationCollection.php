<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\TaxRuleTypeTranslation;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(TaxRuleTypeTranslationEntity $entity)
 * @method void set(string $key, TaxRuleTypeTranslationEntity $entity)
 * @method TaxRuleTypeTranslationEntity[] getIterator()
 * @method TaxRuleTypeTranslationEntity[] getElements()
 * @method TaxRuleTypeTranslationEntity|null get(string $key)
 * @method TaxRuleTypeTranslationEntity|null first()
 * @method TaxRuleTypeTranslationEntity|null last()
 */
final class TaxRuleTypeTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TaxRuleTypeTranslationEntity::class;
    }
}
