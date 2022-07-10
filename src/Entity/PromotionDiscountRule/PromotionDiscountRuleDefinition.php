<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscountRule;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class PromotionDiscountRuleDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'promotion_discount_rule';
    }

    public function getCollectionClass(): string
    {
        return PromotionDiscountRuleCollection::class;
    }

    public function getEntityClass(): string
    {
        return PromotionDiscountRuleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('discountId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('ruleId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('discount', AssociationField::MANY_TO_ONE, 'promotion_discount', 'discountId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('rule', AssociationField::MANY_TO_ONE, 'rule', 'ruleId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
