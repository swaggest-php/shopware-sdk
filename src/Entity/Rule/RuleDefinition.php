<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Rule;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Deprecated;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class RuleDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'rule';
    }

    public function getCollectionClass(): string
    {
        return RuleCollection::class;
    }

    public function getEntityClass(): string
    {
        return RuleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('priority', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('payload', 'blob'))->addFlags(new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('invalid', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('moduleTypes', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('conditions', AssociationField::ONE_TO_MANY, 'rule_condition', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('productPrices', AssociationField::ONE_TO_MANY, 'product_price', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('shippingMethodPrices', AssociationField::ONE_TO_MANY, 'shipping_method_price', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('shippingMethodPriceCalculations', AssociationField::ONE_TO_MANY, 'shipping_method_price', 'id', 'calculationRuleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('shippingMethods', AssociationField::ONE_TO_MANY, 'shipping_method', 'id', 'availabilityRuleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('paymentMethods', AssociationField::ONE_TO_MANY, 'payment_method', 'id', 'availabilityRuleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('personaPromotions', AssociationField::MANY_TO_MANY, 'promotion', 'id', 'id', null, 'promotion_persona_rule', 'promotionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('flowSequences', AssociationField::ONE_TO_MANY, 'flow_sequence', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('orderPromotions', AssociationField::MANY_TO_MANY, 'promotion', 'id', 'id', null, 'promotion_order_rule', 'promotionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('cartPromotions', AssociationField::MANY_TO_MANY, 'promotion', 'id', 'id', null, 'promotion_cart_rule', 'promotionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('promotionDiscounts', AssociationField::MANY_TO_MANY, 'promotion_discount', 'id', 'id', null, 'promotion_discount_rule', 'discountId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('promotionSetGroups', AssociationField::MANY_TO_MANY, 'promotion_setgroup', 'id', 'id', null, 'promotion_setgroup_rule', 'setgroupId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('eventActions', AssociationField::MANY_TO_MANY, 'event_action', 'id', 'id', null, 'event_action_rule', 'eventActionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Deprecated('v6.4.6', 'v6.5.0', null)),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
